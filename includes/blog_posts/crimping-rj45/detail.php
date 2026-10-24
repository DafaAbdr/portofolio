<?php
/* ID video YouTube untuk bagian "Video Pembuatan". Isi dengan ID videonya saja,
   misalnya untuk https://youtu.be/AbCdEfGhIjK isi dengan 'AbCdEfGhIjK'.
   Selama masih kosong, tampil kotak "Video menyusul". */
$crimpVideoId = '';
?>
<button type="button" class="back-to-projects" data-target="blog">
    <i class="bi bi-arrow-left"></i> Kembali ke Blog
</button>

<div class="project-detail-header">
    <div class="project-icon"><i class="bi bi-ethernet"></i></div>
    <div>
        <span class="project-tag">Tutorial &amp; Tips &middot; Jaringan</span>
        <h2 class="project-detail-title">Cara Crimping Kabel LAN RJ45: Straight dan Cross</h2>
    </div>
</div>

<p class="section-text">
    <strong>Crimping</strong> adalah proses memasang konektor <strong>RJ45</strong> di ujung
    kabel UTP supaya bisa dipakai untuk jaringan LAN. Kabel jadi memang mudah dibeli, tapi
    bisa membuat sendiri berguna kalau butuh panjang yang pas atau perlu memperbaiki kabel yang
    konektornya rusak. Ada dua jenis kabel yang paling umum: <strong>straight</strong> dan
    <strong>cross</strong>. Bedanya hanya pada urutan warna kabel di kedua ujungnya.
</p>

<h6 class="detail-heading"><i class="bi bi-tools"></i> Alat dan Bahan</h6>
<ul class="detail-list">
    <li><strong>Kabel UTP</strong> Cat5e atau Cat6 (panjang maksimal 100 meter per segmen).</li>
    <li><strong>Konektor RJ45</strong> (tambahkan boot/pelindung bila mau, masukkan ke kabel sebelum crimping).</li>
    <li><strong>Crimping tool</strong> (tang crimping) untuk RJ45, biasanya sudah ada pisau pengupas dan pemotong.</li>
    <li><strong>Gunting/cutter</strong> untuk memotong kabel dengan rata.</li>
    <li><strong>LAN tester</strong> untuk mengecek hasilnya.</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-palette"></i> Urutan Warna: T568A dan T568B</h6>
<p class="section-text">
    Di dalam kabel UTP ada 8 kabel kecil yang terbagi dalam 4 pasang. Ada dua standar urutan
    warna, <strong>T568A</strong> dan <strong>T568B</strong>. Di Indonesia, T568B lebih umum
    dipakai untuk kabel straight.
</p>
<figure class="before-after-item" style="max-width: 640px; margin: 0.5rem 0 1rem;">
    <button type="button" class="cert-thumb-btn before-after-img" data-cert-img="assets/img/blog/crimping-rj45/urutan-warna.svg" data-cert-title="Urutan warna T568A dan T568B">
        <img src="assets/img/blog/crimping-rj45/urutan-warna.svg" alt="Urutan warna kabel pin 1 sampai 8 untuk standar T568A dan T568B">
    </button>
    <figcaption>Urutan warna pin 1&ndash;8. Beda A dan B hanya tertukar pada pasangan hijau dan oranye (pin 1, 2, 3, dan 6).</figcaption>
</figure>
<div class="table-responsive">
<table class="table table-sm" style="color: var(--text-secondary); font-size: 0.85rem; max-width: 520px;">
    <thead><tr><th>Pin</th><th>T568A</th><th>T568B</th></tr></thead>
    <tbody>
        <tr><td>1</td><td>Putih-Hijau</td><td>Putih-Oranye</td></tr>
        <tr><td>2</td><td>Hijau</td><td>Oranye</td></tr>
        <tr><td>3</td><td>Putih-Oranye</td><td>Putih-Hijau</td></tr>
        <tr><td>4</td><td>Biru</td><td>Biru</td></tr>
        <tr><td>5</td><td>Putih-Biru</td><td>Putih-Biru</td></tr>
        <tr><td>6</td><td>Oranye</td><td>Hijau</td></tr>
        <tr><td>7</td><td>Putih-Coklat</td><td>Putih-Coklat</td></tr>
        <tr><td>8</td><td>Coklat</td><td>Coklat</td></tr>
    </tbody>
</table>
</div>
<p class="section-text">
    Cara membaca pin: pegang konektor dengan <strong>kontak emas menghadap ke atas</strong> dan
    lubang kabel mengarah ke Anda (klip di bawah). Pin 1 ada di sisi paling kiri.
</p>

<h6 class="detail-heading"><i class="bi bi-arrow-left-right"></i> Straight vs Cross</h6>
<figure class="before-after-item" style="max-width: 640px; margin: 0.5rem 0 1rem;">
    <button type="button" class="cert-thumb-btn before-after-img" data-cert-img="assets/img/blog/crimping-rj45/straight-vs-cross.svg" data-cert-title="Kabel straight dan cross">
        <img src="assets/img/blog/crimping-rj45/straight-vs-cross.svg" alt="Diagram kabel straight (T568B di kedua ujung) dan cross (T568B di satu ujung, T568A di ujung lain)">
    </button>
    <figcaption>Straight: kedua ujung sama (garis lurus). Cross: satu ujung T568B dan ujung lain T568A (garis bersilangan).</figcaption>
