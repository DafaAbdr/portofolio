<h3 class="section-title">Blog</h3>

<div class="blog-search">
    <i class="bi bi-search blog-search-icon"></i>
    <input type="text" id="blogSearchInput" class="blog-search-input" placeholder="Cari artikel..." autocomplete="off" aria-label="Cari artikel blog">
    <button type="button" id="blogSearchClear" class="blog-search-clear d-none" aria-label="Hapus pencarian"><i class="bi bi-x-lg"></i></button>
</div>
<p class="blog-search-status" id="blogSearchStatus" aria-live="polite"></p>

<div class="row g-4" id="blogList">
<?php
/* Sama seperti Proyek: tiap artikel punya folder sendiri di
   includes/blog_posts/<nama-artikel>/ berisi card.php (kartu ringkas di
   sini) dan detail.php (halaman artikel penuhnya). Menambah artikel baru
   nanti tinggal bikin folder baru - otomatis muncul di sini, dan otomatis
   ikut bisa dicari lewat kotak pencarian di atas. */
$blogDirs = glob(__DIR__ . '/../blog_posts/*', GLOB_ONLYDIR);
sort($blogDirs);
foreach ($blogDirs as $dir) {
    $cardFile = $dir . '/card.php';
    if (file_exists($cardFile)) {
        include $cardFile;
    }
}
?>
</div>

<p class="blog-search-empty d-none" id="blogSearchEmpty"></p>

<script>
/* Pencarian artikel. Yang dicari: teks kartu + isi lengkap halaman artikelnya
   (diambil dari section tujuan kartu itu), jadi kata yang cuma ada di dalam
   artikel pun ketemu. Semua kata yang diketik harus cocok (urutan bebas).
   Daftar artikel dibaca sekali saat pertama mengetik, jadi artikel baru
   otomatis ikut tanpa pengaturan tambahan. */
(function () {
    var input  = document.getElementById('blogSearchInput');
    var clear  = document.getElementById('blogSearchClear');
    var status = document.getElementById('blogSearchStatus');
    var empty  = document.getElementById('blogSearchEmpty');
    var list   = document.getElementById('blogList');
    if (!input || !list) { return; }

    var items = null;

    function normalize(s) {
        return String(s).toLowerCase().replace(/\s+/g, ' ');
    }

    function buildIndex() {
        items = [];
        Array.prototype.forEach.call(list.children, function (col) {
            var text = col.textContent;
            var trigger = col.querySelector('[data-target]');
            if (trigger) {
                var detail = document.getElementById(trigger.getAttribute('data-target'));
                if (detail) { text += ' ' + detail.textContent; }
            }
            items.push({ el: col, haystack: normalize(text) });
        });
    }

    function run() {
        if (items === null) { buildIndex(); }

        var raw   = input.value;
        var terms = normalize(raw).trim().split(' ').filter(Boolean);
        var shown = 0;

        items.forEach(function (item) {
            var match = terms.every(function (t) { return item.haystack.indexOf(t) !== -1; });
            item.el.classList.toggle('d-none', !match);
            if (match) { shown++; }
        });

        clear.classList.toggle('d-none', raw === '');

        if (terms.length === 0) {
            status.textContent = '';
            empty.classList.add('d-none');
            return;
        }

        status.textContent = 'Menampilkan ' + shown + ' dari ' + items.length + ' artikel';
        if (shown === 0) {
            empty.textContent = 'Tidak ada artikel yang cocok dengan "' + raw.trim() + '".';
            empty.classList.remove('d-none');
        } else {
            empty.classList.add('d-none');
        }
    }

    input.addEventListener('input', run);

    clear.addEventListener('click', function () {
        input.value = '';
        run();
        input.focus();
    });

    input.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && input.value !== '') {
            input.value = '';
            run();
        }
    });
})();
</script>
