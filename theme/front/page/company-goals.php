<style>

/* =========================================
   COMPANY GOALS — OUR VISION
========================================= */

.company-vision {
    width: 100%;
    padding: 75px 20px;
    background: #ff8614;
    text-align: center;
}


/* =========================================
   VISION CONTENT
========================================= */

.company-vision-inner {
    max-width: 760px;
    margin: 0 auto;
}


/* =========================================
   TITLE
========================================= */

.company-vision-title {
    margin: 0 0 12px;
    font-family: var(--primtext);
    font-size: 40px;
    font-weight: 400;
    line-height: 1.2;
    letter-spacing: 1.5px;
    color: #ffffff;
}


.company-vision-title strong {
    font-weight: 700;
}


/* =========================================
   VISION STATEMENT
========================================= */

.company-vision-statement {
    margin: 0 0 8px;
    font-family: var(--subtext);
    font-size: 14px;
    font-weight: 600;
    line-height: 1.4;
    color: #ffffff;
}


/* =========================================
   VISION DESCRIPTION
========================================= */

.company-vision-description {
    max-width: 690px;
    margin: 0 auto;
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 400;
    line-height: 1.55;
    color: #ffffff;
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 991.98px) {

    .company-vision {
        padding: 65px 25px;
    }

    .company-vision-title {
        font-size: 30px;
    }

    .company-vision-description {
        max-width: 650px;
    }

}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 575.98px) {

    .company-vision {
        padding: 55px 22px;
    }

    .company-vision-inner {
        max-width: 100%;
    }

    .company-vision-title {
        font-size: 27px;
        line-height: 1.2;
        margin-bottom: 12px;
    }

    .company-vision-statement {
        font-size: 13px;
        line-height: 1.45;
        margin-bottom: 8px;
    }

    .company-vision-description {
        font-size: 13px;
        line-height: 1.6;
    }

}

</style>

<!-- =========================================
     COMPANY GOALS — OUR VISION
========================================= -->


<section class="page-hero">
	<div class="container-global">
	    <h1 class="page-hero-title">Company Goals</h1>
	    <div class="page-hero-breadcrumb">
	      <a href="<?= base_url() ?>">Home</a>
	      <span class="separator">&rarr;</span>
	      <span>Company Goals</span>
	    </div>
	</div>
</section>

<section class="company-vision">

    <div class="company-vision-inner">


        <!-- TITLE -->

        <h2 class="company-vision-title">
            Our <strong>Vision</strong>
        </h2>


        <!-- VISION STATEMENT -->

        <p class="company-vision-statement">
            “Inspired by Nature. Crafted for the World.”
        </p>


        <!-- VISION DESCRIPTION -->

        <p class="company-vision-description">
            To create distinctive handcrafted décor that brings together
			contemporary design, natural materials, and authentic Indonesian 
			craftsmanship, while supporting local artisans and preserving our 
			rich craft heritage for the global market.
        </p>


    </div>

</section>

<style>

/* =========================================
   COMPANY GOALS — OUR MISSION
========================================= */

.company-mission {
    position: relative;
    width: 100%;
    padding: 75px 20px 80px;
    background: #ffffff;
    overflow: hidden;
}


/* =========================================
   DECORATIVE LOGO — TOP RIGHT
========================================= */

.company-mission-logo {
    position: absolute;
    top: -97px;
    left: -100px;
    width: 245px;
    height: 245px;
    object-fit: contain;
    opacity: 1;
    pointer-events: none;
}


/* =========================================
   MAIN CONTAINER
========================================= */

.company-mission-inner {
    position: relative;
    z-index: 2;

    max-width: 1080px;
    margin: 0 auto;
}


/* =========================================
   SECTION TITLE
========================================= */

.company-mission-title {
    text-align: center;
    margin: 0 0 42px;
    font-family: var(--primtext);
    font-size: 42px;
    font-weight: 400;
    line-height: 1.15;
    letter-spacing: -1px;
    color: #111111;
}

.company-mission-title strong {
    font-weight: 700;
    color: #ff8614;
}


/* =========================================
   MISSION ITEM
========================================= */

.mission-item {
    display: grid;

    grid-template-columns: 36% 64%;

    align-items: start;

    padding: 18px 0;

    border-bottom: 1px solid #ff8614;
}


/* =========================================
   LEFT SIDE
========================================= */

.mission-left {
    display: flex;

    align-items: center;

    padding-right: 30px;
}


.mission-number {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    width: 17px;
    height: 17px;

    margin-right: 8px;

    border-radius: 50%;

    background: #ff8614;

    color: #ffffff;

    font-family: "Cabinet Grotesk", sans-serif;

    font-size: 10px;
    font-weight: 700;
}


