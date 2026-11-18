<?php
$packages_data = !empty($item->data) ? $item->data : [
    [
        'title' => 'Wedding Catering',
        'img_cover_url' => 'https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=1000&q=85',
        'content' => '<div>Catering created around the style and scale of your wedding celebration.</div>',
        'created_at' => '2026-09-04'
    ],
    [
        'title' => 'Private Events',
        'img_cover_url' => 'https://images.unsplash.com/photo-1507501336603-6e31db2be093?auto=format&fit=crop&w=1000&q=85',
        'content' => '<div>Food and service for birthdays, anniversaries, family gatherings, and intimate celebrations.</div>',
        'created_at' => '2026-09-04'
    ],
    [
        'title' => 'Villa Catering',
        'img_cover_url' => 'https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=1000&q=85',
        'content' => '<div>Catering brought directly to your villa for relaxed dining and private gatherings.</div>',
        'created_at' => '2026-09-04'
    ]
];
$packages_data = json_decode(json_encode($packages_data));
?>

<style>
    .packages-section {
        background: var(--surface);

        .container-global {
            padding-top: 110px;
            padding-bottom: 110px;
        }

        .packages-header {
            margin-bottom: 48px;
        }

        .packages-header-copy {
            display: flex;
            align-items: flex-end;

            .section-text {
                margin-bottom: 0;
            }
        }

        .packages-grid {
            row-gap: 30px;
        }


        .packages-action {
            margin-top: 48px;
            text-align: center;
        }
    }

    @media (max-width: 991px) {
        .packages-section {
            .packages-header-copy {
                align-items: flex-start;
                margin-top: 18px;
            }

            .service-card {
                height: 460px;
            }
        }
    }

    @media (max-width: 575px) {
        .packages-section {
            .container-global {
                padding-top: 72px;
                padding-bottom: 72px;
            }

            .packages-header {
                margin-bottom: 34px;
            }

        }
    }
</style>

<section class="packages-section section-entrance" id="services">
    <div class="container-global">
        <div class="row packages-header">
            <div class="col-lg-7">
                <div class="eyebrow"><?= $subtitle ?></div>
                <h2 class="section-title">
                    <?= $title ?>
                </h2>
            </div>
            <div class="col-lg-5 packages-header-copy">
                <p class="section-text"><?= $subtitle_2 ?></p>
            </div>
        </div>
        <div class="row packages-grid">
            <?php foreach ($item->data as $index => $items): ?>
                <div class="col-lg-4 col-md-6">
                    <?php include 'card/service.php'; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="packages-action">
            <a href="<?= base_url() ?>our-service" class="btn-main">Explore Catering Services</a>
        </div>
    </div>
</section>
