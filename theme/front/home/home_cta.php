<style>
#cta {
  background-color: var(--color3);
  position: relative;
  text-align: center;
  border-top: 1px solid rgba(184, 142, 44, 0.15);

  .cta-box {
    max-width: 760px;
    margin: 0 auto;

    .cta-title {
      font-family: var(--primtext);
      font-size: 3.5rem;
      font-weight: 500;
      color: var(--color2);
      line-height: 1.15;
      margin-bottom: 1.25rem;

      @media (max-width: 768px) {
        font-size: 2.4rem;
      }
    }

    .cta-desc {
      font-size: 1.05rem;
      color: #666059;
      line-height: 1.7;
      margin-bottom: 2.5rem;
    }

    .cta-actions {
      display: flex;
      justify-content: center;
      gap: 1.25rem;
      flex-wrap: wrap;
    }
  }
}
</style>

<section id="cta">
  <div class="container-global">
    <div class="cta-box">
      <h2 class="cta-title">Let's Create Something Together</h2>
      <p class="cta-desc">Looking for handmade products from Bali for your business or project? Tell us what you need and our team will get back to you.</p>
      <div class="cta-actions">
        <a href="#contact" class="btn-craft-primary">Discuss Your Project &rarr;</a>
        <a href="#contact" class="btn-craft-outline">Work With Us</a>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const ctaSec = document.querySelector('#cta');
  if (ctaSec && typeof motion !== 'undefined') {
    motion.animate(ctaSec, { opacity: [0, 1], y: [20, 0] }, { duration: 0.6 });
  }
});
</script>
