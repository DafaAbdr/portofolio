document.addEventListener("DOMContentLoaded", function () {
    const htmlEl         = document.documentElement;
    const themeBtn        = document.getElementById("themeToggle");
    const themeIcon       = document.getElementById("themeIcon");
    const contentScroll   = document.querySelector(".content-scroll");

    /* ---------- Tab / page switching ----------
       One shared function handles the top nav, project cards, and the
       "Kembali ke Proyek" back link - anything with a [data-target]
       attribute. Using delegation (not a per-element forEach binding) means
       it keeps working for elements added later, like new project cards. */
    const LAST_TAB_KEY = "portfolio-last-tab";

    function switchTab(targetId, opts) {
        const targetSection = document.getElementById(targetId);
        if (!targetSection) return;

        document.querySelectorAll(".tab-section").forEach(function (s) {
            s.classList.remove("active");
        });
        targetSection.classList.add("active");

        // Highlight the matching top-nav item. A page that isn't itself a
        // nav item (e.g. a project detail page) declares which nav item
        // should stay highlighted via data-nav-parent on the section.
        const navKey = targetSection.getAttribute("data-nav-parent") || targetId;
        document.querySelectorAll(".nav-tabs-custom .nav-link").forEach(function (l) {
            l.classList.toggle("active", l.getAttribute("data-target") === navKey);
        });

        // Remember this as the last visited section, so a page refresh
        // reopens it instead of always landing back on "Tentang Saya".
        // Restoring on load (below) passes restoring:true to skip re-saving
        // the very value we just read.
        if (!opts || !opts.restoring) {
            try {
                localStorage.setItem(LAST_TAB_KEY, targetId);
            } catch (e) {
                /* localStorage unavailable, ignore */
            }
        }

        if (contentScroll) {
            contentScroll.scrollTop = 0;
        }
    }

    document.addEventListener("click", function (e) {
        const trigger = e.target.closest("[data-target]");
        if (trigger) {
            switchTab(trigger.getAttribute("data-target"));
        }
    });

    // On load, reopen whichever section was last active instead of always
    // defaulting to "Tentang Saya" (which is only active here because the
    // PHP markup marks it active by default before any of this runs).
    (function restoreLastTab() {
        let savedTab = null;
        try {
            savedTab = localStorage.getItem(LAST_TAB_KEY);
        } catch (e) {
            savedTab = null;
        }
        if (savedTab && document.getElementById(savedTab)) {
            switchTab(savedTab, { restoring: true });
        }
    })();

    // Keyboard accessibility: Enter/Space activates a [data-target] element
    // that isn't a native button (e.g. the clickable project card).
    document.addEventListener("keydown", function (e) {
        if (e.key !== "Enter" && e.key !== " ") return;
        const trigger = e.target.closest("[data-target]");
        if (trigger && trigger.getAttribute("role") === "button") {
            e.preventDefault();
            switchTab(trigger.getAttribute("data-target"));
        }
    });

    /* ---------- Dark / Light theme toggle ---------- */
    function applyTheme(theme) {
        htmlEl.setAttribute("data-theme", theme);
        if (theme === "light") {
            themeIcon.classList.remove("bi-sun-fill");
            themeIcon.classList.add("bi-moon-stars-fill");
        } else {
            themeIcon.classList.remove("bi-moon-stars-fill");
            themeIcon.classList.add("bi-sun-fill");
        }
        try {
            localStorage.setItem("portfolio-theme", theme);
        } catch (e) {
            /* localStorage unavailable, ignore */
        }
    }

    let savedTheme = "dark";
    try {
        savedTheme = localStorage.getItem("portfolio-theme") || "dark";
    } catch (e) {
        savedTheme = "dark";
    }
    applyTheme(savedTheme);

    themeBtn.addEventListener("click", function () {
        const current = htmlEl.getAttribute("data-theme");
        applyTheme(current === "dark" ? "light" : "dark");

        /* subtle pop animation on the icon, retriggerable */
        themeIcon.classList.remove("icon-pop");
        void themeIcon.offsetWidth; /* force reflow so the animation can replay */
        themeIcon.classList.add("icon-pop");
    });

    /* ---------- Certificate / photo lightbox ---------- */
    const certOverlay    = document.getElementById("certOverlay");
    const certOverlayImg = document.getElementById("certOverlayImg");

    function openCertOverlay(imgSrc, imgAlt) {
        if (!certOverlay || !certOverlayImg) return;
        certOverlayImg.src = imgSrc;
        certOverlayImg.alt = imgAlt || "Foto";
        certOverlay.classList.add("active");
        document.body.style.overflow = "hidden";
    }

    function closeCertOverlay() {
        if (!certOverlay) return;
        certOverlay.classList.remove("active");
        document.body.style.overflow = "";
    }

    /* Event delegation so this also works for thumbnails added inside any
       project detail page (gallery-grid-thumb shares the same trigger
       class as the certificate thumbnails). */
    document.addEventListener("click", function (e) {
        const btn = e.target.closest(".cert-thumb-btn");
        if (btn) {
            openCertOverlay(btn.getAttribute("data-cert-img"), btn.getAttribute("data-cert-title"));
        }
    });

    if (certOverlay) {
        certOverlay.addEventListener("click", closeCertOverlay);
    }

    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") closeCertOverlay();
    });

    /* ---------- Inline YouTube video demo ----------
       Starts as just a thumbnail image (no YouTube script/iframe loaded at
       all), and only turns into a real embedded player once clicked - so it
       plays right here on the page without ever needing to store a video
       file on this server. */
    document.addEventListener("click", function (e) {
        const trigger = e.target.closest(".video-preview-trigger");
        if (!trigger) return;

        const wrapper = trigger.closest(".video-embed-wrapper");
        if (!wrapper) return;

        const videoId = wrapper.getAttribute("data-video-id");
        if (!videoId) return;

        const iframe = document.createElement("iframe");
        iframe.src = "https://www.youtube-nocookie.com/embed/" + encodeURIComponent(videoId) + "?autoplay=1&rel=0";
        iframe.title = "Video demo";
        iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share";
        iframe.allowFullscreen = true;

        wrapper.innerHTML = "";
        wrapper.appendChild(iframe);
    });
});
