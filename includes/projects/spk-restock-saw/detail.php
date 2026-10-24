<button type="button" class="back-to-projects" data-target="proyek">
    <i class="bi bi-arrow-left"></i> Kembali ke Proyek
</button>

<div class="project-detail-header">
    <div class="project-icon"><i class="bi bi-box-seam"></i></div>
    <div>
        <span class="project-tag">Sistem Pendukung Keputusan &middot; Studi Kasus Honda Arista Depok</span>
        <h2 class="project-detail-title">SPK Prioritas Restock Sparepart Fast Moving &mdash; Metode Simple Additive Weighting (SAW)</h2>
    </div>
</div>

<p class="section-text">
    Aplikasi web PHP native + MySQL untuk menentukan prioritas restock sparepart
    <em>fast moving</em> di Honda Arista Depok, Jawa Barat, menggunakan metode
    <strong>Simple Additive Weighting (SAW)</strong>. Data acuan diambil dari laporan
    stok &amp; penjualan nyata (analisis ABC/Pareto), lalu sistem menormalisasi dan
    menghitung nilai preferensi tiap sparepart untuk menentukan mana yang paling
    perlu di-restock lebih dulu.
</p>

<div class="detail-grid">
    <div class="detail-col">
        <h6 class="detail-heading"><i class="bi bi-cpu"></i> Software</h6>
        <ul class="detail-list">
            <li>PHP native &amp; MySQL/MariaDB (mysqli) &mdash; backend dan basis data.</li>
            <li>Password di-hash bcrypt, seluruh query pakai prepared statement.</li>
        </ul>

        <h6 class="detail-heading"><i class="bi bi-bar-chart-steps"></i> 8 Kriteria SAW</h6>
        <ul class="detail-list">
            <li>C1 &mdash; Tingkat Penjualan Sparepart (Benefit, bobot 0,20)</li>
            <li>C2 &mdash; Frekuensi Permintaan Bengkel (Benefit, 0,15)</li>
            <li>C3 &mdash; Stok Tersedia (Cost, 0,20)</li>
            <li>C4 &mdash; Tingkat Stockout (Benefit, 0,10)</li>
            <li>C5 &mdash; Lead Time Pengiriman (Benefit, 0,10)</li>
            <li>C6 &mdash; Perputaran Sparepart/Fast Moving (Benefit, 0,10)</li>
            <li>C7 &mdash; Tingkat Kritikalitas Sparepart (Benefit, 0,10)</li>
            <li>C8 &mdash; Rata-rata Permintaan Bulanan (Benefit, 0,05)</li>
        </ul>
    </div>
    <div class="detail-col">
        <h6 class="detail-heading"><i class="bi bi-stars"></i> Fitur Utama</h6>
        <ul class="detail-list">
            <li><strong>Login &amp; Register</strong> &mdash; dengan foto profil, ditampilkan di sidebar dan topbar.</li>
            <li><strong>Data Sparepart</strong> &mdash; CRUD alternatif SAW lengkap atribut 8 kriteria.</li>
            <li><strong>Data Kriteria</strong> &mdash; CRUD kriteria (kode, jenis benefit/cost, bobot).</li>
            <li><strong>Data Penilaian</strong> &mdash; input/edit matriks nilai, bisa auto-fill dari Data Sparepart.</li>
            <li><strong>Proses SAW</strong> &mdash; normalisasi matriks &amp; perhitungan nilai preferensi (Vi).</li>
            <li><strong>Hasil SAW</strong> &mdash; tabel perangkingan prioritas restock.</li>
            <li><strong>Laporan</strong> &mdash; Prioritas Restock, Data Normalisasi, Data Kriteria, Data Sparepart (siap cetak/PDF).</li>
        </ul>
    </div>
</div>

<h6 class="detail-heading"><i class="bi bi-share"></i> Cara Kerja Metode SAW</h6>
<p class="section-text">
    <strong>Normalisasi</strong> &mdash; kriteria <em>benefit</em>: r<sub>ij</sub> = x<sub>ij</sub> / Max(x<sub>ij</sub>);
    kriteria <em>cost</em>: r<sub>ij</sub> = Min(x<sub>ij</sub>) / x<sub>ij</sub>.
    <strong>Nilai preferensi</strong>: V<sub>i</sub> = &sum; (w<sub>j</sub> &times; r<sub>ij</sub>) untuk j = 1..n
    kriteria. Sparepart dengan nilai V<sub>i</sub> terbesar menjadi prioritas restock tertinggi.
</p>

<h6 class="detail-heading"><i class="bi bi-list-check"></i> Yang Saya Kerjakan</h6>
<ul class="detail-list">
    <li>Merancang skema basis data untuk sparepart, kriteria, penilaian, dan hasil SAW.</li>
    <li>Menganalisis data stok/penjualan riil (ABC/Pareto) untuk menentukan 15 sparepart fast moving awal dan nilai kriterianya.</li>
    <li>Mengimplementasikan algoritma SAW dari nol: normalisasi benefit/cost dan perhitungan nilai preferensi.</li>
    <li>Membangun modul CRUD sparepart &amp; kriteria, serta fitur auto-fill penilaian dari data sparepart.</li>
    <li>Membuat sistem laporan siap cetak untuk 4 jenis dokumen.</li>
    <li>Melacak dan memperbaiki bug path CSS (double-slash pada <code>base_url()</code>) yang sempat membuat tampilan menu polos tanpa style.</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-images"></i> Dokumentasi</h6>
<?php render_project_gallery('spk-restock-saw'); ?>
