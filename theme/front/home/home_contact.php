<style>
    #contact {
        overflow: hidden;
        background:
            linear-gradient(90deg, rgba(5, 91, 77, 0.96) 0%, rgba(7, 83, 91, 0.88) 48%, rgba(243, 107, 33, 0.94) 100%),
            url("https://gotra-web.goapp.my.id/web-upload/planinbali/1787561587-product_image-24-08-2026-qPQBOgK8SMlIYuJ0.webp") center 58% / cover;
        color: var(--light-color);

        .container-global {
            padding-top: 4.5rem;
            padding-bottom: 4.5rem;
        }

        .cta__card {
            display: flex;
            position: relative;
            min-height: 8rem;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
            color: var(--light-color);
        }

        .cta__content {
            position: relative;
            z-index: 1;
        }

        .cta__title {
            margin: 0 0 0.45rem;
            color: var(--light-color);
            font-size: clamp(1.6rem, 3vw, 2.5rem);
            letter-spacing: -0.045em;
        }

        .cta__description {
            max-width: 35rem;
            margin: 0;
            color: rgba(255, 255, 255, 0.84);
            font-size: 0.82rem;
        }

        .cta__button {
            flex: 0 0 auto;
            border-color: rgba(255, 255, 255, 0.25);
            box-shadow: 0 0.7rem 1.6rem rgba(0, 0, 0, 0.13);
        }
    }

    @media (max-width: 767.98px) {
        #contact {
            .cta__card {
                min-height: 12rem;
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
            }
        }
    }
</style>

<section id="contact" aria-labelledby="cta-title">
    <div class="container-global">
        <div class="cta__card">
            <div class="cta__content">
                <h2 class="cta__title" id="cta-title">Ready to Plan Your Bali Trip?</h2>
                <p class="cta__description">Tell us where you’d like to go and let our local team help arrange your Bali journey.</p>
            </div>
            <a class="button-global cta__button" href="https://wa.me/6287786366969?text=Hello%20Plan%20In%20Bali%2C%20I%20am%20ready%20to%20plan%20my%20trip" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Plan Your Trip on WhatsApp</a>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const card = document.querySelector("#contact .cta__card");
        if (!card || !window.Motion || window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            return;
        }
        const { animate, inView } = window.Motion;
        inView(card, () => animate(card, { opacity: [0, 1], y: [24, 0], scale: [0.98, 1] }, { duration: 0.7, ease: [0.22, 1, 0.36, 1] }), { amount: 0.3, once: true });
    });
</script>
