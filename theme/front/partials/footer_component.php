<?php
$flattenedMenu = flattenMenu($data->menu->primary_menu);
?>

<?php
$footer_logo = !empty($data->web->site_logo_alternative)
    ? $data->web->site_logo_alternative
    : '';
?>

<style>
#main-footer {
	background-color: var(--color2);
	color: #d1cbc1;
	padding: 5rem 0 2rem 0;
	border-top: 1px solid rgba(184, 142, 44, 0.2);

	.footer-container {
		max-width: 1320px;
		margin: 0 auto;
		padding: 0 2rem;
	}

	.footer-top-grid {
		display: grid;
		grid-template-columns: 2fr 1fr 1fr 1.5fr;
		gap: 3rem;
		margin-bottom: 4rem;

		@media (max-width: 1200px) {
			grid-template-columns: 2fr 1fr 1fr 1fr;
		}

		@media (max-width: 991px) {
			grid-template-columns: 1fr 1fr;
		}

		@media (max-width: 576px) {
			grid-template-columns: 1fr;
		}
	}

	.footer-brand {
		.brand-title {
			display: flex;
			align-items: center;
			gap: 0.75rem;
			color: #ffffff;
			margin-bottom: 1rem;

			img {
				height: 100px;
				width: auto;
			}

			.brand-icon {
				font-size: 1.8rem;
				color: var(--colors);
			}

			.brand-name {
				font-family: var(--subtext);
				font-size: 0.9rem;
				font-weight: 700;
				letter-spacing: 2px;
				text-transform: uppercase;
			}
		}

		.brand-sub {
			font-size: 0.88rem;
			color: #a39c91;
			line-height: 1.6;
			margin-bottom: 1.5rem;
			max-width: 320px;
		}

		.social-icons {
			display: flex;
			gap: 0.85rem;

			.social-btn {
				width: 38px;
				height: 38px;
				border-radius: 50%;
				border: 1px solid rgba(184, 142, 44, 0.3);
				color: #d1cbc1;
				display: flex;
				align-items: center;
				justify-content: center;
				transition: var(--transition);

				&:hover {
					background-color: var(--colors);
					border-color: var(--colors);
					color: #ffffff;
				}
			}
		}
	}

	.footer-col {
		.col-title {
			font-family: var(--subtext);
			font-size: 0.9rem;
			font-weight: 700;
			letter-spacing: 1.5px;
			text-transform: uppercase;
			color: #ffffff;
			margin-bottom: 1.25rem;
		}

		.footer-links {
			list-style: none;
			padding: 0;
			margin: 0;

			li {
				margin-bottom: 0.65rem;

				a {
					font-size: 0.88rem;
					color: #a39c91;
					transition: var(--transition);

					&:hover {
						color: var(--colors);
					}
				}
			}
		}

		.contact-info-list {
			list-style: none;
			padding: 0;
			margin: 0;

			li {
				display: flex;
				gap: 0.75rem;
				font-size: 0.88rem;
				color: #a39c91;
				margin-bottom: 0.85rem;

				i {
					color: var(--colors);
					margin-top: 0.25rem;
				}
			}
		}
	}

	.footer-bottom-bar {
		border-top: 1px solid rgba(255, 255, 255, 0.1);
		padding-top: 2rem;
		display: flex;
		justify-content: space-between;
		align-items: center;
		font-size: 0.82rem;
		color: #888177;

		@media (max-width: 768px) {
			flex-direction: column;
			gap: 1rem;
			text-align: center;
		}

		.footer-legal-links {
			display: flex;
			gap: 1.5rem;

			a {
				color: #888177;

				&:hover {
					color: var(--colors);
				}
			}
		}

		.footer-watermark {
			font-family: var(--primtext);
			font-size: 1.2rem;
			font-style: italic;
			color: var(--colors);
		}
	}
}


/* =========================================================
   HIDE SCROLL TO TOP
========================================================= */

.scroll-to-top {
	display: none;
}


/* =========================================================
   MOBILE FOOTER LOGO
========================================================= */

@media (max-width: 576px) {
	#main-footer {
		.footer-brand {
			.brand-title {
				img {
					height: 84px;
					width: auto;
					margin-left: -10px;
				}
			}
		}
	}
}


