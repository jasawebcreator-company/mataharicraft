<style>
    .service-single-hero {
        position: relative;
        display: flex;
        align-items: center;
        min-height: 700px;
        background:
            linear-gradient(
                90deg,
                rgba(25, 36, 18, 0.86) 0%,
                rgba(25, 36, 18, 0.67) 45%,
                rgba(25, 36, 18, 0.2) 78%
            ),
            url("<?= $data->result->img_cover_url ??  'https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?auto=format&fit=crop&w=2000&q=85' ?>") center / cover no-repeat;

        .container-global {
            padding-top: 135px;
            padding-bottom: 90px;
        }

        .service-hero-content {
            max-width: 780px;
        }

        .hero-category {
            margin-bottom: 20px;
            color: #dfc99e;
            font-size: 10px;
            letter-spacing: 4px;
            line-height: 1.2;
            text-transform: uppercase;
        }

        h1 {
            margin: 0 0 28px;
            color: var(--light);
            font-family: var(--primtext);
            font-size: clamp(52px, 7vw, 82px);
            font-weight: 500;
            line-height: 0.95;
        }

        h1 em {
            display: block;
            color: #dcc292;
            font-style: italic;
            font-weight: 400;
        }

        .hero-description {
            max-width: 650px;
            margin: 0 0 35px;
            color: rgba(255, 255, 255, 0.78);
            font-size: 16px;
            line-height: 1.9;
        }
    }

    @media (max-width: 767px) {
        .service-single-hero {
            min-height: 650px;
            background:
                linear-gradient(
                    rgba(27, 39, 20, 0.73),
                    rgba(27, 39, 20, 0.73)
                ),
                url("<?= $data->result->img_cover_url ??  'https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?auto=format&fit=crop&w=2000&q=85' ?>") center / cover;

            .hero-description {
                font-size: 14px;
            }
        }
    }
</style>

<section class="service-single-hero section-entrance" id="service-hero">
    <div class="container-global">
        <div class="service-hero-content" data-motion-stagger>
            <div class="hero-category"><?= $data->result->custom_field_2 ?></div>
            <h1>
                <?= $data->result->title ?>
            </h1>
            <p class="hero-description"><?= $data->result->custom_field_1 ?></p>
            <a href="#" class="btn-main"><?= $data->result->custom_field_3 !== '' ? $data->result->custom_field_3 : "Discuss Your Event" ?></a>
        </div>
    </div>
</section>



<!-- ================================= -->

<?php 
	$profile = null;

	if (!empty($data->addon_contents)) {
		foreach($data->addon_contents as $addon) {
			if ($addon->custom_field_1 == 'profile') {
				$profile = $addon;
			}
		}
	}

	
?>

<style>
    .service-intro-section {
        background: var(--light);

        .container-global {
            padding-top: 105px;
            padding-bottom: 105px;
        }

        .intro-image-wrap {
            position: relative;
            padding: 0 35px 35px 0;

            &::after {
                content: "";
                position: absolute;
                z-index: 0;
                right: 0;
                bottom: 0;
                width: calc(100% - 35px);
                height: calc(100% - 35px);
                border: 1px solid #d9c7a5;
            }
        }

        .intro-image {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 620px;
            object-fit: cover;
        }

        .intro-content {
            padding-left: 48px;

            p {
                max-width: 650px;
                margin: 0 0 22px;
                color: var(--muted);
                font-size: 15px;
                line-height: 1.9;
            }
        }
    }

    @media (max-width: 991px) {
        .service-intro-section {
            .intro-image-wrap {
                margin-bottom: 55px;
            }

            .intro-image {
                height: 520px;
            }

            .intro-content {
                padding-left: 0;
            }
        }
    }

    @media (max-width: 767px) {
        .service-intro-section {
            .intro-image {
                height: 440px;
            }
        }
    }
</style>

