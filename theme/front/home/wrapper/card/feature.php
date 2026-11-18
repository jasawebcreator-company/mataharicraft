<?php
$card_title = isset($item['title']) ? $item['title'] : (isset($card_title) ? $card_title : 'Craft Item');
$card_category = isset($item['category']) ? $item['category'] : (isset($card_category) ? $card_category : 'Craft Category');
$card_image = isset($item['image']) ? $item['image'] : (isset($card_image) ? $card_image : 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=600&q=80');
$card_link = isset($item['link']) ? $item['link'] : (isset($card_link) ? $card_link : '#');
?>
<div class="featured-item">
  <style>
  .featured-item {
    padding: 0 15px;

    .featured-card {
      background-color: var(--color3);
      border-radius: 4px;
      overflow: hidden;
      border: 1px solid rgba(184, 142, 44, 0.15);
      transition: var(--transition);
      display: block;

      &:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);

        .featured-img-wrap img {
          transform: scale(1.05);
        }
      }

      .featured-img-wrap {
        width: 100%;
        height: 260px;
        overflow: hidden;

        img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          transition: transform 0.6s ease;
        }
      }

      .featured-info {
        padding: 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;

        .info-left {
          .featured-title {
            font-family: var(--primtext);
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--color2);
            margin-bottom: 0.25rem;
          }

          .featured-cat {
            font-size: 0.85rem;
            color: #777777;
          }
        }

        .featured-arrow {
          font-size: 0.9rem;
          color: var(--colors);
        }
      }
    }
  }
  </style>

  <div class="featured-card">
    <div class="featured-img-wrap">
      <img src="<?php echo $card_image; ?>" alt="<?php echo htmlspecialchars($card_title); ?>">
    </div>
    <div class="featured-info">
      <div class="info-left">
        <h3 class="featured-title"><?php echo $card_title; ?></h3>
        <span class="featured-cat"><?php echo $card_category; ?></span>
      </div>
      <div class="featured-arrow">&rarr;</div>
    </div>
  </div>
</div>
