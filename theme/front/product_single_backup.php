<style>
	.detail-layout-container {
		padding: 80px 0 80px 0;
		background: white;

		.detail-header-row {
			display: flex;
			justify-content: space-between;
			align-items: flex-end;
			margin-bottom: 25px;

			.header-left {
				h1 {
					font-family: var(--subtext);
					font-size: 1.8rem;
					font-weight: 900;
					line-height: 1.15;
					color: var(--colors);
					letter-spacing: -1px;
					margin-bottom: 8px;
				}

				.location-meta {
					display: flex;
					align-items: center;
					gap: 6px;
					font-size: 0.85rem;
					color: var(--subtext);
					font-weight: 600;

					i {
						color: var(--colors);
					}
				}
			}

			.header-right {
				text-align: right;

				.rating-box {
					display: flex;
					align-items: center;
					gap: 6px;
					font-size: 0.85rem;
					font-weight: 700;
					color: var(--colors);

					i {
						color: #ffb400;
					}

					.reviews-count {
						color: var(--colors);
						text-decoration: underline;
					}
				}

				.booked-count {
					font-size: 0.8rem;
					color: var(--subtext);
					font-weight: 600;
					margin-top: 4px;
				}
			}
		}

		.gallery-collage {
			margin-bottom: 40px;

			.gallery-item {
				position: relative;
				overflow: hidden;
				border: 1.5px solid rgba(37, 211, 102, 0.15);
				outline: none;
				border-radius: 6px;

				img {
					width: 100%;
					height: 100%;
					object-fit: cover;
					transition: transform 0.4s ease;
				}

				&:hover img {
					transform: scale(1.05);
				}

				.gallery-more-overlay {
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					background-color: rgba(3, 10, 6, 0.75);
					display: flex;
					align-items: center;
					justify-content: center;
					cursor: pointer;
					z-index: 10;
					transition: background-color 0.3s ease;

					span {
						font-family: 'Montserrat', sans-serif;
						font-size: 2rem;
						font-weight: 900;
						color: #FFFFFF;
					}

					&:hover {
						background-color: rgba(3, 10, 6, 0.6);
					}
				}
			}
		}

		.detail-grid {
			display: flex;
			gap: 40px;

			.detail-left-col {
				flex: 1.4;

				.detail-content-body {
					font-size: 0.95rem;
					color: var(--subtext);
					line-height: 1.7;

					p {
						margin-bottom: 20px;
					}

					.bold-orange {
						color: var(--colors);
						font-weight: 700;
					}

					h3 {
						font-family: 'Montserrat', sans-serif;
						font-size: 1.25rem;
						font-weight: 800;
						color: var(--colors);
						margin-top: 35px;
						margin-bottom: 15px;
						letter-spacing: -0.2px;
					}

					ul {
						list-style: none;
						padding: 0;
						margin-bottom: 25px;

						li {
							position: relative;
							padding-left: 25px;
							margin-bottom: 10px;
							font-size: 0.92rem;

							&::before {
								content: '•';
								color: var(--colors);
								font-size: 1.3rem;
								position: absolute;
								left: 8px;
								top: -2px;
							}
						}
					}

					.price-table-wrapper {
						margin: 30px 0;
						border-radius: 6px;
						overflow: hidden;
						border: 1.5px solid rgba(37, 211, 102, 0.15);

						.price-table {
							width: 100%;
							border-collapse: collapse;
							background-color: #05120a;
							font-size: 0.82rem;

							th {
								background-color: var(--colors);
								color: #FFFFFF;
								font-weight: 800;
								text-transform: uppercase;
								font-size: 0.72rem;
								letter-spacing: 0.5px;
								padding: 14px 16px;
								text-align: left;
								border: none;
							}

							td {
								padding: 14px 16px;
								border-bottom: 1px solid rgba(255, 255, 255, 0.06);
								color: var(--subtext);
								font-weight: 600;

								&:first-child {
									color: #FFFFFF;
								}
							}

							tr:last-child td {
								border-bottom: none;
							}
						}
					}
				}
			}

			.detail-sidebar-col {
				flex: 0.6;
				min-width: 380px;

				.sidebar-wrapper {
					display: flex;
					flex-direction: column;
					gap: 25px;
					position: sticky;
					top: 120px;
					align-self: start;

					.sidebar-card {
						background-color: white;
						border-radius: 8px;
						padding: 30px 24px;
						border: 1px solid rgba(0, 0, 0, 0.1);
						h3 {
							font-size: 1.15rem;
							color: var(--colors);
							margin-bottom: 20px;
							letter-spacing: 0.5px;
							border-bottom: 1.5px solid rgba(255, 95, 0, 0.15);
							padding-bottom: 8px;
						}

						.sidebar-start-price {
							font-size: 0.9rem;
							color: var(--subtext);
							margin-bottom: 15px;
							font-weight: 600;

							span {
								color: var(--colors);
								font-size: 1.45rem;
								font-weight: 800;
								margin-left: 5px;
							}
						}

						.sidebar-info-bullets {
							display: flex;
							flex-direction: column;
							gap: 12px;
							margin-bottom: 25px;

							.info-bullet-item {
								display: flex;
								align-items: center;
								gap: 10px;
								font-size: 0.8rem;
								color: black;
								font-weight: 700;

								i {
									color: var(--colors);
									font-size: 14px;
								}
							}
						}

						.btn-booking-now {
							width: 100%;
							height: 46px;
							background-color: var(--colors);
							border: 1.5px solid var(--colors);
							color: #FFFFFF;
							font-size: 0.8rem;
							font-weight: 800;
							letter-spacing: 1px;
							border-radius: 4px;
							cursor: pointer;
							transition: all 0.3s ease;
							display: flex;
							align-items: center;
							justify-content: center;
							text-decoration: none;

							&:hover {
								background-color: black;
								color: white;
								border-color: black;
								box-shadow: 0 5px 15px rgba(255, 95, 0, 0.2);
							}
						}

						.instant-box {
							margin-top: 15px;
							background-color: var(--colors);
							border-radius: 4px;
							padding: 15px;
							display: flex;
							align-items: flex-start;
							gap: 10px;

							i {
								color: #FFFFFF;
								font-size: 16px;
								margin-top: 2px;
							}

							.instant-text {
								display: flex;
								flex-direction: column;

								.instant-title {
									font-size: 0.78rem;
									font-weight: 800;
									color: #FFFFFF;
								}

								.instant-desc {
									font-size: 0.72rem;
									color: rgba(255, 255, 255, 0.8);
									margin-top: 1px;
								}
							}
						}

						.sidebar-links-list {
							display: flex;
							flex-direction: column;
							gap: 15px;

							.sidebar-link-item {
								display: flex;
								align-items: center;
								justify-content: space-between;
								color: var(--subtext);
								font-size: 0.82rem;
								font-weight: 600;
								text-decoration: none;
								transition: all 0.3s ease;
								border-bottom: 1px solid rgba(255, 255, 255, 0.04);
								padding-bottom: 12px;

								&:last-child {
									border-bottom: none;
									padding-bottom: 0;
								}

								i {
									font-size: 10px;
									transition: transform 0.3s ease;
								}

								&:hover {
									color: var(--colors);
									padding-left: 4px;

									i {
										transform: translateX(3px);
									}
								}
							}
						}

						.sidebar-contact-row {
							display: flex;
							flex-direction: column;
							gap: 12px;

							.contact-link {
								display: flex;
								align-items: center;
								gap: 10px;
								color: var(--subtext);
								font-size: 0.85rem;
								font-weight: 600;
								text-decoration: none;
								transition: color 0.3s ease;

								i {
									color: var(--colors);
									font-size: 14px;
								}

								&:hover {
									color: var(--colors);
								}
							}
						}
					}
				}
			}
		}
	}

	.lightbox-modal {
		display: none;
		position: fixed;
		top: 0;
		left: 0;
		width: 100vw;
		height: 100vh;
		background-color: rgba(3, 10, 6, 0.95);
		z-index: 9999;
		justify-content: center;
		align-items: center;

		.lightbox-close {
			position: absolute;
			top: 25px;
			right: 35px;
			background: none;
			border: none;
			color: #FFFFFF;
			font-size: 2.5rem;
			cursor: pointer;
			z-index: 10001;
			transition: color 0.3s ease;
			line-height: 1;

			&:hover {
				color: var(--colors);
			}
		}

		.lightbox-slider-container {
			width: 85%;
			max-width: 1000px;
			height: 75vh;
			display: flex;
			align-items: center;
		}

		.lightbox-slider {
			width: 100%;

			.lightbox-slide {
				outline: none;
				display: flex;
				justify-content: center;
				align-items: center;

				img {
					max-width: 100%;
					max-height: 70vh;
					object-fit: contain;
					border-radius: 4px;
					box-shadow: 0 10px 30px rgba(0, 0, 0, 0.8);
					margin: 0 auto;
				}
			}
		}

		.lightbox-arrow {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			background: rgba(255, 255, 255, 0.05);
			border: 1px solid rgba(255, 255, 255, 0.1);
			color: #FFFFFF;
			width: 50px;
			height: 50px;
			border-radius: 50%;
			cursor: pointer;
			display: flex;
			align-items: center;
			justify-content: center;
			z-index: 10000;
			transition: all 0.3s ease;

			&:hover {
				background-color: var(--colors);
				border-color: var(--colors);
			}

			&.lightbox-prev {
				left: 40px;
			}

			&.lightbox-next {
				right: 40px;
			}
		}
	}

	@media (min-width: 769px) {
		.gallery-collage {
			display: grid;
			grid-template-columns: 2fr 1fr 1fr;
			grid-template-rows: 1fr 1fr;
			gap: 6px;
			height: 440px;

			.gallery-item {
				display: block;
				cursor: pointer;

				&:nth-child(n+6) {
					display: none;
				}
			}

			.gallery-item-main {
				grid-row: 1 / 3;
			}
		}
	}

	@media (max-width: 1024px) {
		.detail-layout-container {
			.detail-grid {
				flex-direction: column;
				gap: 40px;
			}

			.detail-sidebar-col {
				width: 100%;
				min-width: unset;

				.sidebar-wrapper {
					position: static;
				}
			}
		}
	}

	@media (max-width: 768px) {
		.detail-layout-container {
			.detail-header-row {
				flex-direction: column;
				align-items: flex-start;
				gap: 15px;

				.header-right {
					text-align: left;
				}
			}

			.gallery-collage {
				display: block;
				height: auto;
				margin-bottom: 30px;

				.gallery-item {
					display: block !important;
					height: 280px;
					width: 100%;
					padding: 0 4px;
					border: none;

					.gallery-more-overlay {
						display: none !important;
					}

					img {
						width: 100%;
						height: 100%;
						object-fit: cover;
						border-radius: 6px;
						border: 1.5px solid rgba(37, 211, 102, 0.15);
					}
				}
			}

			.slick-dots {
				bottom: 15px;

				li {
					margin: 0 4px;

					button::before {
						color: #FFFFFF;
						opacity: 0.4;
						font-size: 8px;
					}

					&.slick-active button::before {
						color: var(--colors);
						opacity: 1;
						font-size: 10px;
					}
				}
			}
		}
	}

	@media (max-width: 560px) {
		.detail-layout-container {
			padding: 140px 0 80px 0;

			.gallery-collage {
				.gallery-item {
					height: 220px;
				}
			}

			.detail-header-row {
				.header-left h1 {
					font-size: 1.4rem;
				}
			}
		}
	}

	.tracks-wrapper {
		margin-block: 3rem;

		.trackstitle {
			font-family: var(--subtext);
			color: var(--colors);
			margin-bottom: 1rem;
		}

		.tracks {
			display: grid;
			grid-template-columns: repeat(1, 1fr);
			gap: 1rem;


			.track-card {
				border: 1px solid rgba(255, 255, 255, 0.05);
				border-bottom: 2px solid var(--colors);
				border-radius: 1rem;
				transition: all ease-in-out .3s;
				overflow: hidden;

				.image-wrapper {
					width: 100%;
					aspect-ratio: 16/10;

					img {
						width: 100%;
						height: 100%;
						object-fit: cover;
					}
				}

				.track-card-content {
					padding: clamp(1rem, 4vw, 1.8rem);

					.track-card-title {
						font-size: clamp(.9rem, 4vw, 1rem);
						margin-bottom: 1rem;

						i {
							color: var(--colors);
							transition: all ease-in-out .3s;
						}
					}

					.track-card-description {
						color: rgba(0, 0, 0, 0.5);
						font-size: .85rem;
						line-height: 1.8;
					}

				}


				&:hover {
					background-color: var(--colors);

					.track-card-title {
						color: white;
						i {
							color: var(--color3);
						}
					}

					.track-card-description {
						color: white;
					}
				}
			}

			@media (min-width: 768px) {
				grid-template-columns: repeat(2, 1fr);
			}
		}
	}

	.options-wrapper {
		margin-block: 3rem;

		.optionstitle {
			font-family: var(--subtext);
			color: var(--colors);
			margin-bottom: 1rem;
		}

		.options {
			display: grid;
			grid-template-columns: repeat(1, 1fr);
			gap: 1rem;

			.option-card {
				border: 1px solid rgba(255, 255, 255, 0.05);
				border-bottom: 2px solid var(--colors);
				border-radius: .4rem;
				padding: clamp(1rem, 4vw, 1.8rem);
				transition: all ease-in-out .3s;
				background-color: var(--colors);

				.option-card-title {
					font-size: clamp(.9rem, 4vw, 1rem);
					margin-bottom: 1rem;
					color: white;

					i {
						color: var(--colors);
						transition: all ease-in-out .3s;
					}
				}

				.option-card-description {
					color: rgba(255, 255, 255, 0.5);
					font-size: .85rem;
					line-height: 1.8;

					ul {
						padding-left: 1rem;
					}
				}

				&:hover {
					background-color: var(--colors);

					.option-card-title {
						i {
							color: var(--color3);
						}
					}
				}
			}
		}
	}

	.detail-collapsible-wrapper {
		margin-top: 40px;
		display: flex;
		flex-direction: column;
		gap: 15px;

		.collapsible-card {
			background-color: black;
			border: 1.5px solid rgba(37, 211, 102, 0.15);
			border-radius: 8px;
			overflow: hidden;
			transition: all 0.3s ease;

			&.collapsible-active {
				.collapsible-header {
					background-color: rgba(255, 95, 0, 0.03);

					.collapsible-toggle-icon i {
						color: var(--colors);
					}
				}
			}
		}

		.collapsible-header {
			padding: 22px 28px;
			display: flex;
			align-items: center;
			gap: 15px;
			cursor: pointer;
			user-select: none;
			transition: background-color 0.3s ease;

			.collapsible-toggle-icon {
				display: flex;
				align-items: center;
				justify-content: center;
				width: 20px;

				i {
					color: #FFFFFF;
					font-size: 14px;
					transition: color 0.3s ease;
				}
			}

			h4 {
				font-family: 'Montserrat', sans-serif;
				font-size: 1.1rem;
				font-weight: 800;
				color: #FFFFFF;
				margin: 0;
			}
		}

		.collapsible-body {
			display: none;
			padding: 0 28px 25px 28px;
			border-top: 1px solid rgba(255, 255, 255, 0.05);

			color: rgba(255, 255, 255, 0.5);
			font-size: 0.85rem;
			line-height: 1.8;

			ul {
				padding-left: 2rem;
			}

			strong {
				color: var(--colors);
			}

			.collapsible-item {
				display: flex;
				gap: 15px;
				align-items: flex-start;
				padding: 20px 0;
				border-bottom: 1px solid rgba(255, 255, 255, 0.05);

				&:last-child {
					border-bottom: none;
					padding-bottom: 0;
				}

				.item-icon {
					color: var(--colors);
					font-size: 16px;
					margin-top: 3px;
					display: flex;
					align-items: center;
				}

				.item-text {
					font-size: 0.88rem;
					line-height: 1.6;
					color: var(--subtext);

					strong {
						color: #FFFFFF;
						font-weight: 700;
						margin-right: 4px;
					}
				}
			}
		}
	}
