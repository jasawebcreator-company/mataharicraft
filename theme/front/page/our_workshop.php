<?php
/**
 * Template halaman: Our Workshop
 * Dipanggil dari page.php jika title == 'Our Workshop'
 * Saat ini baru berisi HERO. Konten menyusul.
 */
$mcTitle   = htmlspecialchars($data->result->title ?? 'Our Workshop', ENT_QUOTES, 'UTF-8');
$mcEyebrow = 'Company';
$mcNum     = '04';
$mcOf      = '04';
$mcCta     = base_url('contact');
$mcHome    = base_url();
$mcTagline = 'Where natural materials become export-ready products.';
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
      <div class="mcc-imgbox"><img src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789464246-15-09-2026-J09y3EBAhUndPuiZj7fxHLNaks8eGT2t.webp" alt="Production workshop" loading="lazy"></div>
      <div>
        <span class="mcc-eyebrow">The Workshop</span>
        <h2>From Craft to Scale</h2>
        <p class="mcc-copy">Matahari Craft operates with a structured production system designed for international supply. Skilled artisans and production staff work together within a controlled system to maintain quality across orders.</p>
        <p class="mcc-copy">Our approach balances handmade detail with the consistency, flexibility, and repeatability required for larger-scale production.</p>
      </div>
    </div>
  </div>
</section>

<section class="mcc-section mcc-dark">
  <div class="mcc-container">
    <div class="mcc-head mcc-center">
      <span class="mcc-eyebrow">Production Capability</span>
      <h2>Capacity Built Around International Orders</h2>
    </div>
    <div class="mcc-stats">
      <div class="mcc-stat"><strong>100+</strong><span>Pieces / Item MOQ</span></div>
      <div class="mcc-stat"><strong>2&ndash;3</strong><span>Containers / Month</span></div>
      <div class="mcc-stat"><strong>~30</strong><span>Days Sampling</span></div>
      <div class="mcc-stat"><strong>~90</strong><span>Days Production</span></div>
    </div>
    <div class="mcc-cards mcc-cards--3">
      <div class="mcc-card mcc-card--dark"><h3>Reorders</h3><p>Typical reorder lead time is 60&ndash;90 days.</p></div>
      <div class="mcc-card mcc-card--dark"><h3>MOQ</h3><p>100 pieces per item, negotiable.</p></div>
      <div class="mcc-card mcc-card--dark"><h3>Order Value</h3><p>Minimum order value is USD 7,500.</p></div>
    </div>
  </div>
</section>

<section class="mcc-section mcc-cream">
  <div class="mcc-container">
    <div class="mcc-head mcc-center">
      <span class="mcc-eyebrow">Quality &amp; Export</span>
      <h2>Consistency at Every Stage</h2>
    </div>
    <div class="mcc-process">
      <div class="mcc-step"><div class="n">01</div><h3>Production</h3><p>Structured manufacturing and artisan craftsmanship.</p></div>
      <div class="mcc-step"><div class="n">02</div><h3>Quality Inspection</h3><p>Quality control throughout production.</p></div>
      <div class="mcc-step"><div class="n">03</div><h3>Final Preparation</h3><p>Products prepared for international handling.</p></div>
      <div class="mcc-step"><div class="n">04</div><h3>Export Packaging</h3><p>Export-standard packaging and handling.</p></div>
      <div class="mcc-step"><div class="n">05</div><h3>International Delivery</h3><p>Prepared for safe and reliable shipment.</p></div>
    </div>
  </div>
</section>

<section class="mcc-section">
  <div class="mcc-container">
    <div class="mcc-intro">
      <div>
        <span class="mcc-eyebrow">Business Terms</span>
        <h2>Built for Long-Term Partnerships</h2>
        <p class="mcc-copy">Our commercial terms are designed to support efficient and transparent business transactions with international buyers.</p>
        <div class="mcc-cards mcc-cards--2">
          <div class="mcc-card"><div class="mcc-num">USD</div><h3>7,500</h3><p>Minimum order value.</p></div>
          <div class="mcc-card"><div class="mcc-num">50/50</div><h3>Payment Terms</h3><p>50% deposit before production and 50% balance before shipment.</p></div>
        </div>
      </div>
      <div class="mcc-imgbox"><img src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789458024-15-09-2026-4biv0Uk7AtHJTs5NuyRMV3IxzCm2WBLZ.webp" alt="Export packaging and production" loading="lazy"></div>
    </div>
  </div>
</section>

<section class="mcc-section">
  <div class="mcc-container">
    <div class="mcc-cta">
      <span class="mcc-eyebrow">Start a Project</span>
      <h2>Have a Product or Collection in Mind?</h2>
      <p>Let&rsquo;s talk about your requirements and explore how Matahari Craft can support your next collection, retail program, or project.</p>
      <a class="mcc-btn" href="<?= $mcCta ?>">Request a Quotation</a>
    </div>
  </div>
</section>
</div>

<?php include __DIR__ . '/components/company_style.php'; ?>
