<section class="page-hero">
    <div class="container-global">
        <h1 class="page-hero-title"><?= $data->result->title ?></h1>
        <div class="page-hero-breadcrumb">
            <a href="<?= base_url() ?>">Home</a>
            <span class="separator">&rarr;</span>
            <span><?= $data->result->title ?></span>
        </div>
    </div>
</section>

<style>
#product-single-root * {
    padding:0;
    margin:0;
}

#product-single-root {
    width:100%;
    background-color:#f9f9f9;
    display:flex;
    flex-direction:column;
    justify-content:start;
    align-items:stretch;
    padding:0 0 5rem 0;
}

#product-single-root .product-single-wrapper {
    width:100%;
    padding:0 7%;
    display:flex;
    justify-content:start;
    align-items:stretch;
    gap:clamp(2rem,3vw,4rem);
    flex-direction:column-reverse;
}

.product-single-desc p {
    color:#333;
    margin-bottom:25px !important;
}

@media (min-width:768px) {
    #product-single-root .product-single-wrapper {
        flex-direction:row;
        justify-content:center;
        align-items:center;
    }

    #product-single-root .product-single-wrapper>div {
        width:50%;
    }
}

#product-single-root .product-single-wrapper .product-single-content {
    display:flex;
    flex-direction:column;
    justify-content:start;
    align-items:start;
}

#product-single-root .product-single-wrapper .product-single-content .product-single-title {
    color:var(--color2);
    font-size:24px;
    font-family:var(--primtext);
    font-weight:600;
    letter-spacing:.5px;
}

#product-single-root .product-single-wrapper .product-single-content h4 {
    letter-spacing:.5px;
    font-family:var(--primtext);
}

#product-single-root .product-single-wrapper .product-single-content .product-single-desc {
    font-size:15px;
    width:100%;
}

#product-single-root .product-single-wrapper .product-single-content .product-single-desc ul {
    margin:15px 0;
    padding:0 1rem;
}

@media (min-width:768px) {
    #product-single-root .product-single-wrapper .product-single-content .product-single-title {
        font-size:28px;
        margin-bottom:1rem;
    }
}

#product-single-root .product-single-wrapper .product-single-content .product-single-price-cta {
    display:flex;
    width:100%;
    justify-content:space-between;
    align-items:center;
}

#product-single-root .product-single-wrapper .product-single-content .product-single-price-cta .product-single-price {
    color:var(--colors);
    display:flex;
    align-items:end;
    border-radius:999em;
    overflow:hidden;
}

#product-single-root .product-single-wrapper .product-single-content .product-single-price-cta .product-single-price .striked {
    text-decoration:line-through;
    padding-right:14px;
}

#product-single-root .product-single-wrapper .product-single-content .product-single-price-cta .product-single-price p {
    font-size:18px;
    border-left:1px solid var(--colors);
    font-weight:bold;
    color:var(--colors);
    padding-left:14px;
}

#product-single-root .product-single-wrapper .product-single-content .product-single-price-cta .product-single-cta {
    color:var(--colors);
    border:1px solid var(--colors);
    padding:10px 20px;
    border-radius:999em;
    text-decoration:none;
    transition:all ease-in-out .3s;
}

#product-single-root .product-single-wrapper .product-single-content .product-single-price-cta .product-single-cta:hover {
    color:var(--color4);
    background-color:var(--colors);
    border:1px solid var(--color4);
}

.product-single-image {
    max-width:500px;
    margin:auto;
}

.slider-for img,
.slider-nav img {
    width:100%;
    display:block;
    aspect-ratio:1/1;
    object-fit:contain;
    background:transparent;
}

.slider-nav {
    margin-top:10px;
}

.slider-nav .slick-slide {
    margin:0 5px;
}

.slider-nav .slick-slide img {
    border:2px solid transparent;
    cursor:pointer;
}

/* SPECIFICATIONS */
.product-specifications {
    width:100%;
    margin-top:25px !important;
    border-top:1px solid #d5d5d5;
    border-bottom:1px solid #d5d5d5;
}

.product-specifications-header {
    width:100%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:18px 0 !important;
    cursor:pointer;
    user-select:none;
}

.product-specifications-title {
    font-family:var(--primtext);
    font-size:20px;
    font-weight:500;
    color:#111;
    letter-spacing:.3px;
}

.product-specifications-icon {
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:14px;
    color:#555;
    transition:transform .3s ease;
}

.product-specifications.active .product-specifications-icon {
    transform:rotate(180deg);
}

.product-specifications-content {
    width:100%;
    max-height:0;
    overflow:hidden;
    opacity:0;
    transition:max-height .4s ease,opacity .3s ease;
}

.product-specifications.active .product-specifications-content {
    max-height:600px;
    opacity:1;
}

.product-specifications-list {
    padding:0 0 20px 0 !important;
}

.product-specification-item {
    display:flex;
    align-items:flex-start;
    font-family:var(--primtext);
    font-size:15px;
    line-height:1.9;
    color:#777;
    margin-bottom:2px !important;
}

.product-specification-label {
    min-width:120px;
    color:#222;
    font-weight:600;
    padding-right:10px;
}

