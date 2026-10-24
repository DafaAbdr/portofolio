<div class="about-hero">
    <div class="about-hero-text">
    <span class="about-greeting">
        Hai, saya <?php echo htmlspecialchars($nama); ?>
    </span>

    <h2 class="about-title">
        <?php echo htmlspecialchars($jabatan); ?>
    </h2>

    <p class="section-text">
        Saya seorang <?php echo htmlspecialchars($jabatan); ?> yang senang menyelami sisi teknis
        teknologi informasi, mulai dari menangani troubleshooting, merawat perangkat keras,
        menginstal dan mengonfigurasi software, hingga menjaga jaringan tetap berjalan dengan stabil.
        Bagi saya, setiap masalah pasti memiliki solusi, dan setiap tantangan teknis
        adalah kesempatan untuk belajar serta menemukan cara terbaik untuk menyelesaikannya.
    </p>

    <p class="section-text">
        Rasa ingin tahu terhadap teknologi mendorong saya untuk terus memperluas kemampuan di berbagai bidang IT, 
        mulai dari jaringan, hardware, software, sistem operasi, hingga pengembangan dan implementasi sistem berbasis
        teknologi. Saya juga memiliki pengalaman mengembangkan berbagai solusi digital seperti aplikasi web, sistem
        pendukung keputusan, dan sistem berbasis AI. Di sisi lain, saya memiliki ketertarikan pada desain grafis dan
        live streaming yang turut memperluas kemampuan saya dalam mendukung kebutuhan teknis dan digital.
    </p>

    <p class="section-text">
        Saya memilih
        <strong><?php echo htmlspecialchars($universitas); ?></strong>
        sebagai tempat untuk mengembangkan pengetahuan dan kemampuan di bidang teknologi informasi,
        sekaligus terus belajar, bereksplorasi, dan mengembangkan keterampilan baru di luar bangku kuliah.
    </p>
</div>

    <div class="about-hero-photo">
        <span class="deco deco-dash" aria-hidden="true">
            <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                <line x1="0" y1="35" x2="20" y2="5" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                <line x1="20" y1="35" x2="40" y2="5" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
            </svg>
        </span>

        <span class="deco deco-circle" aria-hidden="true"></span>

        <span class="deco deco-triangle" aria-hidden="true">
            <svg viewBox="0 0 90 80" xmlns="http://www.w3.org/2000/svg">
                <polygon points="45,5 85,75 5,75" fill="none" stroke="currentColor" stroke-width="4"/>
            </svg>
        </span>

        <div class="about-photo-frame">
            <img src="assets/img/about.webp" alt="Foto <?php echo htmlspecialchars($nama); ?>" class="img-fluid">
        </div>
    </div>
</div>

<div class="about-highlights">
    <div class="highlight-card">
        <div class="highlight-icon"><i class="bi bi-cpu"></i></div>
        <h6>Perbaikan &amp; Perawatan</h6>
        <p>Menangani troubleshooting hardware, instalasi, dan perawatan perangkat komputer sehari-hari.</p>
    </div>
    <div class="highlight-card">
        <div class="highlight-icon"><i class="bi bi-hdd-network"></i></div>
        <h6>Jaringan Komputer</h6>
        <p>Konfigurasi dan menjaga stabilitas sistem jaringan agar tetap terhubung tanpa gangguan.</p>
    </div>
    <div class="highlight-card">
        <div class="highlight-icon"><i class="bi bi-code-slash"></i></div>
        <h6>Tech Explorer</h6>
        <p>Senang mengeksplorasi teknologi dan mempelajari sistem komputer.</p>
    </div>
    <div class="highlight-card">
        <div class="highlight-icon"><i class="bi bi-lightbulb"></i></div>
        <h6>Problem Solving</h6>
        <p>Senang menganggap setiap kendala teknis sebagai teka-teki yang menyenangkan untuk dipecahkan.</p>
    </div>
</div>

<div class="about-quote">
    <i class="bi bi-quote"></i>
    <p>"Setiap masalah memiliki solusi, dan setiap tantangan adalah kesempatan untuk menemukannya."</p>
</div>
