<?php
$menu_image = !empty($items->img_cover_url) ? $items->img_cover_url : 'https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=900&q=85';
?>

<article onclick="window.location.replace('<?= base_url() ?>view/<?= $items->slug ?>');" class="menu-card" data-motion-hover data-motion-stagger>
<style>

	.menu-card {
		height: 100%;
		overflow: hidden;
		cursor: pointer;
		border: 1px solid #e9e3d8;
		background: var(--light);
		transition: 0.3s ease;

		&:hover {
			box-shadow: 0 20px 50px rgba(34, 48, 24, 0.08);
			transform: translateY(-7px);

			img {
				transform: scale(1.05);
			}
		}
	}

	.menu-card-image {
		height: 300px;
		overflow: hidden;

		img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			transition: 0.5s ease;
		}
	}

	.menu-card-content {
		padding: 30px;

		span {
			color: #a58b5c;
			font-size: 9px;
			letter-spacing: 2px;
			line-height: 1.2;
			text-transform: uppercase;
		}

		h3 {
			margin: 8px 0;
			color: var(--colors);
			font-family: var(--primtext);
			font-size: 31px;
			font-weight: 500;
			line-height: 1.15;
		}
	}

	.menu-description {
		min-height: 68px;
		max-height: 78px;
		margin-bottom: 20px;
		overflow: hidden;
		color: var(--muted);
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



    @media (max-width: 575px) {

		.menu-card-image {
			height: 260px;
		}

		.menu-card-content {
			padding: 24px;
		}

		.menu-card-content h3 {
			font-size: 28px;
		}
	
    }
</style>
    <div class="menu-card-image">
        <img src="<?= htmlspecialchars($menu_image) ?>" alt="<?= htmlspecialchars($items->title) ?>" loading="lazy">
    </div>
    <div class="menu-card-content">
        <span>Menu Collection</span>
        <h3><?= htmlspecialchars($items->title) ?></h3>
        <div class="menu-description">
            <?= $items->custom_field_1 ?>
        </div>
        <span class="text-link">
            View Menu
            <i class="fa-solid fa-arrow-right-long"></i>
        </a>
    </div>
</article>