.mission-index {
    font-family: var(--primtext);
    font-size: 15px;
    font-weight: 600;
    color: #ff8614;
    margin-right: 6px;
}


.mission-name {
    font-family: var(--primtext);
    font-size: 16px;
    font-weight: 600;
    color: #ff8614;
    line-height: 1.3;
    letter-spacing: .8px;
}


/* =========================================
   RIGHT SIDE
========================================= */

.mission-description {
    font-family: var(--subtext);
    font-size: 14px;
    font-weight: 400;
    line-height: 1.45;
    color: #222222;
    max-width: 590px;
    margin: 0;
}


/* =========================================
   LAST ITEM
========================================= */

.mission-item:last-child {
    border-bottom: none;
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 991.98px) {

    .company-mission {
        padding: 65px 25px 70px;
    }

    .company-mission-logo {
        width: 120px;
        height: 120px;

        top: -30px;
        right: -30px;
    }

    .company-mission-title {
        font-size: 36px;
        margin-bottom: 35px;
    }

    .mission-item {
        grid-template-columns: 34% 66%;
    }

}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 575.98px) {

    .company-mission {
        padding: 55px 20px 60px;
    }

    .company-mission-logo {
        width: 90px;
        height: 90px;

        top: -20px;
        right: -20px;

        opacity: .9;
    }

    .company-mission-title {
        font-size: 30px;

        margin-bottom: 30px;

        letter-spacing: -.5px;
    }

    .mission-item {
        display: block;

        padding: 20px 0;
    }

    .mission-left {
        padding-right: 0;

        margin-bottom: 10px;
    }

    .mission-description {
        font-size: 13px;

        line-height: 1.55;

        max-width: 100%;
    }

}

</style>

<!-- =========================================
     COMPANY GOALS — OUR MISSION
========================================= -->

<section class="company-mission">


    <!-- DECORATIVE LOGO -->

    <img
        src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789878860-20-09-2026-TodXxI2OF8pQCPbr0cH4j7kZhzNw5LUl.webp"
        alt="Logo"
        class="company-mission-logo"
    >


    <div class="company-mission-inner">


        <!-- =================================
             SECTION TITLE
        ================================== -->

        <h2 class="company-mission-title">

            Our <strong>Mission</strong>

        </h2>



        <!-- =================================
             MISSION 01
        ================================== -->

        <div class="mission-item">


            <div class="mission-left">

                <span class="mission-number">
                    ✓
                </span>

                <span class="mission-index">
                    01
                </span>

                <span class="mission-name">
                    Craftsmanship
                </span>

            </div>


            <p class="mission-description">

                To preserve Indonesian craftsmanship by working closely
                with skilled artisans and small home based production
                units, supporting traditional handmade techniques and
                creating meaningful opportunities for local communities.

            </p>


        </div>



        <!-- =================================
             MISSION 02
        ================================== -->

        <div class="mission-item">


            <div class="mission-left">

                <span class="mission-number">
                    ✓
                </span>

                <span class="mission-index">
                    02
                </span>

                <span class="mission-name">
                    Design
                </span>

            </div>


            <p class="mission-description">

                To develop thoughtful collections with our partners,
                translating market insights and design direction into
                contemporary designs rooted in Indonesian heritage.

            </p>


        </div>



        <!-- =================================
             MISSION 03
        ================================== -->

        <div class="mission-item">


            <div class="mission-left">

                <span class="mission-number">
                    ✓
                </span>

                <span class="mission-index">
                    03
                </span>

                <span class="mission-name">
                    Natural Materials
                </span>

            </div>


            <p class="mission-description">

                To explore the beauty of terracotta, wood, and other
                natural materials, turning them into pieces with warmth,
                character, and purpose.

            </p>


        </div>



        <!-- =================================
             MISSION 04
        ================================== -->

        <div class="mission-item">


            <div class="mission-left">

                <span class="mission-number">
                    ✓
                </span>

                <span class="mission-index">
                    04
                </span>

                <span class="mission-name">
                    Quality Commitment
                </span>

            </div>


            <p class="mission-description">

                To maintain high standards throughout every stage,
                from material selection to final finishing, ensuring
                consistency, durability, and careful workmanship.

            </p>


        </div>



        <!-- =================================
             MISSION 05
        ================================== -->

        <div class="mission-item">


            <div class="mission-left">

                <span class="mission-number">
                    ✓
                </span>

                <span class="mission-index">
                    05
                </span>

                <span class="mission-name">
                    Global Partnership
                </span>

            </div>


            <p class="mission-description">

                To build lasting relationships with partners worldwide
                through reliability, collaboration, and a shared
                appreciation for Indonesian craftsmanship.

            </p>


        </div>


    </div>

</section>