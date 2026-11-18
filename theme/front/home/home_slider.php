<section class="hero-section">
    <!-- =====================================================
         HERO BACKGROUND SLIDES
         ===================================================== -->
    <div class="hero-slides">
        <!-- SLIDE 1 -->
        <div
            class="hero-slide active"
            style="background-image: url('https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789452629-15-09-2026-D9j1QVBGOyPr60liRncLx5At4WUSpvws.webp');">
        </div>
        <!-- SLIDE 2 -->
        <div
            class="hero-slide"
            style="background-image: url('https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789452629-15-09-2026-QDTAnePrlfOW04aIFyw95Uu8pqVCEtGK.webp');">
        </div>
        <!-- SLIDE 3 -->
        <div
            class="hero-slide"
            style="background-image: url('https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789452628-15-09-2026-qfIAH0W3LnrhC67OF4Nv8dykUSJzP1jm.webp');">
        </div>
        <!-- SLIDE 4 -->
        <div
            class="hero-slide"
            style="background-image: url('https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789452627-15-09-2026-pEcGDVJaUdZ1y8mgAF9RhuOtfqr6TxC0.webp');">
        </div>
    </div>
    <!-- =====================================================
         DARK OVERLAY
         ===================================================== -->
    <div class="hero-overlay"></div>
    <!-- =====================================================
         TOP SHADOW
         ===================================================== -->
    <div class="hero-top-shadow"></div>
    <!-- =====================================================
         HERO CONTENT
         ===================================================== -->
    <div class="hero-container">
        <div class="hero-content">
            <!-- <span class="hero-eyebrow">
                <?= e($data->web->site_name); ?>
            </span> -->
            <h1 class="hero-title">
                Built for Consistency,
                Flexibility,
                and Scalability
            </h1>
            <p class="hero-description">
                We combine traditional craftsmanship with structured
                production systems — to deliver reliable and scalable
                results for global buyers.
            </p>
            <a href="<?= base_url() ?>category/all" class="hero-button">
                <span>Check Our Collection</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
    <!-- =====================================================
         SLIDER NAVIGATION
         ===================================================== -->
    <!-- <button
        type="button"
        class="hero-arrow hero-prev"
        aria-label="Previous slide">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    <button
        type="button"
        class="hero-arrow hero-next"
        aria-label="Next slide">
        <i class="fa-solid fa-chevron-right"></i>
    </button> -->
    <!-- =====================================================
         SLIDE INDICATOR
         ===================================================== -->
    <div class="hero-dots">
        <button
            type="button"
            class="hero-dot active"
            data-slide="0"
            aria-label="Slide 1">
        </button>
        <button
            type="button"
            class="hero-dot"
            data-slide="1"
            aria-label="Slide 2">
        </button>
        <button
            type="button"
            class="hero-dot"
            data-slide="2"
            aria-label="Slide 3">
        </button>
		
        <button
            type="button"
            class="hero-dot"
            data-slide="3"
            aria-label="Slide 4">
        </button>
    </div>
</section>
<style>
	/* ============================================================
   HERO SECTION
   ============================================================ */
.hero-section {
    position: relative;
    width: 100%;
    height: 100vh;
    min-height: 700px;
    overflow: hidden;
	font-family: var(--subtext);
    background: #222;
}
/* ============================================================
   HERO SLIDES
   ============================================================ */
.hero-slides {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}
.hero-slide {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 0;
    /*
        Sedikit zoom ketika slide aktif.
        Membuat pergantian terasa lebih cinematic.
    */
    transform: scale(1.04);
    transition:
        opacity 1.5s ease-in-out,
        transform 7s ease-out;
    z-index: 1;
}
.hero-slide.active {
    opacity: 1;
    transform: scale(1);
}
/* ============================================================
   OVERLAY
   ============================================================ */
