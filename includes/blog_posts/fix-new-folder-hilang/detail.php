<button type="button" class="back-to-projects" data-target="blog">
    <i class="bi bi-arrow-left"></i> Kembali ke Blog
</button>

<div class="project-detail-header">
    <div class="project-icon"><i class="bi bi-tools"></i></div>
    <div>
        <span class="project-tag">Tutorial &amp; Tips &middot; Windows</span>
        <h2 class="project-detail-title">Cara Mengatasi Opsi &quot;New Folder&quot; yang Hilang di Windows</h2>
    </div>
</div>

<p class="section-text">
    Salah satu masalah klasik di Windows: klik kanan di desktop atau dalam File Explorer,
    lalu opsi <strong>Baru (New)</strong> tidak muncul sama sekali di menu, atau menunya
    ada tapi pilihan <strong>Folder</strong> di dalamnya hilang. Akibatnya, cara paling
    gampang bikin folder baru jadi tidak bisa dipakai. Ini biasanya terjadi karena kunci
    Registry yang mengatur item &quot;Baru&quot; untuk folder (<code>ShellNew</code>) dan/atau
    pendaftaran handler menu-nya terhapus atau rusak &mdash; bisa karena software pembersih
    registry yang terlalu agresif, virus, atau kesalahan saat edit Registry manual.
</p>

<div class="before-after-grid">
    <figure class="before-after-item">
        <button type="button" class="cert-thumb-btn before-after-img" data-cert-img="assets/img/blog/fix-new-folder-hilang/sebelum.webp" data-cert-title="Sebelum diperbaiki">
            <img src="assets/img/blog/fix-new-folder-hilang/sebelum.webp" alt="Sebelum: opsi Baru tidak berfungsi">
        </button>
        <figcaption>Sebelum &mdash; opsi &quot;Baru&quot; hilang/tidak berfungsi</figcaption>
    </figure>
    <figure class="before-after-item">
        <button type="button" class="cert-thumb-btn before-after-img" data-cert-img="assets/img/blog/fix-new-folder-hilang/sesudah.webp" data-cert-title="Sesudah diperbaiki">
            <img src="assets/img/blog/fix-new-folder-hilang/sesudah.webp" alt="Sesudah: Baru > Folder muncul kembali">
        </button>
        <figcaption>Sesudah &mdash; &quot;Baru &gt; Folder&quot; muncul kembali</figcaption>
    </figure>
</div>

<h6 class="detail-heading"><i class="bi bi-exclamation-triangle"></i> Penyebab Umum</h6>
<ul class="detail-list">
    <li>Kunci Registry <code>HKEY_CLASSES_ROOT\Folder\ShellNew</code> terhapus atau nilainya rusak.</li>
    <li>Pendaftaran handler menu <code>ContextMenuHandlers\New</code> pada <code>Directory\Background</code> hilang, sehingga seluruh menu &quot;Baru&quot; tidak muncul.</li>
    <li>Bekas pakai software &quot;pembersih&quot; atau &quot;optimizer&quot; Registry yang menghapus kunci ini tanpa sengaja.</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-download"></i> File Perbaikan</h6>
<p class="section-text">
    Dua file Registry berikut akan mengembalikan kunci-kunci tersebut ke kondisi normal.
    <strong>FIX_NEW_FOLDER_FINAL.reg</strong> adalah perbaikan utama (mengembalikan kunci
    <code>ShellNew</code> sekaligus pendaftaran handler menu &quot;Baru&quot;) dan cukup
    dijalankan sendirian untuk sebagian besar kasus.
    <strong>FIX_NEW_FOLDER_DEFAULT_ICON.reg</strong> sifatnya opsional, dipakai kalau mau
    ikon folder baru memakai ikon bawaan Windows (<code>imageres.dll</code>) alih-alih ikon
    dari <code>explorer.exe</code>.
</p>
<div class="download-list">
    <a href="assets/downloads/fix-new-folder-hilang/FIX_NEW_FOLDER_FINAL.reg" download class="download-item">
        <i class="bi bi-file-earmark-code"></i>
        <span>
            <strong>FIX_NEW_FOLDER_FINAL.reg</strong>
            <small>Perbaikan utama &mdash; wajib dijalankan</small>
        </span>
        <i class="bi bi-download download-item-icon"></i>
    </a>
    <a href="assets/downloads/fix-new-folder-hilang/FIX_NEW_FOLDER_DEFAULT_ICON.reg" download class="download-item">
        <i class="bi bi-file-earmark-code"></i>
        <span>
            <strong>FIX_NEW_FOLDER_DEFAULT_ICON.reg</strong>
            <small>Opsional &mdash; kembalikan ikon folder baru ke bawaan Windows</small>
        </span>
        <i class="bi bi-download download-item-icon"></i>
    </a>
</div>

<h6 class="detail-heading"><i class="bi bi-list-ol"></i> Langkah-Langkah</h6>
<ol class="detail-list">
    <li>Unduh <strong>FIX_NEW_FOLDER_FINAL.reg</strong> lewat tombol di atas (tambahkan juga file kedua kalau mau ganti ikonnya).</li>
    <li>Klik kanan file <code>.reg</code> yang sudah diunduh, lalu pilih <strong>Merge</strong> / <strong>Gabungkan</strong>.</li>
    <li>Akan muncul dialog peringatan keamanan dari Registry Editor &mdash; klik <strong>Yes/Ya</strong> untuk melanjutkan.</li>
    <li>Restart <strong>Windows Explorer</strong> lewat Task Manager (klik kanan taskbar &rarr; Task Manager &rarr; cari &quot;Windows Explorer&quot; &rarr; Restart), atau restart komputer kalau lebih mudah.</li>
    <li>Klik kanan di desktop atau folder kosong &mdash; opsi &quot;Baru &gt; Folder&quot; seharusnya sudah muncul kembali.</li>
</ol>

<h6 class="detail-heading"><i class="bi bi-shield-exclamation"></i> Catatan Keamanan</h6>
<p class="section-text">
    Mengubah Registry selalu punya risiko kalau dilakukan sembarangan. Sebelum menjalankan
    file <code>.reg</code> apa pun (termasuk dari sumber manapun), ada baiknya membuat
    <em>restore point</em> dulu lewat System Protection, dan hanya jalankan file
    <code>.reg</code> dari sumber yang benar-benar Anda percaya.
</p>
