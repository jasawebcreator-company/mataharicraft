<style>
    .wrap-gallery {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 200px;
        position: relative;
        border-radius: 0px;
    }

     @media (max-width: 768px) {
        .wrap-gallery { height: 160px; }
    }

.wrap-titfood p {
    font-family: var(--subtext);
    letter-spacing: 0px;
    font-size: 15px;
    line-height: 32px;
    margin-bottom: 25px;
}

.bg-foods { background: #f9f9f9; }

.wrap-titfood {
    padding: 0 15%;
}

.wrap-titfood h3 {
    font-family: var(--primtext);
    color: var(--colors);
    font-weight: 600;
    text-transform: capitalize;
    letter-spacing: 0px;
    font-size: 35px;
    line-height: 45px;
    margin-bottom: 20px;
}

.bg-foods .row { margin:0; }

.btn-food {
    background: var(--color2);
    color: #fff;
    text-transform: uppercase;
    padding: 11px 28px;
    border-radius: 0;
    font-weight: 500;
    font-family: var(--primtext);
    font-size: 14px;
    letter-spacing: 1px;
    transition: all ease 500ms;
    border: none;
}

.btn-food:hover {
    background: var(--color2);
    color: white;
}

@media (max-width: 768px) {
    .bg-foods {
        background: #ffff;
    }

    .wrap-titfood {
        padding: 0 0%;
        text-align: center;
        margin-bottom: 30px;
    }

    .wrap-titfood h3 {
        font-size: 30px;
        line-height: 40px;
        margin-bottom: 20px;
    }

    .wrap-titfood p {
        font-size: 13px;
        line-height: 27px;
    }

    .btn-food {
        font-size: 15px;
    }
}

</style>
<?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>

<?php if ( $grid == 1): ?>

<style>
	/* ==========================================================================
   PORTRAIT MARQUEE GALLERY SECTION STYLING
   ========================================================================== */

#gallery-marquee-section {
  width: 100%;
  overflow: hidden;
  background-color: var(--bg-light);
  border-top: 1px solid rgba(15, 34, 20, 0.04);
}

.marquee-container {
  display: flex;
  overflow: hidden;
  user-select: none;
  width: 100%;
  position: relative;
  gap: 1.5rem;

  /* Subtle fade gradient at edges on desktop */
  &::before,
  &::after {
    content: "";
    position: absolute;
    top: 0;
    width: 100px;
    height: 100%;
    z-index: 2;
    pointer-events: none;
  }

  &::before {
    left: 0;
		display: none;
    background: linear-gradient(to right, var(--bg-light), transparent);
  }

  &::after {
    right: 0;
		display: none;
    background: linear-gradient(to left, var(--bg-light), transparent);
  }
}

.marquee-content {
  display: flex;
  animation: marquee-scroll 35s linear infinite;
  min-width: 100%;
  flex-shrink: 0;
}

/* Pause marquee scroll on hover to let users select and click images easily */
.marquee-container:hover .marquee-content {
  animation-play-state: paused;
}

.marquee-item {
  flex-shrink: 0;
  width: 250px;
  aspect-ratio: 9 / 14; /* Portrait 9:14 ratio */
  overflow: hidden;
  cursor: pointer;
  box-shadow: 0 10px 30px rgba(15, 34, 20, 0.03);
  transition:
    transform 0.4s cubic-bezier(0.16, 1, 0.3, 1),
    box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1);

  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
  }

  &:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(15, 34, 20, 0.1);

    img {
      transform: scale(1.05);
    }
  }
}

@keyframes marquee-scroll {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(calc(-100% - 1.5rem));
  }
}

/* ==========================================================================
   LIGHTBOX MODAL GALLERY STYLING
   ========================================================================== */

.lightbox-modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(15, 34, 20, 0.97);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  z-index: 2500;
  display: none;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.35s ease;

  &.active {
    display: flex;
    opacity: 1;
  }
}

.lightbox-content {
  position: relative;
  width: 90%;
  max-width: 500px; /* Portrait sizing bounds */
  height: auto;
  max-height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

.lightbox-img-wrapper {
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4);
  border: 1px solid rgba(250, 248, 245, 0.05);
  background-color: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
}

.lightbox-img {
  max-width: 100%;
  max-height: 75vh;
  display: block;
  object-fit: contain;
  cursor: zoom-in;
  transition:
    transform 0.4s cubic-bezier(0.16, 1, 0.3, 1),
    cursor 0.3s ease;
  user-select: none;

  &.zoomed {
    transform: scale(1.6);
    cursor: zoom-out;
  }
}

