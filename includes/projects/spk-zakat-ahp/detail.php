<button type="button" class="back-to-projects" data-target="proyek">
    <i class="bi bi-arrow-left"></i> Kembali ke Proyek
</button>

<div class="project-detail-header">
    <div class="project-icon"><i class="bi bi-cash-coin"></i></div>
    <div>
        <span class="project-tag">Sistem Pendukung Keputusan &middot; Masjid Nurul Ikhsan, Jakarta Barat</span>
        <h2 class="project-detail-title">SPK Penerimaan Zakat &mdash; Metode Analytical Hierarchy Process (AHP)</h2>
    </div>
</div>

<p class="section-text">
    Aplikasi web PHP native (tanpa framework) dengan MySQL, dibuat untuk membantu panitia
    zakat Masjid Nurul Ikhsan menentukan penerima zakat secara objektif menggunakan metode
    <strong>Analytical Hierarchy Process (AHP)</strong>. Panitia cukup mengisi perbandingan
    tingkat kepentingan antar kriteria sekali saja, sistem menghitung bobot prioritasnya
    secara otomatis beserta uji konsistensinya, lalu merangking seluruh pemohon berdasarkan
    kuota penerima yang ditentukan.
</p>

<div class="detail-grid">
    <div class="detail-col">
        <h6 class="detail-heading"><i class="bi bi-cpu"></i> Software</h6>
        <ul class="detail-list">
            <li>PHP native &amp; MySQL/MariaDB &mdash; backend dan basis data relasional penuh (foreign key di semua tabel terkait).</li>
            <li>PDO MySQL &mdash; koneksi dan query database.</li>
        </ul>

        <h6 class="detail-heading"><i class="bi bi-bar-chart-steps"></i> Kriteria Penilaian</h6>
        <ul class="detail-list">
            <li>Penghasilan</li>
            <li>Jumlah Tanggungan</li>
            <li>Kondisi Rumah</li>
            <li>Pekerjaan</li>
            <li>Tingkat Kebutuhan</li>
        </ul>
    </div>
    <div class="detail-col">
        <h6 class="detail-heading"><i class="bi bi-stars"></i> Fitur Utama</h6>
        <ul class="detail-list">
            <li><strong>Login &amp; Register</strong> &mdash; dengan upload foto profil.</li>
            <li><strong>Master Kriteria &amp; Sub Kriteria</strong> &mdash; 5 kriteria, tiap kriteria punya kategori penilaian &amp; bobot sendiri.</li>
            <li><strong>Perbandingan Berpasangan</strong> &mdash; matriks Saaty 1&ndash;9, tersimpan otomatis.</li>
            <li><strong>Perhitungan Bobot AHP</strong> &mdash; eigen vector, &lambda; maks, CI, CR, lengkap uji konsistensi.</li>
            <li><strong>Data Zakat</strong> &mdash; data pemohon, proses perankingan berbasis kuota, hasil perankingan otomatis.</li>
            <li><strong>Laporan Resmi Terpadu</strong> &mdash; 4 jenis dokumen (Data Pemohon, Matriks &amp; Bobot AHP, Hasil Ranking, Surat Keputusan Penerima Zakat) dengan kop surat dan blok tanda tangan.</li>
        </ul>
    </div>
</div>

<h6 class="detail-heading"><i class="bi bi-share"></i> Cara Kerja Metode AHP</h6>
<ol class="detail-list">
    <li>Menyusun matriks perbandingan berpasangan kriteria (n&times;n) dari input skala Saaty.</li>
    <li>Normalisasi kolom, lalu rata-rata tiap baris menjadi <strong>bobot prioritas</strong> (eigen vector approksimasi).</li>
    <li>Menghitung <strong>&lambda; maks</strong> = &sum;(jumlah kolom &times; bobot).</li>
    <li>Menghitung <strong>CI</strong> (Consistency Index) = (&lambda; maks &minus; n) / (n &minus; 1).</li>
    <li>Menghitung <strong>CR</strong> (Consistency Ratio) = CI / RI &mdash; matriks dianggap konsisten jika CR &le; 0,1.</li>
    <li>Skor akhir tiap pemohon = &sum; (bobot kriteria &times; nilai sub kriteria terpilih), lalu diurutkan dari skor tertinggi untuk menentukan status Diterima/Ditolak.</li>
</ol>

<h6 class="detail-heading"><i class="bi bi-list-check"></i> Yang Saya Kerjakan</h6>
<ul class="detail-list">
    <li>Merancang skema basis data relasional (kriteria, sub kriteria, pemohon, matriks perbandingan, hasil).</li>
    <li>Mengimplementasikan perhitungan AHP dari nol: eigen vector, &lambda; maks, CI, CR, dan uji konsistensi.</li>
    <li>Membangun modul perbandingan berpasangan kriteria dengan matriks Saaty yang nilainya persisten.</li>
    <li>Membangun modul data pemohon beserta penilaian tiap sub kriteria dan proses perankingan berbasis kuota.</li>
    <li>Membuat sistem laporan resmi (4 jenis dokumen) lengkap dengan kop surat dan blok tanda tangan, siap cetak.</li>
    <li>Mendesain tampilan bertema masjid (hijau emerald &amp; emas) yang responsif untuk mobile.</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-images"></i> Dokumentasi</h6>
<?php render_project_gallery('spk-zakat-ahp'); ?>
