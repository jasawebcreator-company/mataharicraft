<style>

  .parallax-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 5rem auto;

    .parallax-subtitle {
      font-size: 0.8rem;
      font-weight: 700;
      letter-spacing: 3px;
      color: var(--colors);
      text-transform: uppercase;
      margin-bottom: 1rem;
      display: block;
    }

    .parallax-title {
      font-family: var(--primtext);
      font-size: 3.6rem;
      font-weight: 500;
      color: #ffffff;
      line-height: 1.15;
      margin-bottom: 1.5rem;

      @media (max-width: 768px) {
        font-size: 2.5rem;
      }
    }

    .parallax-desc {
      font-size: 1.05rem;
      color: #e5e0d8;
      line-height: 1.7;
      margin-bottom: 2.5rem;
    }
  }

  .parallax-feature-bar {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-top: 1px solid rgba(184, 142, 44, 0.3);

    .feature-bar-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 2rem;
      padding: 2rem 0;

      @media (max-width: 991px) {
        grid-template-columns: repeat(2, 1fr);
      }
      @media (max-width: 576px) {
        grid-template-columns: 1fr;
      }
    }

    .bar-item {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1rem;

      .bar-icon {
        font-size: 1.8rem;
        color: var(--colors);
      }

      .bar-label {
        font-family: var(--subtext);
        font-size: 0.95rem;
        font-weight: 600;
        color: var(--color2);
      }
    }
  }
}
</style>

<div class="parallax-feature-bar">
    <div class="container-global" style="padding-top: 0; padding-bottom: 0;">
      <div class="feature-bar-grid">
        <div class="bar-item">
          <i class="fa-solid fa-seedling bar-icon"></i>
          <span class="bar-label">Natural Materials</span>
        </div>

        <div class="bar-item">
          <i class="fa-solid fa-hands-holding-circle bar-icon"></i>
          <span class="bar-label">Skilled Artisans</span>
        </div>

        <div class="bar-item">
          <i class="fa-solid fa-truck-ramp-box bar-icon"></i>
          <span class="bar-label">Global Supply</span>
        </div>

        <div class="bar-item">
          <i class="fa-solid fa-boxes-packing bar-icon"></i>
          <span class="bar-label">Custom & Wholesale Production</span>
        </div>
      </div>
    </div>
  </div>

<section id="parallax">
  <!-- <div class="container-global" style="padding-bottom: 0;">
    <div class="parallax-content">
      <span class="parallax-subtitle">Made in Bali</span>
      <h2 class="parallax-title">Made in Bali. Created to Travel Far.</h2>
      <p class="parallax-desc">Born in Bali, Matahari Craft is inspired by the island's spirituality, natural materials, and generations of craftsmanship. We send true Balinese craft to create spaces that feel like a home far beyond Bali.</p>
      <a href="#profile" class="btn-craft-primary">Discover Our Story &rarr;</a>
    </div>
  </div> -->

  
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const parallaxSec = document.querySelector('#parallax');
  if (parallaxSec && typeof motion !== 'undefined') {
    motion.animate(parallaxSec, { opacity: [0, 1] }, { duration: 0.8 });
  }
});
</script>