<?php if($profile != null): ?>
<section class="service-intro-section section-entrance" id="service-intro">
    <div class="container-global">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="intro-image-wrap" data-motion-stagger>
                    <img src="<?= $profile->img_cover_url ?? 'https://images.unsplash.com/photo-1555244162-803834f70033?auto=format&fit=crop&w=1200&q=85' ?>" class="intro-image" alt="<?= $data->result->title ?>">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="intro-content" data-motion-stagger>
                    <div class="eyebrow"><?= $profile->custom_field_2 ?></div>
                    <h2 class="section-title">
                        <?= $profile->name ?>
                    </h2>
                    <?= $profile->content ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>




<!-- ================================= -->

<?php 
	$highlights = null;

	if (!empty($data->addon_contents)) {
		foreach($data->addon_contents as $addon) {
			if ($addon->custom_field_1 == 'highlights') {
				$highlights = $addon;
			}
		}
	}
?>

<style>
    .service-highlights-section {
        background: var(--surface);

        .container-global {
            padding-top: 105px;
            padding-bottom: 105px;
        }

        .service-section-center {
            margin-bottom: 52px;
            text-align: center;

            .eyebrow {
                justify-content: center;
            }
        }

        .highlight-list {
            row-gap: 18px;
        }

        .highlight-card {
            height: 100%;
            padding: 35px 30px;
            border-top: 1px solid #d5c29e;
            transition: var(--transition);

            &:hover {
                background: var(--light);
                box-shadow: 0 15px 40px rgba(44, 60, 32, 0.06);
            }
        }

        .highlight-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            margin-bottom: 25px;
            border: 1px solid #ccb586;
            border-radius: 50%;
            color: var(--colors);
            font-size: 18px;
        }

        .highlight-card h3 {
            margin: 0 0 10px;
            color: var(--colors);
            font-family: var(--primtext);
            font-size: 28px;
            font-weight: 500;
            line-height: 1.15;
        }

        .highlight-card p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
        }
    }
</style>


<?php if($highlights != null): ?>
<section class="service-highlights-section section-entrance" id="service-highlights">
    <div class="container-global">
        <div class="service-section-center">
            <div class="eyebrow"><?= $highlights->custom_field_2 ?></div>
            <h2 class="section-title"><?= $highlights->name ?></h2>
        </div>
        <div class="row highlight-list">

			<?php foreach(json_decode($highlights->custom_fields) as $h): ?>
			
			<div class="col-lg-3 col-md-6">
                <div class="highlight-card" data-motion-hover data-motion-stagger>
                    <div class="highlight-icon"><i class="<?= $h->cells[0]->value ?>"></i></div>
                    <h3><?= $h->cells[1]->value ?></h3>
                    <p><?= $h->cells[2]->value ?></p>
                </div>
            </div>
			<?php endforeach; ?>
          
        </div>
    </div>
</section>
<?php endif; ?>




<!-- ================================= -->

<?php 
	$suitable = null;

	if (!empty($data->addon_contents)) {
		foreach($data->addon_contents as $addon) {
			if ($addon->custom_field_1 == 'suitable') {
				$suitable = $addon;
			}
		}
	}
?>


<style>
    .service-suitable-section {
        background: var(--light);

        .container-global {
            padding-top: 105px;
            padding-bottom: 105px;
        }

        .suitable-heading {
            margin-bottom: 48px;
        }

        .suitable-list {
            row-gap: 30px;
        }

        .suitable-card {
            position: relative;
            min-height: 390px;
            overflow: hidden;

            &::after {
                content: "";
                position: absolute;
                inset: 0;
                background: linear-gradient(to top, rgba(29, 41, 22, 0.82), rgba(29, 41, 22, 0.04) 65%);
            }

            &:hover {
                img {
                    transform: scale(1.05);
                }
            }

            img {
                width: 100%;
                height: 390px;
                object-fit: cover;
                transition: 0.5s ease;
            }
        }

        .suitable-content {
            position: absolute;
            z-index: 2;
            bottom: 0;
            left: 0;
            padding: 28px;
        }

        .suitable-content h3 {
            margin: 0 0 5px;
            color: var(--light);
            font-family: var(--primtext);
            font-size: 31px;
            font-weight: 500;
            line-height: 1.12;
        }

        .suitable-content p {
            margin: 0;
            color: rgba(255, 255, 255, 0.68);
            font-size: 12px;
            line-height: 1.7;
        }
    }

    @media (max-width: 767px) {
        .service-suitable-section {
            .suitable-card img {
                height: 360px;
            }
        }
    }
