<style>

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
	text-transform: capitalize;
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
@media (max-width: 575.98px) {
	.partners-title {
		font-size: 35px;
	}

}
/* =========================================================
   ANTIK HOSPITALITY — CONTACT SECTION
========================================================= */

.antik-contact {
    position: relative;
    width: 100%;
    min-height: 760px;

    background:
        linear-gradient(
            90deg,
            rgba(0, 0, 0, 0.88) 0%,
            rgba(0, 0, 0, 0.78) 48%,
            rgba(0, 0, 0, 0.55) 100%
        ),
        url('https://gotra-web.goapp.my.id/web-upload/antikhospitality/1789719674-18-09-2026-JWkhnFc3QsiU47EfRqa2lO80zptCZjo6.webp');

    background-size: cover;
    background-position: center;

    color: #ffffff;

    overflow: hidden;
}


/* =========================================================
   MAIN CONTAINER
========================================================= */

.antik-contact-container {
    position: relative;
    z-index: 2;

    max-width: 1250px;

    min-height: 760px;

    margin: 0 auto;
    padding: 75px 30px;

    display: flex;
    align-items: stretch;
}


/* =========================================================
   LEFT COLUMN — CONTACT FORM
========================================================= */

.antik-contact-left {
    width: 50%;

    padding-right: 55px;

    display: flex;
    flex-direction: column;
}


/* =========================================================
   RIGHT COLUMN
========================================================= */

.antik-contact-right {
    width: 50%;

    padding-left: 55px;

    display: flex;
    flex-direction: column;
}


/* =========================================================
   SECTION TITLE
========================================================= */

.antik-contact-title {
    margin: 0 0 10px;
    font-family: var(--primtext);
    font-size: 50px;
    font-weight: 500;
    line-height: 1.05;
    letter-spacing: -1.5px;
    color: #ffffff;
}


.antik-contact-intro {
    max-width: 470px;
    margin: 0 0 40px;
    font-family: var(--subtext);
    font-size: 17px;
    font-weight: 400;
    line-height: 1.55;
    color: rgba(255, 255, 255, 0.9);
}


/* =========================================================
   FORM
========================================================= */

.antik-contact-form {
    width: 100%;
}


.antik-form-group {
    position: relative;

    margin-bottom: 27px;
}


.antik-form-label {
    display: block;
    margin-bottom: 8px;
    font-family: var(--primtext);
    font-size: 14px;
    font-weight: 500;
    color: #ffffff;
}


.antik-form-input,
.antik-form-textarea {

    width: 100%;

    padding: 10px 0;

    background: transparent;

    border: 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.65);

    border-radius: 0;

    outline: none;

    font-family: "Cabinet Grotesk", sans-serif;
    font-size: 15px;

    color: #ffffff;

    transition:
        border-color .3s ease,
        background-color .3s ease;
}


.antik-form-input {
    height: 42px;
}


.antik-form-textarea {
    min-height: 125px;

    resize: vertical;

    padding-top: 8px;
}


.antik-form-input::placeholder,
.antik-form-textarea::placeholder {
    color: transparent;
}


.antik-form-input:focus,
.antik-form-textarea:focus {
    border-bottom-color: #ff8614;
}


/* =========================================================
   SMALL ACCENT
========================================================= */

.antik-form-group.subject-group::after {
    /* content: ""; */

    position: absolute;

    right: -10px;
    bottom: 3px;

    width: 13px;
    height: 13px;

    border-radius: 50%;

    background: #ff8614;
}


/* =========================================================
   SUBMIT BUTTON
========================================================= */

.antik-submit {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    min-width: 145px;
    height: 50px;

    margin-top: 4px;

    padding: 0 28px;

    border: 1px solid #ff8614;

    border-radius: 0;

    background: #ff8614;

    color: #ffffff;

    font-family: var(--subtext);
    font-size: 14px;
    font-weight: 600;

    text-decoration: none;

    cursor: pointer;

    transition:
        background .3s ease,
        color .3s ease,
        transform .3s ease;
}


.antik-submit:hover {
    background: #ffffff;

    color: #111111;

    transform: translateY(-2px);
}


/* =========================================================
   RIGHT INFORMATION
========================================================= */

.antik-contact-info {
    display: grid;

    grid-template-columns: 1fr 1.2fr;

    gap: 35px;

    margin-bottom: 45px;
}


