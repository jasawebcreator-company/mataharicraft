<?php
/**
 * Template halaman: Our Story
 * Dipanggil dari page.php jika title == 'Our Story'
 * Saat ini baru berisi HERO. Konten menyusul.
 */
$mcTitle   = htmlspecialchars($data->result->title ?? 'Our Story', ENT_QUOTES, 'UTF-8');
$mcEyebrow = 'Company';
$mcNum     = '02';
$mcOf      = '04';
$mcCta     = base_url('contact');
$mcHome    = base_url();
$mcTagline = 'The journey behind Matahari Craft, built on Indonesian craftsmanship since 2021.';
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
    <div class="mcc-head mcc-center">
      <span class="mcc-eyebrow">The Beginning</span>
      <h2>Founded on Craftsmanship</h2>
      <p class="mcc-copy">Matahari Craft was established in 2021 with a focus on handcrafted home decor and furniture for international markets.</p>
    </div>
    <div class="mcc-timeline">
      <div class="mcc-titem"><div class="mcc-tdot">01</div><div><h3>Craftsmanship</h3><p>Rooted in Indonesian craftsmanship, natural materials, and skilled artisanship.</p></div></div>
      <div class="mcc-titem"><div class="mcc-tdot">02</div><div><h3>Production</h3><p>Developing structured systems for consistent and scalable manufacturing while maintaining handcrafted detail.</p></div></div>
      <div class="mcc-titem"><div class="mcc-tdot">03</div><div><h3>Global Supply</h3><p>Supporting international brands, wholesalers, and project-based buyers with reliable production and export-ready processes.</p></div></div>
    </div>
  </div>
</section>

<section class="mcc-section mcc-cream">
  <div class="mcc-container">
    <div class="mcc-intro">
      <div class="mcc-imgbox"><img src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789628462-17-09-2026-Ob52dgzKAs7FYE94GnS3pqMXokZltW1C.webp" alt="Natural handcrafted materials" loading="lazy"></div>
      <div>
        <span class="mcc-eyebrow">What Has Shaped Us</span>
        <h2>Craft, Materials, Design, and Global Requirements</h2>
        <p class="mcc-copy">Our approach is built around the balance between natural materials, skilled artisanship, practical design, and the expectations of international markets.</p>
        <div class="mcc-cards mcc-cards--2">
          <div class="mcc-card"><h3>Natural Materials</h3><p>Wood, rattan, and natural fibers.</p></div>
          <div class="mcc-card"><h3>Skilled Artisanship</h3><p>Handcrafted attention to detail.</p></div>
          <div class="mcc-card"><h3>Practical Design</h3><p>Products developed for real markets.</p></div>
          <div class="mcc-card"><h3>Global Standards</h3><p>Consistency and export readiness.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mcc-section mcc-dark">
  <div class="mcc-container">
    <div class="mcc-head mcc-center">
      <span class="mcc-eyebrow">Where We Are Today</span>
      <h2>A Production Partner for Global Buyers</h2>
    </div>
    <div class="mcc-stats">
      <div class="mcc-stat"><strong>100+</strong><span>Pieces / Item MOQ</span></div>
      <div class="mcc-stat"><strong>2&ndash;3</strong><span>Containers / Month</span></div>
      <div class="mcc-stat"><strong>~30</strong><span>Days Sampling</span></div>
      <div class="mcc-stat"><strong>~90</strong><span>Days Production</span></div>
    </div>
  </div>
</section>

<section class="mcc-section">
  <div class="mcc-container">
    <div class="mcc-cta">
      <span class="mcc-eyebrow">Next Chapter</span>
      <h2>Let&rsquo;s Build the Next Collection Together</h2>
      <p>Whether you are sourcing for retail, developing a new collection, or working on a project, Matahari Craft is ready to support your requirements.</p>
      <a class="mcc-btn" href="<?= $mcCta ?>">Request a Quotation</a>
    </div>
  </div>
</section>
</div>

<?php include __DIR__ . '/components/company_style.php'; ?>
