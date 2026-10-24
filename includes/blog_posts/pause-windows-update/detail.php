<button type="button" class="back-to-projects" data-target="blog">
    <i class="bi bi-arrow-left"></i> Kembali ke Blog
</button>

<div class="project-detail-header">
    <div class="project-icon"><i class="bi bi-pause-circle"></i></div>
    <div>
        <span class="project-tag">Tutorial &amp; Tips &middot; Windows</span>
        <h2 class="project-detail-title">Cara Pause Windows Update Sesuai Keinginan Lewat Registry</h2>
    </div>
</div>

<p class="section-text">
    Windows Update kadang datang di waktu yang kurang pas: laptop tiba-tiba restart saat
    presentasi, kuota habis untuk unduhan besar, atau update baru malah bikin driver dan
    aplikasi bermasalah. Di <strong>Settings &rarr; Windows Update</strong> memang ada fitur
    <em>Pause updates</em>, tapi tanggalnya dibatasi hanya beberapa minggu. Dengan sedikit
    mengubah <strong>Registry</strong>, Anda bisa menentukan sendiri sampai kapan update
    ditunda, bahkan sampai tahun 2099.
</p>

<h6 class="detail-heading"><i class="bi bi-1-circle"></i> Langkah 1: Pause Windows Update Dulu</h6>
<p class="section-text">
    Buka <strong>Settings &rarr; Windows Update</strong>, lalu klik <strong>Pause for 1 week</strong>
    (atau pilih tanggal di <em>Pause updates</em>). Langkah ini penting karena Windows akan
    membuat nilai-nilai pause di Registry yang nanti kita ubah. Setelah berhasil, muncul tulisan
    <em>Updates paused until</em> beserta tanggalnya.
</p>
<figure class="before-after-item" style="max-width: 640px; margin: 0.5rem 0 1rem;">
    <button type="button" class="cert-thumb-btn before-after-img" data-cert-img="assets/img/blog/pause-windows-update/langkah-1.webp" data-cert-title="Windows Update dalam keadaan di-pause (batas awal masih singkat)">
        <img src="assets/img/blog/pause-windows-update/langkah-1.webp" alt="Halaman Windows Update menampilkan Updates paused until 03/11/2026">
    </button>
    <figcaption>Windows Update dalam keadaan di-pause (batas awal masih singkat)</figcaption>
</figure>

<h6 class="detail-heading"><i class="bi bi-2-circle"></i> Langkah 2: Buka Registry Editor</h6>
<p class="section-text">
    Tekan <strong>Win + R</strong>, ketik <code>regedit</code>, lalu tekan Enter atau klik
    <strong>OK</strong>. Jika muncul pertanyaan UAC, pilih <strong>Yes</strong>.
</p>
<figure class="before-after-item" style="max-width: 640px; margin: 0.5rem 0 1rem;">
    <button type="button" class="cert-thumb-btn before-after-img" data-cert-img="assets/img/blog/pause-windows-update/langkah-2.webp" data-cert-title="Dialog Run: ketik regedit">
        <img src="assets/img/blog/pause-windows-update/langkah-2.webp" alt="Dialog Run Windows dengan perintah regedit">
    </button>
    <figcaption>Dialog Run: ketik regedit</figcaption>
</figure>

<h6 class="detail-heading"><i class="bi bi-3-circle"></i> Langkah 3: Menuju Lokasi Registry dan Cari 3 Nilai</h6>
<p class="section-text">Buka lokasi berikut (bisa ditempel langsung ke address bar Registry Editor):</p>
<pre class="code-block"><code>Computer\HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\WindowsUpdate\UX\Settings</code></pre>
<p class="section-text">Di sana ada beberapa nilai bertipe <code>REG_SZ</code>. Yang perlu diubah ada <strong>3</strong>, yaitu yang ditandai panah merah:</p>
<ul class="detail-list">
    <li><code>PauseFeatureUpdatesEndTime</code> &mdash; batas akhir pause feature update (pembaruan versi besar).</li>
    <li><code>PauseQualityUpdatesEndTime</code> &mdash; batas akhir pause quality update (patch keamanan dan perbaikan bulanan).</li>
    <li><code>PauseUpdatesExpiryTime</code> &mdash; batas akhir pause yang tampil di halaman Windows Update.</li>
</ul>
<figure class="before-after-item" style="max-width: 640px; margin: 0.5rem 0 1rem;">
    <button type="button" class="cert-thumb-btn before-after-img" data-cert-img="assets/img/blog/pause-windows-update/langkah-3.webp" data-cert-title="Tiga nilai yang diubah ditandai panah merah">
        <img src="assets/img/blog/pause-windows-update/langkah-3.webp" alt="Registry Editor menampilkan nilai PauseFeatureUpdatesEndTime, PauseQualityUpdatesEndTime, dan PauseUpdatesExpiryTime">
    </button>
    <figcaption>Tiga nilai yang diubah ditandai panah merah</figcaption>
</figure>