.hero-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
    /*
        Gradient membuat text sebelah kiri
        lebih mudah dibaca.
    */
    background:
        linear-gradient(
            90deg,
            rgba(0, 0, 0, 0.48) 0%,
            rgba(0, 0, 0, 0.25) 35%,
            rgba(0, 0, 0, 0.05) 70%,
            rgba(0, 0, 0, 0.08) 100%
        );
}
/* ============================================================
   TOP SHADOW
   ============================================================ */
.hero-top-shadow {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 180px;
    z-index: 5;
    pointer-events: none;
    background:
        linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0.48) 0%,
            rgba(0, 0, 0, 0.25) 35%,
            rgba(0, 0, 0, 0) 100%
        );
}
/* ============================================================
   HERO CONTAINER
   ============================================================ */
.hero-container {
    position: relative;
    z-index: 4;
    width: 100%;
    height: 100%;
    max-width: 1350px;
    margin: 0 auto;
    padding:
        120px 50px
        100px 50px;
    display: flex;
    align-items: center;
}
/* ============================================================
   HERO CONTENT
   ============================================================ */
.hero-content {
    /*
        Membatasi content agar tidak
        terlalu lebar.
    */
    width: 100%;
    max-width: 720px;
    color: #ffffff;
}
/* ============================================================
   EYEBROW
   ============================================================ */
.hero-eyebrow {
    display: block;
    margin-bottom: 18px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.9);
}
/* ============================================================
   TITLE
   ============================================================ */
.hero-title {
    margin: 0;
    max-width: 700px;
    color: #ffffff;
    /*
        Gunakan font serif elegan.
        Jika website kamu sudah punya font heading,
        bagian ini bisa dihapus.
    */
    font-family: var(--primtext);
    font-size: clamp(
        55px,
        5.3vw,
        88px
    );
    font-weight: 500;
    line-height: 0.9;
    letter-spacing: -2.5px;
    text-wrap: balance;
}
/* ============================================================
   DESCRIPTION
   ============================================================ */
.hero-description {
    max-width: 650px;
    margin: 32px 0 25px;
    color: rgba(255, 255, 255, 0.95);
    font-size: 17px;
    line-height: 1.45;
    font-weight: 400;
}
/* ============================================================
   HERO BUTTON
   ============================================================ */
.hero-button {
    display: inline-flex;
    align-items: center;
    gap: 18px;
    min-height: 55px;
    padding: 0 23px;
    background: var(--colors);
    color: #ffffff;
    border: 1px solid var(--colors);
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    transition:
        background 0.3s ease,
        border-color 0.3s ease,
        transform 0.3s ease;
}
.hero-button i {
    font-size: 13px;
    transition:
        transform 0.3s ease;
}
.hero-button:hover {
    background: #ffffff;
    border-color: #ffffff;
    color: var(--colors);
    transform: translateY(-2px);
}
.hero-button:hover i {
    transform: translateX(4px);
}
/* ============================================================
   ARROWS
   ============================================================ */
.hero-arrow {
    position: absolute;
    top: 50%;
    z-index: 6;
    transform: translateY(-50%);
    width: 45px;
    height: 45px;
    padding: 0;
    border: 0;
    background: transparent;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    opacity: 0.85;
    transition:
        opacity 0.3s ease,
        transform 0.3s ease;
}
.hero-arrow:hover {
    opacity: 1;
}
.hero-arrow i {
    font-size: 14px;
}
.hero-prev {
    left: 25px;
}
.hero-next {
    right: 25px;
}
/* ============================================================
   DOTS
   ============================================================ */
.hero-dots {
    position: absolute;
    left: 8%;
    bottom: 45px;
    z-index: 6;
    display: flex;
    align-items: center;
    gap: 10px;
}
.hero-dot {
    width: 10px;
    height: 10px;
    padding: 0;
    border-radius: 50%;
    border: 1px solid #ffffff;
    background: transparent;
    opacity: 0.8;
    cursor: pointer;
    transition:
        background 0.3s ease,
        opacity 0.3s ease,
        transform 0.3s ease;
}
.hero-dot.active {
    background: #ffffff;
    opacity: 1;
    transform: scale(1.15);
}
/* ============================================================
   RESPONSIVE TABLET
   ============================================================ */
