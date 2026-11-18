<?php
$page_hero = [
    'id' => 'gallery-hero',
    'eyebrow' => 'Our Gallery',
    'title' => 'A Look at',
    'title_em' => 'The Bali Table',
    'description' => 'Discover catering moments, table details, private events, and menu presentations created for gatherings across Bali.',
    'image' => 'https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?auto=format&fit=crop&w=2000&q=85',
    'mobile_image' => 'https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?auto=format&fit=crop&w=1200&q=85'
];
?>

<?php
$page_hero_data = json_decode(json_encode($page_hero ?? []));
$page_hero_id = !empty($page_hero_data->id) ? $page_hero_data->id : 'page-hero';
$page_hero_eyebrow = !empty($page_hero_data->eyebrow) ? $page_hero_data->eyebrow : 'The Bali Table';
$page_hero_title = !empty($page_hero_data->title) ? $page_hero_data->title : 'The Bali Table';
$page_hero_title_em = !empty($page_hero_data->title_em) ? $page_hero_data->title_em : '';
$page_hero_description = !empty($page_hero_data->description) ? $page_hero_data->description : '';
$page_hero_image = !empty($page_hero_data->image) ? $page_hero_data->image : 'https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&w=2000&q=85';
$page_hero_mobile_image = !empty($page_hero_data->mobile_image) ? $page_hero_data->mobile_image : $page_hero_image;
?>

