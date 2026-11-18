<section class="page-hero" id="blogs-hero" aria-labelledby="blogs-hero-title" data-page-hero>
    <div class="container-global">
        <div class="page-hero__content">
            <div class="page-hero__breadcrumb" data-page-hero-animate>
                <a href="./">Home</a>
                <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                <span>Blogs</span>
            </div>
            <h1 class="page-hero__title" id="blogs-hero-title" data-page-hero-animate>Ideas and Stories for Your <span>Bali Journey</span></h1>
            <p class="page-hero__description" data-page-hero-animate>Discover destination guides, local travel tips, and practical ideas to help you plan a smoother and more memorable Bali trip.</p>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const section = document.querySelector("#blogs-hero");
        if (!section || !window.Motion || window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            return;
        }

        const { animate, stagger } = window.Motion;
        animate(section.querySelectorAll("[data-page-hero-animate]"), { opacity: [0, 1], y: [24, 0] }, { duration: 0.65, delay: stagger(0.09, { startDelay: 0.12 }), ease: [0.22, 1, 0.36, 1] });
    });
</script>


<?php
$blogPageFallback = json_decode(json_encode([
    [
        'id' => '53113',
        'title' => 'Best Places to Visit in Bali for First-Time Travelers',
        'content' => '<p>A practical guide to Bali’s essential temples, beaches, rice terraces, and cultural highlights for your first visit.</p>',
        'slug' => 'best-places-to-visit-in-bali',
        'img_cover_url' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=1400&q=86',
        'img_thumb_url' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=900&q=82',
        'created_at' => '2026-08-21 15:02:37',
        'publish_date' => '2026-08-21',
        'category_name' => 'Bali Travel Guide'
    ],
    [
        'id' => '53114',
        'title' => 'Ubud or Uluwatu: Which Area Should You Visit?',
        'content' => '<p>Compare Bali’s cultural heart with its dramatic southern coastline to find the right area for your travel style.</p>',
        'slug' => 'ubud-or-uluwatu',
        'img_cover_url' => 'https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?auto=format&fit=crop&w=1400&q=86',
        'img_thumb_url' => 'https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?auto=format&fit=crop&w=900&q=82',
        'created_at' => '2026-08-18 10:30:00',
        'publish_date' => '2026-08-18',
        'category_name' => 'Destination Tips'
    ],
    [
        'id' => '53115',
        'title' => 'How to Plan a Private Bali Day Tour',
        'content' => '<p>Learn how to arrange the right route, timing, and private transportation for a relaxed day exploring Bali.</p>',
        'slug' => 'how-to-plan-private-bali-day-tour',
        'img_cover_url' => 'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=1400&q=86',
        'img_thumb_url' => 'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=900&q=82',
        'created_at' => '2026-08-14 09:15:00',
        'publish_date' => '2026-08-14',
        'category_name' => 'Private Tours'
    ],
    [
        'id' => '53116',
        'title' => 'A Local Guide to Bali’s Most Beautiful Waterfalls',
        'content' => '<p>Discover tropical waterfalls across Ubud, North Bali, and the island’s quieter countryside, including practical visiting tips.</p>',
        'slug' => 'guide-to-bali-waterfalls',
        'img_cover_url' => 'https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=1400&q=86',
        'img_thumb_url' => 'https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=900&q=82',
        'created_at' => '2026-08-10 13:45:00',
        'publish_date' => '2026-08-10',
        'category_name' => 'Bali Guide'
    ],
    [
        'id' => '53117',
        'title' => 'What to Know Before Visiting Nusa Penida',
        'content' => '<p>Prepare for Nusa Penida’s scenic viewpoints, winding roads, ferry schedules, and the best way to organize a comfortable day trip.</p>',
        'slug' => 'before-visiting-nusa-penida',
        'img_cover_url' => 'https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?auto=format&fit=crop&w=1400&q=86',
        'img_thumb_url' => 'https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?auto=format&fit=crop&w=900&q=82',
        'created_at' => '2026-08-06 11:20:00',
        'publish_date' => '2026-08-06',
        'category_name' => 'Travel Tips'
    ],
    [
        'id' => '53118',
        'title' => 'How to Choose the Right Bali Transportation',
        'content' => '<p>Compare airport transfers, private car charters, and tour transportation to choose the most convenient option for your Bali plans.</p>',
        'slug' => 'choose-bali-transportation',
        'img_cover_url' => 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1400&q=86',
        'img_thumb_url' => 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=900&q=82',
        'created_at' => '2026-08-01 08:40:00',
        'publish_date' => '2026-08-01',
        'category_name' => 'Transportation'
    ]
]));

$blogPageItems = [];

if (isset($data->result) && is_iterable($data->result)) {
    foreach ($data->result as $blogResult) {
        if (is_object($blogResult) || is_array($blogResult)) {
            $blogPageItems[] = is_array($blogResult) ? (object) $blogResult : $blogResult;
        }
    }
}

if (!$blogPageItems) {
    $blogPageItems = $blogPageFallback;
}

$blogImageFallback = 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=1400&q=85';
$blogCardHeadingTag = 'h2';
unset($blogCardStyleRendered);
?>

<style>
    #blogs-content {
        overflow: hidden;
        background-color: var(--surface-color);

        .container-global {
            padding-top: 5.75rem;
            padding-bottom: 6rem;
        }

        .blogs-content__grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1.5rem;
        }
    }

    @media (max-width: 991.98px) {
        #blogs-content {
            .container-global {
                padding-top: 4.75rem;
                padding-bottom: 4.75rem;
            }

            .blogs-content__grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 1.25rem;
            }
        }
    }

    @media (max-width: 575.98px) {
        #blogs-content {
            .container-global {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }

            .blogs-content__grid {
                grid-template-columns: 1fr;
            }
        }
    }
</style>

<section id="blogs-content" aria-label="Bali travel blogs and articles">
    <div class="container-global">
        <div class="blogs-content__grid" data-blog-page-grid>
            <?php foreach ($blogPageItems as $blog): ?>
                <?php include 'home/wrapper/card/blog.php'; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const section = document.querySelector("#blogs-content");
        if (!section || !window.Motion || window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            return;
        }

        const { animate, inView, stagger } = window.Motion;
        const cards = section.querySelectorAll("[data-blog-card]");
        inView(section, () => animate(cards, { opacity: [0, 1], y: [28, 0] }, { duration: 0.6, delay: stagger(0.07), ease: [0.22, 1, 0.36, 1] }), { amount: 0.08, once: true });
    });
</script>


