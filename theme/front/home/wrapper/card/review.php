<?php
$review_message = trim(strip_tags($items->message ?? ''));
$review_guest = !empty($items->guest) ? $items->guest : 'Client Name';
$review_limit = 145;
$review_is_long = strlen($review_message) > $review_limit;
$review_excerpt = $review_is_long ? substr($review_message, 0, $review_limit) . '...' : $review_message;
?>

<article class="testimonial-box" data-motion-stagger>
    <div class="quote-icon">“</div>
    <div class="testimonial-text">
        <span class="review-message" data-full="<?= htmlspecialchars($review_message) ?>" data-short="<?= htmlspecialchars($review_excerpt) ?>"><?= htmlspecialchars($review_excerpt) ?></span>
        <?php if ($review_is_long): ?>
            <button class="review-toggle" type="button" aria-expanded="false">Read More</button>
        <?php endif; ?>
    </div>
    <div class="testimonial-name"><?= htmlspecialchars($review_guest) ?></div>
</article>
