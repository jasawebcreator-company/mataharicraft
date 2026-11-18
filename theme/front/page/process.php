<?php
/**
 * Template halaman: Our Process
 * Dipanggil dari page.php jika custom_field_1 == 'process'
 * Konten diambil dari $data->result->content
 */
$mcTitle    = htmlspecialchars($data->result->title ?? '', ENT_QUOTES, 'UTF-8');
$mcSlug     = (string) ($data->result->slug ?? '');
$mcContent  = $data->result->content ?? '';
$mcEyebrow  = 'Our Process';
$mcTagline  = 'From the first idea to export, a clear and reliable path for every order.';
$mcItemWord = 'Step';

/* Cari menu induk yang memuat halaman ini -> daftar halaman satu grup */
$mcSiblings = [];
$mcIndex    = -1;

if ($mcSlug !== '' && !empty($data->menu->primary_menu)) {
    foreach ($data->menu->primary_menu as $mcParent) {
        if (empty($mcParent->child)) {
            continue;
        }

        $mcList  = [];
        $mcFound = -1;

        foreach ($mcParent->child as $mcChild) {
            $mcPath = trim((string) parse_url((string) ($mcChild->link ?? ''), PHP_URL_PATH), '/');
            $mcLast = $mcPath === '' ? '' : basename($mcPath);

            if ($mcLast === $mcSlug) {
                $mcFound = count($mcList);
            }

            $mcList[] = [
                'label' => preg_replace('/__$/', '', trim((string) $mcChild->label)),
                'url'   => (string) ($mcChild->link ?? ''),
            ];
        }

        if ($mcFound >= 0) {
            $mcSiblings = $mcList;
            $mcIndex    = $mcFound;
            break;
        }
    }
}

$mcTotal = count($mcSiblings);
$mcPrev  = ($mcIndex > 0)             ? $mcSiblings[$mcIndex - 1] : null;
$mcNext  = ($mcIndex >= 0 && $mcIndex < $mcTotal - 1) ? $mcSiblings[$mcIndex + 1] : null;
$mcNum   = ($mcIndex >= 0) ? sprintf('%02d', $mcIndex + 1) : '';
$mcOf    = ($mcTotal > 0)  ? sprintf('%02d', $mcTotal) : '';
$mcCta   = base_url('contact');
?>

<section class="page-hero mc-hero">

    <?php if ($mcNum !== ''): ?>
        <span class="mc-hero-num" aria-hidden="true"><?= $mcNum ?></span>
    <?php endif; ?>

    <div class="mc-hero-inner">

        <span class="mc-eyebrow">
            <i></i>
            <?= $mcEyebrow ?><?= $mcNum !== '' ? ' &middot; ' . $mcNum . ' / ' . $mcOf : '' ?>
            <i></i>
        </span>

        <h1 class="mc-hero-title"><?= $mcTitle ?></h1>

        <p class="mc-hero-tagline"><?= $mcTagline ?></p>

        <nav class="mc-breadcrumb" aria-label="Breadcrumb">
            <a href="<?= base_url() ?>">Home</a>
            <span class="mc-sep">&rarr;</span>
            <span><?= $mcEyebrow ?></span>
            <span class="mc-sep">&rarr;</span>
            <span class="mc-current"><?= $mcTitle ?></span>
        </nav>

    </div>

</section>


