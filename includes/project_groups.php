<?php
/**
 * Pengelompokan proyek.
 *
 * Proyek yang tercantum di 'projects' sebuah grup TIDAK ditampilkan langsung di
 * halaman Proyek. Sebagai gantinya muncul satu kartu grup; kartu-kartu proyek di
 * dalamnya baru terlihat setelah kartu grup itu diklik (halaman tersendiri).
 *
 * Untuk menambah grup baru atau memindahkan proyek ke grup: cukup edit daftar
 * di project_groups() di bawah ini. Isi 'projects' dengan nama FOLDER proyek
 * (yang ada di includes/projects/). Urutan di daftar = urutan tampil.
 */
function project_groups() {
    return array(
        'website-spk' => array(
            'title'       => 'Website dan SPK',
            'tag'         => 'Pengembangan Aplikasi',
            'icon'        => 'bi-code-square',
            'description' => 'Proyek pengembangan aplikasi berupa Sistem Pendukung Keputusan (SPK) '
                           . 'dengan metode SAW, AHP, dan CART, dibangun dengan PHP native + MySQL '
                           . 'maupun Java desktop.',
            'projects'    => array(
                'iphone-ranking-saw',
                'spk-kis-cart',
                'spk-restock-saw',
                'spk-zakat-ahp',
            ),
        ),
    );
}

/** Nama grup (key) tempat sebuah proyek berada, atau null kalau tidak digrup. */
function project_group_of($slug) {
    foreach (project_groups() as $key => $group) {
        if (in_array($slug, $group['projects'], true)) {
            return $key;
        }
    }
    return null;
}

/** Jumlah proyek di sebuah grup yang foldernya benar-benar ada. */
function project_group_count($group) {
    $count = 0;
    foreach ($group['projects'] as $slug) {
        if (is_file(__DIR__ . '/projects/' . $slug . '/card.php')) {
            $count++;
        }
    }
    return $count;
}

/**
 * Menampilkan halaman detail sebuah proyek.
 * Kalau proyek ini ada di dalam grup, tombol "Kembali ke Proyek" di halamannya
 * diarahkan ke halaman grup (bukan ke daftar utama) dan labelnya disesuaikan,
 * jadi file detail.php tiap proyek tidak perlu diubah.
 */
function render_project_detail($slug, $detailFile) {
    $groupKey = project_group_of($slug);

    if ($groupKey === null) {
        include $detailFile;
        return;
    }

    $groups = project_groups();
    $title  = $groups[$groupKey]['title'];

    ob_start();
    include $detailFile;
    $html = ob_get_clean();

    $html = preg_replace(
        '~(<button\b[^>]*\bclass="back-to-projects"[^>]*\bdata-target=")proyek(")~',
        '${1}proyek-group-' . $groupKey . '${2}',
        $html,
        1
    );
    $label = 'Kembali ke ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    $html  = preg_replace_callback(
        '~Kembali ke Proyek~',
        function () use ($label) { return $label; }, // callback: judul grup apa pun aman (tanpa tafsir $1 / backslash)
        $html,
        1
    );

    echo $html;
}