.product-specification-value {
    color:#777;
    flex:1;
}

@media (max-width:767px) {
    .product-specifications {
        margin-top:20px !important;
    }

    .product-specifications-header {
        padding:17px 0 !important;
    }

    .product-specifications-title {
        font-size:18px;
    }

    .product-specification-item {
        font-size:14px;
    }

    .product-specification-label {
        min-width:100px;
    }
}
</style>

<?php
/* =========================================
   SPECIFICATIONS SYSTEM
========================================= */

$specifications = [];

$addonFields = [
    !empty($data->result->custom_field_2) ? trim($data->result->custom_field_2) : '',
    !empty($data->result->custom_field_3) ? trim($data->result->custom_field_3) : '',
    !empty($data->result->custom_field_4) ? trim($data->result->custom_field_4) : '',
    !empty($data->result->custom_field_5) ? trim($data->result->custom_field_5) : ''
];

/* Ambil semua addon field yang memiliki content */
foreach ($addonFields as $field) {
    if (!empty($field)) {
        $parts = explode(':', $field, 2);

        if (count($parts) === 2) {
            $specifications[] = [
                'label' => trim($parts[0]),
                'value' => trim($parts[1])
            ];
        } else {
            $specifications[] = [
                'label' => '',
                'value' => $field
            ];
        }
    }
}

/* Jika SEMUA addon field kosong, gunakan specification default */
if (empty($specifications)) {
    $specifications = [
        [
            'label' => 'Material',
            'value' => 'Natural handcrafted material'
        ],
        [
            'label' => 'Color',
            'value' => 'Natural finish'
        ],
        [
            'label' => 'Style',
            'value' => 'Contemporary decorative'
        ],
        [
            'label' => 'Origin',
            'value' => 'Handcrafted in Indonesia'
        ]
    ];
}
?>

<section id="product-single-root">
    <div class="product-single-wrapper py-5">

        <div class="product-single-content order-2">

            <h2 class="product-single-title">
                <?= $data->result->title ?>
            </h2>

            <div class="product-single-desc mb-3">
                <?= $data->result->content ?>
            </div>

            <!-- SPECIFICATIONS -->
            <div class="product-specifications">

                <div class="product-specifications-header">

                    <div class="product-specifications-title">
                        Specifications
                    </div>

                    <div class="product-specifications-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>

                </div>

                <div class="product-specifications-content">

                    <div class="product-specifications-list">

                        <?php foreach ($specifications as $specification): ?>

                            <div class="product-specification-item">

                                <?php if (!empty($specification['label'])): ?>

                                    <div class="product-specification-label">
                                        <?= htmlspecialchars($specification['label']) ?>:
                                    </div>

                                <?php endif; ?>

                                <div class="product-specification-value">
                                    <?= htmlspecialchars($specification['value']) ?>
                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

            <div class="product-single-price-cta">
                <!-- Price / Booking Button -->
            </div>

        </div>

        <div class="product-single-image order-1">

            <div class="slider-for ss-arrow">

                <div>
                    <img
                        src="<?= $data->result->img_cover_url ?>"
                        alt="<?= htmlspecialchars($data->result->title) ?>"
                    />
                </div>

                <?php if (!empty($data->images)): ?>

                    <?php foreach ($data->images as $key => $img): ?>

                        <?php if (!empty($img->url)): ?>

                            <div>
                                <img
                                    src="<?= $img->url ?>"
                                    alt="<?= htmlspecialchars($data->result->title) ?> <?= $key + 1 ?>"
                                />
                            </div>

                        <?php endif; ?>

                    <?php endforeach; ?>

                <?php endif; ?>

            </div>

            <?php if (!empty($data->images)): ?>

                <div class="slider-nav ss-arrow">

                    <div>
                        <img
                            src="<?= $data->result->img_cover_url ?>"
                            alt="<?= htmlspecialchars($data->result->title) ?>"
                        />
                    </div>

                    <?php foreach ($data->images as $key => $img): ?>

                        <?php if (!empty($img->url)): ?>

                            <div>
                                <img
                                    src="<?= $img->url ?>"
                                    alt="<?= htmlspecialchars($data->result->title) ?> <?= $key + 1 ?>"
                                />
                            </div>

                        <?php endif; ?>

                    <?php endforeach; ?>

                </div>

            <?php endif; ?>

        </div>

    </div>
</section>

<?= $func->load('home/home_why') ?>

<script>
document.addEventListener('DOMContentLoaded', function() {

    $('.slider-for').slick({
        slidesToShow:1,
        slidesToScroll:1,
        prevArrow:'<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
        nextArrow:'<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
        fade:true,
        asNavFor:'.slider-nav'
    });

    $('.slider-nav').slick({
        slidesToShow:3,
        slidesToScroll:1,
        asNavFor:'.slider-for',
        dots:false,
        prevArrow:'<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
        nextArrow:'<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
        centerMode:false,
        focusOnSelect:true
    });

    const specification = document.querySelector('.product-specifications');

    if (specification) {
        const header = specification.querySelector('.product-specifications-header');

        header.addEventListener('click', function() {
            specification.classList.toggle('active');
        });
    }

});
</script>