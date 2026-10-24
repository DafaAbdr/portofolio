<h3 class="section-title">Proyek</h3>

<div class="row g-4">
<?php
/* Setiap proyek punya folder sendiri di includes/projects/<nama-proyek>/
   berisi card.php (kartu ringkas di sini) dan detail.php (halaman penuhnya).
   Menambah proyek baru nanti tinggal bikin folder baru - otomatis muncul di sini.

   Proyek yang dimasukkan ke sebuah grup (lihat includes/project_groups.php)
   tidak ditampilkan langsung; yang muncul satu kartu grup, dan isinya baru
   terlihat setelah kartu grup itu diklik. Kartu grup ditaruh setelah proyek lain. */
$groups  = project_groups();
$grouped = array();
foreach ($groups as $g) {
    foreach ($g['projects'] as $memberSlug) {
        $grouped[$memberSlug] = true;
    }
}

$projectDirs = glob(__DIR__ . '/../projects/*', GLOB_ONLYDIR);
sort($projectDirs);
foreach ($projectDirs as $dir) {
    if (isset($grouped[basename($dir)])) {
        continue;
    }
    $cardFile = $dir . '/card.php';
    if (file_exists($cardFile)) {
        include $cardFile;
    }
}

foreach ($groups as $gKey => $g):
    $count = project_group_count($g);
    if ($count === 0) {
        continue;
    }
?>
    <div class="col-md-6">
        <div class="project-card project-card-clickable project-card-compact" data-target="proyek-group-<?php echo htmlspecialchars($gKey); ?>" role="button" tabindex="0">
            <div class="project-icon"><i class="bi <?php echo htmlspecialchars($g['icon']); ?>"></i></div>
            <div class="compact-text">
                <h5><?php echo htmlspecialchars($g['title']); ?></h5>
                <span class="project-tag"><?php echo htmlspecialchars($g['tag']); ?> &middot; <?php echo $count; ?> Proyek</span>
            </div>
            <i class="bi bi-chevron-right compact-chevron"></i>
        </div>
    </div>
<?php endforeach; ?>
</div>
