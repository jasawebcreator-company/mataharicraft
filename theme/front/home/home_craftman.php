<section class="craftman-section">
    <div class="container-global pt-0">
        <!-- ==================================================
             SECTION HEADER
        ================================================== -->
        <div class="craftman-header">
            <span class="craftman-eyebrow">
                Our Craftmanship
            </span>
            <h2 class="craftman-title">
                The Art Behind Every Piece
            </h2>
            <p class="craftman-description">
                Every handmade piece carries a part of its maker — their skill,
                creativity, and passion — giving each creation a unique character and soul.
            </p>
        </div>
        <?php $craftman_images = '[
            {
                "src": "https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789464246-15-09-2026-J09y3EBAhUndPuiZj7fxHLNaks8eGT2t.webp",
                "alt": "Matahari Craft Craftman"
            },
            {
                "src": "https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789464247-15-09-2026-nckS9Z4a2xRbKqHMOeLfrwGzWPIBg1Ch.webp",
                "alt": "Matahari Craft Craftman"
            },
            {
                "src": "https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789464247-15-09-2026-i8zClWOZvn4RKFeoEt1HMLxbAPhrwu32.webp",
                "alt": "Matahari Craft Craftman"
            },
            {
                "src": "https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789464248-15-09-2026-vw8MF6lKhzo3O9kCGj1JUDsZ2Ea0SNgn.webp",
                "alt": "Matahari Craft Craftman"
            },
            {
                "src": "https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789464249-15-09-2026-26kcEP53G1K9bMiyNSVleWYz0FAhxsoZ.webp",
                "alt": "Matahari Craft Craftman"
            },
            {
                "src": "https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789464249-15-09-2026-opCXBQKcYiRWbteZJLsSgUfamGDF49ul.webp",
                "alt": "Matahari Craft Craftman"
            },
            {
                "src": "https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789464250-15-09-2026-FM5bLiYedONVkBaHu0pj1soPECU4GJR9.webp",
                "alt": "Matahari Craft Craftman"
            },
            {
                "src": "https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789464251-15-09-2026-WRHx8TVGnS40YeqzPyFl2rDLXE7kdUcp.webp",
                "alt": "Matahari Craft Craftman"
            }
        ]';
        $craftman_images = json_decode($craftman_images);
        ?>
        <!-- ==================================================
             IMAGE SLIDER
        ================================================== -->
        <div class="craftman-slider">
            <?php foreach ($craftman_images as $index => $image): ?>
                <div class="craftman-slide <?= $index === 0 ? 'active' : '' ?>">
                    <img
                        src="<?= $image->src ?>"
                        alt="<?= $image->alt ?>"
                    >
                </div>
            <?php endforeach; ?>
            <!-- ==================================================
                 DOTS
            ================================================== -->
            <div class="craftman-dots">
                <?php foreach ($craftman_images as $index => $image): ?>
                    <button
                        type="button"
                        class="craftman-dot <?= $index === 0 ? 'active' : '' ?>"
                        data-slide="<?= $index ?>"
                        aria-label="Go to slide <?= $index + 1 ?>"
                    ></button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.craftman-slide');
    const dots = document.querySelectorAll('.craftman-dot');
    if (!slides.length) {
        return;
    }
    let currentSlide = 0;
    let autoplay;

    /* ========================================================
       SHOW SLIDE
    ======================================================== */
    function showCraftmanSlide(index) {
        if (index >= slides.length) {
            index = 0;
        }
        if (index < 0) {
            index = slides.length - 1;
        }
        /* Remove active from all slides */
        slides.forEach(function (slide) {
            slide.classList.remove('active');
        });

        /* Remove active from all dots */
        dots.forEach(function (dot) {
            dot.classList.remove('active');
        });

        /* Activate selected slide */
        slides[index].classList.add('active');

        /* Activate selected dot */
        if (dots[index]) {
            dots[index].classList.add('active');
        }
        currentSlide = index;
    }
    /* ========================================================
       NEXT SLIDE
    ======================================================== */
    function nextCraftmanSlide() {
        showCraftmanSlide(currentSlide + 1);
    }
    /* ========================================================
       AUTOPLAY
    ======================================================== */
    function startCraftmanAutoplay() {
        clearInterval(autoplay);
        autoplay = setInterval(function () {
            nextCraftmanSlide();
        }, 5000);
    }
    /* ========================================================
       DOT CLICK
    ======================================================== */
    dots.forEach(function (dot, index) {
        dot.addEventListener('click', function () {
            showCraftmanSlide(index);
            startCraftmanAutoplay();
        });
    });

    /* ========================================================
       INITIALIZE
    ======================================================== */
    showCraftmanSlide(0);
    startCraftmanAutoplay();
});
</script>
<style>
/* ============================================================
   CRAFTMAN SECTION
   ============================================================ */
.craftman-section {
    position: relative;
    width: 100%;
    background: #ffffff;
}
/* ============================================================
   CONTAINER
   ============================================================ */
