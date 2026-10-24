<aside class="profile-card">
    <div class="profile-card-inner text-center">

        <div class="profile-top">
            <div class="profile-photo mx-auto">
                <img src="assets/img/profile.webp" alt="Foto Profil" class="img-fluid">
            </div>

            <h2 class="profile-name"><?php echo htmlspecialchars($nama); ?></h2>

            <span class="badge-job d-inline-block"><?php echo htmlspecialchars($jabatan); ?></span>

            <p class="profile-tagline">
                Fresh graduate IT Support &amp; jaringan, berpengalaman dalam troubleshooting, instalasi, dan pemeliharaan perangkat IT.
            </p>
        </div>

        <ul class="profile-info list-unstyled text-start">
            <li class="d-flex align-items-start">
                <span class="info-icon"><i class="bi bi-envelope"></i></span>
                <span>
                    <strong>Email</strong>
                    <a href="mailto:<?php echo htmlspecialchars($email); ?>" class="d-block info-value info-link"><?php echo htmlspecialchars($email); ?></a>
                </span>
            </li>
            <li class="d-flex align-items-start">
                <span class="info-icon"><i class="bi bi-telephone"></i></span>
                <span>
                    <strong>No Telepon</strong>
                    <a href="<?php echo htmlspecialchars($whatsapp_link); ?>" target="_blank" rel="noopener" class="d-block info-value info-link"><?php echo htmlspecialchars($telepon); ?></a>
                </span>
            </li>
            <li class="d-flex align-items-start">
                <span class="info-icon"><i class="bi bi-briefcase"></i></span>
                <span>
                    <strong>Job Status</strong>
                    <span class="d-block info-value status-value"><?php echo htmlspecialchars($status); ?></span>
                </span>
            </li>
            <li class="d-flex align-items-start">
                <span class="info-icon"><i class="bi bi-geo-alt"></i></span>
                <span>
                    <strong>Posisi</strong>
                    <span class="d-block info-value"><?php echo htmlspecialchars($posisi); ?></span>
                </span>
            </li>
        </ul>

        <div class="profile-skills">
            <span class="profile-skills-label">Keahlian</span>
            <div class="skill-chips">
                <span class="skill-chip">Hardware &amp; Software Troubleshooting</span>
                <span class="skill-chip">Networking (LAN &amp; Wi-Fi)</span>
                <span class="skill-chip">Manajemen Aset IT</span>
                <span class="skill-chip">Instalasi &amp; Konfigurasi</span>
                <span class="skill-chip">CCTV &amp; Printer</span>
            </div>
        </div>

        <div class="profile-bottom">
            <div class="social-icons d-flex justify-content-center gap-2">
                <a href="<?php echo htmlspecialchars($linkedin); ?>" target="_blank" rel="noopener" class="social-btn" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="<?php echo htmlspecialchars($instagram); ?>" target="_blank" rel="noopener" class="social-btn" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="<?php echo htmlspecialchars($github); ?>" target="_blank" rel="noopener" class="social-btn" title="GitHub"><i class="bi bi-github"></i></a>
            </div>
            <span class="profile-footer-text">&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($nama); ?></span>
        </div>

    </div>
</aside>