</style>

<?php if($suitable != null): ?>
<section class="service-suitable-section section-entrance" id="service-suitable">
    <div class="container-global">
        <div class="suitable-heading">
            <div class="eyebrow"><?= $suitable->custom_field_2 ?></div>
            <h2 class="section-title">
                <?= $suitable->name ?>
            </h2>
        </div>
        <div class="row suitable-list">

			<?php foreach(json_decode($suitable->custom_fields) as $s): ?>
            <div class="col-lg-4">
                <article class="suitable-card" data-motion-hover data-motion-stagger>
                    <img src="<?= $s->cells[0]->value ?? 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=900&q=85' ?>" alt="Meeting Catering Bali" loading="lazy">
                    <div class="suitable-content">
                        <h3><?= $s->cells[1]->value ?></h3>
                        <p><?= $s->cells[2]->value ?></p>
                    </div>
                </article>
            </div>
           <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>



<!-- ================================= -->

<?php 
	$includes = null;

	if (!empty($data->addon_contents)) {
		foreach($data->addon_contents as $addon) {
			if ($addon->custom_field_1 == 'includes') {
				$includes = $addon;
			}
		}
	}
?>



<style>
    .service-includes-section {
        background: #fbfaf7;

        .container-global {
            padding-top: 105px;
            padding-bottom: 105px;
        }

        .include-image {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        .include-list {
            padding: 0;
            margin: 0;
            list-style: none;

            li {
                display: flex;
                align-items: flex-start;
                gap: 15px;
                padding: 17px 0;
                border-bottom: 1px solid #e3ddd1;
				font-size: 1rem;
            }

            i {
                margin-top: 7px;
                color: #a78c5b;
            }

            span {
                color: #4d554a;
            }
        }
    }

    @media (max-width: 991px) {
        .service-includes-section {
            .include-image {
                height: 500px;
                margin-bottom: 45px;
            }
        }
    }
</style>

<?php if($includes != null): ?>

<section class="service-includes-section section-entrance" id="service-includes">
    <div class="container-global">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <img src="<?= $includes->img_cover_url ?>" class="include-image" alt="Corporate Event Catering" loading="lazy" data-motion-stagger>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div data-motion-stagger>
                    <div class="eyebrow"><?= $includes->custom_field_2 ?></div>
                    <h2 class="section-title">
                        <?= $includes->name ?>
                    </h2>
                    <ul class="include-list">
						<?php foreach(json_decode($includes->custom_fields) as $i): ?>
                        <li><i class="<?= $i->cells[0]->value ?>"></i><span><?= $i->cells[1]->value ?></span></li>
						<?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>






<style>
    .service-menu-options-section {
        background: var(--light);

        .container-global {
            padding-top: 105px;
            padding-bottom: 105px;
        }

        .service-section-center {
            margin-bottom: 52px;
            text-align: center;

            .eyebrow {
                justify-content: center;
            }
        }

        .menu-option-list {
            row-gap: 30px;
        }

        .menu-option {
            height: 100%;
            overflow: hidden;
            border: 1px solid #e7e0d3;
            background: var(--light);
            transition: var(--transition);

            &:hover {
                box-shadow: 0 18px 45px rgba(48, 67, 34, 0.07);
                transform: translateY(-6px);
            }

            img {
                width: 100%;
                height: 280px;
                object-fit: cover;
            }
        }

        .menu-option-content {
            padding: 30px;

            small {
                display: block;
                margin-bottom: 6px;
                color: #a28a5d;
                font-size: 9px;
                letter-spacing: 2px;
                line-height: 1.2;
                text-transform: uppercase;
            }

            h3 {
                margin: 0 0 10px;
                color: var(--colors);
                font-family: var(--primtext);
                font-size: 30px;
                font-weight: 500;
                line-height: 1.15;
            }

            p {
                margin: 0;
                color: var(--muted);
                font-size: 13px;
                line-height: 1.7;
            }
        }
    }

    @media (max-width: 767px) {
        .service-menu-options-section {
            .menu-option img {
                height: 250px;
            }
        }
    }
</style>

<section class="service-menu-options-section section-entrance" id="service-menu-options">
    <div class="container-global">
        <div class="service-section-center">
            <div class="eyebrow">Menu Options</div>
            <h2 class="section-title">
                Menus for
                <em>Your Team</em>
            </h2>
        </div>
        <div class="row menu-option-list">
            <div class="col-lg-4">
                <article class="menu-option" data-motion-hover data-motion-stagger>
                    <img src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=900&q=85" alt="Indonesian Corporate Catering" loading="lazy">
                    <div class="menu-option-content">
                        <small>Menu Option</small>
                        <h3>Indonesian Selection</h3>
                        <p>Indonesian dishes for group and corporate dining.</p>
                    </div>
                </article>
            </div>
            <div class="col-lg-4">
                <article class="menu-option" data-motion-hover data-motion-stagger>
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=900&q=85" alt="Western Corporate Catering" loading="lazy">
                    <div class="menu-option-content">
                        <small>Menu Option</small>
                        <h3>Western Selection</h3>
                        <p>Western menu options for business dining and events.</p>
                    </div>
                </article>
            </div>
            <div class="col-lg-4">
                <article class="menu-option" data-motion-hover data-motion-stagger>
                    <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=900&q=85" alt="Corporate Finger Food" loading="lazy">
                    <div class="menu-option-content">
                        <small>Menu Option</small>
                        <h3>Canapés & Bites</h3>
                        <p>Small food options for networking and social business events.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<style>
    .service-info-section {
        background: var(--surface);

        .container-global {
            padding-top: 105px;
            padding-bottom: 105px;
        }

        .service-section-center {
            margin-bottom: 52px;
            text-align: center;

            .eyebrow {
                justify-content: center;
            }
        }

        .info-list {
            row-gap: 30px;
        }

        .info-card {
            height: 100%;
            padding: 45px 35px;
            border: 1px solid #e4ddd0;
            background: var(--light);
        }

        .info-number {
            margin-bottom: 15px;
            color: #c7b28a;
            font-family: var(--primtext);
            font-size: 55px;
            line-height: 1;
        }

        .info-card h3 {
            margin: 0 0 15px;
            color: var(--colors);
            font-family: var(--primtext);
            font-size: 30px;
            font-weight: 500;
            line-height: 1.15;
        }

        .info-card p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
        }
    }