<section class="mc-section">
    <div class="mc-wrap<?= $mcTotal ? '' : ' mc-wrap--single' ?>">

        <!-- ARTICLE -->
        <div class="mc-main">

            <article class="mc-article">
                <div class="mc-content">
                    <?= $mcContent ?>
                </div>
            </article>

            <?php if ($mcPrev || $mcNext): ?>
                <div class="mc-pager">

                    <?php if ($mcPrev): ?>
                        <a class="mc-pager-link mc-pager-prev" href="<?= htmlspecialchars($mcPrev['url'], ENT_QUOTES, 'UTF-8') ?>">
                            <small>&larr; Previous</small>
                            <span><?= htmlspecialchars($mcPrev['label'], ENT_QUOTES, 'UTF-8') ?></span>
                        </a>
                    <?php else: ?>
                        <span></span>
                    <?php endif; ?>

                    <?php if ($mcNext): ?>
                        <a class="mc-pager-link mc-pager-next" href="<?= htmlspecialchars($mcNext['url'], ENT_QUOTES, 'UTF-8') ?>">
                            <small>Next &rarr;</small>
                            <span><?= htmlspecialchars($mcNext['label'], ENT_QUOTES, 'UTF-8') ?></span>
                        </a>
                    <?php endif; ?>

                </div>
            <?php endif; ?>

        </div>


        <!-- SIDEBAR -->
        <aside class="mc-side">

            <?php if ($mcTotal): ?>
                <div class="mc-card">
                    <div class="mc-card-label">In this section</div>
                    <ul class="mc-side-list">
                        <?php foreach ($mcSiblings as $i => $mcItem): ?>
                            <li class="<?= $i === $mcIndex ? 'is-active' : '' ?>">
                                <a href="<?= htmlspecialchars($mcItem['url'], ENT_QUOTES, 'UTF-8') ?>">
                                    <b><?= sprintf('%02d', $i + 1) ?></b>
                                    <span><?= htmlspecialchars($mcItem['label'], ENT_QUOTES, 'UTF-8') ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="mc-cta">
                <span class="mc-cta-eyebrow">Work With Us</span>
                <h3>Ready to start your next collection?</h3>
                <p>Share your brief and quantities. Our team will get back to you with the next steps.</p>
                <a class="mc-cta-btn" href="<?= $mcCta ?>">Request a Quotation</a>
            </div>

        </aside>

    </div>
</section>


<style>
/* ============================================================
   HERO
   ============================================================ */

.page-hero.mc-hero {
    position: relative;
    min-height: 540px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 9rem 1.5rem 6rem;
    text-align: center;
    overflow: hidden;
    /* gambar sama dengan hero global, overlay dibuat lebih terang agar foto terlihat */
    background-image:
        linear-gradient(180deg, rgba(36, 33, 29, 0.78) 0%, rgba(36, 33, 29, 0.50) 45%, rgba(36, 33, 29, 0.88) 100%),
        url('https://gotra-web.goapp.my.id/web-upload/mataharicraft/1790228152-24-09-2026-jlmb2cE3S17naZz60sQyt5qWDwkMJhUY.webp');
    background-position: center;
    background-size: cover;
}

.page-hero.mc-hero::after {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    height: 4px;
    background: var(--colors, #e88d55);
}

.mc-hero-num {
    position: absolute;
    right: 4%;
    bottom: -0.18em;
    font-family: var(--primtext), serif;
    font-size: clamp(9rem, 22vw, 20rem);
    line-height: 1;
    color: rgba(255, 255, 255, 0.06);
    pointer-events: none;
    user-select: none;
}

.mc-hero-inner {
    position: relative;
    z-index: 1;
    max-width: 820px;
}

.mc-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 1.2rem;
    font-family: var(--subtext), sans-serif;
    font-size: 0.8rem;
    font-weight: 600;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--colors, #e88d55);
}

.mc-eyebrow i {
    display: block;
    width: 38px;
    height: 1px;
    background: var(--colors, #e88d55);
}

.mc-hero-title {
    margin: 0 0 1.1rem;
    font-family: var(--primtext), serif;
    font-size: clamp(2.8rem, 6vw, 4.8rem);
    font-weight: 500;
    line-height: 1.1;
    color: #ffffff;
}

.mc-hero-tagline {
    max-width: 560px;
    margin: 0 auto 2rem;
    font-family: var(--subtext), sans-serif;
    font-size: 1.05rem;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.82);
}

.mc-breadcrumb {
    display: inline-flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 0.6rem;
    padding: 0.55rem 1.3rem;
    border: 1px solid rgba(255, 255, 255, 0.25);
    border-radius: 40px;
    background: rgba(255, 255, 255, 0.06);
    font-family: var(--subtext), sans-serif;
    font-size: 0.72rem;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.7);
}

.mc-breadcrumb a {
    color: #e5e0d8;
    text-decoration: none;
    transition: color 0.3s ease;
}

