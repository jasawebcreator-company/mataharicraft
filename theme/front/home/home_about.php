<style>
    .about-approach-section {
        background: var(--light);

        .container-global {
            padding-top: 110px;
            padding-bottom: 110px;
        }

        .about-image-wrap {
            position: relative;
            max-width: 560px;
            padding: 0 35px 35px 0;
        }

        .about-image-wrap::after {
            content: "";
            position: absolute;
            z-index: 0;
            right: 0;
            bottom: 0;
            width: calc(100% - 35px);
            height: calc(100% - 35px);
            border: 1px solid #d7c6a3;
        }

        .about-image {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 650px;
            object-fit: cover;
        }

        .about-badge {
            position: absolute;
            z-index: 2;
            right: 0;
            bottom: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 160px;
            height: 160px;
            padding: 25px;
            border-radius: 50%;
            background: var(--colors);
            color: var(--surface2);
            font-family: var(--primtext);
            font-size: 19px;
            line-height: 1.2;
            text-align: center;
        }

        .about-content {
            max-width: 640px;
            padding-left: 48px;

            p {
                max-width: 600px;
                margin: 0 0 22px;
                color: var(--muted);
                font-size: 15px;
                line-height: 1.9;
            }

            .btn-outline-main {
                margin-top: 8px;
            }
        }
    }

    @media (max-width: 991px) {
        .about-approach-section {
            .about-image-wrap {
                max-width: 100%;
                margin-bottom: 60px;
            }

            .about-image {
                height: 520px;
            }

            .about-badge {
                width: 130px;
                height: 130px;
                font-size: 16px;
            }

            .about-content {
                padding-left: 0;
            }
        }
    }

    @media (max-width: 575px) {
        .about-approach-section {
            .container-global {
                padding-top: 72px;
                padding-bottom: 72px;
            }

            .about-image-wrap {
                padding: 0 20px 20px 0;
                margin-bottom: 46px;
            }

            .about-image-wrap::after {
                width: calc(100% - 20px);
                height: calc(100% - 20px);
            }

            .about-image {
                height: 430px;
            }

            .about-badge {
                right: 0;
                bottom: 44px;
                width: 112px;
                height: 112px;
                padding: 18px;
                font-size: 15px;
            }
        }
    }
</style>

<section class="about-approach-section section-entrance" id="about">
    <div class="container-global">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image-wrap" data-motion-hover>
                    <img src="https://images.unsplash.com/photo-1555244162-803834f70033?auto=format&fit=crop&w=1200&q=85" class="about-image" alt="The Bali Table Catering">
                    <div class="about-badge">
                        Prepared with
                        care in Bali
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="eyebrow">The Bali Table</div>
                    <h2 class="section-title">
                        A Thoughtful Approach to
                        <em>Catering in Bali</em>
                    </h2>
                    <p>The Bali Table brings food, service, and thoughtful preparation together for events of different sizes and occasions.</p>
                    <p>Based in Ubud, our approach is centred around creating catering experiences that feel considered from the first conversation to the final table.</p>
                    <a href="#about" class="btn-outline-main">Discover Our Story</a>
                </div>
            </div>
        </div>
    </div>
</section>