/* =========================================================
   FLOATING WHATSAPP
========================================================= */

.fixwa {
	position: fixed !important;
	left: auto !important;
	right: 24px !important;
	bottom: 24px !important;
	z-index: 99999 !important;
	width: auto !important;
}

.fixwa .share-icons {
	width: auto !important;
}

.fixwa .sosmed {
	display: flex;
	align-items: center;
}

.fixwa .whatsapp {
	position: relative;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	gap: 10px;
	min-height: 54px;
	padding: 7px 20px 7px 7px;
	background: #25D366;
	color: #fff !important;
	border: none;
	border-radius: 50px;
	text-decoration: none !important;
	box-shadow:
		0 8px 25px rgba(0, 0, 0, 0.18),
		0 3px 8px rgba(37, 211, 102, 0.15);
	transition:
		transform 0.3s ease,
		background 0.3s ease,
		box-shadow 0.3s ease;
}

.fixwa .whatsapp:hover {
	background: #20bd5a;
	color: #fff !important;
	text-decoration: none !important;
	transform: translateY(-3px);
	box-shadow:
		0 12px 30px rgba(0, 0, 0, 0.23),
		0 5px 15px rgba(37, 211, 102, 0.2);
}


/* WHATSAPP ICON */

.fixwa .whatsapp .wa-icon {
	position: relative;
	z-index: 2;
	width: 40px;
	height: 40px;
	min-width: 40px;
	display: flex;
	align-items: center;
	justify-content: center;
	background: #fff;
	color: #25D366;
	border-radius: 50%;
}

.fixwa .whatsapp .wa-icon i {
	display: block;
	margin: 0 !important;
	padding: 0 !important;
	background: transparent !important;
	color: #25D366 !important;
	font-size: 21px;
	line-height: 1;
	opacity: 1 !important;
}


/* WHATSAPP TEXT */

.fixwa .whatsapp .wa-text {
	position: relative;
	z-index: 2;
	display: flex;
	flex-direction: column;
	padding-right: 2px;
	line-height: 1.2;
	text-align: left;
}

.fixwa .whatsapp .wa-small {
	display: block;
	margin-bottom: 2px;
	font-family: var(--subtext);
	font-size: 10px;
	font-weight: 400;
	letter-spacing: 0.2px;
	color: rgba(255, 255, 255, 0.82);
}

.fixwa .whatsapp .wa-title {
	display: block;
	font-family: var(--subtext);
	font-size: 14px;
	font-weight: 600;
	letter-spacing: 0.1px;
	color: #fff;
}


/* WHATSAPP PULSE */

.fixwa .whatsapp::before {
	content: "";
	position: absolute;
	inset: 0;
	z-index: -1;
	border: 1px solid rgba(37, 211, 102, 0.65);
	border-radius: 50px;
	animation: whatsappPulse 2.2s infinite;
	pointer-events: none;
}

@keyframes whatsappPulse {
	0% {
		transform: scale(1);
		opacity: 0.65;
	}

	70% {
		transform: scale(1.09);
		opacity: 0;
	}

	100% {
		transform: scale(1.09);
		opacity: 0;
	}
}




/* =========================================================
   WHATSAPP CONTACT POPUP
========================================================= */

.fixwa .wa-popup {
	position: absolute;
	right: 0;
	bottom: 68px;
	width: 340px;
	background: var(--color2);
	border: 1px solid rgba(184, 142, 44, 0.25);
	border-radius: 16px;
	padding: 0;
	overflow: hidden;
	box-shadow:
		0 18px 45px rgba(0, 0, 0, 0.28),
		0 5px 15px rgba(0, 0, 0, 0.15);
	opacity: 0;
	visibility: hidden;
	transform: translateY(12px) scale(0.96);
	transform-origin: bottom right;
	transition:
		opacity 0.25s ease,
		visibility 0.25s ease,
		transform 0.25s ease;
}

.fixwa .wa-popup.active {
	opacity: 1;
	visibility: visible;
	transform: translateY(0) scale(1);
}

