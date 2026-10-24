<button type="button" class="back-to-projects" data-target="proyek">
    <i class="bi bi-arrow-left"></i> Kembali ke Proyek
</button>

<div class="project-detail-header">
    <div class="project-icon"><i class="bi bi-diagram-3"></i></div>
    <div>
        <span class="project-tag">Jaringan Komputer &middot; Simulasi</span>
        <h2 class="project-detail-title">VLAN Routing 3 Lantai dengan 3 Switch (Cisco Packet Tracer)</h2>
    </div>
</div>

<p class="section-text">
    Proyek ini mensimulasikan jaringan sebuah gedung <strong>3 lantai</strong> di
    <strong>Cisco Packet Tracer</strong>. Tiap lantai memakai <strong>1 switch</strong>, dan
    perangkat dibagi ke <strong>3 VLAN</strong> sesuai fungsinya, bukan sesuai lantainya.
    Jadi komputer HR di lantai 1 dan lantai 3 tetap berada di jaringan yang sama, sementara
    komunikasi antar-VLAN dilewatkan lewat routing.
</p>

<figure class="before-after-item" style="max-width: 640px; margin: 1rem 0 1.5rem;">
    <button type="button" class="cert-thumb-btn before-after-img" data-cert-img="assets/img/projects/vlan-routing-3-lantai/topologi.webp" data-cert-title="Topologi VLAN Routing 3 lantai">
        <img src="assets/img/projects/vlan-routing-3-lantai/topologi.webp" alt="Topologi 3 switch dengan PC Operasional, HR, dan IT beserta tabel pembagian IP">
    </button>
    <figcaption>Topologi 3 switch (1 per lantai) yang dihubungkan jalur trunk, lengkap dengan tabel pembagian IP di sisi kanan. Biru muda = Operasional, kuning = HR, hijau = IT.</figcaption>
</figure>

<h6 class="detail-heading"><i class="bi bi-building"></i> Kasus: Jumlah Perangkat per Lantai</h6>
<div class="table-responsive">
<table class="table table-sm" style="color: var(--text-secondary); font-size: 0.88rem; max-width: 560px;">
    <thead>
        <tr><th>Lantai</th><th>Total PC</th><th>Operasional</th><th>HR</th><th>IT</th></tr>
    </thead>
    <tbody>
        <tr><td>Lantai 1</td><td>60</td><td>47</td><td>10</td><td>3</td></tr>
        <tr><td>Lantai 2</td><td>30</td><td>25</td><td>5</td><td>&ndash;</td></tr>
        <tr><td>Lantai 3</td><td>40</td><td>35</td><td>3</td><td>2</td></tr>
        <tr><td><strong>Total</strong></td><td><strong>130</strong></td><td><strong>107</strong></td><td><strong>18</strong></td><td><strong>5</strong></td></tr>
    </tbody>
</table>
</div>
<p class="section-text">
    Di simulasi, tiap lantai diwakili beberapa PC saja (2 PC per VLAN) supaya topologinya
    ringkas; jumlah PC di tabel dipakai untuk menghitung kebutuhan alamat IP.
</p>

<h6 class="detail-heading"><i class="bi bi-tags"></i> Pembagian VLAN</h6>
<ul class="detail-list">
    <li><strong>VLAN 10 &mdash; Operasional</strong> (107 PC)</li>
    <li><strong>VLAN 20 &mdash; HR</strong> (18 PC)</li>
    <li><strong>VLAN 30 &mdash; IT</strong> (5 PC)</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-calculator"></i> Pembagian IP (VLSM)</h6>
<p class="section-text">
    Tiap VLAN diberi subnet seukuran kebutuhannya (VLSM) supaya alamat IP tidak terbuang.
</p>
<div class="table-responsive">
<table class="table table-sm" style="color: var(--text-secondary); font-size: 0.85rem;">
    <thead>
        <tr><th>VLAN</th><th>Network</th><th>Subnet Mask</th><th>Gateway</th><th>Rentang IP Host</th><th>Broadcast</th></tr>
    </thead>
    <tbody>
        <tr><td>10 Operasional</td><td>192.168.10.0/25</td><td>255.255.255.128</td><td>192.168.10.1</td><td>192.168.10.2 &ndash; 192.168.10.126</td><td>192.168.10.127</td></tr>
        <tr><td>20 HR</td><td>192.168.20.64/27</td><td>255.255.255.224</td><td>192.168.20.65</td><td>192.168.20.66 &ndash; 192.168.20.94</td><td>192.168.20.95</td></tr>
        <tr><td>30 IT</td><td>192.168.30.0/28</td><td>255.255.255.240</td><td>192.168.30.1</td><td>192.168.30.2 &ndash; 192.168.30.14</td><td>192.168.30.15</td></tr>
    </tbody>
