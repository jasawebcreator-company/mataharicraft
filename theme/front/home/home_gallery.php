<style>
#gallery {
  background-color: var(--color-light);

  .gallery-header-flex {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 3.5rem;

    @media (max-width: 768px) {
      flex-direction: column;
      align-items: flex-start;
      gap: 1.5rem;
    }

    .section-header {
      text-align: left;
      margin-bottom: 0;

      .section-description {
        margin: 0;
      }
    }
  }

  .gallery-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;

    @media (max-width: 991px) {
      grid-template-columns: repeat(2, 1fr);
    }
    @media (max-width: 576px) {
      grid-template-columns: 1fr;
    }
  }

  .gallery-item {
    position: relative;
    border-radius: 4px;
    overflow: hidden;
    height: 320px;

    img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }

    .gallery-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to top, rgba(36, 33, 29, 0.7), transparent);
      opacity: 0;
      display: flex;
      align-items: flex-end;
      padding: 1.5rem;
      transition: var(--transition);

      .overlay-text {
        color: #ffffff;
        font-family: var(--primtext);
        font-size: 1.3rem;
      }
    }

    &:hover {
      img {
        transform: scale(1.08);
      }
      .gallery-overlay {
        opacity: 1;
      }
    }
  }
}
</style>

<section id="gallery">
  <div class="container-global">
    <div class="gallery-header-flex">
      <div class="section-header">
        <span class="section-subtitle">Craft in Context</span>
        <h2 class="section-title">Designed for Real Spaces</h2>
        <p class="section-description">Our pieces can be found in homes, villas, resorts, restaurants, and retail spaces around the world.</p>
      </div>

      <a href="#collection" class="btn-craft-primary">Explore Our Products &rarr;</a>
    </div>

    <div class="gallery-grid">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=600&q=80" alt="Villa Dining Space">
        <div class="gallery-overlay">
          <span class="overlay-text">Villa Dining Room</span>
        </div>
      </div>

      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=600&q=80" alt="Resort Suite Bedroom">
        <div class="gallery-overlay">
          <span class="overlay-text">Resort Suite</span>
        </div>
      </div>

      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1615873968403-89e068629265?auto=format&fit=crop&w=600&q=80" alt="Restaurant Interior">
        <div class="gallery-overlay">
          <span class="overlay-text">Boutique Restaurant</span>
        </div>
      </div>

      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=600&q=80" alt="Luxury Lounge Area">
        <div class="gallery-overlay">
          <span class="overlay-text">Luxury Villa Lounge</span>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const gallerySec = document.querySelector('#gallery');
  if (gallerySec && typeof motion !== 'undefined') {
    motion.animate(gallerySec, { opacity: [0, 1], y: [20, 0] }, { duration: 0.6 });
  }
});
</script>