.fixwa .wa-popup-header {
	display: flex;
	align-items: flex-start;
	justify-content: space-between;
	padding: 18px 20px;
	background: rgba(184, 142, 44, 0.08);
	border-bottom: 1px solid rgba(184, 142, 44, 0.18);
}

.fixwa .wa-popup-heading {
	display: flex;
	flex-direction: column;
	gap: 3px;
}

.fixwa .wa-popup-heading strong {
	font-family: var(--subtext);
	font-size: 15px;
	font-weight: 600;
	color: #fff;
}

.fixwa .wa-popup-heading span {
	font-family: var(--subtext);
	font-size: 11px;
	color: #a39c91;
}

.fixwa .wa-popup-close {
	width: 28px;
	height: 28px;
	padding: 0;
	display: flex;
	align-items: center;
	justify-content: center;
	border: 1px solid rgba(255,255,255,0.12);
	border-radius: 50%;
	background: transparent;
	color: #a39c91;
	font-size: 18px;
	line-height: 1;
	cursor: pointer;
	transition: var(--transition);
}

.fixwa .wa-popup-close:hover {
	background: var(--colors);
	border-color: var(--colors);
	color: #fff;
}

.fixwa .wa-contact-list {
	padding: 10px;
}

.fixwa .wa-contact-item {
	display: flex;
	align-items: center;
	gap: 12px;
	width: 100%;
	padding: 12px;
	border-radius: 10px;
	text-decoration: none !important;
	transition: var(--transition);
}

.fixwa .wa-contact-item:hover {
	background: rgba(255,255,255,0.05);
}

.fixwa .wa-contact-icon {
	width: 40px;
	height: 40px;
	min-width: 40px;
	display: flex;
	align-items: center;
	justify-content: center;
	border-radius: 50%;
	background: rgba(37, 211, 102, 0.12);
	color: #25D366;
	font-size: 18px;
}

.fixwa .wa-contact-info {
	display: flex;
	flex-direction: column;
	flex: 1;
	text-align: left;
}

.fixwa .wa-contact-info strong {
	font-family: var(--subtext);
	font-size: 13px;
	font-weight: 600;
	color: #fff;
}

.fixwa .wa-contact-info span {
	margin-top: 2px;
	font-family: var(--subtext);
	font-size: 11px;
	color: #a39c91;
}

.fixwa .wa-contact-arrow {
	color: #77716a;
	font-size: 12px;
	transition: var(--transition);
}

.fixwa .wa-contact-item:hover .wa-contact-arrow {
	color: var(--colors);
	transform: translateX(3px);
}

/* =========================================================
   WHATSAPP MOBILE
========================================================= */

@media (max-width: 576px) {
	.fixwa {
		right: 18px !important;
		bottom: 18px !important;
	}

	.fixwa .whatsapp {
		width: 56px;
		height: 56px;
		min-height: 56px;
		padding: 0;
		gap: 0;
		border-radius: 50%;
	}

	.fixwa .whatsapp .wa-icon {
		width: 56px;
		height: 56px;
		min-width: 56px;
		background: transparent;
		color: #fff;
	}

	.fixwa .whatsapp .wa-icon i {
		color: #fff !important;
		font-size: 27px;
	}

	.fixwa .whatsapp .wa-text {
		display: none;
	}

	.fixwa .whatsapp::before {
		border-radius: 50%;
	}
}
</style>


