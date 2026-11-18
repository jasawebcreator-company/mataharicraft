<?php
/**
 * CSS bersama untuk halaman Company: Our Story, Our Artisans, Our Workshop
 * (hero .mc-* dan body .mcc-*). Di-include dari masing-masing template.
 */
?>
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


@media (max-width: 991.98px) {
    .page-hero.mc-hero {
        min-height: 430px;
        padding: 8rem 1.25rem 4.5rem;
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
}


/* ============================================================
   COMPANY PAGES - BODY  (prefix .mcc)
   ============================================================ */

.mcc {
    --mcc-dark: var(--color2, #24211d);
    --mcc-dark2: #342f29;
    --mcc-cream: #f2ece2;
    --mcc-accent: var(--colors, #e88d55);
    --mcc-text: #443e37;
    --mcc-muted: #7b746b;
    --mcc-line: rgba(68, 62, 55, 0.14);
    --mcc-shadow: 0 18px 55px rgba(40, 36, 31, 0.12);
    color: var(--mcc-text);
    font-family: var(--subtext), sans-serif;
    line-height: 1.7;
}

.mcc *, .mcc *::before, .mcc *::after { box-sizing: border-box; }

.mcc h2, .mcc h3 {
    margin: 0;
    font-family: var(--primtext), serif;
    font-weight: 500;
    line-height: 1.15;
    color: var(--mcc-dark);
}

.mcc p { margin: 0; }

.mcc-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 24px;
}

.mcc-section { padding: 105px 0; background: #ffffff; }
.mcc-cream   { background: var(--mcc-cream); }
.mcc-dark    { background: var(--mcc-dark); color: #d9d1c7; }
.mcc-dark h2, .mcc-dark h3 { color: #ffffff; }
.mcc-center  { text-align: center; }

.mcc-head { margin-bottom: 48px; }
.mcc-head h2 { margin-top: 14px; font-size: clamp(2rem, 3.6vw, 3.3rem); }
.mcc-head .mcc-copy { max-width: 720px; margin: 18px auto 0; }

.mcc-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 0.7rem;
    font-weight: 700;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: var(--mcc-accent);
}

.mcc-eyebrow::before {
    content: '';
    width: 28px;
    height: 1px;
    background: currentColor;
}

.mcc-copy { color: #6e665e; font-size: 1rem; }
.mcc-copy + .mcc-copy { margin-top: 1rem; }

/* Buttons */

.mcc-btn {
    display: inline-block;
    margin-top: 1.6rem;
    padding: 0.9rem 1.7rem;
    border-radius: 50px;
    background: var(--mcc-accent);
    border: 1px solid var(--mcc-accent);
    color: #ffffff;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.07em;
    text-transform: uppercase;
    text-decoration: none;
    transition: background-color 0.3s ease, border-color 0.3s ease;
}

.mcc-btn:hover {
    background: #e67d47;
    border-color: #e67d47;
    color: #ffffff;
}

/* Intro (2 kolom) */

.mcc-intro {
    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    gap: 80px;
    align-items: center;
}

.mcc-intro h2 {
    margin: 16px 0 22px;
    font-size: clamp(2.1rem, 3.6vw, 3.4rem);
}

.mcc-imgbox {
    position: relative;
    min-height: 500px;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: var(--mcc-shadow);
}

.mcc-imgbox img {
    position: absolute;
    inset: 0;
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Cards */

.mcc-cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
}

.mcc-cards--2 { grid-template-columns: 1fr 1fr; margin-top: 28px; }
.mcc-cards--3 { grid-template-columns: repeat(3, 1fr); margin-top: 48px; }

.mcc-card {
    padding: 28px;
    background: #ffffff;
    border: 1px solid var(--mcc-line);
    border-radius: 16px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.mcc-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--mcc-shadow);
}

.mcc-card h3 { margin: 12px 0 8px; font-size: 1.15rem; }
.mcc-card p  { font-size: 0.84rem; color: var(--mcc-muted); }

.mcc-card--dark {
    background: rgba(255, 255, 255, 0.05);
    border-color: rgba(255, 255, 255, 0.1);
}

.mcc-card--dark h3 { color: #ffffff; }
.mcc-card--dark p  { color: #aaa198; }

.mcc-num {
    font-family: var(--primtext), serif;
    font-size: 2.3rem;
    line-height: 1.1;
    color: var(--mcc-accent);
}

/* Split */

.mcc-split {
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 600px;
}

.mcc-split-img {
    background-position: center;
    background-size: cover;
}

.mcc-split-copy {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 90px;
    background: var(--mcc-dark);
    color: #d7cfc5;
}

.mcc-split-copy h2 {
    margin: 18px 0;
    color: #ffffff;
    font-size: clamp(2.1rem, 3.6vw, 3.4rem);
}

.mcc-list {
    margin: 25px 0 0;
    padding: 0;
    list-style: none;
}

.mcc-list li {
    padding: 11px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.mcc-list li::before {
    content: '';
    display: inline-block;
    width: 8px;
    height: 8px;
    margin-right: 12px;
    border-radius: 50%;
    background: var(--mcc-accent);
}

/* Stats */

.mcc-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1px;
    background: rgba(255, 255, 255, 0.1);
}

.mcc-stat { padding: 38px 28px; background: var(--mcc-dark2); }

.mcc-stat strong {
    display: block;
    font-family: var(--primtext), serif;
    font-size: 3rem;
    font-weight: 500;
    line-height: 1.2;
    color: #ffffff;
}

.mcc-stat span {
    font-size: 0.7rem;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #aaa198;
}

/* Materials */

.mcc-materials {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.mcc-material {
    position: relative;
    min-height: 390px;
    border-radius: 18px;
    overflow: hidden;
    background-position: center;
    background-size: cover;
}

.mcc-material::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, transparent 35%, rgba(25, 22, 19, 0.88));
}

.mcc-material div {
    position: absolute;
    z-index: 1;
    left: 25px;
    right: 25px;
    bottom: 25px;
    color: #ffffff;
}

.mcc-material h3 { margin: 0 0 5px; font-size: 1.6rem; color: #ffffff; }
.mcc-material p  { font-size: 0.82rem; color: #ddd5ca; }

/* Process steps */

.mcc-process { display: grid; grid-template-columns: repeat(5, 1fr); }

.mcc-step {
    position: relative;
    padding: 25px;
    border-top: 1px solid var(--mcc-line);
}

.mcc-step:not(:last-child)::after {
    content: '\2192';
    position: absolute;
    right: -7px;
    top: 17px;
    color: var(--mcc-accent);
}

.mcc-step .n {
    font-size: 0.7rem;
    font-weight: 800;
    letter-spacing: 0.15em;
    color: var(--mcc-accent);
}

.mcc-step h3 { margin: 12px 0 7px; font-size: 1.1rem; }
.mcc-step p  { font-size: 0.8rem; color: var(--mcc-muted); }

/* Timeline */

.mcc-timeline { position: relative; max-width: 900px; margin: 0 auto; }

.mcc-timeline::before {
    content: '';
    position: absolute;
    left: 22px;
    top: 0;
    bottom: 0;
    width: 1px;
    background: var(--mcc-line);
}

.mcc-titem {
    position: relative;
    display: grid;
    grid-template-columns: 70px 1fr;
    gap: 30px;
    padding-bottom: 55px;
}

.mcc-titem:last-child { padding-bottom: 0; }

.mcc-tdot {
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    border: 5px solid #ffffff;
    border-radius: 50%;
    background: var(--mcc-dark);
    color: var(--mcc-accent);
    font-size: 0.7rem;
    font-weight: 700;
}

.mcc-titem h3 { margin: 0 0 8px; font-size: 1.8rem; }
.mcc-titem p  { color: var(--mcc-muted); }

/* CTA */

.mcc-cta {
    padding: 70px;
    border-radius: 24px;
    overflow: hidden;
    background: var(--mcc-dark);
    color: #ddd5ca;
}

.mcc-cta h2 {
    max-width: 720px;
    margin-top: 14px;
    color: #ffffff;
    font-size: clamp(2rem, 3.8vw, 3.4rem);
}

.mcc-cta p { max-width: 650px; margin-top: 18px; color: #bdb5ab; }

/* Responsive */

@media (max-width: 991.98px) {
    .mcc-intro, .mcc-split { grid-template-columns: 1fr; }
    .mcc-intro { gap: 50px; }
    .mcc-cards { grid-template-columns: repeat(2, 1fr); }
    .mcc-cards--3 { grid-template-columns: 1fr; }
    .mcc-materials { grid-template-columns: 1fr 1fr; }
    .mcc-stats { grid-template-columns: repeat(2, 1fr); }
    .mcc-process { grid-template-columns: 1fr; }
    .mcc-step:not(:last-child)::after {
        content: '\2193';
        right: auto;
        left: 25px;
        top: auto;
        bottom: -17px;
    }
    .mcc-split-img { min-height: 450px; }
    .mcc-split-copy { padding: 70px 35px; }
}

@media (max-width: 575.98px) {
    .mcc-section { padding: 75px 0; }
    .mcc-cards, .mcc-cards--2, .mcc-materials { grid-template-columns: 1fr; }
    .mcc-intro { gap: 40px; }
    .mcc-imgbox { min-height: 380px; }
    .mcc-cta { padding: 40px 25px; }
    .mcc-titem { grid-template-columns: 56px 1fr; gap: 16px; }
    .mcc-titem h3 { font-size: 1.5rem; }
}
</style>