.craftman-section .container-global {
    width: 100%;
    /* max-width: 1500px; */
    margin: 0 auto;
}
/* ============================================================
   HEADER
   ============================================================ */
.craftman-header {
    width: 100%;
    max-width: 1050px;
    margin: 0 auto 55px;
    text-align: center;
}
/* ============================================================
   EYEBROW
   ============================================================ */
.craftman-eyebrow {
    display: block;
    margin-bottom: 17px;
    font-family: var(--titletext);
    font-size: 22px;
    font-weight: 500;
    letter-spacing: .5px;
    font-style: italic;
    line-height: 1.2;
    color: #e8864c;
}
/* ============================================================
   TITLE
   ============================================================ */
.craftman-title {
    margin: 0;
    font-family: var(--primtext);
    font-size: clamp(
        40px,
        4vw,
        60px
    );
    font-weight: 500;
    line-height: 1.02;
    letter-spacing: -1.8px;
    color: #050505;
}
/* ============================================================
   DESCRIPTION
   ============================================================ */
.craftman-description {
    max-width: 850px;
    margin: 12px auto 0;
    font-family: var(--subtext);
    font-size: 17px;
    font-weight: 400;
    line-height: 1.5;
    color: #3e3e3e;
}
/* ============================================================
   IMAGE SLIDER
   ============================================================ */
.craftman-slider {
    position: relative;
    width: 100%;
    height: 600px;
    overflow: hidden;
    border-radius: 30px;
    background: #eeeeee;
}
/* ============================================================
   SLIDE
   ============================================================ */
.craftman-slide {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    opacity: 0;
    transform: scale(1.04);
    transition:
        opacity 1.5s ease-in-out,
        transform 7s ease-out;
}
/* ============================================================
   IMAGE
   ============================================================ */
.craftman-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    filter: grayscale(100%);
    transition:
        filter 2s cubic-bezier(0.22, 1, 0.36, 1),
        transform 7s cubic-bezier(0.22, 1, 0.36, 1);
}
/* ============================================================
   ACTIVE SLIDE
   ============================================================ */
.craftman-slide.active {
    opacity: 1;
    transform: scale(1);
}
/* ============================================================
   COLOR ON SLIDER HOVER
   ============================================================ */
.craftman-slider:hover .craftman-slide img {
    filter: grayscale(0%);
}
/* ============================================================
   SLIGHT ZOOM ON HOVER
   ============================================================ */
.craftman-slider:hover .craftman-slide.active img {
    transform: scale(1.02);
}
/* ============================================================
   OVERLAY
   ============================================================ */
.craftman-slider::after {
    content: "";
    position: absolute;
    inset: 0;
    pointer-events: none;
    background:
        linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0.01),
            rgba(0, 0, 0, 0.08)
        );
    z-index: 2;
}
/* ============================================================
   DOTS
   ============================================================ */
.craftman-dots {
    position: absolute;
    left: 50%;
    bottom: 20px;
    transform: translateX(-50%);
    z-index: 5;
    display: flex;
    align-items: center;
    gap: 8px;
}
/* ============================================================
   DOT
   ============================================================ */
.craftman-dot {
    width: 8px;
    height: 8px;
    padding: 0;
    border: 1px solid #ffffff;
    border-radius: 50%;
    background: transparent;
    opacity: 0.8;
    cursor: pointer;
    transition:
        background 0.3s ease,
        transform 0.3s ease,
        opacity 0.3s ease;
}
/* ============================================================
   ACTIVE DOT
   ============================================================ */
.craftman-dot.active {
    background: #ffffff;
    opacity: 1;
    transform: scale(1.2);
}
/* ============================================================
   TABLET
   ============================================================ */
@media (max-width: 991px) {
    .craftman-section {
        padding: 80px 0 25px;
    }
    .craftman-section .container-global {
        padding: 0 35px;
    }
    .craftman-header {
        margin-bottom: 45px;
    }
    .craftman-title {
        font-size: clamp(
            45px,
            7vw,
            62px
        );
    }
    .craftman-description {
        font-size: 14px;
        max-width: 750px;
    }
    .craftman-slider {
        height: 330px;
        border-radius: 25px;
    }
}
/* ============================================================
   MOBILE
   ============================================================ */
@media (max-width: 767px) {
    .craftman-section {
        padding: 65px 0 20px;
    }
    .craftman-section .container-global {
        padding: 0 20px;
    }
    .craftman-header {
        margin-bottom: 35px;
    }
    .craftman-eyebrow {
        font-size: 17px;
        margin-bottom: 12px;
    }
    .craftman-title {
        font-size: clamp(
            40px,
            12vw,
            55px
        );
        line-height: 0.98;
        letter-spacing: -1px;
    }
    .craftman-description {
        margin-top: 18px;
        font-size: 13px;
        line-height: 1.55;
    }
    .craftman-slider {
        height: 250px;
        border-radius: 20px;
    }
    .craftman-dots {
        bottom: 15px;
    }
}
</style>