</style>

<section class="service-info-section section-entrance" id="service-info">
    <div class="container-global">
        <div class="service-section-center">
            <div class="eyebrow">Service Information</div>
            <h2 class="section-title">
                Planning Your
                <em>Corporate Catering</em>
            </h2>
        </div>
        <div class="row info-list">
            <div class="col-lg-4">
                <article class="info-card" data-motion-stagger>
                    <div class="info-number">01</div>
                    <h3>Service Style</h3>
                    <p>Catering format can be discussed according to the event schedule.</p>
                </article>
            </div>
            <div class="col-lg-4">
                <article class="info-card" data-motion-stagger>
                    <div class="info-number">02</div>
                    <h3>Guest Capacity</h3>
                    <p>Send the expected number of attendees when requesting your quotation.</p>
                </article>
            </div>
            <div class="col-lg-4">
                <article class="info-card" data-motion-stagger>
                    <div class="info-number">03</div>
                    <h3>Service Area</h3>
                    <p>Based in Ubud. Service availability depends on event location and requirements.</p>
                </article>
            </div>
        </div>
    </div>
</section>


<style>
    .service-options-section {
        background: var(--light);

        .container-global {
            padding-top: 105px;
            padding-bottom: 105px;
        }

        .option-list {
            display: grid;
        }

        .option-item {
            display: flex;
            gap: 20px;
            padding: 23px 0;
            border-bottom: 1px solid #e3ddd2;
        }

        .option-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            min-width: 45px;
            height: 45px;
            border: 1px solid #cdb88d;
            border-radius: 50%;
            color: var(--colors);
        }

        .option-item h3 {
            margin: 0 0 5px;
            color: var(--colors);
            font-family: var(--primtext);
            font-size: 23px;
            font-weight: 500;
            line-height: 1.2;
        }

        .option-item p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
        }
    }
