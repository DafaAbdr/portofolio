<?php
if (!function_exists('proj_photo')) {
    /**
     * Menampilkan satu foto dokumentasi beserta keterangannya.
     * Mencari assets/img/projects/<slug>/<base>.(webp|jpg|jpeg|png|svg).
     * Kalau filenya belum ada, tampil kotak "Foto menyusul". Begitu file dengan
     * nama yang sama ditaruh di folder itu, otomatis berganti jadi foto asli
     * dan bisa diklik untuk membesar - tidak perlu edit kode lagi.
     */
    function proj_photo($slug, $base, $caption) {
        $webDir  = 'assets/img/projects/' . $slug . '/';
        $diskDir = dirname(__DIR__, 3) . '/' . $webDir;
        $found   = null;

        foreach (array('webp', 'jpg', 'jpeg', 'png', 'svg') as $ext) {
            if (is_file($diskDir . $base . '.' . $ext)) {
                $found = $webDir . $base . '.' . $ext;
                break;
            }
        }

        $cap = htmlspecialchars($caption, ENT_QUOTES, 'UTF-8');
        echo '<figure class="task-photo">';
        if ($found !== null) {
            $src = htmlspecialchars($found, ENT_QUOTES, 'UTF-8');
            echo '<button type="button" class="cert-thumb-btn gallery-grid-thumb" data-cert-img="' . $src . '" data-cert-title="' . $cap . '">';
            echo '<img src="' . $src . '" alt="' . $cap . '" class="gallery-grid-img">';
            echo '<span class="cert-thumb-zoom"><i class="bi bi-zoom-in"></i></span>';
            echo '</button>';
        } else {
            echo '<div class="gallery-grid-thumb" style="display:flex;flex-direction:column;align-items:center;justify-content:center;gap:0.35rem;cursor:default;color:var(--text-secondary);font-size:0.78rem;">';
            echo '<i class="bi bi-image" style="font-size:1.4rem;"></i><span>Foto menyusul</span>';
            echo '</div>';
        }
        echo '<figcaption>' . $cap . '</figcaption>';
        echo '</figure>';
    }
}
?>
<button type="button" class="back-to-projects" data-target="proyek">
    <i class="bi bi-arrow-left"></i> Kembali ke Proyek
</button>

<div class="project-detail-header">
    <div class="project-icon"><i class="bi bi-wifi"></i></div>
    <div>
        <span class="project-tag">IT Support &middot; Jaringan Komputer</span>
        <h2 class="project-detail-title">Perluasan Wi-Fi Biznet ke 3 Lantai dengan Mode Access Point</h2>
    </div>
</div>

<p class="section-text">
    Wi-Fi Biznet hanya terpasang di lantai 1, sehingga <strong>lantai 2 dan lantai 3
    tidak mendapat sinyal</strong>. Untuk mengatasinya, saya membeli router tambahan,
    menghubungkannya ke router Biznet, lalu mengatur router tambahan itu ke
    <strong>mode Access Point</strong>. Langkah yang sama saya lakukan juga di lantai 3.
</p>

<figure class="before-after-item" style="max-width: 520px; margin: 1rem 0 1.5rem;">
    <button type="button" class="cert-thumb-btn before-after-img" data-cert-img="assets/img/projects/wifi-ap-3-lantai/topologi.svg" data-cert-title="Topologi jaringan 3 lantai">
        <img src="assets/img/projects/wifi-ap-3-lantai/topologi.svg" alt="Topologi jaringan: router Biznet di lantai 1, router tambahan mode Access Point di lantai 2 dan 3">
    </button>
    <figcaption>Topologi: router Biznet di lantai 1 sebagai gateway utama, router tambahan di lantai 2 dan 3 berjalan sebagai Access Point.</figcaption>
</figure>

