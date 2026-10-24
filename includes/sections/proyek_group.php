<?php
/* Halaman satu grup proyek. Dipanggil dari index.php dengan $pgKey (nama grup)
   dan $pg (isi grup dari project_groups()). */
?>
<button type="button" class="back-to-projects" data-target="proyek">
    <i class="bi bi-arrow-left"></i> Kembali ke Proyek
</button>

<div class="project-detail-header">
    <div class="project-icon"><i class="bi <?php echo htmlspecialchars($pg['icon']); ?>"></i></div>
    <div>
        <span class="project-tag"><?php echo htmlspecialchars($pg['tag']); ?></span>
        <h2 class="project-detail-title"><?php echo htmlspecialchars($pg['title']); ?></h2>
    </div>
</div>

<p class="section-text"><?php echo htmlspecialchars($pg['description']); ?></p>

<div class="row g-4">
<?php
foreach ($pg['projects'] as $slug) {
    $cardFile = __DIR__ . '/../projects/' . $slug . '/card.php';
    if (is_file($cardFile)) {
        include $cardFile;
    }
}
?>
</div>