</style>

<section class="service-options-section section-entrance" id="service-options">
    <div class="container-global">
        <div class="row">
            <div class="col-lg-5">
                <div data-motion-stagger>
                    <div class="eyebrow">Additional Options</div>
                    <h2 class="section-title">
                        Plan Around
                        <em>Your Event Format</em>
                    </h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="option-list">
                    <div class="option-item" data-motion-stagger>
                        <div class="option-icon"><i class="fa-solid fa-mug-hot"></i></div>
                        <div>
                            <h3>Refreshment Requirements</h3>
                            <p>Discuss refreshments required during your event.</p>
                        </div>
                    </div>
                    <div class="option-item" data-motion-stagger>
                        <div class="option-icon"><i class="fa-solid fa-cookie-bite"></i></div>
                        <div>
                            <h3>Snack Options</h3>
                            <p>Ask about food choices suitable for breaks and shorter gatherings.</p>
                        </div>
                    </div>
                    <div class="option-item" data-motion-stagger>
                        <div class="option-icon"><i class="fa-solid fa-leaf"></i></div>
                        <div>
                            <h3>Dietary Requests</h3>
                            <p>Share dietary requirements before finalising your menu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .service-needs-section {
        position: relative;
        display: flex;
        align-items: center;
        min-height: 620px;
        background:
            linear-gradient(
                rgba(40, 56, 30, 0.76),
                rgba(40, 56, 30, 0.76)
            ),
            url("https://images.unsplash.com/photo-1507501336603-6e31db2be093?auto=format&fit=crop&w=1800&q=85") center / cover;

        .container-global {
            padding-top: 105px;
            padding-bottom: 105px;
        }

        .need-content {
            max-width: 620px;

            .eyebrow {
                color: #dec89c;

                &::before {
                    background: #dec89c;
                }
            }

            h2 {
                margin: 0 0 25px;
                color: var(--light);
                font-family: var(--primtext);
                font-size: 58px;
                font-weight: 500;
                line-height: 1;
            }
        }

        .need-list {
            padding: 0;
            margin: 35px 0 0;
            list-style: none;

            li {
                display: flex;
                align-items: center;
                gap: 15px;
                padding: 12px 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.12);
                color: rgba(255, 255, 255, 0.85);
            }

            i {
                color: #d9c08e;
            }
        }
    }

    @media (max-width: 991px) {
        .service-needs-section {
            min-height: 600px;
        }
    }

    @media (max-width: 767px) {
        .service-needs-section {
            .need-content h2 {
                font-size: 45px;
            }
        }
    }
</style>

