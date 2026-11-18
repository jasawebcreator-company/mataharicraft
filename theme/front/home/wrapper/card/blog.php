<?php
$blogItem = !isset($blog) ? new stdClass() : (is_array($blog) ? (object) $blog : $blog);
$blogTitle = isset($blogItem->title) && trim((string) $blogItem->title) !== '' ? trim((string) $blogItem->title) : 'Plan Your Bali Journey';
$blogCategory = isset($blogItem->category) && trim((string) $blogItem->category) !== '' ? trim((string) $blogItem->category) : 'Bali Travel Guide';
$blogExcerpt = isset($blogItem->excerpt) && trim((string) $blogItem->excerpt) !== '' ? trim((string) $blogItem->excerpt) : 'Discover practical local tips and inspiration for planning your Bali journey.';
$blogImage = isset($blogItem->img_cover_url) && trim((string) $blogItem->img_cover_url) !== '' ? trim((string) $blogItem->img_cover_url) : 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=900&h=650&q=86';
$blogLink = isset($blogItem->link) && trim((string) $blogItem->link) !== '' ? trim((string) $blogItem->link) : 'blogs';
?>

<article class="blog-card" data-blog-card>
	<style>
		        .blog-card {
            display: flex;
            min-width: 0;
            height: 100%;
            flex-direction: column;
            overflow: hidden;
            border: 1px solid rgba(7, 26, 50, 0.08);
            border-radius: var(--radius-md);
            background-color: var(--light-color);
            box-shadow: 0 0.55rem 1.6rem rgba(7, 26, 50, 0.055);
            transition: transform var(--transition-base), border-color var(--transition-base), box-shadow var(--transition-base);

            &:hover {
                border-color: rgba(12, 123, 97, 0.18);
                transform: translateY(-0.45rem);
                box-shadow: var(--shadow-card);

                .blog-card__media img {
                    transform: scale(1.06);
                }
            }
        }

        .blog-card__media {
            display: block;
            height: 15rem;
            overflow: hidden;
            background-color: var(--soft-green);

            img {
                width: 100%;
                height: 100%;
                transition: transform 500ms ease;
            }
        }

        .blog-card__content {
            display: flex;
            flex: 1;
            flex-direction: column;
            padding: 1.25rem;
        }

        .blog-card__category {
            align-self: flex-start;
            margin-bottom: 0.65rem;
            padding: 0.34rem 0.6rem;
            border-radius: var(--radius-pill);
            background-color: var(--soft-green);
            color: var(--secondary-color);
            font-size: 0.62rem;
            font-weight: 800;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .blog-card__title {
            margin: 0 0 0.65rem;
            font-size: 1.08rem;
            letter-spacing: -0.03em;
            line-height: 1.35;

            a:hover,
            a:focus-visible {
                color: var(--secondary-color);
            }
        }

        .blog-card__excerpt {
            margin-bottom: 1rem;
            color: var(--muted-color);
            font-size: 0.75rem;
            line-height: 1.65;
        }

        .blog-card__link {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            margin-top: auto;
            color: var(--secondary-color);
            font-size: 0.7rem;
            font-weight: 800;

            i {
                font-size: 0.58rem;
                transition: transform var(--transition-fast);
            }

            &:hover i,
            &:focus-visible i {
                transform: translateX(0.25rem);
            }
        }

        .blogs__action {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }
	</style>
    <a class="blog-card__media" href="<?= $func->link(ROUTE_BLOG_VIEW, $blog->slug) ?>" aria-label="Read <?= htmlspecialchars($blogTitle, ENT_QUOTES, 'UTF-8') ?>">
        <img src="<?= htmlspecialchars($blogImage, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($blogTitle, ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
    </a>
    <div class="blog-card__content">
        <span class="blog-card__category"><?= htmlspecialchars($blogCategory, ENT_QUOTES, 'UTF-8') ?></span>
        <h3 class="blog-card__title"><a href="<?= $func->link(ROUTE_BLOG_VIEW, $blog->slug) ?>"><?= htmlspecialchars($blogTitle, ENT_QUOTES, 'UTF-8') ?></a></h3>
        <p class="blog-card__excerpt"><?= htmlspecialchars($blogExcerpt, ENT_QUOTES, 'UTF-8') ?></p>
        <a class="blog-card__link" href="<?= $func->link(ROUTE_BLOG_VIEW, $blog->slug) ?>">Read More <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
    </div>
</article>
