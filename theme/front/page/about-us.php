<?php
/**
 * Template halaman: About Us
 * Dipanggil dari page.php jika title == 'About Us'
 * Saat ini baru berisi HERO. Konten menyusul.
 */
$mcTitle   = htmlspecialchars($data->result->title ?? 'About Us', ENT_QUOTES, 'UTF-8');
$mcEyebrow = 'Company';
$mcNum     = '01';
$mcOf      = '04';
$mcCta     = base_url('contact');
$mcHome    = base_url();
$mcTagline = 'A handcrafted manufacturing partner for global markets, based in Indonesia since 2021.';
?>

<section class="page-hero mc-hero">

    <span class="mc-hero-num" aria-hidden="true"><?= $mcNum ?></span>

    <div class="mc-hero-inner">

        <span class="mc-eyebrow">
            <i></i>
            <?= $mcEyebrow ?> &middot; <?= $mcNum ?> / <?= $mcOf ?>
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

<div class="mcc">

<section class="mcc-section">
  <div class="mcc-container">
    <div class="mcc-intro">
      <div>
        <span class="mcc-eyebrow">Who We Are</span>
        <h2>Built Around Craftsmanship. Structured for Global Supply.</h2>
        <p class="mcc-copy">Matahari Craft is an Indonesia-based manufacturing and export company specializing in handcrafted home decor and furniture for international markets. We operate as a dedicated production partner for international brands, wholesalers, and project-based buyers.</p>
        <p class="mcc-copy">We combine traditional craftsmanship with structured production systems designed around consistency, scalability, and export readiness. Our team supports both ready designs and custom development, allowing clients to bring their concepts into production with flexibility and efficiency.</p>
      </div>
      <div class="mcc-imgbox"><img src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789454496-15-09-2026-mRy8Ig7kQs4SMJYDOpC3i02X9PEdBarW.webp" alt="Handcrafted home decor" loading="lazy"></div>
    </div>
  </div>
</section>

<section class="mcc-section mcc-cream">
  <div class="mcc-container">
    <div class="mcc-head mcc-center">
      <span class="mcc-eyebrow">Our Strengths</span>
      <h2>Built to Support International Supply</h2>
    </div>
    <div class="mcc-cards">
      <div class="mcc-card"><div class="mcc-num">01</div><h3>Custom Manufacturing</h3><p>Support for custom development, OEM, and private label production.</p></div>
      <div class="mcc-card"><div class="mcc-num">02</div><h3>Quality Control</h3><p>Structured quality control designed to maintain consistency across orders.</p></div>
      <div class="mcc-card"><div class="mcc-num">03</div><h3>Scalable Production</h3><p>Flexible production capacity built to support larger international orders.</p></div>
      <div class="mcc-card"><div class="mcc-num">04</div><h3>Export Readiness</h3><p>Export-standard packaging and handling for international delivery.</p></div>
    </div>
  </div>
</section>

<section class="mcc-split">
  <div class="mcc-split-img" style="background-image:url('https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789458023-15-09-2026-06dBWJ7PMmfjVH4hxrq9GKlpbZvcO1Yy.webp')"></div>
  <div class="mcc-split-copy">
    <span class="mcc-eyebrow">Global Market Approach</span>
    <h2>Built for International Markets</h2>
    <p>Our production, quality standards, and communication are aligned with the expectations of international buyers, with a focus on North America, Europe, and Australia.</p>
    <ul class="mcc-list">
      <li>United States</li>
      <li>Europe</li>
      <li>Australia</li>
    </ul>
  </div>
</section>

<section class="mcc-section">
  <div class="mcc-container">
    <div class="mcc-cta">
      <span class="mcc-eyebrow">Work With Us</span>
      <h2>Looking for a Reliable Manufacturing Partner?</h2>
      <p>Request our catalog or start your project with Matahari Craft. We are ready to support your next collection or custom development.</p>
      <a class="mcc-btn" href="<?= $mcCta ?>">Request a Quotation</a>
    </div>
  </div>
</section>

</div>

<?php include __DIR__ . '/components/company_style.php'; ?>