<section class="service-needs-section section-entrance" id="service-needs">
    <div class="container-global">
        <div class="need-content" data-motion-stagger>
            <div class="eyebrow">Before We Begin</div>
            <h2>
                Tell Us About
                Your Corporate Event
            </h2>
            <ul class="need-list">
                <li><i class="fa-regular fa-calendar"></i><span>Event date and schedule</span></li>
                <li><i class="fa-solid fa-location-dot"></i><span>Venue</span></li>
                <li><i class="fa-solid fa-users"></i><span>Number of attendees</span></li>
                <li><i class="fa-solid fa-utensils"></i><span>Catering format</span></li>
                <li><i class="fa-solid fa-leaf"></i><span>Dietary requirements</span></li>
                <li><i class="fa-regular fa-message"></i><span>Additional requirements</span></li>
            </ul>
        </div>
    </div>
</section>

<style>
    .service-terms-section {
        background: var(--surface);

        .container-global {
            padding-top: 105px;
            padding-bottom: 105px;
        }

        .service-section-center {
            margin-bottom: 52px;
            text-align: center;

            .eyebrow {
                justify-content: center;
            }
        }

        .terms-box {
            padding: 50px;
            border: 1px solid #e2dbce;
            background: var(--light);
        }

        .terms-list {
            padding: 0;
            margin: 0;
            list-style: none;

            li {
                position: relative;
                padding: 16px 0 16px 30px;
                border-bottom: 1px solid #e8e2d7;
                color: var(--muted);
                font-size: 13px;
                line-height: 1.7;

                &::before {
                    content: "";
                    position: absolute;
                    top: 27px;
                    left: 0;
                    width: 9px;
                    height: 1px;
                    background: #a68b59;
                }

                &:last-child {
                    border-bottom: 0;
                }
            }
        }
    }

    @media (max-width: 767px) {
        .service-terms-section {
            .terms-box {
                padding: 35px 25px;
            }
        }
    }
</style>

<section class="service-terms-section section-entrance" id="service-terms">
    <div class="container-global">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="service-section-center">
                    <div class="eyebrow">Important Information</div>
                    <h2 class="section-title">
                        Terms &
                        <em>Conditions</em>
                    </h2>
                </div>
                <div class="terms-box" data-motion-stagger>
                    <ul class="terms-list">
                        <li>Catering is subject to date and venue availability.</li>
                        <li>Final attendee numbers and menu selections must be confirmed in advance.</li>
                        <li>Event schedules should be provided before final service confirmation.</li>
                        <li>Dietary requirements should be submitted before the event.</li>
                        <li>Additional services may involve additional charges.</li>
                        <li>Payment and cancellation terms follow the confirmed quotation.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .service-single-cta {
        background: var(--colors);
        text-align: center;

        .container-global {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .eyebrow {
            color: #ddc594;
            justify-content: center;

            &::before {
                background: #ddc594;
            }
        }

        h2 {
            max-width: 850px;
            margin: 0 auto 25px;
            color: var(--light);
            font-family: var(--primtext);
            font-size: 65px;
            font-weight: 500;
            line-height: 1;
        }

        p {
            max-width: 650px;
            margin: 0 auto 35px;
            color: rgba(255, 255, 255, 0.67);
            font-size: 15px;
            line-height: 1.8;
        }

        .btn-main {
            border-color: #d3ba86;
            background: #d3ba86;
            color: #26371d;

            &:hover {
                border-color: var(--light);
                background: var(--light);
            }
        }
    }

    @media (max-width: 767px) {
        .service-single-cta {
            h2 {
                font-size: 48px;
            }
        }
    }
</style>

<section class="service-single-cta section-entrance" id="enquiry">
    <div class="container-global" data-motion-stagger>
        <div class="eyebrow">Corporate Catering</div>
        <h2>Planning a Company Event in Bali?</h2>
        <p>Share your date, venue, attendee numbers, schedule, and catering requirements with our team.</p>
        <a href="index.php#enquiry" class="btn-main">Request an Enquiry</a>
    </div>
</section>

