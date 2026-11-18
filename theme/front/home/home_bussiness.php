<style>
#bussiness {
  background-color: var(--color3);

  .bussiness-grid {
    display: grid;
    grid-template-columns: 1fr 1.5fr;
    gap: 3.5rem;
    align-items: center;

    @media (max-width: 991px) {
      grid-template-columns: 1fr;
      gap: 2.5rem;
    }
  }

  .bussiness-info {
    .section-header {
      text-align: left;
      margin-bottom: 2rem;

      .section-description {
        margin: 0;
      }
    }
  }

  .bussiness-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;

    @media (max-width: 768px) {
      grid-template-columns: 1fr;
    }

    .bussiness-card {
      background-color: #ffffff;
      border-radius: 4px;
      overflow: hidden;
      border: 1px solid rgba(184, 142, 44, 0.15);
      transition: var(--transition);

      &:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.08);

        .card-img-box img {
          transform: scale(1.05);
        }
      }

      .card-img-box {
        width: 100%;
        height: 180px;
        overflow: hidden;

        img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          transition: transform 0.6s ease;
        }
      }

      .card-content-box {
        padding: 1.25rem;

        .card-heading {
          font-family: var(--primtext);
          font-size: 1.3rem;
          font-weight: 600;
          color: var(--color2);
          margin-bottom: 0.5rem;
        }

        .card-text-desc {
          font-size: 0.85rem;
          color: #666059;
          line-height: 1.5;
        }
      }
    }
  }
}
</style>

<section id="bussiness">
  <div class="container-global">
    <div class="bussiness-grid">
      <div class="bussiness-info">
        <div class="section-header">
          <span class="section-subtitle">For Business</span>
          <h2 class="section-title">Looking for a Bali Craft Supplier?</h2>
          <p class="section-description">Whether you are sourcing products for your retail store, brand, villa, restaurant, interior project, or hospitality brand, Matahari Craft can work with you on wholesale and custom production requirements.</p>
        </div>
        <a href="#cta" class="btn-craft-primary">Discuss Your Project &rarr;</a>
      </div>

      <div class="bussiness-cards">
        <div class="bussiness-card">
          <div class="card-img-box">
            <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=600&q=80" alt="Wholesale Orders">
          </div>
          <div class="card-content-box">
            <h3 class="card-heading">Wholesale Orders</h3>
            <p class="card-text-desc">For retailers, distributors, and bulk commercial buyers.</p>
          </div>
        </div>

        <div class="bussiness-card">
          <div class="card-img-box">
            <img src="https://images.unsplash.com/photo-1590736969955-71cc94801759?auto=format&fit=crop&w=600&q=80" alt="Custom Production">
          </div>
          <div class="card-content-box">
            <h3 class="card-heading">Custom Production</h3>
            <p class="card-text-desc">Develop bespoke creations tailored to your specs.</p>
          </div>
        </div>

        <div class="bussiness-card">
          <div class="card-img-box">
            <img src="https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=600&q=80" alt="Hospitality Projects">
          </div>
          <div class="card-content-box">
            <h3 class="card-heading">Hospitality & Interior</h3>
            <p class="card-text-desc">Unique pieces for hotels, villas, restaurants, and resorts.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const bussinessSec = document.querySelector('#bussiness');
  if (bussinessSec && typeof motion !== 'undefined') {
    motion.animate(bussinessSec, { opacity: [0, 1], y: [20, 0] }, { duration: 0.6 });
  }
});
</script>
