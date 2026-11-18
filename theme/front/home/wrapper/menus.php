<?php
$menus_data = !empty($item->data) ? $item->data : [
    [
        'title' => 'Indonesian Selection',
        'img_cover_url' => 'https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=900&q=85',
        'content' => '<div>A selection inspired by familiar Indonesian flavours for gatherings and events.</div>',
        'created_at' => '2026-09-04'
    ],
    [
        'title' => 'Western Selection',
        'img_cover_url' => 'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=900&q=85',
        'content' => '<div>Flexible Western menu choices for private dinners, events, and celebrations.</div>',
        'created_at' => '2026-09-04'
    ],
    [
        'title' => 'Canapés & Bites',
        'img_cover_url' => 'https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=900&q=85',
        'content' => '<div>Small bites designed for receptions, cocktail events, and social gatherings.</div>',
        'created_at' => '2026-09-04'
    ]
];
$menus_data = json_decode(json_encode($menus_data));
?>

<style>
    .menus-section {
        background: var(--surface);

        .container-global {
            padding-top: 110px;
            padding-bottom: 110px;
        }

        .menus-header {
            align-items: flex-end;
            margin-bottom: 48px;
        }

        .menus-header-action {
            display: flex;
            justify-content: flex-end;
            margin-top: 24px;
        }

        .menus-grid {
            row-gap: 30px;
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

    @media (max-width: 991px) {
        .menus-section {
            .menus-header-action {
                justify-content: flex-start;
            }
        }
    }

    @media (max-width: 575px) {
        .menus-section {
            .container-global {
                padding-top: 72px;
                padding-bottom: 72px;
            }

            .menus-header {
                margin-bottom: 34px;
            }
        }
    }
</style>

<section class="menus-section section-entrance" id="menus">
    <div class="container-global">
        <div class="row menus-header">
            <div class="col-lg-8">
                <div class="eyebrow">Our Menus</div>
                <h2 class="section-title mb-0">
                    Menus Created Around
                    <em>Your Occasion</em>
                </h2>
            </div>
            <div class="col-lg-4 menus-header-action">
                <a href="#menus" class="text-link">
                    View All Menus
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
        </div>
        <div class="row menus-grid">
            <?php foreach ($menus_data as $index => $items): ?>
                <div class="col-lg-4">
                    <?php include 'card/menu.php'; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
