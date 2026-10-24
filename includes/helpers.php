<?php
/**
 * Render a documentation photo gallery for a project by scanning its own
 * folder under assets/img/projects/<slug>/ directly - no hardcoded file
 * list or extension. Supports .webp (preferred - smallest file size),
 * .jpg/.jpeg, .png, and .svg (used for placeholders).
 *
 * This means swapping a placeholder photo for a real one - in any of these
 * formats, WebP included - just works by replacing the file; no PHP needs
 * to be touched.
 */
function render_project_gallery($slug) {
    $dir     = __DIR__ . '/../assets/img/projects/' . $slug;
    $webPath = 'assets/img/projects/' . $slug;
    $allowedExt = ['webp', 'jpg', 'jpeg', 'png', 'svg'];

    if (!is_dir($dir)) {
        return;
    }

    $files = [];
    foreach (glob($dir . '/*') as $path) {
        $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
        if (in_array($ext, $allowedExt, true)) {
            $files[] = basename($path);
        }
    }

    if (empty($files)) {
        return;
    }

    natsort($files); // so foto-2.webp sorts before foto-10.webp

    echo '<div class="project-gallery-grid">';
    $i = 1;
    foreach ($files as $file) {
        $src   = $webPath . '/' . rawurlencode($file);
        $label = 'Dokumentasi ' . $i;
        echo '<button type="button" class="cert-thumb-btn gallery-grid-thumb" data-cert-img="' . htmlspecialchars($src) . '" data-cert-title="' . htmlspecialchars($label) . '">';
        echo '<img src="' . htmlspecialchars($src) . '" alt="' . htmlspecialchars($label) . '" class="gallery-grid-img">';
        echo '<span class="cert-thumb-zoom"><i class="bi bi-zoom-in"></i></span>';
        echo '</button>';
        $i++;
    }
    echo '</div>';
}
