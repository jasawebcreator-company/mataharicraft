<style>

/* =========================================
   CERTIFICATION SECTION
========================================= */

.certification-section {
    width: 100%;
    padding: 70px 20px 80px;
    background: #ffffff;
}


/* =========================================
   MAIN CONTAINER
========================================= */

.certification-container {
    max-width: 1120px;
    margin: 0 auto;
}


/* =========================================
   CERTIFICATION COLUMN
========================================= */

.certification-item {
    padding: 0 35px;
}


/* =========================================
   LOGO AREA
========================================= */

.certification-logo {
    width: 100%;
    height: 125px;

    display: flex;
    align-items: center;
    justify-content: flex-start;

    margin-bottom: 25px;
}


.certification-logo img {
    display: block;

    width: auto;
    max-width: 100%;
    max-height: 105px;

    object-fit: contain;
    object-position: left center;
}


/* =========================================
   DESCRIPTION
========================================= */

.certification-description {
    margin: 0;
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 400;
    line-height: 1.45;
    letter-spacing: 0.1px;
    color: #202020;
    text-align: left;
}


/* =========================================
   DESKTOP COLUMN SPACING
========================================= */

.certification-item:first-child {
    padding-right: 55px;
}

.certification-item:last-child {
    padding-left: 55px;
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 991.98px) {

    .certification-section {
        padding: 60px 25px 70px;
    }

    .certification-item {
        padding: 0 20px !important;
    }

    .certification-logo {
        height: 110px;
        margin-bottom: 22px;
    }

    .certification-logo img {
        max-height: 90px;
    }

    .certification-description {
        font-size: 14px;
        line-height: 1.5;
    }

}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 767.98px) {

    .certification-section {
        padding: 55px 20px 65px;
    }

    .certification-item {
        padding: 0 !important;
        margin-bottom: 55px;
    }

    .certification-item:last-child {
        margin-bottom: 0;
    }

    .certification-logo {
        height: 100px;
        margin-bottom: 20px;

        justify-content: flex-start;
    }

    .certification-logo img {
        max-height: 85px;
        max-width: 90%;
    }

    .certification-description {
        font-size: 14px;
        line-height: 1.55;
    }

}


/* =========================================
   SMALL MOBILE
========================================= */

@media (max-width: 575.98px) {

    .certification-section {
        padding: 50px 18px 60px;
    }

    .certification-logo {
        height: 90px;
    }

    .certification-logo img {
        max-height: 75px;
    }

    .certification-description {
        font-size: 13.5px;
        line-height: 1.55;
    }

}

</style>

<!-- =========================================
     CERTIFICATION SECTION
========================================= -->

<section class="page-hero">
	<div class="container-global">
	    <h1 class="page-hero-title">Certificate</h1>
	    <div class="page-hero-breadcrumb">
	      <a href="<?= base_url() ?>">Home</a>
	      <span class="separator">&rarr;</span>
	      <span>Certificate</span>
	    </div>
	</div>
</section>

<section class="certification-section">

    <div class="container certification-container">

        <div class="row g-0">


            <!-- =================================
                 CERTIFICATION 01 — SVLK
            ================================== -->

            <div class="col-lg-6">

                <div class="certification-item">

                    <!-- Logo -->

                    <div class="certification-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789545569-16-09-2026-DARsw5Q8XN3xrMHLEyntPf97o1gJm2hS.webp"
                            alt="SVLK Indonesia"
                        >

                    </div>


                    <!-- Description -->

                    <p class="certification-description">

                        SVLK is a mandatory certification system in
                        Indonesia designed to ensure that timber and
                        timber products come from legal sources and are
                        managed sustainably. SVLK aims to combat illegal
                        logging, improve forest governance, and meet
                        international market standards, such as the EU’s
                        FLEGT requirements, by verifying the legality and
                        traceability of the entire supply chain.

                    </p>

                </div>

            </div>



            <!-- =================================
                 CERTIFICATION 02 — BSCI
            ================================== -->

            <div class="col-lg-6">

                <div class="certification-item">

                    <!-- Logo -->

                    <div class="certification-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789545569-16-09-2026-U2rxGyd81pFalmiYgeDTjRNu6IZ0VASq.webp"
                            alt="amfori BSCI"
                        >

                    </div>


                    <!-- Description -->

                    <p class="certification-description">

                        A leading initiative that provides a social audit
                        methodology to verify suppliers’ compliance with
                        ethical and responsible labor practices across the
                        global supply chain. Based in Belgium, this system
                        helps companies promote safe, fair, and transparent
                        working conditions in accordance with international
                        labor standards, including those of the ILO.

                    </p>

                </div>

            </div>


        </div>

    </div>

</section>