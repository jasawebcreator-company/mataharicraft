<style>

/* =========================================
   PARTNERS SECTION
========================================= */

.partners-section {
    position: relative;
    width: 100%;
    padding: 110px 20px 120px;
    background: #ffffff;
    overflow: hidden;
}


/* =========================================
   PARTNERS HEADER
========================================= */

.partners-header {
    max-width: 760px;
    margin: 0 auto 70px;
    text-align: center;
}


.partners-label {
    margin-bottom: 16px;
    font-family: var(--titletext);
    font-size: 22px;
    font-weight: 500;
    font-style: italic;
    letter-spacing: .4px;
    line-height: 1.2;
    color: #e8864c;
}

.partners-title {
    font-family: var(--primtext);
    font-size: 3.2rem;
    font-weight: 500;
    color: var(--color2);
    line-height: 1.15;
    margin-bottom: 1.5rem;
}


.partners-title strong {
    font-weight: 700;
}


.partners-description {
    max-width: 620px;
    margin: 0 auto;
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 400;
    line-height: 1.7;
    color: #666666;
}


/* =========================================
   PARTNERS GRID
========================================= */

.partners-grid {
    max-width: 1180px;
    margin: 0 auto;
}


/* =========================================
   PARTNER ITEM
========================================= */

.partner-item {
    position: relative;

    min-height: 190px;

    padding: 30px 35px;

    display: flex;
    align-items: center;
    gap: 28px;

    border-top: 1px solid #dedede;

    transition:
        background-color .35s ease,
        transform .35s ease;
}


.partner-item:nth-child(-n+2) {
    border-top: 1px solid #222222;
}


/* Vertical divider between columns */

.partner-item:nth-child(odd) {
    border-right: 1px solid #dedede;
}


/* =========================================
   PARTNER NUMBER
========================================= */

.partner-number {
    flex: 0 0 auto;
    align-self: flex-start;
    padding-top: 4px;
    font-family: var(--primtext);
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 1px;
    color: var(--colors);
}


/* =========================================
   LOGO WRAPPER
========================================= */

.partner-logo {
    flex: 1;

    height: 120px;

    display: flex;
    align-items: center;
    justify-content: flex-start;

    overflow: hidden;
}


.partner-logo img {
    display: block;

    max-width: 100%;
    width: auto;
    height: auto;
    max-height: 90px;

    object-fit: contain;
    object-position: left center;

    filter: grayscale(100%);

    opacity: .78;

    transition:
        transform .4s ease,
        filter .4s ease,
        opacity .4s ease;
}


/* =========================================
   PARTNER NAME
========================================= */

.partner-name {
    position: absolute;
    right: 35px;
    bottom: 28px;
    font-family: var(--subtext);
    font-size: 12px;
    font-weight: 500;
    color: #777777;
    opacity: 0;
    transform: translateY(5px);
    transition:
        opacity .3s ease,
        transform .3s ease;
}


/* =========================================
   HOVER
========================================= */

.partner-item:hover {
    background: #fafafa;
    transform: translateY(-3px);
}


.partner-item:hover .partner-logo img {
    filter: grayscale(0%);
    opacity: 1;
    transform: scale(1.04);
}


.partner-item:hover .partner-name {
    opacity: 1;
    transform: translateY(0);
}


/* =========================================
   BOTTOM BORDER
========================================= */