</table>
</div>
<ul class="detail-list">
    <li><strong>Operasional:</strong> 107 PC + gateway butuh minimal 108 alamat, maka dipakai /25 (126 alamat host).</li>
    <li><strong>HR:</strong> 18 PC + gateway butuh minimal 19 alamat, maka dipakai /27 (30 alamat host).</li>
    <li><strong>IT:</strong> 5 PC + gateway butuh minimal 6 alamat, maka dipakai /28 (14 alamat host).</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-gear"></i> Langkah Pengerjaan</h6>

<div class="task-block">
    <div class="task-block-header">
        <span class="task-block-num">1</span>
        <h6>Merancang Topologi dan Alamat IP</h6>
    </div>
    <p class="section-text">
        Menghitung kebutuhan host tiap VLAN, menentukan ukuran subnet, lalu mencatat network,
        gateway, rentang IP, dan broadcast seperti pada tabel di atas.
    </p>
</div>

<div class="task-block">
    <div class="task-block-header">
        <span class="task-block-num">2</span>
        <h6>Membuat VLAN di Ketiga Switch</h6>
    </div>
    <p class="section-text">
        VLAN 10, 20, dan 30 dibuat di setiap switch dengan nama yang sama. Contoh perintahnya:
    </p>
    <pre class="code-block"><code>vlan 10
 name Operasional
vlan 20
 name HR
vlan 30
 name IT</code></pre>
</div>

<div class="task-block">
    <div class="task-block-header">
        <span class="task-block-num">3</span>
        <h6>Mengatur Port Access untuk PC</h6>
    </div>
    <p class="section-text">Port yang menuju PC dijadikan mode access dan dimasukkan ke VLAN-nya (nomor port menyesuaikan topologi):</p>
    <pre class="code-block"><code>interface range fa0/1 - 2
 switchport mode access
 switchport access vlan 10</code></pre>
</div>

<div class="task-block">
    <div class="task-block-header">
        <span class="task-block-num">4</span>
        <h6>Mengatur Port Trunk Antar Switch</h6>
    </div>
    <p class="section-text">
        Link antar switch (garis putus-putus di topologi) dijadikan trunk supaya VLAN 10, 20,
        dan 30 bisa melintas di satu kabel.
    </p>
    <pre class="code-block"><code>interface fa0/24
 switchport mode trunk</code></pre>
</div>

<div class="task-block">
    <div class="task-block-header">
        <span class="task-block-num">5</span>
        <h6>Routing Antar-VLAN dan Pengujian</h6>
    </div>
    <p class="section-text">
        Alamat gateway tiap VLAN (<code>192.168.10.1</code>, <code>192.168.20.65</code>,
        <code>192.168.30.1</code>) dipasang pada perangkat Layer 3 sehingga PC dari VLAN berbeda
        bisa saling berkomunikasi. Pengujian dilakukan dengan <code>ping</code> dari PC satu
        VLAN ke PC VLAN lain (juga antar lantai) dan antar PC dalam VLAN yang sama.
    </p>
</div>

<h6 class="detail-heading"><i class="bi bi-download"></i> File Simulasi</h6>
<p class="section-text">Buka dengan Cisco Packet Tracer untuk melihat konfigurasi lengkap dan mencoba ping sendiri.</p>
<div class="download-list">
    <a href="assets/downloads/vlan-routing-3-lantai/VLAN_ROUTING.pkt" download class="download-item">
        <i class="bi bi-file-earmark-code"></i>
        <span>
            <strong>VLAN_ROUTING.pkt</strong>
            <small>Cisco Packet Tracer &middot; 3 switch, 3 VLAN</small>
        </span>
        <i class="bi bi-download download-item-icon"></i>
    </a>
</div>
