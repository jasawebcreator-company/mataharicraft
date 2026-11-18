<!--<style>
#why {
  background-color: var(--color3);
  .why-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 1.5rem;
    @media (max-width: 1200px) {
      grid-template-columns: repeat(3, 1fr);
    }
    @media (max-width: 768px) {
      grid-template-columns: repeat(2, 1fr);
    }
    @media (max-width: 480px) {
      grid-template-columns: 1fr;
    }
  }
  .why-card {
    background-color: #ffffff;
    border: 1px solid rgba(184, 142, 44, 0.2);
    border-radius: 4px;
    padding: 2.5rem 1.5rem;
    text-align: center;
    transition: var(--transition);
    &:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 30px rgba(184, 142, 44, 0.12);
      border-color: var(--colors);
      .why-icon {
        transform: scale(1.1);
        color: var(--color-accent);
      }
    }
    .why-icon {
      font-size: 2.2rem;
      color: var(--colors);
      margin-bottom: 1.25rem;
      transition: var(--transition);
      display: inline-block;
    }
    .why-card-title {
      font-family: var(--primtext);
      font-size: 1.4rem;
      font-weight: 600;
      color: var(--color2);
      margin-bottom: 0.75rem;
      line-height: 1.2;
    }
    .why-card-desc {
      font-size: 0.88rem;
      color: #666059;
      line-height: 1.6;
    }
  }
}
</style>

<section id="why">
  <div class="container-global">
    <div class="section-header">
      <span class="section-subtitle">Why Matahari Craft</span>
      <h2 class="section-title">More Than Handmade. Built for Business.</h2>
    </div>

    <div class="why-grid">
      <div class="why-card">
        <i class="fa-solid fa-sun why-icon"></i>
        <h3 class="why-card-title">Bali Craftsmanship</h3>
        <p class="why-card-desc">Rooted in Bali's rich handmade craft tradition.</p>
      </div>

      <div class="why-card">
        <i class="fa-solid fa-leaf why-icon"></i>
        <h3 class="why-card-title">Natural Materials</h3>
        <p class="why-card-desc">We work with natural materials for authentic beauty.</p>
      </div>

      <div class="why-card">
        <i class="fa-solid fa-boxes-stacked why-icon"></i>
        <h3 class="why-card-title">Wholesale Production</h3>
        <p class="why-card-desc">From small collections to large scale orders.</p>
      </div>

      <div class="why-card">
        <i class="fa-solid fa-sliders why-icon"></i>
        <h3 class="why-card-title">Custom Production</h3>
        <p class="why-card-desc">Flexible design, size, and material options.</p>
      </div>

      <div class="why-card">
        <i class="fa-solid fa-earth-americas why-icon"></i>
        <h3 class="why-card-title">Global Supply</h3>
        <p class="why-card-desc">Serving buyers and businesses worldwide.</p>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const whySec = document.querySelector('#why');
  if (whySec && typeof motion !== 'undefined') {
    motion.animate(whySec, { opacity: [0, 1], y: [20, 0] }, { duration: 0.6 });
  }
});
</script>-->

<section class="why-matahari-section">

    <div class="container-global">

        <!-- Section Heading -->
        <div class="text-center mb-5">

            <div class="why-eyebrow">
                Why Matahari Craft
            </div>

            <h2 class="why-title">
                More Than Handmade, Built For Business
            </h2>

        </div>


        <!-- Cards -->
        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-lg col-md-6 p-1">

                <div class="card why-card h-100 border-0">

                    <div class="card-body text-center">

                        <div class="why-icon">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>

                        <h3 class="why-card-title">
                            Scalable Artisan-Based
                            Production
                        </h3>

                        <p class="why-card-text">
                            We combine skilled craftsmanship with structured
                            coordination to maintain quality while fulfilling
                            larger orders.
                        </p>

                    </div>

                </div>

            </div>


            <!-- Card 2 -->
            <div class="col-lg col-md-6 p-1">

                <div class="card why-card h-100 border-0">

                    <div class="card-body text-center">

                        <div class="why-icon">
                            <i class="fa-solid fa-leaf"></i>
                        </div>

                        <h3 class="why-card-title">
                            Natural Materials
                        </h3>

                        <p class="why-card-text">
                            We work with natural materials for authentic
                            beauty.
                        </p>

                    </div>

                </div>

            </div>


            <!-- Card 3 -->
            <div class="col-lg col-md-6 p-1">

                <div class="card why-card h-100 border-0">

                    <div class="card-body text-center">

                        <div class="why-icon">
                            <i class="fa-solid fa-sliders"></i>
                        </div>

                        <h3 class="why-card-title">
                            Flexible Customization
                        </h3>

                        <p class="why-card-text">
                            We support design adjustments, size variations,
                            and finishing options to match your product
                            requirements.
                        </p>

                    </div>

                </div>

            </div>


            <!-- Card 4 -->
            <div class="col-lg col-md-6 p-1">

                <div class="card why-card h-100 border-0">

                    <div class="card-body text-center">

                        <div class="why-icon">
                            <i class="fa-solid fa-clipboard-check"></i>
                        </div>

                        <h3 class="why-card-title">
                            Structured Quality Control
                        </h3>

                        <p class="why-card-text">
                            Products go through multiple inspection stages
                            before shipment to ensure consistency.
                        </p>

                    </div>

                </div>

            </div>


            <!-- Card 5 -->
            <div class="col-lg col-md-6 p-1">

                <div class="card why-card h-100 border-0">

                    <div class="card-body text-center">

                        <div class="why-icon">
                            <i class="fa-solid fa-earth-americas"></i>
                        </div>

                        <h3 class="why-card-title">
                            Export-Oriented Workflow
                        </h3>

                        <p class="why-card-text">
                            Our processes are aligned with international
                            shipping standards and buyer expectations.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<style>
