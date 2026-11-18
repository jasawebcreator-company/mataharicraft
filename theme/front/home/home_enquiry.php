<style>
    .enquiry-section {
        background: var(--colors);

        .container-global {
            padding-top: 110px;
            padding-bottom: 110px;
        }

        .enquiry-copy {
            .eyebrow {
                color: #d7be8c;

                &::before {
                    background: #d7be8c;
                }
            }
        }

        .enquiry-title {
            margin: 0;
            color: var(--light);
            font-family: var(--primtext);
            font-size: 64px;
            font-weight: 500;
            line-height: 1;
        }

        .enquiry-text {
            max-width: 500px;
            margin: 24px 0 0;
            color: rgba(255, 255, 255, 0.67);
            font-size: 15px;
            line-height: 1.8;
        }

        .enquiry-form {
            padding: 50px;
            background: var(--surface);
        }

        .form-row-custom {
            row-gap: 24px;
        }

        .form-control {
            min-height: 52px;
            padding-right: 0;
            padding-left: 0;
            border: 0;
            border-bottom: 1px solid #cfc4ae;
            border-radius: 0;
            background: transparent;
            color: var(--text);
            font-size: 13px;
            box-shadow: none;

            &:focus {
                border-color: var(--colors);
                background: transparent;
                box-shadow: none;
            }

            &::placeholder {
                color: #6d7168;
                opacity: 1;
            }
        }

        select.form-control {
            color: #6d7168;
        }

        textarea.form-control {
            min-height: 110px;
            resize: vertical;
        }

        .btn-main {
            width: 100%;
        }
    }

    @media (max-width: 991px) {
        .enquiry-section {
            .enquiry-copy {
                margin-bottom: 46px;
            }

            .enquiry-title {
                font-size: 54px;
            }
        }
    }

    @media (max-width: 575px) {
        .enquiry-section {
            .container-global {
                padding-top: 72px;
                padding-bottom: 72px;
            }

            .enquiry-title {
                font-size: 44px;
            }

            .enquiry-form {
                padding: 32px 24px;
            }
        }
    }
</style>

<section class="enquiry-section section-entrance" id="enquiry">
    <div class="container-global">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="enquiry-copy" data-motion-stagger>
                    <div class="eyebrow">Plan Your Event</div>
                    <h2 class="enquiry-title">
                        Let's Bring Your
                        Table Together
                    </h2>
                    <p class="enquiry-text">Tell us about your event, date, location, guest count, and catering requirements. Our team will get back to you with the next steps.</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="enquiry-form" data-motion-stagger>
                    <form action="#" method="post">
                        <div class="row form-row-custom">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" aria-label="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" aria-label="Email Address">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" placeholder="WhatsApp / Phone" aria-label="WhatsApp / Phone">
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="event_date" aria-label="Event Date">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="event_location" placeholder="Event Location" aria-label="Event Location">
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="guests" placeholder="Number of Guests" aria-label="Number of Guests">
                            </div>
                            <div class="col-12">
                                <select class="form-control" name="event_type" aria-label="Type of Event">
                                    <option selected disabled>Type of Event</option>
                                    <option>Wedding</option>
                                    <option>Private Event</option>
                                    <option>Villa Dining</option>
                                    <option>Corporate Event</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="message" placeholder="Tell us about your event" aria-label="Tell us about your event"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-main">Send Enquiry</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
