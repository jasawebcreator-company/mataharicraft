<?php
$package_number = str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT);
$package_image = !empty($items->img_cover_url) ? $items->img_cover_url : 'https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=1000&q=85';
?>

<a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="service-card" data-motion-hover data-motion-stagger>
	<style>
    
	.service-card {
		position: relative;
		height: 500px;
		overflow: hidden;
		background: var(--colors);
		display: block;

		&::after {
			content: "";
			position: absolute;
			inset: 0;
			background: linear-gradient(
				to top,
				rgba(23, 32, 17, 0.87),
				rgba(23, 32, 17, 0.05) 65%
			);
		}

		&:hover {
			img {
				transform: scale(1.05);
			}
		}

		img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			transition: 0.6s ease;
		}
	}
	.service-content {
		position: absolute;
		z-index: 2;
		bottom: 0;
		left: 0;
		width: 100%;
		padding: 32px;
	}
	.service-number {
		margin-bottom: 8px;
		color: #ddc89c;
		font-family: var(--primtext);
		font-size: 22px;
		line-height: 1;
	}
	.service-content h3 {
		margin: 0 0 8px;
		color: var(--light);
		font-family: var(--primtext);
		font-size: 34px;
		font-weight: 500;
		line-height: 1.1;
	}
	.service-description {
		max-height: 72px;
		overflow: hidden;
		color: rgba(255, 255, 255, 0.7);
		font-size: 13px;
		line-height: 1.7;

		p,
		div,
		ul {
			margin: 0;
		}

		ul {
			padding-left: 18px;
		}
	}


    @media (max-width: 991px) {
		.service-card {
			height: 460px;
		}  
    }

    @media (max-width: 575px) {
		.service-card {
			height: 430px;
		}
		.service-content {
			padding: 24px;
		}
		.service-content h3 {
			font-size: 30px;
		}
    }
</style>
    <img src="<?= htmlspecialchars($package_image) ?>" alt="<?= htmlspecialchars($items->title) ?>" loading="lazy">
    <div class="service-content">
        <div class="service-number"><?= htmlspecialchars($package_number) ?></div>
        <h3><?= htmlspecialchars($items->title) ?></h3>
        <div class="service-description">
            <?= $items->custom_field_1 ?>
        </div>
    </div>
</a>