/* Navigation Controls inside lightbox */
.lightbox-btn {
  position: absolute;
  background: rgba(250, 248, 245, 0.06);
  border: 1px solid rgba(250, 248, 245, 0.1);
  color: #ffffff;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  z-index: 2510;

  svg {
    width: 20px;
    height: 20px;
    transition: transform 0.3s ease;
  }

  &:hover {
    background: #ffffff;
    border-color: #ffffff;
    color: var(--bg-dark);
    transform: scale(1.05);
  }

  &:active {
    transform: scale(0.95);
  }
}

.lightbox-prev {
  left: -70px;

  &:hover svg {
    transform: translateX(-2px);
  }
}

.lightbox-next {
  right: -70px;

  &:hover svg {
    transform: translateX(2px);
  }
}

.lightbox-close {
  position: absolute;
  top: -60px;
  right: 0;
  background: rgba(250, 248, 245, 0.06);
  border: 1px solid rgba(250, 248, 245, 0.1);
  color: #ffffff;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
  z-index: 2510;

  &:hover {
    background: #ffffff;
    border-color: #ffffff;
    color: var(--bg-dark);
    transform: rotate(90deg);
  }
}

.lightbox-counter {
  position: absolute;
  top: -48px;
  left: 0;
  font-family: var(--subtext);
  font-size: 0.85rem;
  color: rgba(250, 248, 245, 0.5);
  font-weight: 500;
  letter-spacing: 0.05em;
}

/* Responsive overlays adjustment for tablet/mobile */
@media (max-width: 768px) {
  #gallery-marquee-section {
    padding-block: 3.5rem;
  }

  .marquee-item {
    width: 200px;
  }

  .lightbox-content {
    width: 85%;
  }

  .lightbox-prev {
    left: -15px;
    background: rgba(15, 34, 20, 0.6);
    backdrop-filter: blur(5px);
  }

  .lightbox-next {
    right: -15px;
    background: rgba(15, 34, 20, 0.6);
    backdrop-filter: blur(5px);
  }

  .lightbox-close {
    top: -55px;
    right: 0;
  }

  .lightbox-counter {
    top: -52px;
    left: 5px;
  }
}

</style>

    <section id="gallery-marquee-section">
      <div class="marquee-container">
        <!-- Marquee Track 1 -->
        <div class="marquee-content">
					<?php foreach($item->data as $item): ?>
						<div class="marquee-item">
            	<img src="<?= $item->url_img ?>" alt="gallery" />
         	 	</div>
					<?php endforeach; ?>
        </div>
        
        <!-- Marquee Track 2 (Duplicated for seamless scrolling loop) -->
        <div class="marquee-content" aria-hidden="true">
					<?php foreach($item->data as $item): ?>
						<div class="marquee-item">
            	<img src="<?= $item->url_img ?>" alt="gallery" />
         	 	</div>
					<?php endforeach; ?>
        </div>
      </div>
    </section>

