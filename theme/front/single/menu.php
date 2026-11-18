<?php
$menu_item = json_decode(json_encode($item ?? [
    'title' => 'Coffee Break',
    'content' => '<div><p>Coffee break praktis untuk meeting, seminar, atau acara santai. Pilih 2-3 kue manis dan gurih, lengkap dengan teh atau kopi. Layanan buffet profesional sudah termasuk.</p><p><strong>Price:</strong></p><ul><li>Rp45.000 / pax (Pilih 2 kue)</li><li>Rp50.000 / pax (Pilih 3 kue)</li></ul><p><em><strong>Min. Order 100 Pax</strong></em></p><p><strong>Menu Kue:</strong></p><table><thead><tr><th>Kategori</th><th>Pilihan Menu</th></tr></thead><tbody><tr><td>Kue Gurih</td><td>Tahu Genjrot, Casava Ball, Samosa, Pangsit Ayam, Rooled Bread Creamy, Bisnet Udang, Pisang Gulung, Risoles</td></tr><tr><td>Kue Manis</td><td>Lapis Sele, Coffee Rolled Cake, Dadar Soes, Brownies, Serabi, Chocolate Ganache, Kue Malang, Tape Cake, Kue Aroma Pandan, Kue Putu, Pastry Vla, Sushi Ketan, Lapis Legit, Bolu Karamel</td></tr></tbody></table><p><strong>Minuman Tambahan (opsional):</strong></p><p>Rp30.000 / pax</p><ul><li>Rujak Gula Bali</li><li>Beras Kencur</li><li>Kunyit Asem</li></ul><p><strong>Termasuk Layanan:</strong></p><ul><li>Meja Buffet</li><li>Pelayanan Buffet Service (Waiter/Waitress)</li><li>Dekorasi Meja Buffet</li><li>Peralatan Makan</li></ul></div>',
    'price' => '45000',
    'price_before' => '65000',
    'hide_price' => '0',
    'img_cover_url' => 'https://images.unsplash.com/photo-1551024506-0bccd828d307?auto=format&fit=crop&w=1200&q=85',
    'img_thumb_url' => 'https://images.unsplash.com/photo-1551024506-0bccd828d307?auto=format&fit=crop&w=900&q=85'
]));
$menu_title = !empty($menu_item->title) ? $menu_item->title : 'Menu Detail';
$menu_content = !empty($menu_item->content) ? $menu_item->content : '<div><p>Menu description will be available soon.</p></div>';
$menu_image = !empty($menu_item->img_cover_url) ? $menu_item->img_cover_url : (!empty($menu_item->img_thumb_url) ? $menu_item->img_thumb_url : 'https://images.unsplash.com/photo-1551024506-0bccd828d307?auto=format&fit=crop&w=1200&q=85');
$menu_hide_price = !empty($menu_item->hide_price) && (string) $menu_item->hide_price === '1';
$menu_price = $menu_item->price ?? '';
$menu_price_before = $menu_item->price_before ?? ($menu_item->custom_field_1 ?? '');
$menu_price_label = is_numeric($menu_price) && (float) $menu_price > 0 ? 'Rp. ' . number_format((float) $menu_price, 0, ',', '.') : 'Contact for Price';
$menu_price_before_label = is_numeric($menu_price_before) && (float) $menu_price_before > 0 ? 'Rp. ' . number_format((float) $menu_price_before, 0, ',', '.') : '';
?>