@media (max-width: 991px) {
    .hero-section {
        min-height: 650px;
    }
    .hero-container {
        padding-left: 40px;
        padding-right: 40px;
    }
    .hero-content {
        max-width: 650px;
    }
    .hero-title {
        font-size: clamp(
            50px,
            8vw,
            72px
        );
    }
    .hero-description {
        max-width: 560px;
        font-size: 16px;
    }
    .hero-dots {
        left: 40px;
    }
}
/* ============================================================
   RESPONSIVE MOBILE
   ============================================================ */
@media (max-width: 767px) {
    .hero-section {
        height: 100svh;
        min-height: 650px;
    }
    .hero-container {
        padding:
            120px 25px
            100px 25px;
        align-items: center;
    }
    .hero-content {
        max-width: 100%;
    }
    .hero-eyebrow {
        font-size: 9px;
        letter-spacing: 2.5px;
        margin-bottom: 15px;
    }
    .hero-title {
        max-width: 100%;
        font-size: clamp(
            45px,
            13vw,
            65px
        );
        line-height: 0.92;
        letter-spacing: -1.5px;
    }
    .hero-description {
        max-width: 100%;
        margin-top: 25px;
        font-size: 15px;
        line-height: 1.45;
    }
    .hero-button {
        min-height: 50px;
        padding: 0 18px;
        font-size: 13px;
    }
    .hero-arrow {
        display: none;
    }
    .hero-dots {
        left: 25px;
        bottom: 30px;
    }
    .hero-overlay {
        background:
            linear-gradient(
                90deg,
                rgba(0, 0, 0, 0.52) 0%,
                rgba(0, 0, 0, 0.28) 100%
            );
    }
    .hero-top-shadow {
        height: 140px;
    }
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const slides =
        document.querySelectorAll('.hero-slide');
    const dots =
        document.querySelectorAll('.hero-dot');
    const prevButton =
        document.querySelector('.hero-prev');
    const nextButton =
        document.querySelector('.hero-next');

    if (!slides.length) {
        return;
    }
    let currentSlide = 0;
    let autoplay;

    /* ========================================================
       SHOW SLIDE
       ======================================================== */
    function showSlide(index) {
        /*
            Handle looping
        */
        if (index >= slides.length) {
            index = 0;
        }
        if (index < 0) {
            index = slides.length - 1;
        }
        /*
            Remove active
        */
        slides.forEach(function (slide) {
            slide.classList.remove('active');
        });

        dots.forEach(function (dot) {
            dot.classList.remove('active');
        });

        /*
            Activate new slide
        */
        slides[index].classList.add('active');

        if (dots[index]) {
            dots[index].classList.add('active');
        }
        currentSlide = index;
    }
    /* ========================================================
       NEXT
       ======================================================== */
    function nextSlide() {
        showSlide(currentSlide + 1);
    }
    /* ========================================================
       PREVIOUS
       ======================================================== */
    function previousSlide() {
        showSlide(currentSlide - 1);
    }
    /* ========================================================
       AUTOPLAY
       ======================================================== */
    function startAutoplay() {
        clearInterval(autoplay);
        autoplay = setInterval(function () {
            nextSlide();
        }, 6000);
    }
    /* ========================================================
       NEXT BUTTON
       ======================================================== */
    if (nextButton) {
        nextButton.addEventListener(
            'click',
            function () {
                nextSlide();
                startAutoplay();
            }
        );
    }
    /* ========================================================
       PREVIOUS BUTTON
       ======================================================== */
    if (prevButton) {
        prevButton.addEventListener(
            'click',
            function () {
                previousSlide();
                startAutoplay();
            }
        );
    }
    /* ========================================================
       DOTS
       ======================================================== */
    dots.forEach(function (dot, index) {
        dot.addEventListener(
            'click',
            function () {
                showSlide(index);
                startAutoplay();
            }
        );
    });

    /* ========================================================
       START
       ======================================================== */
    showSlide(0);
    startAutoplay();
});
</script>