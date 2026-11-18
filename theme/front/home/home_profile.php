<style>
#profile {
  background-color: var(--color-light);

  .profile-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;

    @media (max-width: 991px) {
      grid-template-columns: 1fr;
      gap: 2.5rem;
    }
  }

  .profile-images-mosaic {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 1.5rem;

    .mosaic-img-large {
      width: 100%;
      height: 380px;
      object-fit: cover;
      border-radius: 4px;
    }

    .mosaic-right {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;

      .mosaic-img-small {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 4px;
      }
    }
  }

  .profile-content {
    position: relative;

    .profile-subtitle {

		display: block;
		margin-bottom: 14px;
		font-family: var(--titletext);
		font-size: 22px;
		font-weight: 500;
		font-style: italic;
		letter-spacing: .4px;
		line-height: 1.2;
		color: #e8864c;
		
		@media (max-width: 768px) {
	        font-size: 18px;
	    }
    }

    .profile-title {
      font-family: var(--primtext);
      font-size: 3.2rem;
      font-weight: 500;
      color: var(--color2);
      line-height: 1.15;
      margin-bottom: 1.5rem;

      @media (max-width: 768px) {
        font-size: 2.4rem;
      }
    }

    .profile-desc {
      font-size: 1rem;
      color: var(--color-text);
      line-height: 1.7;
      margin-bottom: 2rem;
		
      @media (max-width: 768px) {
        font-size: .85rem;
      }
    }
  }
}
</style>

<section id="profile">
  <div class="container-global">
    <div class="profile-grid">
      <div class="profile-images-mosaic">
        <img src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789454496-15-09-2026-LiMkXn2CpZAr3Tcx4EdbB6lzWsjaHJOt.webp" alt="Artisan Weaving" class="mosaic-img-large">
        <div class="mosaic-right">
          <img src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789454497-15-09-2026-Gif6CDndhJRkENVw4QHIgu7YyqzsxeXB.webp" alt="Handcrafted Details" class="mosaic-img-small">
          <img src="https://gotra-web.goapp.my.id/web-upload/mataharicraft/1789454496-15-09-2026-mRy8Ig7kQs4SMJYDOpC3i02X9PEdBarW.webp" alt="Bali Craft Design" class="mosaic-img-small">
        </div>
      </div>

      <div class="profile-content">
        <span class="profile-subtitle">About Us</span>
        <h2 class="profile-title">Inspired by Nature. Crafted for the World.</h2>
        <p class="profile-desc">PT. Matahari Cahaya Dewata (Mahata) is a wholesale handicraft manufacturer based in Bali, Indonesia. Founded on March 24, 2021, Mahata offers high quality designs that blend modern and traditional elements, meticulously crafted to create a harmonious balance between aesthetic appeal and traditional craftsmanship.</p>
        <a href="https://mataharicraft.com/about-us" class="btn-craft-primary">Discover Our Story &rarr;</a>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const profileSection = document.querySelector('#profile');
  if (profileSection && typeof motion !== 'undefined') {
    motion.animate(profileSection, { opacity: [0, 1], y: [20, 0] }, { duration: 0.6 });
  }
});
</script>
