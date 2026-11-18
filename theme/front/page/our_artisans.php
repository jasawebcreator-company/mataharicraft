<?php
/**
 * Template halaman: Our Artisans
 * Dipanggil dari page.php jika title == 'Our Artisans'
 * Saat ini baru berisi HERO. Konten menyusul.
 */
$mcTitle   = htmlspecialchars($data->result->title ?? 'Our Artisans', ENT_QUOTES, 'UTF-8');
$mcEyebrow = 'Company';
$mcNum     = '03';
$mcOf      = '04';
$mcCta     = base_url('contact');
$mcHome    = base_url();
$mcTagline = 'The skilled hands behind every handcrafted piece we make.';
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
        <span class="mcc-eyebrow">The Hands Behind Matahari Craft</span>
        <h2>Craftsmanship Starts With People</h2>
        <p class="mcc-copy">Our products are crafted by skilled artisans in Bali using natural materials and handcrafted techniques. Their attention to detail forms an essential part of every collection we produce.</p>
        <p class="mcc-copy">At the same time, our production system is structured to maintain consistency and repeatability for larger-scale orders.</p>
      </div>
      <div class="mcc-imgbox"><img src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789464247-15-09-2026-nckS9Z4a2xRbKqHMOeLfrwGzWPIBg1Ch.webp" alt="Artisan craftsmanship" loading="lazy"></div>
    </div>
  </div>
</section>

<section class="mcc-section mcc-cream">
  <div class="mcc-container">
    <div class="mcc-head mcc-center">
      <span class="mcc-eyebrow">Craftsmanship &amp; Materials</span>
      <h2>Natural Materials. Skilled Hands.</h2>
    </div>
    <div class="mcc-materials">
      <div class="mcc-material" style="background-image:url('https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789464247-15-09-2026-i8zClWOZvn4RKFeoEt1HMLxbAPhrwu32.webp')"><div><h3>Wood</h3><p>Natural material shaped through handcrafted production.</p></div></div>
      <div class="mcc-material" style="background-image:url('https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789628510-17-09-2026-xbzXc28VlhtHLZJGWkpjSDi0T7On5ENy.webp')"><div><h3>Rattan</h3><p>Natural woven character combined with artisan techniques.</p></div></div>
      <div class="mcc-material" style="background-image:url('https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789464249-15-09-2026-opCXBQKcYiRWbteZJLsSgUfamGDF49ul.webp')"><div><h3>Natural Fibers</h3><p>Textured materials crafted into distinctive decorative forms.</p></div></div>
    </div>
  </div>
</section>

<section class="mcc-split">
  <div class="mcc-split-copy">
    <span class="mcc-eyebrow">Craft + Consistency</span>
    <h2>Handcrafted Detail. Production Consistency.</h2>
    <p>Every piece is crafted with attention to detail while our structured production system allows us to maintain consistency across larger orders.</p>
    <ul class="mcc-list">
      <li>Skilled artisan production</li>
      <li>Natural material craftsmanship</li>
      <li>Structured production system</li>
      <li>Consistency across larger orders</li>
    </ul>
  </div>
  <div class="mcc-split-img" style="background-image:url('https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789464248-15-09-2026-vw8MF6lKhzo3O9kCGj1JUDsZ2Ea0SNgn.webp')"></div>
</section>

<section class="mcc-section">
  <div class="mcc-container">
    <div class="mcc-head mcc-center">
      <span class="mcc-eyebrow">People in the Process</span>
      <h2>From Skilled Hands to Finished Product</h2>
    </div>
    <div class="mcc-process">
      <div class="mcc-step"><div class="n">01</div><h3>Design</h3><p>Product concepts and requirements.</p></div>
      <div class="mcc-step"><div class="n">02</div><h3>Artisan Crafting</h3><p>Handcrafted detail and natural materials.</p></div>
      <div class="mcc-step"><div class="n">03</div><h3>Production</h3><p>Structured manufacturing for consistency.</p></div>
      <div class="mcc-step"><div class="n">04</div><h3>Quality Control</h3><p>Inspection throughout production.</p></div>
      <div class="mcc-step"><div class="n">05</div><h3>Finished Product</h3><p>Prepared for international supply.</p></div>
    </div>
  </div>
</section>

<section class="mcc-section mcc-dark">
  <div class="mcc-container mcc-center">
    <span class="mcc-eyebrow">Our Philosophy</span>
    <h2 style="margin-top:14px;font-size:clamp(2rem,3.6vw,3.3rem)">Crafted by People. Made for the World.</h2>
    <p style="max-width:650px;margin:18px auto 0">We combine the human detail of Indonesian craftsmanship with the consistency required by global buyers.</p>
    <a class="mcc-btn" href="<?= $mcHome ?>">Explore Our Products</a>
  </div>
</section>
</div>

<?php include __DIR__ . '/components/company_style.php'; ?>