<h6 class="detail-heading"><i class="bi bi-diagram-3"></i> Kenapa Mode Access Point?</h6>
<ul class="detail-list">
    <li>Router Biznet di lantai 1 tetap menjadi gateway utama: terhubung ke internet dan membagikan alamat IP ke seluruh perangkat.</li>
    <li>Router tambahan hanya memancarkan sinyal Wi-Fi dan meneruskan lalu lintas ke router utama, tanpa membuat jaringan terpisah (tidak terjadi double NAT).</li>
    <li>Perangkat di lantai 2 dan 3 tetap berada di jaringan yang sama dengan lantai 1, sehingga berbagi file atau printer antar lantai lebih mudah.</li>
</ul>

<h6 class="detail-heading"><i class="bi bi-list-check"></i> Yang Saya Kerjakan</h6>

<div class="task-block">
    <div class="task-block-header">
        <span class="task-block-num">1</span>
        <h6>Lantai 1: Router Biznet sebagai Gateway Utama</h6>
    </div>
    <p class="section-text">
        Router Biznet di lantai 1 (Huawei EG8145V5) menjadi gateway utama yang terhubung ke internet dan membagikan alamat IP. Di halaman <em>User Device Information</em>-nya, dua router tambahan, TL-WR940N (192.168.18.210) dan TL-WR840N (192.168.18.232), terdaftar berstatus <strong>Online</strong> di jaringan yang sama. Test speed di lantai 1: download 94,02 Mbps, upload 93,32 Mbps.
    </p>
    <div class="task-block-photos">
        <?php proj_photo('wifi-ap-3-lantai', '01-router-lantai1', 'Router Biznet di lantai 1'); ?>
        <?php proj_photo('wifi-ap-3-lantai', '02-setting-lantai1', 'Daftar perangkat di router Biznet (Huawei EG8145V5)'); ?>
        <?php proj_photo('wifi-ap-3-lantai', '03-test-speed-lantai1', 'Test speed lantai 1: 94,02 / 93,32 Mbps'); ?>
    </div>
</div>

<div class="task-block">
    <div class="task-block-header">
        <span class="task-block-num">2</span>
        <h6>Lantai 2: Router Tambahan Mode Access Point</h6>
    </div>
    <p class="section-text">
        Memasang router <strong>TP-Link TL-WR940N</strong> di lantai 2, menghubungkannya ke router Biznet, lalu mengaturnya ke <strong>Working Mode: Access Point</strong> dengan nama Wi-Fi &quot;Botnet Lantai 2&quot;, IP 192.168.18.210, satu subnet dengan router utama. Test speed di lantai 2: download 93,99 Mbps, upload 95,58 Mbps.
    </p>
    <div class="task-block-photos">
        <?php proj_photo('wifi-ap-3-lantai', '04-router-lantai2', 'Router TP-Link TL-WR940N di lantai 2'); ?>
        <?php proj_photo('wifi-ap-3-lantai', '05-setting-lantai2', 'Status router lantai 2: mode Access Point'); ?>
        <?php proj_photo('wifi-ap-3-lantai', '06-test-speed-lantai2', 'Test speed lantai 2: 93,99 / 95,58 Mbps'); ?>
    </div>
</div>

<div class="task-block">
    <div class="task-block-header">
        <span class="task-block-num">3</span>
        <h6>Lantai 3: Router Tambahan Mode Access Point</h6>
    </div>
    <p class="section-text">
        Mengulangi langkah yang sama di lantai 3 dengan router <strong>TP-Link TL-WR840N</strong>: mode <strong>Access Point</strong>, nama Wi-Fi &quot;Botnet Lantai 3&quot;, IP 192.168.18.232. Test speed di lantai 3: download 13,53 Mbps, upload 0,32 Mbps.
    </p>
    <div class="task-block-photos">
        <?php proj_photo('wifi-ap-3-lantai', '07-router-lantai3', 'Router TP-Link TL-WR840N di lantai 3'); ?>
        <?php proj_photo('wifi-ap-3-lantai', '08-setting-lantai3', 'Status router lantai 3: mode Access Point'); ?>
        <?php proj_photo('wifi-ap-3-lantai', '09-test-speed-lantai3', 'Test speed lantai 3: 13,53 / 0,32 Mbps'); ?>
    </div>
</div>