<style>
    .menu-single-section {
        background: var(--light);

        .container-global {
            padding-top: calc(var(--header-height) + 95px);
            padding-bottom: 110px;
        }

        .menu-single-header {
            max-width: 850px;
            margin-bottom: 58px;
        }

        .menu-single-layout {
            align-items: flex-start;
        }

        .menu-single-content {
            padding-right: 28px;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.85;

            p {
                margin: 0 0 16px;
            }

            ul,
            ol {
                margin: 18px 0 26px;
                padding-left: 22px;
            }

            li {
                margin-bottom: 6px;
            }

            strong {
                color: var(--text);
                font-weight: 800;
            }

            em {
                color: var(--text);
                font-style: italic;
            }

            table {
                width: 100%;
                margin: 12px 0 18px;
                border-collapse: collapse;
                color: var(--muted);
                font-size: 14px;
                line-height: 1.55;
            }

            th,
            td {
                padding: 9px 12px;
                border: 1px solid #cfc4ae;
                vertical-align: top;
            }

            th {
                background: var(--surface);
                color: var(--colors);
                font-weight: 800;
            }
        }

        .menu-price-box {
            margin-top: 42px;
            padding-top: 34px;
            border-top: 1px solid var(--line2);
        }

        .menu-price-label {
            margin-bottom: 18px;
            color: var(--colors);
            font-family: var(--primtext);
            font-size: 28px;
            font-weight: 500;
            line-height: 1;
        }

        .menu-price-row {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 18px;
        }

        .menu-price-before {
            color: var(--color2);
            font-size: 16px;
            font-weight: 700;
            text-decoration: line-through;
        }

        .menu-price-current {
            display: inline-flex;
            align-items: baseline;
            gap: 8px;
            color: var(--color2);
            font-size: 30px;
            font-weight: 800;
            line-height: 1;

            span {
                font-size: 16px;
                font-weight: 700;
            }
        }

        .menu-book-button {
            margin-top: 28px;
        }

        .menu-single-image-wrap {
            position: sticky;
            top: calc(var(--header-height) + 32px);
            padding: 0 35px 35px 0;

            &::after {
                content: "";
                position: absolute;
                z-index: 0;
                right: 0;
                bottom: 0;
                width: calc(100% - 35px);
                height: calc(100% - 35px);
                border: 1px solid #d7c6a3;
            }
        }

        .menu-single-image {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 640px;
            object-fit: cover;
        }
    }

    @media (max-width: 1199px) {
        .menu-single-section {
            .menu-single-content {
                padding-right: 0;
            }

            .menu-single-image {
                height: 560px;
            }
        }
    }

    @media (max-width: 991px) {
        .menu-single-section {
            .menu-single-image-wrap {
                position: relative;
                top: auto;
                margin-top: 54px;
            }

            .menu-single-image {
                height: 520px;
            }
        }
    }

    @media (max-width: 575px) {
        .menu-single-section {
            .container-global {
                padding-top: calc(var(--header-height) + 62px);
                padding-bottom: 72px;
            }

            .menu-single-header {
                margin-bottom: 38px;
            }

            .menu-single-content {
                font-size: 14px;

                table {
                    display: block;
                    overflow-x: auto;
                    font-size: 13px;
                    white-space: nowrap;
                }
            }

            .menu-price-current {
                font-size: 25px;
            }

            .menu-single-image-wrap {
                padding: 0 20px 20px 0;
            }

            .menu-single-image-wrap::after {
                width: calc(100% - 20px);
                height: calc(100% - 20px);
            }

            .menu-single-image {
                height: 430px;
            }
        }
    }
</style>

<section class="menu-single-section section-entrance" id="menu-single">
    <div class="container-global">
        <div class="menu-single-header" data-motion-stagger>
            <div class="eyebrow">Our Menu</div>
            <h1 class="section-title"><?= $data->result->title ?></h1>
        </div>
        <div class="row menu-single-layout">
            <div class="col-lg-7">
                <div class="menu-single-content" data-motion-stagger>
                    <?= $data->result->content ?>
                </div>
                <?php if (!$menu_hide_price): ?>
                    <div class="menu-price-box" data-motion-stagger>
                        <div class="menu-price-label">Start From</div>
                        <div class="menu-price-row">
                                <div class="menu-price-before"><?= $data->result->price * 1.2 ?></div>
                    
                            <div class="menu-price-current">
                                <?= $data->result->price ?>
                                <?php if ($menu_price_label !== 'Contact for Price'): ?>
                                    <span>/ pax</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <a href="#" class="btn-outline-main menu-book-button">Booking Now</a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-5">
                <div class="menu-single-image-wrap" data-motion-stagger>
                    <img src="<?= $data->result->img_cover_url ?>" alt="<?= $data->result->title ?>" class="menu-single-image" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>