</style>

<?php
$gallery_images = [];
$gallery_images[] = $data->result->img_cover_url;
foreach ($data->images as $image) {
	$gallery_images[] = $image->url;
}
$total_images = count($gallery_images);
?>

<div class="detail-layout-container">
	<div class="container-global">
		<div class="detail-header-row">
			<div class="header-left">
				<h1><?= $data->result->title ?></h1>
				<div class="location-meta">
					<i class="fa-solid fa-location-dot"></i>
					<span>Bali, Indonesia</span>
				</div>
			</div>
			<div class="header-right">
				<div class="rating-box">
					<i class="fa-solid fa-star"></i>
					<span>4.7 <span class="reviews-count">(100+ Reviews)</span></span>
				</div>
				<div class="booked-count">100+ Booked</div>
			</div>
		</div>

		<div class="gallery-collage">
			<?php foreach ($gallery_images as $index => $img_url): ?>
				<div class="gallery-item <?php echo $index === 0 ? 'gallery-item-main' : ''; ?>" data-index="<?php echo $index; ?>">
					<img src="<?php echo $img_url; ?>" alt="Gorilla Cave Adventure Image">
					<?php if ($index === 4 && $total_images > 5): ?>
						<div class="gallery-more-overlay">
							<span>+<?php echo ($total_images - 5); ?></span>
						</div>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="detail-grid">
			<div class="detail-left-col">
				<main class="detail-content-body">
					<?= $data->result->content ?>
				</main>
				<?php if($data->result->title == 'Bali Car Charter'): ?>

					<?php 
						$vehicle_options = []; 
						if (!empty($data->result->custom_fields)) {
							foreach(json_decode($data->result->custom_fields) as $custom) {
								if ($custom->cells[5]->value == "Vehicle Options") {
									array_push($vehicle_options, $custom);
								}
							}
						}
					?>

					<?php if(count($vehicle_options) != 0): ?>

						<style>
							.vehicle-options-container {
								display: flex;
								flex-direction: column;
								justify-content: start;
								gap: 2rem;
								margin-top: 2rem;

								.vehicle-options-card-wrapper {
									display: flex;
									flex-direction: column;
									justify-content: start;
									align-items: stretch;
									gap: 1rem;

									.vehicle-options-card {
										display: flex;
										justify-content: center;
										align-items: center;
										gap: 2rem;
										border: 1px solid rgba(0, 0, 0, 0.05);
										border-radius: 1rem;
										overflow: hidden;
										padding: .8rem;

										.vehicle-image {
											width: 40%;
										}
										.vehicle-options-card-content {
											flex: 1;
											display: flex;
											flex-direction: column;
											justify-content: center;
											align-items: start;
											gap: .4rem;

											.title {
												color: var(--colors);
												font-size: clamp(1rem, 4vw, 1.4rem);
											}
											.badges {
												display: flex;
												flex-wrap: wrap;
												gap: .6rem;

												.badge {
													display: flex;
													justify-content: center;
													align-items: center;
													gap: .6rem;
													border: 1px solid rgba(0, 0, 0, 0.05);
													padding: .6rem 1.4rem;
													border-radius: 999em;

													.badge-content {
														display: flex;
														flex-direction: column;
														justify-content: start;
														align-items: start;
														gap: .3rem;

														span {
															color: rgba(0, 0, 0, 0.5);
														}
													}

													& * {
														padding: 0;
														margin: 0;
													}
												}
											}

											.description {
												font-size: 14px;
												color: rgba(0, 0, 0, 0.7);
												margin-top: 1rem;
											}
										}
									}
								}
							}
						</style>
				
						<div class="vehicle-options-container">
							<h3 class="title">Vehicle Options & Rates</h3>

							<div class="vehicle-options-card-wrapper">
								<?php foreach($vehicle_options as $option): ?>
									<div class="vehicle-options-card">
										<img class="vehicle-image" src="<?= $option->image_url ?>" alt="vehicle options">
										<div class="vehicle-options-card-content">
											<h4 class="title"><?= $option->name ?></h4>
											<div class="badges">
												<div class="badge-rate badge">
													<!-- <i class="fas fa-star"></i> -->
													<div class="badge-rate-content badge-content">
														<span>Rate</span>
														<p><?= $option->cells[2]->value ?></p>
													</div>
												</div>
												<div class="badge-overtime badge">
													<!-- <i class="fas fa-star"></i> -->
													<div class="badge-overtime-content badge-content">
														<span>Overtime</span>
														<p><?= $option->cells[3]->value ?></p>
													</div>
												</div>
											</div>
											<p class="description"><?= $option->cells[4]->value ?></p>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>

				<?php endif; ?>

				<?php if (!empty($data->addon_contents)): ?>
					
					<?php 
						$point_of_interests = []; 
						foreach($data->addon_contents as $addon) {
							if ($addon->pay_id == 'track') {
								array_push($point_of_interests, $addon);
							}
						}
					?>

					<?php if(count($point_of_interests) != 0): ?>
						<div class="tracks-wrapper">
							<h3 class="trackstitle"><?= $data->result->title ?> - Points of Interest</h3>
							<div class="tracks">
								<?php foreach ($point_of_interests as $key => $addon): ?>
									<div class="track-card">
										<div class="image-wrapper">
											<img src="<?= $addon->img_cover_url ?>" alt="cover">
										</div>
										<div class="track-card-content">
											<h4 class="track-card-title"><i class="fa-solid fa-circle"></i> <?= $addon->name ?></h4>
											<div class="track-card-description"><?= $addon->content ?></div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>

				<?php if (!empty($data->addon_contents)): ?>
					<?php 
						$options_price = []; 
						foreach($data->addon_contents as $addon) {
							if ($addon->pay_id == 'option-price') {
								array_push($options_price, $addon);
							}
						}
					?>

					<?php if(count($options_price) != 0): ?>
					<div class="options-wrapper">
						<div class="options">
							<?php foreach ($options_price as $key => $addon): ?>
								<div class="option-card">
									<h4 class="option-card-title"><i class="fa-solid fa-wallet"></i> <?= $addon->name ?></h4>
									<div class="option-card-description"><?= $addon->content ?></div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<?php endif; ?>
				<?php endif; ?>

				<?php if (!empty($data->addon_contents)): ?>

					<?php 
						$generals = []; 
						foreach($data->addon_contents as $addon) {
							if ($addon->pay_id == 'general') {
								array_push($generals, $addon);
							}
						}
					?>
					<?php if(count($generals) != 0): ?>
					<div class="detail-collapsible-wrapper">
						<?php
						$is_first = true;
						foreach ($generals as $key => $addon):
						?>
							<div class="collapsible-card<?php echo $is_first ? ' collapsible-active' : ''; ?>">
								<div class="collapsible-header">
									<span class="collapsible-toggle-icon">
										<i class="fa-solid <?php echo $is_first ? 'fa-minus' : 'fa-plus'; ?>"></i>
									</span>
									<h4><?= $addon->name ?></h4>
								</div>
								<div class="collapsible-body" <?php echo $is_first ? 'style="display: block;"' : ''; ?>>
									<?= $addon->content ?>
								</div>
							</div>
							<?php
							$is_first = false;
							?>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
				<?php endif; ?>
			</div>

			<aside class="detail-sidebar-col">
				<div class="sidebar-wrapper">
					<div class="sidebar-card">
						<?php if($data->result->price != 0): ?>
						<div class="sidebar-start-price">
							From <span>IDR <?= number_format($data->result->price) ?></span>
						</div>
						<?php endif; ?>
						<div class="sidebar-info-bullets">
							<div class="info-bullet-item">
								<i class="fa-regular fa-calendar"></i>
								<span>Book now pay later</span>
							</div>
							<div class="info-bullet-item">
								<i class="fa-regular fa-thumbs-up"></i>
								<span>The Best Service Guarantee</span>
							</div>
						</div>

						<a href="<?= wa_message($data->web->site_name, $data->social->whatsapp, $data->result->title) ?>" target="_blank" class="btn-booking-now">
							<span>BOOKING NOW!</span>
						</a>

						<div class="instant-box">
							<i class="fa-regular fa-comments"></i>
							<div class="instant-text">
								<span class="instant-title">Instant Confirmation</span>
								<span class="instant-desc">Secure your spot while staying flexible</span>
							</div>
						</div>
					</div>

					<?php $func->sidebar('mainpost'); ?>

					<div class="sidebar-card">
						<h3>Contact Us</h3>
						<div class="sidebar-contact-row">
							<a href="tel:<?= $data->company->company_phone ?>" class="contact-link">
								<i class="fa-solid fa-phone"></i>
								<span><?= $data->company->company_phone ?></span>
							</a>
							<a href="<?= $func->dm_whatsapp() ?>" target="_blank" class="contact-link">
								<i class="fa-brands fa-whatsapp"></i>
								<span>+<?= $data->social->whatsapp ?></span>
							</a>
						</div>
					</div>
				</div>
			</aside>
		</div>
	</div>
