<section class="certification-section">

    <div class="container-global">

        <div class="row certification-row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6">

                <div class="certification-content">

                    <span class="certification-eyebrow">
                        OUR CERTIFICATIONS
                    </span>

                    <h2 class="certification-title">
                        Certified for<br>
                        Responsible Craftsmanship
                    </h2>

                    <p class="certification-description">
                        Matahari Craft is committed to responsible sourcing,
                        ethical production, and consistent quality. Our
                        certifications reflect our commitment to meeting
                        recognized standards for responsible and sustainable
                        business practices.
                    </p>

                </div>

            </div>


            <!-- RIGHT CERTIFICATIONS -->
            <div class="col-lg-6">

                <div class="certification-logos">

                    <!-- SVLK -->
                    <div class="certification-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789545569-16-09-2026-DARsw5Q8XN3xrMHLEyntPf97o1gJm2hS.webp"
                            alt="SVLK Indonesia Certification"
                        >

                    </div>


                    <!-- AMFORI BSCI -->
                    <div class="certification-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789545569-16-09-2026-U2rxGyd81pFalmiYgeDTjRNu6IZ0VASq.webp"
                            alt="amfori BSCI Certification"
                        >

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<style>
	/* =========================
   CERTIFICATION SECTION
========================= */

.certification-section {
    position: relative;
    width: 100%;
    /* padding: 100px 0; */
    background: #f8f5ef;
}


.certification-row {
    --bs-gutter-x: 5rem;
}


/* =========================
   CONTENT
========================= */

.certification-content {
    max-width: 620px;
}


.certification-eyebrow {
    display: block;
    margin-bottom: 18px;

    font-family: var(--subtext);
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 3px;
    line-height: 1.2;

    color: #bd9025;
}


.certification-title {
    margin: 0;

    font-family: var(--primtext);
    font-size: clamp(42px, 4.5vw, 68px);
    font-weight: 400;
    line-height: 1.08;
    letter-spacing: -2px;

    color: #111111;
}


.certification-description {
    max-width: 580px;
    margin: 25px 0 0;

    font-family: var(--subtext);
    font-size: 17px;
    font-weight: 400;
    line-height: 1.6;

    color: #666666;
}


/* =========================
   CERTIFICATION LOGOS
========================= */

.certification-logos {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;

    width: 100%;
}


.certification-logo {
    width: 100%;
    height: 230px;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 10px;

    background: #ffffff;
    border: 1px solid #e2ded5;

    transition:
        transform 0.4s ease,
        box-shadow 0.4s ease;
}


.certification-logo:hover {
    transform: translateY(-6px);

    box-shadow:
        0 15px 35px rgba(0, 0, 0, 0.08);
}


.certification-logo img {
    display: block;

    width: 100%;
    height: 100%;

    object-fit: contain;
}


/* =========================
   TABLET
========================= */

@media (max-width: 991px) {

    .certification-section {
        /* padding: 80px 0; */
    }

    .certification-row {
        --bs-gutter-x: 2rem;
        --bs-gutter-y: 50px;
    }

    .certification-content {
        max-width: 700px;
    }

    .certification-title {
        font-size: clamp(40px, 6vw, 58px);
    }

    .certification-description {
        font-size: 15px;
    }

    .certification-logos {
        gap: 25px;
		margin-top: 20px
    }

    .certification-logo {
        width: 200px;
        height: 200px;
        padding: 30px;
    }

}


/* =========================
   MOBILE
========================= */

@media (max-width: 767px) {

    .certification-section {
        /* padding: 65px 0; */
    }

    .certification-row {
        --bs-gutter-x: 0;
        --bs-gutter-y: 40px;
    }

    .certification-eyebrow {
        font-size: 12px;
        letter-spacing: 2.5px;
        margin-bottom: 14px;
    }

    .certification-title {
        font-size: clamp(38px, 11vw, 52px);
        line-height: 1;
        letter-spacing: -1px;
    }

    .certification-description {
        margin-top: 18px;
        font-size: 14px;
        line-height: 1.55;
    }

    .certification-logos {
        gap: 15px;
    }

    .certification-logo {
        width: 50%;
        height: 170px;
        padding: 25px 20px;
    }

}
</style>