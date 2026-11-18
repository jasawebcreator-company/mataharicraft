<?php
$blogs = json_decode(json_encode([
    [
        'title' => 'Best Places to Visit in Bali for First-Time Travelers',
        'category' => 'Bali Travel Guide',
        'excerpt' => 'A practical guide to Bali’s essential temples, beaches, rice terraces and cultural highlights.',
        'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=900&h=650&q=86',
        'link' => 'blogs/best-places-to-visit-in-bali'
    ],
    [
        'title' => 'Ubud or Uluwatu: Which Area Should You Visit?',
        'category' => 'Destination Tips',
        'excerpt' => 'Compare Bali’s cultural heart with its dramatic southern coastline to find the right area for your trip.',
        'image' => 'https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?auto=format&fit=crop&w=900&h=650&q=86',
        'link' => 'blogs/ubud-or-uluwatu'
    ],
    [
        'title' => 'How to Plan a Private Bali Day Tour',
        'category' => 'Private Tours',
        'excerpt' => 'Learn how to arrange the right route, timing and private transport for a relaxed day exploring Bali.',
        'image' => 'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=900&h=650&q=86',
        'link' => 'blogs/how-to-plan-private-bali-day-tour'
    ]
]));
?>

<style>
    #blogs {
        overflow: hidden;
        background-color: var(--light-color);

        .blogs__grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1.25rem;
        }


    }

    @media (max-width: 991.98px) {
        #blogs {
            .blogs__grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));

                > .blog-card:last-child {
                    grid-column: 1 / -1;
                    width: calc(50% - 0.625rem);
                    justify-self: center;
                }
            }
        }
    }

    @media (max-width: 767.98px) {
        #blogs {
            .blogs__grid {
                display: flex;
                margin-right: -1.5rem;
                padding-right: 1.5rem;
                overflow-x: auto;
                scroll-snap-type: x mandatory;
                scrollbar-width: none;

                &::-webkit-scrollbar {
                    display: none;
                }

                > .blog-card,
                > .blog-card:last-child {
                    min-width: min(82vw, 20rem);
                    width: auto;
                    scroll-snap-align: start;
                }
            }

            .blog-card__media {
                height: 13.5rem;
            }
        }
    }
</style>

<section id="blogs" aria-labelledby="blogs-title">
    <div class="container-global" id="about">
        <div class="section-header-global" data-blogs-heading>
            <span class="section-header-global__tag">Travel Inspiration</span>
            <h2 class="section-header-global__title" id="blogs-title">Plan Your Bali Journey</h2>
            <p class="section-header-global__description">Local tips, destination ideas and practical guides to help you plan a better Bali experience.</p>
        </div>
        <div class="blogs__grid">
            <?php foreach ($item->data as $blog): ?>
                <?php include 'card/blog.php'; ?>
            <?php endforeach; ?>
        </div>
        <div class="blogs__action">
            <a class="button-global button-global--outline" href="<?= base_url() ?>article-category/blog-article">View All Blogs <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const section = document.querySelector("#blogs");
        if (!section || !window.Motion || window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            return;
        }
        const { animate, inView, stagger } = window.Motion;
        inView(section, () => {
            animate(section.querySelector("[data-blogs-heading]"), { opacity: [0, 1], y: [18, 0] }, { duration: 0.55 });
            animate(section.querySelectorAll("[data-blog-card]"), { opacity: [0, 1], y: [26, 0] }, { duration: 0.6, delay: stagger(0.1) });
            animate(section.querySelector(".blogs__action"), { opacity: [0, 1], y: [16, 0] }, { duration: 0.55, delay: 0.3 });
        }, { amount: 0.15, once: true });
    });
</script>
