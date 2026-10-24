<button type="button" class="back-to-projects" data-target="blog">
    <i class="bi bi-arrow-left"></i> Kembali ke Blog
</button>

<div class="project-detail-header">
    <div class="project-icon"><i class="bi bi-hdd-stack"></i></div>
    <div>
        <span class="project-tag">Tutorial &amp; Tips &middot; Web Development</span>
        <h2 class="project-detail-title">Cara Install Laragon 6 (Gratis) untuk Local Web Development</h2>
    </div>
</div>

<p class="section-text">
    <strong>Laragon</strong> adalah aplikasi all-in-one untuk development web secara lokal
    di Windows &mdash; isinya Apache/Nginx, PHP, MySQL, Node.js, Redis, Git, dan tools lain
    yang biasa dipakai, tanpa perlu instalasi satu-satu. Dibanding XAMPP, Laragon lebih
    ringan, portable, dan punya fitur praktis seperti auto virtual host serta pindah versi
    PHP/MySQL dengan sekali klik.
</p>

<p class="section-text">
    Rilis terbaru Laragon di situs resminya sekarang berbayar (Pro). Tapi versi
    <strong>6.0.0</strong> &mdash; dirilis langsung oleh pembuatnya di GitHub &mdash;
    masih bisa diunduh gratis dan dipakai penuh tanpa lisensi. Ini cukup untuk kebutuhan
    development sehari-hari (PHP native, Laravel, CodeIgniter, dsb).
</p>

<button type="button" class="cert-thumb-btn before-after-img" data-cert-img="assets/img/blog/install-laragon-6/hero.WebP" data-cert-title="Tampilan panel Laragon" style="max-width: 500px;">
    <img src="assets/img/blog/install-laragon-6/hero.WebP" alt="Ilustrasi panel kontrol Laragon dengan tombol Start All">
</button>

<h6 class="detail-heading"><i class="bi bi-box-seam"></i> Yang Tercakup di Versi 6.0.0</h6>
<ul class="detail-list">
    <li>PHP 8.1.10, Apache 2.4.54, Nginx 1.22.0, MySQL 8.0.30</li>
    <li>Node.js 18.8, Python 3.10, Git 2.37.3, Composer 2.4.1</li>
    <li>Redis, Memcached, HeidiSQL 12.1, Cmder, Ngrok 3</li>
    <li>Quick-add tools: PostgreSQL, DBeaver, Golang, Yarn, Pocketbase</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-pc-display"></i> Kebutuhan Sistem</h6>
<ul class="detail-list">
    <li>Windows 7 / 8 / 10 / 11, 64-bit</li>
    <li>Ruang kosong sekitar 500 MB&ndash;1 GB setelah instalasi (file installer &plusmn;173 MB)</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-download"></i> Unduh</h6>
<p class="section-text">
    File installer-nya cukup besar (&plusmn;173 MB), jadi tidak saya simpan di sini &mdash;
    unduh langsung dari rilis resminya di GitHub:
</p>
<div class="download-list">
    <a href="https://github.com/leokhoa/laragon/releases/tag/6.0.0" target="_blank" rel="noopener" class="download-item">
        <i class="bi bi-github"></i>
        <span>
            <strong>Laragon 6.0.0 &mdash; GitHub Releases</strong>
            <small>leokhoa/laragon &middot; file: laragon-wamp.exe</small>
        </span>
        <i class="bi bi-box-arrow-up-right download-item-icon"></i>
    </a>
</div>

<h6 class="detail-heading"><i class="bi bi-list-ol"></i> Langkah Instalasi</h6>
<ol class="detail-list">
    <li>Buka halaman rilis di atas, scroll ke bagian <strong>Assets</strong>, lalu unduh <code>laragon-wamp.exe</code>.</li>
    <li>Jalankan installer-nya. Pilih folder instalasi yang jalur/path-nya pendek dan tanpa spasi (contoh: <code>C:\laragon</code>) supaya tidak ada masalah saat konfigurasi virtual host nantinya.</li>
    <li>Tunggu proses ekstraksi selesai, lalu buka aplikasi Laragon.</li>
    <li>Di jendela utama, klik tombol <strong>Start All</strong> untuk menjalankan Apache (atau Nginx) dan MySQL sekaligus.</li>
    <li>Buka browser, akses <code>http://localhost</code> &mdash; kalau muncul halaman Laragon, berarti instalasi berhasil.</li>
    <li>Taruh folder project PHP Anda di dalam folder <code>www</code> (contoh: <code>C:\laragon\www\nama-project</code>) &mdash; Laragon otomatis membuatkan virtual host-nya, cukup akses <code>http://nama-project.test</code>.</li>
</ol>

<h6 class="detail-heading"><i class="bi bi-lightbulb"></i> Tips Tambahan</h6>
<ul class="detail-list">
    <li>Klik kanan ikon Laragon di tray &rarr; <strong>Quick add</strong> untuk pasang phpMyAdmin, PostgreSQL, atau tools lain tanpa instalasi manual.</li>
    <li>Menu <strong>PHP</strong> di tray memudahkan pindah versi PHP kalau project butuh versi tertentu.</li>
    <li>Akses database lewat <strong>HeidiSQL</strong> yang sudah termasuk bawaan, tidak perlu install client MySQL terpisah.</li>
</ul>