.antik-info-title {
    margin: 0 0 18px;
    font-family: var(--primtext);
    font-size: 30px;
    font-weight: 400;
    line-height: 1.1;
    color: #ffffff;
}


.antik-info-text {
    margin: 0;
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 400;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.9);
}


.antik-info-text a {
    color: #ffffff;
    text-decoration: none;

    transition: color .3s ease;
}


.antik-info-text a:hover {
    color: #ff8614;
}


/* =========================================================
   MAP
========================================================= */

.antik-map-wrapper {
    position: relative;

    width: 100%;

    height: 390px;

    overflow: hidden;

    background: #ffffff;
}


.antik-map-wrapper iframe {
    width: 100%;
    height: 100%;

    display: block;

    border: 0;

    filter: grayscale(100%);
}


/* =========================================================
   MAP OVERLAY
========================================================= */

.antik-map-wrapper::after {
    content: "";

    position: absolute;

    inset: 0;

    pointer-events: none;

    box-shadow:
        inset 0 0 0 1px rgba(255, 255, 255, 0.7);
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991.98px) {

    .antik-contact {
        min-height: auto;
    }


    .antik-contact-container {

        min-height: auto;

        padding: 70px 30px;

        flex-direction: column;
    }


    .antik-contact-left,
    .antik-contact-right {

        width: 100%;

        padding: 0;
    }


    .antik-contact-left {
        margin-bottom: 70px;
    }


    .antik-contact-title {
        font-size: 44px;
    }


    .antik-contact-info {
        margin-bottom: 35px;
    }


    .antik-map-wrapper {
        height: 350px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 575.98px) {

    .antik-contact {

        background:
            linear-gradient(
                180deg,
                rgba(0, 0, 0, 0.88) 0%,
                rgba(0, 0, 0, 0.78) 100%
            ),
            url('https://gotra-web.goapp.my.id/web-upload/antikhospitality/1789719674-18-09-2026-JWkhnFc3QsiU47EfRqa2lO80zptCZjo6.webp');

        background-position: center;
    }


    .antik-contact-container {

        padding: 60px 20px;

    }


    .antik-contact-left {

        margin-bottom: 60px;
    }


    .antik-contact-title {

        font-size: 36px;

        letter-spacing: -1px;

        margin-bottom: 12px;
    }


    .antik-contact-intro {

        font-size: 15px;

        line-height: 1.6;

        margin-bottom: 35px;
    }


    .antik-form-group {

        margin-bottom: 25px;
    }


    .antik-form-label {

        font-size: 13px;
    }


    .antik-form-input,
    .antik-form-textarea {

        font-size: 14px;
    }


    .antik-form-textarea {

        min-height: 110px;
    }


    .antik-submit {

        width: 100%;

        height: 48px;
    }


    .antik-contact-info {

        grid-template-columns: 1fr;

        gap: 35px;

        margin-bottom: 35px;
    }


    .antik-info-title {

        font-size: 27px;

        margin-bottom: 13px;
    }


    .antik-info-text {

        font-size: 14px;

        line-height: 1.65;
    }


    .antik-map-wrapper {

        height: 280px;
    }

}

</style>

<!-- =========================================================
     ANTIK HOSPITALITY — CONTACT US
========================================================= -->

<section class="page-hero">
	<div class="container-global">
	    <h1 class="page-hero-title">Contact Us</h1>
	    <div class="page-hero-breadcrumb">
	      <a href="<?= base_url() ?>">Home</a>
	      <span class="separator">&rarr;</span>
	      <span>Contact Us</span>
	    </div>
	</div>
</section>

<div class="partners-header py-5">


        <div class="partners-label">
            contact us
        </div>


        <h2 class="partners-title">
            Connect <strong> With Our Mahata</strong>
			<br>
 			Bali Team
        </h2>


        <p class="partners-description">
            We work with trusted partners who share our commitment to
            quality, thoughtful design, and meaningful experiences.
            Together, we create journeys and products that connect
            people with the best of Indonesia.
        </p>


    </div>

<section class="antik-contact">


    <div class="antik-contact-container">


        <!-- =================================================
             LEFT — CONTACT FORM
        ================================================== -->

        <div class="antik-contact-left">


            <!-- TITLE -->

            <h2 class="antik-contact-title">
                Contact Us
            </h2>


            <!-- INTRO -->

            <p class="antik-contact-intro">
                Do you want to work together,
                or talk about an idea? Let's do this.
            </p>



            <!-- FORM -->
				<?php

				if (isset($_POST['booking'])) {
				
				    // WhatsApp tujuan
				    $whatsapp = str_replace('+', '', $data->social->whatsapp);
				
				    // Ambil data form
				    $name = trim($_POST['name'] ?? '');
				    $email = trim($_POST['email'] ?? '');
				    $subject = trim($_POST['subject'] ?? '');
				    $message = trim($_POST['message'] ?? '');
				
				    // Susun pesan WhatsApp
				    $waMessage = "*New Email Inquiry*\n"
				        . "==============================\n"
				        . "Name : " . $name . "\n"
				        . "Email : " . $email . "\n"
				        . "Subject : " . $subject . "\n"
				        . "Message : " . ($message ?: '-') . "\n"
				        . "==============================";
				
				    // Redirect ke WhatsApp
				    header(
				        "Location: https://api.whatsapp.com/send?phone="
				        . $whatsapp
				        . "&text="
				        . urlencode($waMessage)
				    );
				
				    exit;
				}
				
				?>
				
				
				<form
				    class="antik-contact-form"
				    action=""
				    method="POST"
				>
				
				    <!-- NAME -->
				    <div class="antik-form-group">
				
				        <label
				            class="antik-form-label"
				            for="antik-name"
				        >
				            Your name
				        </label>
				
				        <input
				            type="text"
				            id="antik-name"
				            name="name"
				            class="antik-form-input"
				            required
				        >
				
				    </div>
				
				
				    <!-- EMAIL -->
				    <div class="antik-form-group">
				
				        <label
				            class="antik-form-label"
				            for="antik-email"
				        >
				            Your email
				        </label>
				
				        <input
				            type="email"
				            id="antik-email"
				            name="email"
				            class="antik-form-input"
				            required
				        >
				
				    </div>
				
				
				    <!-- SUBJECT -->
				    <div class="antik-form-group subject-group">
				
				        <label
				            class="antik-form-label"
				            for="antik-subject"
				        >
				            Subject
				        </label>
				
				        <input
				            type="text"
				            id="antik-subject"
				            name="subject"
				            class="antik-form-input"
				            required
				        >
				
				    </div>
				
				
				    <!-- MESSAGE -->
				    <div class="antik-form-group">
				
				        <label
				            class="antik-form-label"
				            for="antik-message"
				        >
				            Your message (optional)
				        </label>
				
				        <textarea
				            id="antik-message"
				            name="message"
				            class="antik-form-textarea"
				        ></textarea>
				
				    </div>
				
				
				    <!-- SUBMIT -->
				    <button
				        type="submit"
				        name="booking"
				        value="1"
				        class="antik-submit"
				    >
				        Send Now
				    </button>
				
				</form>


        </div>



        <!-- =================================================
             RIGHT — CONTACT INFORMATION
        ================================================== -->

        <div class="antik-contact-right">


            <!-- CONTACT INFORMATION -->

            <div class="antik-contact-info">


                <!-- LET'S TALK -->

                <div class="antik-info-column">

                    <h3 class="antik-info-title">
                        Let's Talk
                    </h3>

                    <p class="antik-info-text">

                        <!-- GANTI DENGAN NOMOR ANTIK HOSPITALITY -->

                        <a href="<?= $func->dm_email() ?>">
                            <?= $data->company->company_email ?>
                        </a>

                        <br>

                        <a href="tel:<?= $data->company->company_phone ?>">
                            <?= $data->company->company_phone ?>
                        </a>

                    </p>

                </div>



                <!-- VISIT US -->

                <div class="antik-info-column">

                    <h3 class="antik-info-title">
                        Visit Us
                    </h3>

                    <p class="antik-info-text">

                        <!-- GANTI DENGAN ALAMAT ANTIK HOSPITALITY -->

                        <?= $data->company->company_address ?>

                    </p>

                </div>


            </div>



            <!-- =================================================
                 MAP
            ================================================== -->

            <div class="antik-map-wrapper">

                <!--
                    GANTI src DENGAN GOOGLE MAPS EMBED ANTIK HOSPITALITY
                -->

                <iframe
                    src="<?= $data->google_maps ?>"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title=" Location"
                ></iframe>

            </div>


        </div>


    </div>


</section>