</figure>
<div class="table-responsive">
<table class="table table-sm" style="color: var(--text-secondary); font-size: 0.85rem;">
    <thead><tr><th></th><th>Straight</th><th>Cross (crossover)</th></tr></thead>
    <tbody>
        <tr><td><strong>Susunan warna</strong></td><td>Kedua ujung sama: T568B &ndash; T568B (atau A &ndash; A)</td><td>Ujung berbeda: T568B &ndash; T568A</td></tr>
        <tr><td><strong>Jalur kabel</strong></td><td>Pin 1&rarr;1, 2&rarr;2, 3&rarr;3, 6&rarr;6 (lurus)</td><td>Pin 1&harr;3 dan 2&harr;6 ditukar, sisanya lurus</td></tr>
        <tr><td><strong>Dipakai untuk</strong></td><td>Menghubungkan perangkat <em>berbeda jenis</em>: PC ke switch/hub, PC ke router, router ke switch</td><td>Menghubungkan perangkat <em>sejenis</em>: PC ke PC, switch ke switch, router ke router</td></tr>
        <tr><td><strong>Paling sering</strong></td><td>Kabel LAN sehari-hari</td><td>Praktikum atau perangkat lama</td></tr>
    </tbody>
</table>
</div>
<p class="section-text">
    <strong>Kenapa harus ditukar?</strong> Pin 1 dan 2 dipakai untuk <em>mengirim</em>, pin 3
    dan 6 untuk <em>menerima</em>. Pada PC ke switch, pin kirim PC memang berhadapan dengan pin
    terima switch, jadi cukup kabel lurus. Pada PC ke PC, keduanya sama-sama mengirim lewat
    pin 1 dan 2, sehingga harus disilangkan agar kiriman satu PC masuk ke pin terima PC lain.
</p>
<ul class="detail-list">
    <li>Perangkat modern umumnya punya fitur <strong>Auto MDI-X</strong> yang menyilangkan sendiri, jadi kabel straight biasanya sudah cukup untuk hampir semua koneksi.</li>
    <li>Untuk <strong>Gigabit</strong> dengan kabel cross sungguhan, pasangan pin 4-5 dan 7-8 juga harus ditukar (4&harr;7 dan 5&harr;8). Kalau perlu, pakai satu kabel straight dan andalkan Auto MDI-X.</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-list-ol"></i> Langkah Crimping</h6>
<ol class="detail-list">
    <li>Potong kabel UTP sesuai panjang yang dibutuhkan, lebihkan sedikit.</li>
    <li>Kupas selubung luar sepanjang kira-kira <strong>2&ndash;3 cm</strong>. Hati-hati, jangan sampai kabel kecil di dalamnya ikut tergores.</li>
    <li>Urai 4 pasang kabel, lalu luruskan satu per satu dengan jari. Buang benang penguat bila ada.</li>
    <li>Susun 8 kabel berdampingan sesuai urutan warna (<strong>T568B</strong> untuk ujung pertama).</li>
    <li>Potong ujung kabel sampai rata, sisakan panjang kabel yang terlihat sekitar <strong>1,2&ndash;1,5 cm</strong> dari selubung.</li>
    <li>Masukkan ke konektor RJ45 (klip di bawah) sampai semua ujung kabel menyentuh bagian depan konektor, dan selubung luar ikut masuk sedikit.</li>
    <li>Masukkan konektor ke crimping tool, tekan sampai bunyi klik. Konektor sekarang mengunci kabel.</li>
    <li>Ulangi untuk ujung kedua: urutan <strong>T568B lagi</strong> untuk kabel <strong>straight</strong>, atau <strong>T568A</strong> untuk kabel <strong>cross</strong>.</li>
</ol>

<h6 class="detail-heading"><i class="bi bi-check2-circle"></i> Tes dengan LAN Tester</h6>
<p class="section-text">
    Pasang kedua ujung kabel ke LAN tester dan nyalakan. Lampu 1 sampai 8 harus menyala
    bergantian dan tidak ada yang mati.
</p>
<ul class="detail-list">
    <li><strong>Straight:</strong> lampu di kedua sisi menyala berurutan sama: 1-2-3-4-5-6-7-8.</li>
    <li><strong>Cross:</strong> urutan di sisi kedua menjadi 3-6-1-4-5-2-7-8 (pin 1&harr;3 dan 2&harr;6 tertukar).</li>
    <li>Kalau ada lampu yang mati atau urutannya salah, kemungkinan kabel belum menyentuh ujung konektor atau urutannya keliru. Potong konektor dan ulangi.</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-lightbulb"></i> Tips</h6>
<ul class="detail-list">
    <li>Jangan membuka pilinan kabel lebih dari yang perlu, karena bisa menurunkan kualitas sinyal.</li>
    <li>Kalau susunan sudah ketat dan kabel susah masuk, luruskan lagi kabelnya, jangan dipaksa.</li>
    <li>Pakai konektor RJ45 yang sesuai jenis kabel (Cat5e/Cat6); konektor Cat6 sedikit lebih besar.</li>
</ul>
