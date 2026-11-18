<style>
#collection {
  background-color: var(--color3);

  .collection-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
    margin-bottom: 3.5rem;

    @media (max-width: 1200px) {
      grid-template-columns: repeat(3, 1fr);
    }
    @media (max-width: 991px) {
      grid-template-columns: repeat(2, 1fr);
    }
    @media (max-width: 576px) {
      grid-template-columns: 1fr;
    }
  }

  .collection-card {
    background-color: #ffffff;
    border-radius: 4px;
    overflow: hidden;
    border: 1px solid rgba(184, 142, 44, 0.15);
    transition: var(--transition);
    display: flex;
    flex-direction: column;

    &:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
      border-color: var(--colors);

      .card-img-wrap img {
        transform: scale(1.05);
      }
    }

    .card-img-wrap {
      width: 100%;
      height: 220px;
      overflow: hidden;

      img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
      }
    }

    .card-body {
      padding: 1.5rem 1.25rem;
      text-align: center;
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;

      .card-title {
        font-family: var(--primtext);
        font-size: 1.45rem;
        font-weight: 600;
        color: var(--color2);
        margin-bottom: 0.5rem;
      }

      .card-text {
        font-size: 0.88rem;
        color: #666059;
        line-height: 1.5;
      }
    }
  }

  .collection-action {
    text-align: center;
  }
}
</style>

<section id="collection">
  <div class="container-global">
    <div class="section-header">
      <span class="section-subtitle">Our Collections</span>
      <h2 class="section-title">Handcrafted Collections, Made in Bali</h2>
      <p class="section-description">Explore our range of handmade products crafted from natural and carefully selected materials.</p>
    </div>

    <div class="collection-grid">
      <div class="collection-card">
        <div class="card-img-wrap">
          <img src="https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=600&q=80" alt="Bamboo Craft">
        </div>
        <div class="card-body">
          <h3 class="card-title">Bamboo Craft</h3>
          <p class="card-text">Natural handcrafted pieces with distinctive character.</p>
        </div>
      </div>

      <div class="collection-card">
        <div class="card-img-wrap">
          <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=600&q=80" alt="Rattan Craft">
        </div>
        <div class="card-body">
          <h3 class="card-title">Rattan Craft</h3>
          <p class="card-text">Woven designs that bring warmth to any space.</p>
        </div>
      </div>

      <div class="collection-card">
        <div class="card-img-wrap">
          <img src="https://images.unsplash.com/photo-1615873968403-89e068629265?auto=format&fit=crop&w=600&q=80" alt="Wood Craft">
        </div>
        <div class="card-body">
          <h3 class="card-title">Wood Craft</h3>
          <p class="card-text">Handcarved wooden pieces inspired by Bali's craft tradition.</p>
        </div>
      </div>

      <div class="collection-card">
        <div class="card-img-wrap">
          <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=600&q=80" alt="Coconut Shell Craft">
        </div>
        <div class="card-body">
          <h3 class="card-title">Coconut Shell Craft</h3>
          <p class="card-text">Creative, eco-conscious items made from natural materials.</p>
        </div>
      </div>

      <div class="collection-card">
        <div class="card-img-wrap">
          <img src="https://images.unsplash.com/photo-1582582621959-48d273528920?auto=format&fit=crop&w=600&q=80" alt="Paper Craft">
        </div>
        <div class="card-body">
          <h3 class="card-title">Paper Craft</h3>
          <p class="card-text">Unique handmade creations with artistic touch.</p>
        </div>
      </div>

      <div class="collection-card">
        <div class="card-img-wrap">
          <img src="https://images.unsplash.com/photo-1538688525198-9b88f6f53126?auto=format&fit=crop&w=600&q=80" alt="Home Decor">
        </div>
        <div class="card-body">
          <h3 class="card-title">Home Decor</h3>
          <p class="card-text">Decorative pieces for residential and commercial spaces.</p>
        </div>
      </div>
    </div>

    <div class="collection-action">
      <a href="#featured" class="btn-craft-primary">View All Products &rarr;</a>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const collectionSection = document.querySelector('#collection');
  if (collectionSection && typeof motion !== 'undefined') {
    motion.animate(collectionSection, { opacity: [0, 1], y: [20, 0] }, { duration: 0.6 });
  }
});
</script>
