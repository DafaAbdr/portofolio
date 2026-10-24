<button type="button" class="back-to-projects" data-target="proyek">
    <i class="bi bi-arrow-left"></i> Kembali ke Proyek
</button>

<div class="project-detail-header">
    <div class="project-icon"><i class="bi bi-shield-lock"></i></div>
    <div>
        <span class="project-tag">Tugas Akhir &middot; Teknik Informatika, Universitas Indraprasta PGRI</span>
        <h2 class="project-detail-title">Pemanfaatan RFID untuk Identifikasi dan Pembatas Akses Ruangan Berbasis IoT dengan Metode Fuzzy Mamdani</h2>
    </div>
</div>

<p class="section-text">
    Penelitian ini dilatarbelakangi oleh pengelolaan akses ruangan yang masih dilakukan
    secara manual sehingga kurang efektif untuk memantau aktivitas pengguna, menjaga
    keamanan, dan mengatur izin akses ke tiap ruangan satu per satu. Sistem yang dibangun
    memanfaatkan RFID sebagai identifikasi pengguna, ESP32 sebagai penghubung IoT, serta
    metode Fuzzy Mamdani untuk menentukan tingkat izin akses berdasarkan peran pengguna
    dan sensitivitas ruangan &mdash; sehingga admin tidak perlu menambahkan izin akses
    secara manual untuk tiap ruangan. Penelitian dilakukan selama 5 bulan (Februari&ndash;Juni
    2026) dan diterapkan langsung di Masjid Ibnu Sabil, Jakarta Timur.
</p>

<h6 class="detail-heading"><i class="bi bi-play-circle"></i> Video Demo</h6>
<div class="video-embed-wrapper" data-video-id="pYgzCJSo7ck">
    <button type="button" class="video-preview-trigger">
        <img src="https://img.youtube.com/vi/pYgzCJSo7ck/hqdefault.jpg" alt="Video demo Sistem Akses Ruangan RFID" class="video-preview-thumb">
        <span class="video-preview-play"><i class="bi bi-play-fill"></i></span>
    </button>
</div>

<div class="detail-grid">
    <div class="detail-col">
        <h6 class="detail-heading"><i class="bi bi-cpu"></i> Software</h6>
        <ul class="detail-list">
            <li>PHP &amp; MySQL &mdash; backend dan basis data sistem monitoring.</li>
            <li>HTML &amp; CSS &mdash; antarmuka website monitoring akses.</li>
            <li>Laragon &amp; Visual Studio Code &mdash; lingkungan pengembangan web.</li>
            <li>Fritzing &mdash; merancang skematik rangkaian perangkat keras.</li>
            <li>UML &mdash; pemodelan sistem (use case, activity, sequence, class, deployment diagram).</li>
        </ul>
    </div>
    <div class="detail-col">
        <h6 class="detail-heading"><i class="bi bi-cpu-fill"></i> Perangkat Keras</h6>
        <ul class="detail-list">
            <li>ESP32 &mdash; mikrokontroler utama sistem.</li>
            <li>Modul RFID RC522 &mdash; membaca UID kartu/tag pengguna.</li>
            <li>LCD 16x2 I2C &mdash; menampilkan status akses.</li>
            <li>Relay 1 channel &amp; Solenoid door lock &mdash; membuka kunci pintu otomatis.</li>
            <li>Buzzer &mdash; indikator suara saat akses diterima/ditolak.</li>
            <li>Baterai 18650, modul Step-Down LM2596, &amp; RC Snubber &mdash; catu daya portable dan proteksi tegangan.</li>
        </ul>
    </div>
</div>

<h6 class="detail-heading"><i class="bi bi-diagram-3"></i> Cara Kerja Metode Fuzzy Mamdani</h6>
<ul class="detail-list">
    <li><strong>Fuzzifikasi</strong> &mdash; mengubah variabel peran pengguna dan sensitivitas ruangan menjadi himpunan fuzzy.</li>
    <li><strong>Pembentukan rule base</strong> &mdash; menyusun aturan IF-THEN dari kombinasi kedua variabel tersebut.</li>
    <li><strong>Inferensi</strong> &mdash; mengevaluasi aturan fuzzy mana yang berlaku untuk suatu kombinasi input.</li>
    <li><strong>Defuzzifikasi (metode Centroid)</strong> &mdash; mengubah hasil fuzzy menjadi nilai tegas untuk memutuskan akses diizinkan atau ditolak.</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-list-check"></i> Yang Saya Kerjakan</h6>
<ul class="detail-list">
    <li>Analisis kebutuhan sistem dan pengumpulan data terkait akses ruangan dan metode Fuzzy Mamdani.</li>
    <li>Merancang sistem lewat UML: use case, activity, sequence, class, hingga deployment diagram.</li>
    <li>Merancang dan merakit rangkaian perangkat keras (ESP32, RFID, relay, solenoid, dsb) di Fritzing lalu di dunia nyata.</li>
    <li>Mengimplementasikan logika Fuzzy Mamdani untuk menentukan hak akses berdasarkan peran pengguna dan sensitivitas ruangan.</li>
    <li>Membangun website monitoring (PHP &amp; MySQL) untuk memantau aktivitas akses secara real-time.</li>
    <li>Menguji sistem end-to-end dan menyusun laporan tugas akhir.</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-check2-circle"></i> Hasil</h6>
<ul class="detail-list">
    <li>Identifikasi pengguna berjalan otomatis lewat kartu RFID, tanpa lagi bergantung pada kunci fisik atau kode akses bersama.</li>
    <li>Setiap aktivitas akses (diterima maupun ditolak) tersimpan real-time ke database dan bisa dipantau pengurus DKM lewat satu platform monitoring untuk banyak ruangan sekaligus.</li>
    <li>Metode Fuzzy Mamdani berhasil menghasilkan keputusan akses otomatis dari kombinasi peran pengguna dan sensitivitas ruangan &mdash; lebih fleksibel dibanding logika akses biner pada sistem konvensional.</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-images"></i> Dokumentasi</h6>
<?php render_project_gallery('rfid-akses-ruangan'); ?>