<script>
	document.addEventListener('DOMContentLoaded', () => {
    // ==========================================================================
    // 4. PORTRAIT MARQUEE LIGHTBOX GALLERY LOGIC
    // ==========================================================================
    const lightboxModal = document.createElement('div');
    lightboxModal.className = 'lightbox-modal';
    lightboxModal.innerHTML = `
        <div class="lightbox-content">
            <button class="lightbox-close" aria-label="Close Lightbox">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <span class="lightbox-counter">1 / 6</span>
            <button class="lightbox-btn lightbox-prev" aria-label="Previous Image">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </button>
            <div class="lightbox-img-wrapper">
                <img class="lightbox-img" src="" alt="Resort Gallery Zoomed" />
            </div>
            <button class="lightbox-btn lightbox-next" aria-label="Next Image">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </button>
        </div>
    `;
    document.body.appendChild(lightboxModal);

    const lightboxImg = lightboxModal.querySelector('.lightbox-img');
    const lightboxCounter = lightboxModal.querySelector('.lightbox-counter');
    const closeBtn = lightboxModal.querySelector('.lightbox-close');
    const prevBtn = lightboxModal.querySelector('.lightbox-prev');
    const nextBtn = lightboxModal.querySelector('.lightbox-next');

    // Get unique list of marquee image URLs (ignoring duplicates in marquee loop)
    let uniqueMarqueeUrls = [];
    const updateUniqueUrls = () => {
        uniqueMarqueeUrls = Array.from(document.querySelectorAll('.marquee-content:first-child .marquee-item img')).map(img => img.src);
    };

    let currentIdx = 0;

    const updateLightboxImage = () => {
        if (uniqueMarqueeUrls.length === 0) updateUniqueUrls();
        lightboxImg.src = uniqueMarqueeUrls[currentIdx];
        lightboxCounter.textContent = `${currentIdx + 1} / ${uniqueMarqueeUrls.length}`;
        // Reset zoom state on image change
        lightboxImg.classList.remove('zoomed');
    };

    // Open Lightbox when clicking any image in marquee
    document.addEventListener('click', (e) => {
        const item = e.target.closest('.marquee-item');
        if (item) {
            updateUniqueUrls();
            const imgSrc = item.querySelector('img').src;
            currentIdx = uniqueMarqueeUrls.indexOf(imgSrc);
            if (currentIdx === -1) currentIdx = 0;
            updateLightboxImage();
            lightboxModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    });

    // Close Lightbox
    const closeLightbox = () => {
        lightboxModal.classList.remove('active');
        lightboxImg.classList.remove('zoomed');
        document.body.style.overflow = '';
    };

    closeBtn.addEventListener('click', closeLightbox);
    lightboxModal.addEventListener('click', (e) => {
        if (e.target === lightboxModal) {
            closeLightbox();
        }
    });

    // Navigate Next/Prev
    const showNextImage = () => {
        currentIdx = (currentIdx + 1) % uniqueMarqueeUrls.length;
        updateLightboxImage();
    };

    const showPrevImage = () => {
        currentIdx = (currentIdx - 1 + uniqueMarqueeUrls.length) % uniqueMarqueeUrls.length;
        updateLightboxImage();
    };

    nextBtn.addEventListener('click', showNextImage);
    prevBtn.addEventListener('click', showPrevImage);

    // Zoom Toggle (Click to zoom/pan, click again to zoom out)
    lightboxImg.addEventListener('click', (e) => {
        e.stopPropagation();
        lightboxImg.classList.toggle('zoomed');
    });

    // Keyboard Arrow Controls
    document.addEventListener('keydown', (e) => {
        if (lightboxModal.classList.contains('active')) {
            if (e.key === 'ArrowRight') showNextImage();
            if (e.key === 'ArrowLeft') showPrevImage();
            if (e.key === 'Escape') closeLightbox();
        }
    });

    // Mobile Swipe Support
    let touchStartX = 0;
    let touchEndX = 0;

    lightboxModal.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    lightboxModal.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        if (!lightboxImg.classList.contains('zoomed')) {
            if (touchStartX - touchEndX > 50) showNextImage(); // Swipe Left -> Next
            if (touchEndX - touchStartX > 50) showPrevImage(); // Swipe Right -> Prev
        }
    }, { passive: true });
});

</script>

<?php elseif ( $grid == 2): ?>

<section class=" ">
    <div class="row wow fadeIn" data-wow-duration="2s">
        <div class="col-md-5 align-self-center">
            <div class="wrap-titfood mt-md-0 mt-5">
                <h3><?= $title ?></h3>
                <p><?= $subtitle ?></p>
                <a class="btn btn-food" href="<?= base_url() ?>gallery/all">View More</a>
            </div>
        </div>

        <div class="col-md-7">
            <div class="row">
            <?php $i=1; foreach ($item->data as $items): ?>
                <div class="col-6 col-md-3" style="padding: 3px;">
                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->url_img ?>" data-plugin-options="{'type':'image'}">
                        <div class="wrap-gallery lazyload" data-bgset="<?= $items->url_img ?>"></div>
                    </a>
                </div>
            <?php $i++; endforeach ?>
        </div>
        </div>
    </div>
</section>

<?php else : ?>
<section class="mt-5">
    <div class="container" style="max-width: 1240px;">
        <div class="row mb-3">
            <div class="col-md-10 justify-content-start wow fadeInRight">
                <h3 class="title-gallery" style="margin-bottom: 5px;"><?= $item->setting->title ?></h3>
                <p><?= $item->setting->subtitle ?></p>
            </div>

            <div class="col-md-2 col-cus wow fadeInRight">
                <a class="btn btn-primary-cus" href="http://thedesaubud.com/gallery/all">View All</a>
            </div>
        </div>

        <div class="row">
            <?php foreach ($item->data as $items): ?>
            <div class="col-md-4 mb-2 wow fadeInUp" style="padding: 0; padding-right: 10px;">
                <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->url_img ?>" data-plugin-options="{'type':'image'}">
                    <img class="img-fluid" style="width: 100%; height: 250px;" src="<?= $items->url_img_thumb ?>" alt="<?= $items->title ?>">
                </a>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<?php endif ?>