<style>
.page-hero {
    --page-hero-image: url("<?= htmlspecialchars($page_hero_image) ?>");
    --page-hero-mobile-image: url("<?= htmlspecialchars($page_hero_mobile_image) ?>");
    position: relative;
    display: flex;
    align-items: center;
    min-height: 620px;
    background:
        linear-gradient(90deg,
            rgba(25, 36, 18, 0.86) 0%,
            rgba(25, 36, 18, 0.67) 45%,
            rgba(25, 36, 18, 0.2) 78%),
        var(--page-hero-image) center / cover no-repeat;

    .container-global {
        padding-top: 140px;
        padding-bottom: 95px;
    }

    .page-hero-content {
        max-width: 760px;
    }

    .page-hero-eyebrow {
        margin-bottom: 20px;
        color: #dfc99e;
        font-size: 10px;
        font-weight: 600;
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

    p {
        max-width: 650px;
        margin: 0;
        color: rgba(255, 255, 255, 0.78);
        font-size: 16px;
        line-height: 1.9;
    }
}

@media (max-width: 767px) {
    .page-hero {
        min-height: 580px;
        background:
            linear-gradient(rgba(27, 39, 20, 0.74),
                rgba(27, 39, 20, 0.74)),
            var(--page-hero-mobile-image) center / cover;

        p {
            font-size: 14px;
        }
    }
}
</style>

<section class="page-hero section-entrance" id="<?= htmlspecialchars($page_hero_id) ?>">
    <div class="container-global">
        <div class="page-hero-content" data-motion-stagger>
            <div class="page-hero-eyebrow"><?= htmlspecialchars($page_hero_eyebrow) ?></div>
            <h1>
                <?= htmlspecialchars($page_hero_title) ?>
                <?php if (!empty($page_hero_title_em)): ?>
                <em><?= htmlspecialchars($page_hero_title_em) ?></em>
                <?php endif; ?>
            </h1>
            <?php if (!empty($page_hero_description)): ?>
            <p><?= htmlspecialchars($page_hero_description) ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php $gallery_full_grid = true; ?>

<?php
$gallery_data = !empty($data->result) ? $data->result : [
    [
        'title' => 'The Bali Table Catering Gallery',
        'url_img' => 'https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?auto=format&fit=crop&w=1200&q=85',
        'url_img_thumb' => 'https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?auto=format&fit=crop&w=1100&q=85',
        'content' => '',
        'created_at' => '2026-09-04'
    ],
    [
        'title' => 'Catering Food Bali',
        'url_img' => 'https://images.unsplash.com/photo-1541544741938-0af808871cc0?auto=format&fit=crop&w=1200&q=85',
        'url_img_thumb' => 'https://images.unsplash.com/photo-1541544741938-0af808871cc0?auto=format&fit=crop&w=800&q=85',
        'content' => '',
        'created_at' => '2026-09-04'
    ],
    [
        'title' => 'Food Catering Ubud',
        'url_img' => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1200&q=85',
        'url_img_thumb' => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=800&q=85',
        'content' => '',
        'created_at' => '2026-09-04'
    ],
    [
        'title' => 'Private Event Catering',
        'url_img' => 'https://images.unsplash.com/photo-1498579809087-ef1e558fd1da?auto=format&fit=crop&w=1200&q=85',
        'url_img_thumb' => 'https://images.unsplash.com/photo-1498579809087-ef1e558fd1da?auto=format&fit=crop&w=800&q=85',
        'content' => '',
        'created_at' => '2026-09-04'
    ],
    [
        'title' => 'Dining Event Bali',
        'url_img' => 'https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=1200&q=85',
        'url_img_thumb' => 'https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=800&q=85',
        'content' => '',
        'created_at' => '2026-09-04'
    ]
];
$gallery_data = json_decode(json_encode($gallery_data));
$gallery_is_full_grid = !empty($gallery_full_grid);
$gallery_grid = $gallery_is_full_grid ? $gallery_data : array_slice($gallery_data, 0, 5);
?>

<style>
    .gallery-section {
        background: var(--surface);

        .container-global {
            padding-top: 110px;
            padding-bottom: 110px;
        }

        .gallery-header {
            align-items: flex-end;
            margin-bottom: 48px;
        }

        .gallery-header-action {
            display: flex;
            justify-content: flex-end;
            margin-top: 24px;
        }

        .gallery-layout {
            row-gap: 30px;
        }

        .gallery-side-grid {
            row-gap: 30px;
        }

        .gallery-full-grid {
            row-gap: 30px;
        }

        .gallery-item {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden;
            border: 0;
            background: var(--colors);
            cursor: zoom-in;

            &::after {
                content: "";
                position: absolute;
                inset: 0;
                background: rgba(31, 44, 24, 0);
                transition: var(--transition);
            }

            &:hover {
                &::after {
                    background: rgba(31, 44, 24, 0.16);
                }

                img {
                    transform: scale(1.04);
                }
            }

            img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: 0.6s ease;
            }
        }

        .gallery-big {
            height: 600px;
        }

        .gallery-small {
            height: 285px;
        }

        .gallery-grid-item {
            height: 360px;
        }

        .text-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--colors);
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 2px;
            line-height: 1.2;
            text-transform: uppercase;

            &:hover {
                color: #aa8c59;
            }
        }
    }

    .gallery-lightbox {
        .modal-dialog {
            max-width: min(1080px, calc(100vw - 32px));
        }

        .modal-content {
            border: 0;
            border-radius: 0;
            background: transparent;
        }

        .modal-body {
            padding: 0;
            background: #0f160d;
        }

        .gallery-lightbox-close {
            position: absolute;
            z-index: 6;
            top: -44px;
            right: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border: 1px solid rgba(255, 255, 255, 0.32);
            background: rgba(15, 22, 13, 0.72);
            color: var(--light);
            font-size: 18px;
        }

        .carousel-item img {
            width: 100%;
            height: min(78vh, 760px);
            object-fit: contain;
            background: #0f160d;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 58px;
            opacity: 1;
        }

        .gallery-lightbox-caption {
            padding: 16px 22px;
            background: var(--surface);
            color: var(--colors);
            font-family: var(--primtext);
            font-size: 24px;
            line-height: 1.2;
        }
    }

    @media (max-width: 991px) {
        .gallery-section {
            .gallery-header-action {
                justify-content: flex-start;
            }

            .gallery-big {
                height: 520px;
            }

            .gallery-grid-item {
                height: 320px;
            }
        }
    }

    @media (max-width: 575px) {
        .gallery-section {
            .container-global {
                padding-top: 72px;
                padding-bottom: 72px;
            }

            .gallery-header {
                margin-bottom: 34px;
            }

            .gallery-big,
            .gallery-small,
            .gallery-grid-item {
                height: 260px;
            }
        }

        .gallery-lightbox {
            .carousel-control-prev,
            .carousel-control-next {
                width: 42px;
            }

            .gallery-lightbox-caption {
                font-size: 20px;
            }
        }
    }