<footer id="main-footer">

	<div class="footer-container">

		<div class="footer-top-grid">


			<!-- BRAND -->

			<div class="footer-brand">

				<div class="brand-title">

					<img
						src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1790390654-26-09-2026-mb39LQYlsgkXFPcSK0yjtRpGUJCaBxv4.png"
						alt="Matahari Cahaya Dewata"
					>

				</div>

				<p class="brand-sub">
					Bali Handmade Craft Manufacture & Wholesale Supplier exporting worldwide.
				</p>


				<div class="social-icons">

					<?php if (!empty($data->social->facebook_url)): ?>

						<a
							href="<?= $data->social->facebook_url ?>"
							class="social-btn"
							target="_blank"
							rel="noopener noreferrer"
							aria-label="Facebook"
						>
							<i class="fa-brands fa-facebook-f"></i>
						</a>

					<?php endif; ?>


					<?php if (!empty($data->social->instagram_url)): ?>

						<a
							href="<?= $data->social->instagram_url ?>"
							class="social-btn"
							target="_blank"
							rel="noopener noreferrer"
							aria-label="Instagram"
						>
							<i class="fa-brands fa-instagram"></i>
						</a>

					<a
							href="https://www.instagram.com/mahata_bali/"
							class="social-btn"
							target="_blank"
							rel="noopener noreferrer"
							aria-label="Instagram"
						>
							<i class="fa-brands fa-instagram"></i>
						</a>

					<?php endif; ?>

				</div>

			</div>


			<!-- PRODUCTS INTEREST -->

			<div class="footer-col">

				<h4 class="col-title">
					Products Interest
				</h4>

				<ul class="footer-links">

					<li>
						<a href="<?= base_url() ?>category/vase">
							Vase
						</a>
					</li>

					<li>
						<a href="<?= base_url() ?>category/bowl">
							Bowl
						</a>
					</li>

					<li>
						<a href="<?= base_url() ?>category/mirror">
							Mirror
						</a>
					</li>

					<li>
						<a href="<?= base_url() ?>category/wall-art">
							Wall Art
						</a>
					</li>

					<li>
						<a href="<?= base_url() ?>category/basket">
							Basket
						</a>
					</li>

					<li>
						<a href="<?= base_url() ?>category/bookend">
							Bookend
						</a>
					</li>

					<li>
						<a href="<?= base_url() ?>category/candle-holder">
							Candle Holder
						</a>
					</li>

					<li>
						<a href="<?= base_url() ?>category/jewelry-box">
							Jewelry Box
						</a>
					</li>

					<li>
						<a href="<?= base_url() ?>category/table-top">
							Table Top
						</a>
					</li>

					<li>
						<a href="<?= base_url() ?>category/tray">
							Tray
						</a>
					</li>

				</ul>

			</div>


			<!-- COMPANY -->

			<div class="footer-col">

				<h4 class="col-title">
					Company
				</h4>

				<ul class="footer-links">

					<li>
						<a href="<?= base_url() ?>about-us">
							About Us
						</a>
					</li>

					<li>
						<a href="<?= base_url() ?>faq">
							FAQ
						</a>
					</li>

					<li>
						<a href="<?= base_url() ?>company-goals">
							Company Goals
						</a>
					</li>

					<li>
						<a href="<?= base_url() ?>partner">
							Partner
						</a>
					</li>

					<li>
						<a href="<?= base_url() ?>certificate">
							Certificate
						</a>
					</li>

					<li>
						<a href="<?= base_url() ?>contact">
							Contact
						</a>
					</li>

				</ul>

			</div>


			<!-- CONTACT -->

			<div class="footer-col">

				<h4 class="col-title">
					Contact Us
				</h4>

				<ul class="contact-info-list">

					<?php if (!empty($data->company->company_address)): ?>

						<li>
							<i class="fa-solid fa-location-dot"></i>

							<span>
								<?= $data->company->company_address ?>
							</span>
						</li>

					<?php endif; ?>


					<?php if (!empty($data->company->company_email)): ?>

						<li>
							<i class="fa-solid fa-envelope"></i>

							<span>
								<?= $data->company->company_email ?>
							</span>
						</li>

					<?php endif; ?>


					<?php if (!empty($data->company->company_telp)): ?>

						<li>
							<i class="fa-brands fa-whatsapp"></i>

							<span>
								<?= $data->company->company_telp ?>
							</span>
						</li>

					<?php endif; ?>


					<li>
						<i class="fa-brands fa-whatsapp"></i>

						<span>
							+6281139607688
						</span>
					</li>

				</ul>

			</div>

		</div>


		<!-- FOOTER BOTTOM -->

		<div class="footer-bottom-bar">

			<div>
				&copy; 2026 PT. Matahari Cahya Dewata. All rights reserved.
			</div>


			<div class="footer-watermark">
				Crafting a Brighter Tomorrow
			</div>


			<div class="footer-legal-links">

				<a href="#">
					Privacy Policy
				</a>

				<a href="#">
					Terms & Conditions
				</a>

			</div>

		</div>

	</div>