.partner-item:nth-last-child(-n+2) {
    border-bottom: 1px solid #dedede;
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 991.98px) {

    .partners-section {
        padding: 90px 25px 100px;
    }


    .partners-header {
        margin-bottom: 55px;
    }


    .partners-title {
        font-size: 44px;
    }


    .partner-item {
        min-height: 170px;
        padding: 25px;
    }


    .partner-logo {
        height: 105px;
    }


    .partner-logo img {
        max-height: 80px;
    }

}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 767.98px) {

    .partners-section {
        padding: 70px 20px 80px;
    }


    .partners-header {
        margin-bottom: 40px;
    }


    .partners-label {
        font-size: 11px;
        letter-spacing: 2.5px;
    }


    .partners-title {
        font-size: 34px;
        line-height: 1.1;
        letter-spacing: -.8px;
    }


    .partners-description {
        font-size: 14px;
        line-height: 1.65;
    }


    .partners-grid {
        width: 100%;
    }


    .partner-item,
    .partner-item:nth-child(odd) {
        min-height: 145px;

        padding: 22px 10px;

        border-right: none;
        border-top: 1px solid #dedede;
    }


    .partner-item:nth-child(1) {
        border-top: 1px solid #222222;
    }


    .partner-item:nth-last-child(-n+2) {
        border-bottom: none;
    }


    .partner-item:last-child {
        border-bottom: 1px solid #dedede;
    }


    .partner-number {
        font-size: 11px;
    }


    .partner-logo {
        height: 90px;
        justify-content: center;
    }


    .partner-logo img {
        max-height: 65px;
        max-width: 85%;

        object-position: center;
    }


    .partner-name {
        display: none;
    }

}


/* =========================================
   SMALL MOBILE
========================================= */

@media (max-width: 575.98px) {

    .partners-title {
        font-size: 30px;
    }


    .partner-item {
        min-height: 125px;
    }


    .partner-logo {
        height: 75px;
    }


    .partner-logo img {
        max-height: 58px;
    }

}

</style>

<section class="page-hero">
	<div class="container-global">
	    <h1 class="page-hero-title">Partner</h1>
	    <div class="page-hero-breadcrumb">
	      <a href="<?= base_url() ?>">Home</a>
	      <span class="separator">&rarr;</span>
	      <span>Partner</span>
	    </div>
	</div>
</section>

<!-- =========================================
     PARTNERS SECTION
========================================= -->

