<style>
    .location-section {
        overflow: hidden;
        background: var(--surface);

        .location-image {
            min-height: 550px;
            height: 100%;
            background:
                linear-gradient(
                    rgba(32, 46, 24, 0.12),
                    rgba(32, 46, 24, 0.12)
                ),
                url("https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?auto=format&fit=crop&w=1400&q=85") center / cover;
        }

        .location-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 550px;
            padding: 85px;
        }

        .location-content p {
            max-width: 650px;
            margin: 0;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.8;
        }

        .address-item {
            display: flex;
            gap: 18px;
            margin-top: 30px;
        }

        .address-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            min-width: 48px;
            height: 48px;
            border: 1px solid #cbb790;
            border-radius: 50%;
            color: var(--colors);
        }

        .address-detail strong {
            display: block;
            color: var(--colors);
            font-size: 14px;
            font-weight: 700;
            line-height: 1.2;
        }

        .address-detail p {
            margin-top: 6px;
            font-size: 14px;
        }

        .location-action {
            margin-top: 28px;
        }
    }

    @media (max-width: 991px) {
        .location-section {
            .location-image {
                min-height: 460px;
            }

            .location-content {
                min-height: auto;
                padding: 70px 42px;
            }
        }
    }

    @media (max-width: 575px) {
        .location-section {
            .location-image {
                min-height: 360px;
            }

            .location-content {
                padding: 56px 24px;
            }

            .address-item {
                align-items: flex-start;
            }
        }
    }
</style>

<section class="location-section section-entrance" id="contact">
    <div class="container-fluid p-0">
        <div class="row no-gutters align-items-stretch">
            <div class="col-lg-6">
                <div class="location-image" data-motion-stagger></div>
            </div>
            <div class="col-lg-6">
                <div class="location-content" data-motion-stagger>
                    <div class="eyebrow">Based in Ubud</div>
                    <h2 class="section-title">
                        Catering in Ubud
                        <em>and Across Bali</em>
                    </h2>
                    <p>The Bali Table is based in Pengosekan, Ubud, with catering available for events throughout Bali based on event requirements.</p>
                    <div class="address-item">
                        <div class="address-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="address-detail">
                            <strong>The Bali Table</strong>
                            <p>Jl. Raya Pengosekan, Mas, Kecamatan Ubud, Kabupaten Gianyar, Bali 80517</p>
                        </div>
                    </div>
                    <div class="location-action">
                        <a href="#enquiry" class="btn-main">Contact Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
