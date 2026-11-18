<?php $title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2; ?>


<?php
$reviews_data = !empty($item->data) ? $item->data : [
    [
        'message' => 'Everything was beautifully prepared and the team made our event feel effortless.',
        'guest' => 'Client Name',
        'created_at' => '2026-09-04'
    ],
    [
        'message' => 'From the menu planning to the service, everything came together perfectly.',
        'guest' => 'Client Name',
        'created_at' => '2026-09-04'
    ],
    [
        'message' => 'A wonderful catering experience for our private gathering in Ubud.',
        'guest' => 'Client Name',
        'created_at' => '2026-09-04'
    ],
    [
        'message' => 'The catering team helped us shape a relaxed dinner with thoughtful food, attentive service, and a table setting that matched the feeling of the evening.',
        'guest' => 'Client Name',
        'created_at' => '2026-09-04'
    ]
];
$reviews_data = json_decode(json_encode($reviews_data));
?>

<style>
    .reviews-section {
        background: var(--light);

        .container-global {
            padding-top: 110px;
            padding-bottom: 110px;
        }

        .reviews-header {
            margin-bottom: 52px;
            text-align: center;

            .eyebrow {
                justify-content: center;
            }
        }

        .reviews-slider {
            margin-right: -12px;
            margin-left: -12px;

            .slick-track {
                display: flex;
            }

            .slick-slide {
                height: auto;
                padding: 0 12px;

                > div {
                    height: 100%;
                }
            }

            .slick-dots {
                bottom: -48px;

                li {
                    width: 10px;
                    height: 10px;
                    margin: 0 5px;

                    button {
                        width: 10px;
                        height: 10px;
                        padding: 0;

                        &::before {
                            width: 10px;
                            height: 10px;
                            color: var(--color3);
                            font-size: 9px;
                            opacity: 0.45;
                        }
                    }

                    &.slick-active {
                        button::before {
                            color: var(--colors);
                            opacity: 1;
                        }
                    }
                }
            }
        }

        .testimonial-box {
            height: 100%;
            min-height: 310px;
            padding: 45px;
            border: 1px solid #e5ded1;
            background: var(--light);
        }

        .quote-icon {
            margin-bottom: 25px;
            color: #cbb68e;
            font-family: var(--primtext);
            font-size: 70px;
            line-height: 0.6;
        }

        .testimonial-text {
            color: #35422c;
            font-family: var(--primtext);
            font-size: 25px;
            font-style: italic;
            line-height: 1.4;
        }

        .review-toggle {
            display: inline-flex;
            margin-top: 16px;
            padding: 0;
            border: 0;
            background: transparent;
            color: var(--color2);
            font-family: var(--subtext);
            font-size: 10px;
            font-style: normal;
            font-weight: 600;
            letter-spacing: 2px;
            line-height: 1.2;
            text-transform: uppercase;
        }

        .testimonial-name {
            margin-top: 30px;
            color: #a18758;
            font-size: 9px;
            font-weight: 600;
            letter-spacing: 2px;
            line-height: 1.2;
            text-transform: uppercase;
        }
    }

    @media (max-width: 767px) {
        .reviews-section {
            .testimonial-box {
                min-height: 280px;
                padding: 34px;
            }

            .testimonial-text {
                font-size: 22px;
            }
        }
    }

    @media (max-width: 575px) {
        .reviews-section {
            .container-global {
                padding-top: 72px;
                padding-bottom: 88px;
            }

            .reviews-header {
                margin-bottom: 34px;
            }
        }
    }
</style>

<section class="reviews-section section-entrance" id="reviews">
    <div class="container-global">
        <div class="reviews-header">
            <div class="eyebrow">Client Experiences</div>
            <h2 class="section-title">
                What Our
                <em>Clients Say</em>
            </h2>
        </div>
        <div class="reviews-slider">
            <?php foreach ($reviews_data as $index => $items): ?>
                <div>
                    <?php include 'wrapper/card/review.php'; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        if (window.jQuery && window.jQuery.fn.slick) {
            window.jQuery(".reviews-slider").slick({
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                infinite: true,
                slidesToScroll: 1,
                slidesToShow: 3,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        }

        document.querySelectorAll(".review-toggle").forEach(function (button) {
            button.addEventListener("click", function () {
                const message = button.closest(".testimonial-text").querySelector(".review-message");
                const isOpen = button.getAttribute("aria-expanded") === "true";

                message.textContent = isOpen ? message.getAttribute("data-short") : message.getAttribute("data-full");
                button.textContent = isOpen ? "Read More" : "Read Less";
                button.setAttribute("aria-expanded", isOpen ? "false" : "true");
            });
        });
    });
</script>