</div>

<div class="lightbox-modal" id="lightbox-modal">
	<button class="lightbox-close" id="lightbox-close">&times;</button>
	<div class="lightbox-slider-container">
		<div class="lightbox-slider" id="lightbox-slider">
			<?php foreach ($gallery_images as $img_url): ?>
				<div class="lightbox-slide">
					<img src="<?php echo $img_url; ?>" alt="Zoomed Image">
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<button class="lightbox-prev lightbox-arrow"><i class="fa-solid fa-chevron-left"></i></button>
	<button class="lightbox-next lightbox-arrow"><i class="fa-solid fa-chevron-right"></i></button>
</div>

<script>
	document.addEventListener('DOMContentLoaded', () => {
		function initSlider() {
			const $gallery = $('.gallery-collage');
			if ($(window).width() <= 768) {
				if (!$gallery.hasClass('slick-initialized')) {
					$gallery.slick({
						slidesToShow: 1,
						slidesToScroll: 1,
						dots: false,
						arrows: false,
						infinite: true,
						adaptiveHeight: true
					});
				}
			} else {
				if ($gallery.hasClass('slick-initialized')) {
					$gallery.slick('unslick');
				}
			}
		}

		initSlider();

		$(window).on('resize', function() {
			initSlider();
		});

		$('.gallery-item').on('click', function() {
			if ($(window).width() > 768) {
				const index = $(this).data('index');
				$('#lightbox-modal').css('display', 'flex');
				const $slider = $('#lightbox-slider');
				if (!$slider.hasClass('slick-initialized')) {
					$slider.slick({
						slidesToShow: 1,
						slidesToScroll: 1,
						fade: true,
						cssEase: 'linear',
						arrows: true,
						prevArrow: $('.lightbox-prev'),
						nextArrow: $('.lightbox-next'),
						dots: false,
						infinite: true
					});
				}
				$slider.slick('slickGoTo', parseInt(index));
			}
		});

		$('#lightbox-close').on('click', function() {
			$('#lightbox-modal').hide();
		});

		$('#lightbox-modal').on('click', function(e) {
			if ($(e.target).hasClass('lightbox-modal') || $(e.target).hasClass('lightbox-slider-container') || $(e.target).hasClass('lightbox-slide')) {
				$('#lightbox-modal').hide();
			}
		});

		$(document).on('keydown', function(e) {
			if (e.key === 'Escape') {
				$('#lightbox-modal').hide();
			}
		});

		$('.collapsible-header').on('click', function() {
			const $card = $(this).closest('.collapsible-card');
			const $body = $card.find('.collapsible-body');
			const $icon = $(this).find('.collapsible-toggle-icon i');

			$card.toggleClass('collapsible-active');
			$body.slideToggle(300);

			if ($card.hasClass('collapsible-active')) {
				$icon.removeClass('fa-plus').addClass('fa-minus');
			} else {
				$icon.removeClass('fa-minus').addClass('fa-plus');
			}
		});
	});
</script>