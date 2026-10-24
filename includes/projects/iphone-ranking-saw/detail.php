<button type="button" class="back-to-projects" data-target="proyek">
    <i class="bi bi-arrow-left"></i> Kembali ke Proyek
</button>

<div class="project-detail-header">
    <div class="project-icon"><i class="bi bi-phone"></i></div>
    <div>
        <span class="project-tag">Aplikasi Desktop Java &middot; Libra Store</span>
        <h2 class="project-detail-title">Penentuan Prioritas iPhone Terbaik di Libra Store &mdash; Metode Simple Additive Weighting (SAW)</h2>
    </div>
</div>

<p class="section-text">
    Aplikasi desktop berbasis Java (Swing, dibangun dengan NetBeans) yang terhubung ke
    MySQL, dibuat untuk membantu Libra Store menentukan iPhone bekas mana yang paling
    layak diprioritaskan &mdash; baik untuk dijual maupun direkomendasikan ke pelanggan
    &mdash; menggunakan metode <strong>Simple Additive Weighting (SAW)</strong> dengan
    10 kriteria penilaian.
</p>

<div class="detail-grid">
    <div class="detail-col">
        <h6 class="detail-heading"><i class="bi bi-cpu"></i> Software &amp; Library</h6>
        <ul class="detail-list">
            <li>Java (Swing) &amp; NetBeans &mdash; antarmuka aplikasi desktop.</li>
            <li>MySQL Connector/J &mdash; koneksi ke basis data MySQL.</li>
            <li>JasperReports &amp; iText &mdash; mencetak laporan ke PDF.</li>
            <li>JCalendar &mdash; komponen input tanggal.</li>
        </ul>

        <h6 class="detail-heading"><i class="bi bi-bar-chart-steps"></i> 10 Kriteria Penilaian</h6>
        <ul class="detail-list">
            <li>Harga</li>
            <li>Kondisi Fisik</li>
            <li>Kesehatan Baterai</li>
            <li>Kapasitas Penyimpanan</li>
            <li>Processor</li>
            <li>Tahun Rilis</li>
            <li>Garansi</li>
            <li>Kualitas iPhone</li>
            <li>Kamera</li>
            <li>Kelengkapan</li>
        </ul>
    </div>
    <div class="detail-col">
        <h6 class="detail-heading"><i class="bi bi-stars"></i> Fitur Utama</h6>
        <ul class="detail-list">
            <li><strong>Login</strong> &mdash; autentikasi sebelum masuk ke menu utama.</li>
            <li><strong>Dashboard</strong> &mdash; ringkasan data di menu utama.</li>
            <li><strong>Data iPhone</strong> &mdash; CRUD unit iPhone beserta nilai tiap kriteria.</li>
            <li><strong>Data Kriteria</strong> &mdash; atur bobot dan jenis (benefit/cost) tiap kriteria.</li>
            <li><strong>Data Penilaian</strong> &mdash; matriks keputusan tiap unit terhadap tiap kriteria.</li>
            <li><strong>Proses SAW</strong> &mdash; menjalankan normalisasi &amp; perhitungan nilai preferensi.</li>
            <li><strong>Hasil Ranking</strong> &mdash; tabel perangkingan iPhone terbaik, sinkron dengan hasil proses terakhir.</li>
            <li><strong>Laporan</strong> &mdash; cetak PDF via JasperReports: Data iPhone, Data Kriteria, Data Normalisasi, dan Laporan iPhone Terbaik.</li>
        </ul>
    </div>
</div>

<h6 class="detail-heading"><i class="bi bi-share"></i> Cara Kerja Metode SAW</h6>
<p class="section-text">
    Sistem membentuk matriks keputusan dari data penilaian tiap unit iPhone, lalu
    menormalisasi tiap kriteria sesuai jenisnya &mdash; <em>benefit</em>:
    r<sub>ij</sub> = x<sub>ij</sub> / Max(x<sub>ij</sub>), <em>cost</em> (mis. harga):
    r<sub>ij</sub> = Min(x<sub>ij</sub>) / x<sub>ij</sub>. Nilai preferensi tiap unit
    dihitung dengan V<sub>i</sub> = &sum; (bobot<sub>j</sub> &times; r<sub>ij</sub>), lalu
    seluruh unit diurutkan dari nilai V tertinggi ke terendah untuk menentukan
    rankingnya. Perhitungan selalu diambil langsung dari data terbaru di database
    setiap tombol "Proses SAW" ditekan, dan hasilnya disimpan sementara (cache) agar
    panel Proses dan Hasil Ranking selalu sinkron.
</p>

<h6 class="detail-heading"><i class="bi bi-list-check"></i> Yang Saya Kerjakan</h6>
<ul class="detail-list">
    <li>Merancang skema basis data MySQL untuk data iPhone, kriteria, dan penilaian.</li>
    <li>Membangun seluruh antarmuka desktop dengan Java Swing (NetBeans Form Editor): form Data iPhone, Data Kriteria, Data Penilaian, Proses SAW, dan Hasil Ranking.</li>
    <li>Mengimplementasikan algoritma SAW dari nol di Java (normalisasi, perhitungan nilai preferensi, dan pengurutan ranking).</li>
    <li>Mengintegrasikan JasperReports untuk mencetak 4 jenis laporan ke PDF.</li>
    <li>Menguji aplikasi end-to-end, dari input data hingga laporan tercetak.</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-images"></i> Dokumentasi</h6>
<?php render_project_gallery('iphone-ranking-saw'); ?>