</style>

<section class="gallery-section section-entrance" id="gallery">
    <div class="container-global">
        <div class="row gallery-header">
            <div class="col-lg-8">
                <div class="eyebrow">Our Gallery</div>
                <h2 class="section-title mb-0">
                    A Look at
                    <em>The Bali Table</em>
                </h2>
            </div>
            <div class="col-lg-4 gallery-header-action">
                <a href="#gallery" class="text-link">
                    View Gallery
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
        </div>
        <?php if ($gallery_is_full_grid): ?>
            <div class="row gallery-full-grid">
                <?php foreach ($gallery_grid as $index => $items): ?>
                    <?php
                    $gallery_image = !empty($items->url_img_thumb) ? $items->url_img_thumb : ($items->url_img ?? 'https://images.unsplash.com/photo-1541544741938-0af808871cc0?auto=format&fit=crop&w=800&q=85');
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <button class="gallery-item gallery-grid-item" type="button" data-toggle="modal" data-target="#galleryLightbox" data-gallery-index="<?= htmlspecialchars((string) $index) ?>" data-motion-stagger>
                            <img src="<?= htmlspecialchars($gallery_image) ?>" alt="<?= htmlspecialchars($items->title) ?>" loading="lazy">
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="row gallery-layout">
                <?php if (!empty($gallery_grid[0])): ?>
                    <?php
                    $gallery_image = !empty($gallery_grid[0]->url_img_thumb) ? $gallery_grid[0]->url_img_thumb : ($gallery_grid[0]->url_img ?? 'https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?auto=format&fit=crop&w=1100&q=85');
                    ?>
                    <div class="col-lg-6">
                        <button class="gallery-item gallery-big" type="button" data-toggle="modal" data-target="#galleryLightbox" data-gallery-index="0" data-motion-stagger>
                            <img src="<?= htmlspecialchars($gallery_image) ?>" alt="<?= htmlspecialchars($gallery_grid[0]->title) ?>" loading="lazy">
                        </button>
                    </div>
                <?php endif; ?>
                <div class="col-lg-6">
                    <div class="row gallery-side-grid">
                        <?php foreach (array_slice($gallery_grid, 1, 4) as $index => $items): ?>
                            <?php
                            $gallery_image = !empty($items->url_img_thumb) ? $items->url_img_thumb : ($items->url_img ?? 'https://images.unsplash.com/photo-1541544741938-0af808871cc0?auto=format&fit=crop&w=800&q=85');
                            $gallery_index = $index + 1;
                            ?>
                            <div class="col-md-6">
                                <button class="gallery-item gallery-small" type="button" data-toggle="modal" data-target="#galleryLightbox" data-gallery-index="<?= htmlspecialchars((string) $gallery_index) ?>" data-motion-stagger>
                                    <img src="<?= htmlspecialchars($gallery_image) ?>" alt="<?= htmlspecialchars($items->title) ?>" loading="lazy">
                                </button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<div class="modal fade gallery-lightbox" id="galleryLightbox" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button class="gallery-lightbox-close" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="modal-body">
                <div id="galleryLightboxCarousel" class="carousel slide" data-ride="false" data-interval="false">
                    <div class="carousel-inner">
                        <?php foreach ($gallery_data as $index => $items): ?>
                            <?php
                            $gallery_image = !empty($items->url_img) ? $items->url_img : ($items->url_img_thumb ?? 'https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?auto=format&fit=crop&w=1200&q=85');
                            ?>
                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                <img src="<?= htmlspecialchars($gallery_image) ?>" alt="<?= htmlspecialchars($items->title) ?>">
                                <div class="gallery-lightbox-caption"><?= htmlspecialchars($items->title) ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#galleryLightboxCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#galleryLightboxCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll("[data-gallery-index]").forEach(function (button) {
            button.addEventListener("click", function () {
                const index = Number(button.getAttribute("data-gallery-index")) || 0;

                if (window.jQuery) {
                    window.jQuery("#galleryLightboxCarousel").carousel(index);
                }
            });
        });
    });
</script>
