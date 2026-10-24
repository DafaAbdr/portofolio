<?php
/**
 * Portfolio - Dafa Abdurrohman
 * PHP Native + Bootstrap
 */
require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/project_groups.php';

$nama    = "Dafa Abdurrohman";
$jabatan = "IT Support";
$email   = "dafa.abdurrohman@gmail.com";
$telepon = "0813 1522 0018";
$status  = "Open to Work";
$posisi  = "Jakarta, Indonesia";
$universitas = "Universitas Indraprasta PGRI";

// Link sosial media
$linkedin  = "https://www.linkedin.com/in/dafa-abdurrohman-976461323/";
$instagram = "https://www.instagram.com/dafaabdr/";
$github    = "https://github.com/DafaAbdr";

// Format nomor telepon jadi link WhatsApp (62xxxxxxxxxx)
$telepon_digit = preg_replace('/\D/', '', $telepon);      // hanya angka
if (substr($telepon_digit, 0, 1) === '0') {
    $telepon_digit = '62' . substr($telepon_digit, 1);    // 0813... -> 62813...
}
$whatsapp_link = "https://wa.me/" . $telepon_digit;
?>
<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portofolio <?php echo $nama; ?></title>

<!-- Favicon pakai foto profil (versi square biar tidak gepeng di tab browser) -->
<link rel="icon" type="image/webp" href="assets/img/favicon.webp">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<!-- Custom CSS -->
<!-- ?v=filemtime(...) otomatis berubah tiap file CSS diupdate, supaya browser
     selalu ambil versi terbaru dan tidak nyangkut di versi lama (cache). -->
<link rel="stylesheet" href="assets/css/style.css?v=<?php echo @filemtime(__DIR__ . '/assets/css/style.css'); ?>">
</head>
<body>

<div class="app-wrapper d-flex">

    <?php include 'includes/sidebar.php'; ?>

    <main class="content-panel">

        <nav class="content-nav d-flex align-items-center justify-content-between">
            <ul class="nav nav-pills nav-tabs-custom">
                <li class="nav-item">
                    <button class="nav-link active" data-target="tentang">Tentang Saya</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-target="pendidikan">Pendidikan</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-target="pengalaman">Pengalaman</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-target="proyek">Proyek</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-target="sertifikat">Sertifikat</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-target="blog">Blog</button>
                </li>
            </ul>

            <button id="themeToggle" class="theme-toggle-btn" title="Ganti tema">
                <i class="bi bi-sun-fill" id="themeIcon"></i>
            </button>
        </nav>

        <div class="content-scroll">
            <section id="tentang" class="tab-section active">
                <?php include 'includes/sections/tentang.php'; ?>
            </section>

            <section id="pendidikan" class="tab-section">
                <?php include 'includes/sections/pendidikan.php'; ?>
            </section>

            <section id="pengalaman" class="tab-section">
                <?php include 'includes/sections/pengalaman.php'; ?>
            </section>

            <section id="proyek" class="tab-section">
                <?php include 'includes/sections/proyek.php'; ?>
            </section>

            <section id="sertifikat" class="tab-section">
                <?php include 'includes/sections/sertifikat.php'; ?>
            </section>

            <section id="blog" class="tab-section">
                <?php include 'includes/sections/blog.php'; ?>
            </section>

            <?php
            /* Halaman detail tiap proyek, otomatis didaftarkan dari folder
               includes/projects/<nama-proyek>/detail.php - jadi menambah
               proyek baru tidak perlu edit bagian ini.
               data-nav-parent="proyek" membuat menu "Proyek" di atas tetap
               ter-highlight selama halaman detail proyek ini aktif. */
            $projectDirs = glob(__DIR__ . '/includes/projects/*', GLOB_ONLYDIR);
            sort($projectDirs);
            foreach ($projectDirs as $dir):
                $slug = basename($dir);
                $detailFile = $dir . '/detail.php';
                if (file_exists($detailFile)):
            ?>
            <section id="proyek-<?php echo htmlspecialchars($slug); ?>" class="tab-section project-detail-section" data-nav-parent="proyek">
                <?php render_project_detail($slug, $detailFile); ?>
            </section>
            <?php
                endif;
            endforeach;
            ?>

            <?php
            /* Halaman tiap grup proyek (lihat includes/project_groups.php).
               Menampilkan kartu proyek-proyek di dalam grup itu. */
            foreach (project_groups() as $pgKey => $pg):
            ?>
            <section id="proyek-group-<?php echo htmlspecialchars($pgKey); ?>" class="tab-section project-detail-section" data-nav-parent="proyek">
                <?php include __DIR__ . '/includes/sections/proyek_group.php'; ?>
            </section>
            <?php endforeach; ?>

            <?php
            /* Sama seperti proyek: tiap artikel blog otomatis didaftarkan dari
               folder includes/blog_posts/<nama-artikel>/detail.php. */
            $blogDirs = glob(__DIR__ . '/includes/blog_posts/*', GLOB_ONLYDIR);
            sort($blogDirs);
            foreach ($blogDirs as $dir):
                $slug = basename($dir);
                $detailFile = $dir . '/detail.php';
                if (file_exists($detailFile)):
            ?>
            <section id="blog-<?php echo htmlspecialchars($slug); ?>" class="tab-section project-detail-section" data-nav-parent="blog">
                <?php include $detailFile; ?>
            </section>
            <?php
                endif;
            endforeach;
            ?>
        </div>

    </main>

</div>

<!-- Lightbox overlay untuk melihat foto (sertifikat & dokumentasi proyek) secara penuh.
     Sengaja ditaruh di sini, di luar semua .tab-section, supaya tetap bisa
     muncul dari tab/halaman manapun - bukan cuma saat tab Sertifikat aktif. -->
<div id="certOverlay" class="cert-overlay">
    <div class="cert-overlay-inner">
        <img id="certOverlayImg" src="" alt="Foto">
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js?v=<?php echo @filemtime(__DIR__ . '/assets/js/main.js'); ?>"></script>
</body>
</html>