.mc-breadcrumb a:hover {
    color: var(--colors, #e88d55);
}

.mc-sep {
    color: rgba(255, 255, 255, 0.4);
}

.mc-current {
    color: var(--colors, #e88d55);
}


/* ============================================================
   LAYOUT
   ============================================================ */

.mc-section {
    padding: 90px 20px 110px;
    background: var(--color3, #faf6f0);
}

.mc-wrap {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: minmax(0, 1fr) 340px;
    gap: 56px;
    align-items: start;
}

.mc-wrap--single {
    grid-template-columns: minmax(0, 860px);
    justify-content: center;
}

.mc-wrap--single .mc-side {
    display: none;
}

.mc-article {
    padding: 56px 60px;
    background: #ffffff;
    border-radius: 14px;
    box-shadow: 0 10px 40px rgba(36, 33, 29, 0.06);
}


/* ============================================================
   CONTENT (isi dari database)
   ============================================================ */

.mc-content {
    font-family: var(--subtext), sans-serif;
    font-size: 16px;
    line-height: 1.85;
    color: #5b564f;
}

.mc-content > :first-child {
    margin-top: 0;
}

.mc-content > :last-child {
    margin-bottom: 0;
}

.mc-content p {
    margin: 0 0 1.25rem;
}

.mc-content p.lead {
    margin-bottom: 2rem;
    padding-bottom: 1.8rem;
    border-bottom: 1px solid #eadfd2;
    font-family: var(--primtext), serif;
    font-size: 1.4rem;
    line-height: 1.65;
    color: #24211d;
}

.mc-content strong,
.mc-content b {
    font-weight: 700;
    color: #24211d;
}

.mc-content em {
    font-style: italic;
    color: #3b362f;
}

.mc-content a {
    color: var(--colors, #e88d55);
    text-decoration: underline;
    text-underline-offset: 3px;
}

.mc-content h2,
.mc-content h3 {
    display: flex;
    align-items: center;
    gap: 14px;
    margin: 2.8rem 0 1.1rem;
    font-family: var(--primtext), serif;
    font-weight: 500;
    line-height: 1.25;
    color: #24211d;
}

.mc-content h2 { font-size: 2rem; }
.mc-content h3 { font-size: 1.65rem; }

.mc-content h2::before,
.mc-content h3::before {
    content: '';
    flex-shrink: 0;
    width: 28px;
    height: 3px;
    background: var(--colors, #e88d55);
}


/* Bullet list */

.mc-content ul,
.mc-content ol {
    margin: 0 0 1.5rem;
    padding: 0;
    list-style: none;
}

.mc-content li {
    position: relative;
    margin: 0 0 0.8rem;
    padding-left: 32px;
}

.mc-content ul li::before {
    content: '';
    position: absolute;
    left: 4px;
    top: 0.72em;
    width: 8px;
    height: 8px;
    background: var(--colors, #e88d55);
    transform: rotate(45deg);
}


/* Numbered list */

.mc-content ol {
    counter-reset: mc-step;
}

.mc-content ol li {
    padding-left: 46px;
    counter-increment: mc-step;
}

.mc-content ol li::before {
    content: counter(mc-step);
    position: absolute;
    left: 0;
    top: 0.2em;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: var(--colors, #e88d55);
    color: #ffffff;
    font-family: var(--subtext), sans-serif;
    font-size: 13px;
    font-weight: 700;
    line-height: 28px;
    text-align: center;
}


/* Quote */

.mc-content blockquote {
    position: relative;
    margin: 2.4rem 0;
    padding: 1.7rem 2rem 1.7rem 4rem;
    border-left: 4px solid var(--colors, #e88d55);
    border-radius: 0 12px 12px 0;
    background: var(--color3, #faf6f0);
    font-family: var(--primtext), serif;
    font-size: 1.25rem;
    font-style: italic;
    line-height: 1.6;
    color: #24211d;
}

.mc-content blockquote::before {
    content: '\201C';
    position: absolute;
    left: 18px;
    top: 6px;
    font-size: 4rem;
    line-height: 1;
    font-style: normal;
    color: var(--colors, #e88d55);
}

.mc-content blockquote p {
    margin: 0;
}


/* ============================================================
   PREV / NEXT
   ============================================================ */

.mc-pager {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 28px;
}

.mc-pager-link {
    display: block;
    padding: 22px 26px;
    border: 1px solid #eadfd2;
    border-radius: 12px;
    background: #ffffff;
    text-decoration: none;
    transition: var(--transition, all 0.35s ease);
}

.mc-pager-link small {
    display: block;
    margin-bottom: 4px;
    font-family: var(--subtext), sans-serif;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--colors, #e88d55);
}

.mc-pager-link span {
    font-family: var(--primtext), serif;
    font-size: 1.2rem;
    color: #24211d;
}

.mc-pager-next {
    text-align: right;
    grid-column: 2;
}

.mc-pager-link:hover {
    border-color: var(--colors, #e88d55);
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(36, 33, 29, 0.08);
}


/* ============================================================
   SIDEBAR
   ============================================================ */

.mc-side {
    position: sticky;
    top: 110px;
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.mc-card {
    padding: 30px 28px;
    background: #ffffff;
    border-radius: 14px;
    box-shadow: 0 10px 40px rgba(36, 33, 29, 0.06);
}

.mc-card-label {
    margin-bottom: 14px;
    font-family: var(--subtext), sans-serif;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--colors, #e88d55);
}

.mc-side-list {
    margin: 0;
    padding: 0;
    list-style: none;
}

.mc-side-list li {
    border-bottom: 1px solid #f0e8de;
}

.mc-side-list li:last-child {
    border-bottom: 0;
}

.mc-side-list a {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 13px 12px;
    border-radius: 8px;
    text-decoration: none;
    font-family: var(--subtext), sans-serif;
    font-size: 14.5px;
    color: #5b564f;
    transition: var(--transition, all 0.35s ease);
}

.mc-side-list a b {
    font-size: 12px;
    font-weight: 600;
    color: var(--colors, #e88d55);
}

.mc-side-list a:hover {
    color: var(--colors, #e88d55);
    padding-left: 18px;
}

.mc-side-list li.is-active a {
    background: var(--color3, #faf6f0);
    color: #24211d;
    font-weight: 700;
}

.mc-cta {
    padding: 34px 30px;
    border-radius: 14px;
    background: var(--color2, #24211d);
    color: #ffffff;
}

.mc-cta-eyebrow {
    display: block;
    margin-bottom: 10px;
    font-family: var(--subtext), sans-serif;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--colors, #e88d55);
}

.mc-cta h3 {
    margin: 0 0 12px;
    font-family: var(--primtext), serif;
    font-size: 1.6rem;
    font-weight: 500;
    line-height: 1.25;
    color: #ffffff;
}

.mc-cta p {
    margin: 0 0 22px;
    font-family: var(--subtext), sans-serif;
    font-size: 14px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.72);
}

.mc-cta-btn {
    display: block;
    padding: 14px 20px;
    background: var(--colors, #e88d55);
    color: #ffffff;
    text-align: center;
    text-decoration: none;
    font-family: var(--subtext), sans-serif;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.4px;
    transition: background-color 0.3s ease;
}

.mc-cta-btn:hover {
    background: #e67d47;
    color: #ffffff;
}


/* ============================================================
   RESPONSIVE
   ============================================================ */

@media (max-width: 991.98px) {

    .page-hero.mc-hero {
        min-height: 430px;
        padding: 8rem 1.25rem 4.5rem;
    }

    .mc-section {
        padding: 60px 16px 80px;
    }

    .mc-wrap {
        grid-template-columns: minmax(0, 1fr);
        gap: 36px;
    }

    .mc-side {
        position: static;
    }

    .mc-article {
        padding: 40px 32px;
    }
}

@media (max-width: 575.98px) {

    .page-hero.mc-hero {
        min-height: 360px;
        padding: 7rem 1rem 3.5rem;
    }

    .mc-eyebrow i {
        width: 22px;
    }

    .mc-article {
        padding: 30px 22px;
    }

    .mc-content p.lead {
        font-size: 1.2rem;
    }

    .mc-content h2 { font-size: 1.6rem; }
    .mc-content h3 { font-size: 1.4rem; }

    .mc-content blockquote {
        padding: 1.4rem 1.2rem 1.4rem 3.2rem;
        font-size: 1.1rem;
    }

    .mc-pager {
        grid-template-columns: 1fr;
    }

    .mc-pager-next {
        grid-column: 1;
    }
}
</style>
