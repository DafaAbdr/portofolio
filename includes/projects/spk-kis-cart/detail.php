<button type="button" class="back-to-projects" data-target="proyek">
    <i class="bi bi-arrow-left"></i> Kembali ke Proyek
</button>

<div class="project-detail-header">
    <div class="project-icon"><i class="bi bi-diagram-3"></i></div>
    <div>
        <span class="project-tag">Sistem Pendukung Keputusan</span>
        <h2 class="project-detail-title">SPK Kelayakan Penerimaan Kartu Indonesia Sehat (KIS) &mdash; Metode CART</h2>
    </div>
</div>

<p class="section-text">
    Aplikasi PHP native (tanpa framework) dengan MySQL dan Bootstrap, dibuat untuk
    membantu petugas Desa Cicadas, Kampung Pabuaran, menentukan kelayakan penerima
    Kartu Indonesia Sehat (KIS). Seluruh proses klasifikasi CART (Classification and
    Regression Tree) dihitung langsung oleh sistem dari data yang tersimpan di
    database &mdash; bukan simulasi &mdash; lalu disimpan agar pohon keputusannya bisa
    ditampilkan ulang kapan saja.
</p>

<div class="detail-grid">
    <div class="detail-col">
        <h6 class="detail-heading"><i class="bi bi-cpu"></i> Software</h6>
        <ul class="detail-list">
            <li>PHP native &amp; MySQL/MariaDB &mdash; backend dan basis data.</li>
            <li>Bootstrap &amp; Bootstrap Icons &mdash; kerangka tampilan.</li>
            <li>HTML/CSS kustom &mdash; visualisasi pohon keputusan (bukan gambar statis).</li>
        </ul>

        <h6 class="detail-heading"><i class="bi bi-table"></i> Struktur Basis Data</h6>
        <ul class="detail-list">
            <li><strong>users</strong> &mdash; akun admin/petugas.</li>
            <li><strong>masyarakat</strong> &mdash; data kriteria warga, termasuk label hasil survei untuk melatih model.</li>
            <li><strong>cart_runs</strong> &mdash; riwayat tiap proses klasifikasi (akurasi, parameter).</li>
            <li><strong>cart_nodes</strong> &mdash; struktur pohon keputusan hasil training.</li>
            <li><strong>hasil_klasifikasi</strong> &mdash; hasil prediksi per warga per proses.</li>
            <li><strong>app_settings</strong> &mdash; parameter default algoritma CART.</li>
        </ul>
    </div>
    <div class="detail-col">
        <h6 class="detail-heading"><i class="bi bi-stars"></i> Fitur Utama</h6>
        <ul class="detail-list">
            <li><strong>Login/Register</strong> &mdash; autentikasi admin dengan password ter-hash (bcrypt).</li>
            <li><strong>Dashboard</strong> &mdash; ringkasan jumlah data, hasil klasifikasi terakhir, akurasi model.</li>
            <li><strong>Kriteria</strong> &mdash; CRUD data warga (identitas &amp; kriteria: penghasilan, pekerjaan, tanggungan, tempat tinggal, aset), pencarian, upload massal CSV.</li>
            <li><strong>Proses Klasifikasi</strong> &mdash; melatih pohon keputusan dari data berlabel, parameter bisa diatur (kedalaman maksimum, minimum sampel split).</li>
            <li><strong>Hasil Klasifikasi</strong> &mdash; visualisasi pohon keputusan, pie chart, dan tabel kecocokan per warga.</li>
            <li><strong>Laporan</strong> &mdash; 3 jenis laporan dengan filter, export CSV, dan cetak PDF.</li>
            <li><strong>Profile &amp; Settings</strong> &mdash; kelola profil admin dan parameter default CART, avatar inisial otomatis jika belum upload foto.</li>
        </ul>
    </div>
</div>

<h6 class="detail-heading"><i class="bi bi-share"></i> Cara Kerja Algoritma CART</h6>
<p class="section-text">
    Pemilihan split di tiap simpul pohon memakai kriteria <strong>Gini Index / Gini
    Split</strong>: fitur numerik (penghasilan, jumlah tanggungan) displit dengan ambang
    batas, sedangkan fitur kategorikal (status pekerjaan, kondisi tempat tinggal,
    kepemilikan aset) displit dengan mencoba seluruh kombinasi himpunan bagian kategori,
    sesuai prinsip split biner CART. Dari seluruh calon cabang di suatu simpul, yang
    dipilih adalah cabang dengan Gini Split paling kecil (paling homogen). Pohon berhenti
    bertumbuh jika simpul sudah murni, mencapai kedalaman maksimum, jumlah sampel di
    bawah ambang minimum, atau tidak ada lagi cabang yang lebih baik dari simpul saat
    ini. Setiap daun memprediksi kelas mayoritas dengan tingkat keyakinan (confidence)
    berupa proporsi kelas mayoritas di daun tersebut, dan akurasi model dihitung dari
    data yang sudah memiliki label hasil survei.
</p>

<h6 class="detail-heading"><i class="bi bi-list-check"></i> Yang Saya Kerjakan</h6>
<ul class="detail-list">
    <li>Membangun algoritma CART dari nol di PHP (perhitungan Gini Index, pencarian split terbaik untuk fitur numerik &amp; kategorikal, proses pelatihan pohon).</li>
    <li>Merancang skema basis data untuk menyimpan data warga, riwayat proses, struktur pohon, dan hasil klasifikasi.</li>
    <li>Membangun visualisasi pohon keputusan berbasis HTML/CSS yang dibangun ulang dari data tersimpan, bukan gambar statis.</li>
    <li>Membuat modul CRUD data warga lengkap dengan pencarian dan upload massal via CSV.</li>
    <li>Membangun sistem laporan dengan filter, export CSV, dan cetak PDF.</li>
    <li>Menerapkan autentikasi admin (bcrypt) serta fitur profil dan pengaturan parameter default algoritma.</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-images"></i> Dokumentasi</h6>
<?php render_project_gallery('spk-kis-cart'); ?>
