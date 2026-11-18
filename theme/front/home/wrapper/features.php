<?php
$featured_items = [
  [
    'title' => 'Bamboo Pendant Lamp',
    'category' => 'Bamboo Craft',
    'image' => 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=600&q=80'
  ],
  [
    'title' => 'Rattan Wall Mirror',
    'category' => 'Rattan Craft',
    'image' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=600&q=80'
  ],
  [
    'title' => 'Teak Wood Bowl',
    'category' => 'Wood Craft',
    'image' => 'https://images.unsplash.com/photo-1615873968403-89e068629265?auto=format&fit=crop&w=600&q=80'
  ],
  [
    'title' => 'Coconut Shell Lamp',
    'category' => 'Coconut Shell Craft',
    'image' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=600&q=80'
  ],
  [
    'title' => 'Paper Elephant',
    'category' => 'Paper Craft',
    'image' => 'https://images.unsplash.com/photo-1582582621959-48d273528920?auto=format&fit=crop&w=600&q=80'
  ],
  [
    'title' => 'Decorative Vase',
    'category' => 'Home Decor',
    'image' => 'https://images.unsplash.com/photo-1538688525198-9b88f6f53126?auto=format&fit=crop&w=600&q=80'
  ]
];
?>

<style>
#featured {
  background-color: var(--color-light);

  .featured-header-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 3rem;

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

    .featured-nav-btns {
      display: flex;
      gap: 0.75rem;

      .nav-arrow-btn {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        border: 1px solid rgba(184, 142, 44, 0.3);
        background: transparent;
        color: var(--color2);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition);

        &:hover {
          background-color: var(--colors);
          border-color: var(--colors);
          color: var(--color-light);
        }
      }
    }
  }

  .featured-slider {
    margin: 0 -15px;
  }
}
</style>

<section id="featured">
  <div class="container-global">
    <div class="featured-header-row">
      <div class="section-header">
        <span class="section-subtitle">Featured Crafts</span>
        <h2 class="section-title">Crafted Pieces with Character</h2>
        <p class="section-description">A selection of our handcrafted products, made to bring warmth and soul to any space.</p>
      </div>

      <div class="featured-nav-btns">
        <button class="nav-arrow-btn prev-btn" id="featured-prev">
          <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button class="nav-arrow-btn next-btn" id="featured-next">
          <i class="fa-solid fa-chevron-right"></i>
        </button>
      </div>
    </div>

    <div class="featured-slider" id="featured-carousel">
      <?php foreach ($featured_items as $item): ?>
        <?php include 'card/feature.php'; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  if (typeof $ !== 'undefined' && $.fn.slick) {
    $('#featured-carousel').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      dots: false,
      arrows: false,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });

    $('#featured-prev').on('click', function() {
      $('#featured-carousel').slick('slickPrev');
    });

    $('#featured-next').on('click', function() {
      $('#featured-carousel').slick('slickNext');
    });
  }

  const featuredSec = document.querySelector('#featured');
  if (featuredSec && typeof motion !== 'undefined') {
    motion.animate(featuredSec, { opacity: [0, 1], y: [20, 0] }, { duration: 0.6 });
  }
});
</script>