<h6 class="detail-heading"><i class="bi bi-4-circle"></i> Langkah 4: Ubah Tanggalnya</h6>
<p class="section-text">
    Klik dua kali nilai tersebut, lalu ganti <strong>Value data</strong> dengan tanggal yang
    Anda inginkan. Contoh di bawah mengganti tahunnya menjadi <code>2099</code>. Lakukan hal
    yang sama untuk ketiga nilai, lalu klik <strong>OK</strong>.
</p>
<figure class="before-after-item" style="max-width: 640px; margin: 0.5rem 0 1rem;">
    <button type="button" class="cert-thumb-btn before-after-img" data-cert-img="assets/img/blog/pause-windows-update/langkah-4.webp" data-cert-title="Contoh: Value data PauseUpdatesExpiryTime diubah menjadi 2099-11-02T17:40:25Z">
        <img src="assets/img/blog/pause-windows-update/langkah-4.webp" alt="Dialog Edit String dengan Value data 2099-11-02T17:40:25Z">
    </button>
    <figcaption>Contoh: Value data PauseUpdatesExpiryTime diubah menjadi 2099-11-02T17:40:25Z</figcaption>
</figure>
<p class="section-text">Formatnya <code>TAHUN-BULAN-TANGGALTJAM:MENIT:DETIKZ</code> (waktu UTC, selisih 7 jam dari WIB). Cukup ganti bagian tahun, bulan, atau tanggalnya, dan jangan hapus huruf <code>T</code> dan <code>Z</code>.</p>

<h6 class="detail-heading"><i class="bi bi-5-circle"></i> Langkah 5: Hasilnya</h6>
<p class="section-text">
    Tutup Registry Editor, lalu buka lagi <strong>Settings &rarr; Windows Update</strong>
    (kalau halamannya sedang terbuka, tutup dulu lalu buka ulang). Sekarang tertulis
    <em>Updates paused until</em> sesuai tanggal yang Anda isi, dalam contoh ini
    <strong>03/11/2099</strong>.
</p>
<figure class="before-after-item" style="max-width: 640px; margin: 0.5rem 0 1rem;">
    <button type="button" class="cert-thumb-btn before-after-img" data-cert-img="assets/img/blog/pause-windows-update/langkah-5.webp" data-cert-title="Windows Update ter-pause sampai 03/11/2099">
        <img src="assets/img/blog/pause-windows-update/langkah-5.webp" alt="Halaman Windows Update menampilkan Updates paused until 03/11/2099">
    </button>
    <figcaption>Windows Update ter-pause sampai 03/11/2099</figcaption>
</figure>

<h6 class="detail-heading"><i class="bi bi-download"></i> Cara Cepat: File .reg</h6>
<p class="section-text">
    Kalau malas mengubah satu per satu, pakai file berikut. Jalankan <strong>setelah</strong>
    Langkah 1 (pause dulu). File pause mengisi ketiga nilai dengan tanggal
    <code>2099-11-02T17:40:25Z</code>; ubah dulu lewat klik kanan &rarr; <strong>Edit</strong>
    kalau mau tanggal lain. File resume menghapus semua nilai pause.
</p>
<div class="download-list">
    <a href="assets/downloads/pause-windows-update/PAUSE_WINDOWS_UPDATE.reg" download class="download-item">
        <i class="bi bi-file-earmark-code"></i>
        <span>
            <strong>PAUSE_WINDOWS_UPDATE.reg</strong>
            <small>Ubah 3 nilai batas akhir pause (edit tanggal bila perlu)</small>
        </span>
        <i class="bi bi-download download-item-icon"></i>
    </a>
    <a href="assets/downloads/pause-windows-update/RESUME_WINDOWS_UPDATE.reg" download class="download-item">
        <i class="bi bi-file-earmark-code"></i>
        <span>
            <strong>RESUME_WINDOWS_UPDATE.reg</strong>
            <small>Lanjutkan update (hapus semua nilai pause)</small>
        </span>
        <i class="bi bi-download download-item-icon"></i>
    </a>
</div>
<p class="section-text">Klik kanan file &rarr; <strong>Merge</strong> &rarr; <strong>Yes</strong>.</p>

<h6 class="detail-heading"><i class="bi bi-play-circle"></i> Melanjutkan Update Lagi</h6>
<p class="section-text">
    Klik tombol <strong>Resume updates</strong> di halaman Windows Update, atau jalankan
    <strong>RESUME_WINDOWS_UPDATE.reg</strong>. Setelah itu klik <strong>Check for updates</strong>.
</p>

<h6 class="detail-heading"><i class="bi bi-shield-exclamation"></i> Catatan Penting</h6>
<ul class="detail-list">
    <li>Pause hanya <strong>menunda</strong> update. Setelah tanggalnya lewat atau Anda klik Resume, Windows mengunduh update yang tertinggal.</li>
    <li>Selama update ditunda, komputer tidak menerima patch keamanan. Jangan menunda terlalu lama kalau terhubung ke internet publik.</li>
    <li>Buat <em>restore point</em> sebelum mengubah Registry, dan hanya jalankan file <code>.reg</code> dari sumber yang Anda percaya.</li>
</ul>
