<section class="shipping-section">
    <div class="container-global">
        <!-- ==================================================
             SECTION HEADER
             ================================================== -->
        <div class="shipping-header">
            <span class="shipping-eyebrow">
                Packaging and Shipping
            </span>
            <h2 class="shipping-title">
                Carefully Packed, Safely Delivered
            </h2>
            <p class="shipping-description">
                We offer shipping under FOB (Free On Board), Ex Works (Ex Factory),
                and air shipment, depending on your needs. Shipments are typically
                handled through Tanjung Perak (Surabaya) or Jakarta, based on
                logistics arrangements. For smaller shipments, LCL (Less than
                Container Load) is available, with additional charges depending
                on shipment structure.
            </p>
        </div>
        <!-- ==================================================
             IMAGE SLIDER
             ================================================== -->
        <div class="shipping-slider">
            <!-- IMAGE 1 -->
            <div
                class="shipping-slide active"
                style="background-image: url('https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789458023-15-09-2026-06dBWJ7PMmfjVH4hxrq9GKlpbZvcO1Yy.webp');">
            </div>
            <!-- IMAGE 2 -->
            <div
                class="shipping-slide"
                style="background-image: url('https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789458024-15-09-2026-4biv0Uk7AtHJTs5NuyRMV3IxzCm2WBLZ.webp');">
            </div>
            <!-- ==================================================
                 OPTIONAL SLIDER DOTS
                 ================================================== -->
            <div class="shipping-dots">
                <button
                    type="button"
                    class="shipping-dot active"
                    data-slide="0">
                </button>
                <button
                    type="button"
                    class="shipping-dot"
                    data-slide="1">
                </button>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const slides =
        document.querySelectorAll('.shipping-slide');
    const dots =
        document.querySelectorAll('.shipping-dot');
    if (!slides.length) {
        return;
    }
    let currentSlide = 0;
    let autoplay;
    /* ========================================================
       SHOW SLIDE
       ======================================================== */
    function showShippingSlide(index) {
        if (index >= slides.length) {
            index = 0;
        }
        if (index < 0) {
            index = slides.length - 1;
        }
        /*
            Remove active dari semua gambar
        */
        slides.forEach(function (slide) {
            slide.classList.remove('active');
        });
        /*
            Remove active dari dots
        */
        dots.forEach(function (dot) {
            dot.classList.remove('active');
        });
        /*
            Aktifkan gambar baru
        */
        slides[index].classList.add('active');
        if (dots[index]) {
            dots[index].classList.add('active');
        }
        currentSlide = index;
    }
    /* ========================================================
       NEXT SLIDE
       ======================================================== */
    function nextShippingSlide() {
        showShippingSlide(currentSlide + 1);
    }
    /* ========================================================
       AUTOPLAY
       ======================================================== */
    function startShippingAutoplay() {
        clearInterval(autoplay);
        autoplay = setInterval(function () {
            nextShippingSlide();
        }, 5000);
    }
    /* ========================================================
       DOT CLICK
       ======================================================== */
    dots.forEach(function (dot, index) {
        dot.addEventListener('click', function () {
            showShippingSlide(index);
            startShippingAutoplay();
        });
    });
    /* ========================================================
       INITIALIZE
       ======================================================== */
    showShippingSlide(0);
    startShippingAutoplay();
});
</script>
<style>
	/* ============================================================
   SHIPPING SECTION
   ============================================================ */
.shipping-section {
    position: relative;
    width: 100%;
    /* padding: 90px 0 25px; */
    background: #ffffff;
}
/* ============================================================
   CONTAINER
   ============================================================ */
.shipping-section .container {
    width: 100%;
    max-width: 1500px;
    margin: 0 auto;
    padding: 0 55px;
}
/* ============================================================
   HEADER
   ============================================================ */
.shipping-header {
    width: 100%;
    max-width: 1050px;
    margin: 0 auto 55px;
    text-align: center;
}
/* ============================================================
   EYEBROW
   ============================================================ */
.shipping-eyebrow {
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
.shipping-title {
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
.shipping-description {
    max-width: 850px;
    margin: 12px auto 0;
    font-family: var(--subtext);
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
    color: #3e3e3e;
}
/* ============================================================
   IMAGE SLIDER
   ============================================================ */
.shipping-slider {
    position: relative;
    width: 100%;
    height: 500px;
    overflow: hidden;
    border-radius: 30px;
    background: #eeeeee;
}
/* ============================================================
   SLIDES
   ============================================================ */
.shipping-slide {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 0;
    transform: scale(1.04);
    transition:
        opacity 1.5s ease-in-out,
        transform 7s ease-out;
}
/* Active */
.shipping-slide.active {
    opacity: 1;
    transform: scale(1);
}
/* ============================================================
   OPTIONAL DARK OVERLAY
   ============================================================ */
.shipping-slider::after {
    content: "";
    position: absolute;
    inset: 0;
    pointer-events: none;
    background:
        linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0.02),
            rgba(0, 0, 0, 0.08)
        );
    z-index: 2;
}
/* ============================================================
   DOTS
   ============================================================ */
.shipping-dots {
    position: absolute;
    left: 50%;
    bottom: 20px;
    transform: translateX(-50%);
    z-index: 5;
    display: flex;
    align-items: center;
    gap: 8px;
}
.shipping-dot {
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
.shipping-dot.active {
    background: #ffffff;
    opacity: 1;
    transform: scale(1.2);
}
/* ============================================================
   TABLET
   ============================================================ */
@media (max-width: 991px) {
    .shipping-section {
        /* padding: 80px 0 25px; */
    }
    .shipping-section .container {
        /* padding: 0 35px; */
    }
    .shipping-header {
        margin-bottom: 45px;
    }
    .shipping-title {
        font-size: clamp(
            45px,
            7vw,
            62px
        );
    }
    .shipping-description {
        font-size: 14px;
        max-width: 750px;
    }
    .shipping-slider {
        height: 330px;
        border-radius: 25px;
    }
}
/* ============================================================
   MOBILE
   ============================================================ */
@media (max-width: 767px) {
    .shipping-section {
        /* padding: 65px 0 20px; */
    }
    .shipping-section .container {
        /* padding: 0 20px; */
    }
    .shipping-header {
        margin-bottom: 35px;
    }
    .shipping-eyebrow {
        font-size: 17px;
        margin-bottom: 12px;
    }
    .shipping-title {
        font-size: clamp(
            40px,
            12vw,
            55px
        );
        line-height: 0.98;
        letter-spacing: -1px;
    }
    .shipping-description {
        margin-top: 18px;
        font-size: 13px;
        line-height: 1.55;
    }
    .shipping-slider {
        height: 250px;
        border-radius: 20px;
    }
    .shipping-dots {
        bottom: 15px;
    }
}
</style>