<section class="partners-section">


    <!-- =====================================
         SECTION HEADER
    ====================================== -->

    <div class="partners-header">


        <div class="partners-label">
            Our Partners
        </div>


        <h2 class="partners-title">
            Trusted <strong>Partners</strong>
            <br>
            Behind Every Journey
        </h2>


        <p class="partners-description">
            We work with trusted partners who share our commitment to
            quality, thoughtful design, and meaningful experiences.
            Together, we create journeys and products that connect
            people with the best of Indonesia.
        </p>


    </div>



    <!-- =====================================
         PARTNERS GRID
    ====================================== -->

    <div class="partners-grid">


        <div class="row g-0">


            <!-- PARTNER 01 -->

            <div class="col-lg-6">

                <div class="partner-item">

                    <div class="partner-number">
                        01
                    </div>

                    <div class="partner-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789459886-15-09-2026-2VtHXE5ISTOg1srM3J60ZehlmNwFiACb.webp"
                            alt="Bungalow Living Bali"
                        >

                    </div>

                    <div class="partner-name">
                        Bungalow Living Bali
                    </div>

                </div>

            </div>



            <!-- PARTNER 02 -->

            <div class="col-lg-6">

                <div class="partner-item">

                    <div class="partner-number">
                        02
                    </div>

                    <div class="partner-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789459886-15-09-2026-mU0qSbcOHCQVuoREhs49TtzW18LylXgN.webp"
                            alt="Cantiq Living"
                        >

                    </div>

                    <div class="partner-name">
                        Cantiq Living
                    </div>

                </div>

            </div>



            <!-- PARTNER 03 -->

            <div class="col-lg-6">

                <div class="partner-item">

                    <div class="partner-number">
                        03
                    </div>

                    <div class="partner-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789459884-15-09-2026-MLVDCQO5eS9Jghdv3KIiNU0m4PxyjApX.webp"
                            alt="Falabella"
                        >

                    </div>

                    <div class="partner-name">
                        Falabella
                    </div>

                </div>

            </div>



            <!-- PARTNER 04 -->

            <div class="col-lg-6">

                <div class="partner-item">

                    <div class="partner-number">
                        04
                    </div>

                    <div class="partner-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789459884-15-09-2026-RCuB1m6yOHpgAP8NkdeSvVQnwJt0hYz7.webp"
                            alt="Sagebrook Home"
                        >

                    </div>

                    <div class="partner-name">
                        Sagebrook Home
                    </div>

                </div>

            </div>



            <!-- PARTNER 05 -->

            <div class="col-lg-6">

                <div class="partner-item">

                    <div class="partner-number">
                        05
                    </div>

                    <div class="partner-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789459885-15-09-2026-Yz5VepnASX4Wd2NBJOyZ9hKEsiFDPmgj.webp"
                            alt="Style Craft"
                        >

                    </div>

                    <div class="partner-name">
                        Style Craft
                    </div>

                </div>

            </div>



            <!-- PARTNER 06 -->

            <div class="col-lg-6">

                <div class="partner-item">

                    <div class="partner-number">
                        06
                    </div>

                    <div class="partner-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789724388-18-09-2026-IYbDKfJp87vhU95qzig0AVetCod4OMRw.webp"
                            alt="Partner 06"
                        >

                    </div>

                    <div class="partner-name">
                        Ross Dress For Less
                    </div>

                </div>

            </div>



            <!-- PARTNER 07 -->

            <div class="col-lg-6">

                <div class="partner-item">

                    <div class="partner-number">
                        07
                    </div>

                    <div class="partner-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789724389-18-09-2026-x2FYcpj4BUaOPNeI6hGLlZErkfD9Wn7S.webp"
                            alt="Partner 07"
                        >

                    </div>

                    <div class="partner-name">
                        Home Goods
                    </div>

                </div>

            </div>



            <!-- PARTNER 08 -->

            <div class="col-lg-6">

                <div class="partner-item">

                    <div class="partner-number">
                        08
                    </div>

                    <div class="partner-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789724389-18-09-2026-s43rWbHCKc6twLS5kTzM9QAxOh7DoaXR.webp"
                            alt="Partner 08"
                        >

                    </div>

                    <div class="partner-name">
                        Made Goods
                    </div>

                </div>

            </div>



            <!-- PARTNER 09 -->

            <div class="col-lg-6">

                <div class="partner-item">

                    <div class="partner-number">
                        09
                    </div>

                    <div class="partner-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789724390-18-09-2026-W3mSfjhgYRQEHP85Dpw4k2NX71CiOsqb.webp"
                            alt="Partner 09"
                        >

                    </div>

                    <div class="partner-name">
                        World Market
                    </div>

                </div>

            </div>



            <!-- PARTNER 10 -->

            <div class="col-lg-6">

                <div class="partner-item">

                    <div class="partner-number">
                        10
                    </div>

                    <div class="partner-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789724390-18-09-2026-8Z4VkNqBuj0tOyFDJ9wIAgsYlU2XbveK.webp"
                            alt="Partner 10"
                        >

                    </div>

                    <div class="partner-name">
                        Ibolili Home
                    </div>

                </div>

            </div>



            <!-- PARTNER 11 -->

            <div class="col-lg-6">

                <div class="partner-item">

                    <div class="partner-number">
                        11
                    </div>

                    <div class="partner-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789724391-18-09-2026-XC1E2d7WSoxufaHOwkZ3tc5Dp6qjylJh.webp"
                            alt="Partner 11"
                        >

                    </div>

                    <div class="partner-name">
                        Triobo Co
                    </div>

                </div>

            </div>



            <!-- PARTNER 12 -->

            <div class="col-lg-6">

                <div class="partner-item">

                    <div class="partner-number">
                        12
                    </div>

                    <div class="partner-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789724391-18-09-2026-RKBaufoN8wnrPDCHFe6ZzOhW7QmYVS0E.webp"
                            alt="Partner 12"
                        >

                    </div>

                    <div class="partner-name">
                        Liverpool
                    </div>

                </div>

            </div>

			<!-- PARTNER 13 -->
			
			<div class="col-lg-6">

                <div class="partner-item">

                    <div class="partner-number">
                        13
                    </div>

                    <div class="partner-logo">

                        <img
                            src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1790391243-26-09-2026-TXgHsemPpqZNn0i4oWDRAGYB9fb2kzrL.webp"
                            alt="Partner 13"
                        >

                    </div>

                    <div class="partner-name">
                        Tjx
                    </div>

                </div>

            </div>


        </div>

    </div>


</section>