</footer>


<!-- =========================================================
     FLOATING WHATSAPP
========================================================= -->

<div class="fixwa">

	<div class="share-icons">

		<div id="sosmed" class="sosmed">

			<!-- WHATSAPP POPUP -->
			<div class="wa-popup" id="waPopup">

				<div class="wa-popup-header">
					<div class="wa-popup-heading">
						<strong>Need Assistance?</strong>
						<span>Choose a WhatsApp contact</span>
					</div>

					<button
						type="button"
						class="wa-popup-close"
						id="waPopupClose"
						aria-label="Close WhatsApp contacts"
					>
						&times;
					</button>
				</div>

				<div class="wa-contact-list">

					<!-- WHATSAPP 1 -->
					<a
						class="wa-contact-item"
						href="https://api.whatsapp.com/send/?phone=<?= $data->social->whatsapp ?>&text=Hello%2C%20I%E2%80%99m%20interested%20in%20Matahari%20Craft%20products.%20Could%20you%20please%20share%20more%20details%20about%20your%20products%2C%20wholesale%20orders%2C%20and%20ordering%20process%3F&type=phone_number&app_absent=0"
						target="_blank"
						rel="noopener noreferrer"
					>
						<span class="wa-contact-icon">
							<i class="fab fa-whatsapp"></i>
						</span>

						<span class="wa-contact-info">
							<strong>WhatsApp 1</strong>
							<span><?= $data->social->whatsapp ?></span>
						</span>

						<i class="fa-solid fa-chevron-right wa-contact-arrow"></i>
					</a>

					<!-- WHATSAPP 2 -->
					<a
						class="wa-contact-item"
						href="https://api.whatsapp.com/send/?phone=6281139607688&text=Hello%2C%20I%E2%80%99m%20interested%20in%20Matahari%20Craft%20products.%20Could%20you%20please%20share%20more%20details%20about%20your%20products%2C%20wholesale%20orders%2C%20and%20ordering%20process%3F&type=phone_number&app_absent=0"
						target="_blank"
						rel="noopener noreferrer"
					>
						<span class="wa-contact-icon">
							<i class="fab fa-whatsapp"></i>
						</span>

						<span class="wa-contact-info">
							<strong>WhatsApp 2</strong>
							<span>+6281139607688</span>
						</span>

						<i class="fa-solid fa-chevron-right wa-contact-arrow"></i>
					</a>

				</div>

			</div>

			<!-- FLOATING BUTTON -->
			<button
				type="button"
				class="whatsapp"
				id="waToggle"
				title="Chat with us on WhatsApp"
				aria-label="Open WhatsApp contacts"
				aria-expanded="false"
			>
				<span class="wa-icon">
					<i class="fab fa-whatsapp"></i>
				</span>

				<span class="wa-text">
					<span class="wa-small">Need assistance?</span>
					<span class="wa-title">Chat With Us</span>
				</span>
			</button>

		</div>

	</div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {

	const footerSec = document.querySelector('#main-footer');

	if (footerSec && typeof motion !== 'undefined') {

		motion.animate(
			footerSec,
			{
				opacity: [0, 1]
			},
			{
				duration: 0.6
			}
		);

	}

});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

	const waToggle = document.getElementById('waToggle');
	const waPopup = document.getElementById('waPopup');
	const waPopupClose = document.getElementById('waPopupClose');

	if (!waToggle || !waPopup) {
		return;
	}

	waToggle.addEventListener('click', function (event) {
		event.stopPropagation();

		const isOpen = waPopup.classList.toggle('active');

		waToggle.setAttribute(
			'aria-expanded',
			isOpen ? 'true' : 'false'
		);
	});

	if (waPopupClose) {
		waPopupClose.addEventListener('click', function (event) {
			event.stopPropagation();

			waPopup.classList.remove('active');
			waToggle.setAttribute('aria-expanded', 'false');
		});
	}

	waPopup.addEventListener('click', function (event) {
		event.stopPropagation();
	});

	document.addEventListener('click', function () {
		waPopup.classList.remove('active');
		waToggle.setAttribute('aria-expanded', 'false');
	});

});
</script>