/* ============================================================
   WHY MATAHARI CRAFT
   ============================================================ */
.why-matahari-section {
    /* padding: 85px 0 70px; */
    background: #f7f1e8;
}
/* ============================================================
   SECTION HEADING
   ============================================================ */
.why-eyebrow {
    display: block;
    margin-bottom: 17px;
    font-family: var(--titletext);
    font-size: 22px;
    font-weight: 500;
	letter-spacing: .5px;
    font-style: italic;
    line-height: 1.2;
    color: #e8864c;
}
.why-title {
    margin: 0;
    font-family: var(--primtext);
    font-size: clamp(
        40px,
        4vw,
        60px
    );
    font-weight: 500;
    line-height: 1.02;
    letter-spacing: -1.8px;
    color: #050505;
}
/* ============================================================
   CARD
   ============================================================ */
.why-card {
    min-height: 290px;
    background: #ffffff;
    border-radius: 32px !important;
    overflow: hidden;
    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
}
.why-card:hover {
    transform: translateY(-6px);
    box-shadow:
        0 18px 40px rgba(60, 45, 30, 0.08);
}
/* ============================================================
   CARD BODY
   ============================================================ */
.why-card .card-body {
    padding: 42px 25px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: start;
}
/* ============================================================
   ICON
   ============================================================ */
.why-icon {
    width: 55px;
    height: 55px;
    margin-bottom: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #f8eee3;
    color: #e8864c;
    font-size: 21px;
    transition:
        background 0.3s ease,
        color 0.3s ease,
        transform 0.3s ease;
}
.why-card:hover .why-icon {
    background: #e8864c;
    color: #ffffff;
    transform: scale(1.05);
}
/* ============================================================
   CARD TITLE
   ============================================================ */
.why-card-title {
    max-width: 230px;
    margin: 0 0 24px;
    font-family: var(--titletext);
	letter-spacing: .5px;
    font-size: 16px;
    font-weight: 700;
    font-style: italic;
    line-height: 1.35;
    color: #46413f;
}
/* ============================================================
   CARD TEXT
   ============================================================ */
.why-card-text {
    max-width: 250px;
    margin: 0;
    font-family: var(--subtext);
    font-size: 13px;
    font-weight: 400;
    line-height: 1.45;
    color: #666;
}
/* ============================================================
   TABLET
   ============================================================ */
@media (max-width: 991px) {
    /* .why-matahari-section {
        padding: 70px 0 60px;
    } */
    .why-eyebrow {
        font-size: 23px;
    }
    .why-title {
        font-size: clamp(
            45px,
            7vw,
            62px
        );
    }
}
/* ============================================================
   MOBILE
   ============================================================ */
@media (max-width: 575px) {
    /* .why-matahari-section {
        padding: 60px 0 45px;
    } */
    .why-eyebrow {
        margin-bottom: 14px;
        font-size: 19px;
    }
    .why-title {
        font-size: clamp(38px, 11vw, 50px);
        line-height: 1.02;
        letter-spacing: -1px;
    }
    .why-card {
        min-height: 270px;
        border-radius: 27px !important;
    }
    .why-card .card-body {
        padding: 38px 25px;
    }
}
</style>