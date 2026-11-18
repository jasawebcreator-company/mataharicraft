<style>
	@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Inter:wght@300;400;500;600;700&display=swap');

@font-face {
  font-family: 'Alkatra-Regular';
  src: url('<?= base_url('assets') ?>/front/font/Alkatra-Regular.ttf');
}
@font-face {
  font-family: 'Aville-Regular';
  src: url('<?= base_url('assets') ?>/front/font/Aville-Regular.ttf');
}
@font-face {
  font-family: 'Certia-Regular';
  src: url('<?= base_url('assets') ?>/front/font/Certia-Regular.otf');
}
	
:root {
  --titletext: 'Alkatra-Regular';
  --primtext: 'Aville-Regular';
  --subtext: 'Certia-Regular';
  --colors: #e88d55;
  --color2: #24211d;
  --color3: #faf6f0;
  --color4: #f3ece1;
  --color-accent: #96701b;
  --color-text: #4a453e;
  --color-light: #ffffff;
  --transition: all 0.35s cubic-bezier(0.25, 1, 0.5, 1);
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: var(--subtext);
  color: var(--color-text);
  background-color: #fdfbf7;
  overflow-x: hidden;
  line-height: 1.6;
}

a {
  text-decoration: none;
  color: inherit;
  transition: var(--transition);
}

a:hover {
  text-decoration: none;
  color: var(--colors);
}

.container-global {
  width: 100%;
  max-width: 1320px;
  padding: 5rem 2rem;
  margin: 0 auto;
}

.section-header {
  text-align: center;
  margin-bottom: 3.5rem;

  .section-subtitle {
    font-family: var(--subtext);
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: var(--colors);
    margin-bottom: 0.75rem;
    display: block;
  }

  .section-title {
    font-family: var(--primtext);
    font-size: 3rem;
    font-weight: 600;
    color: var(--color2);
    margin-bottom: 1rem;
    line-height: 1.15;
  }

  .section-description {
    font-family: var(--subtext);
    font-size: 1rem;
    color: #666059;
    max-width: 680px;
    margin: 0 auto;
    line-height: 1.6;
  }
}

.btn-craft-primary {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 0.9rem 2.2rem;
  background-color: var(--colors);
  color: var(--color-light);
  font-family: var(--subtext);
  font-size: 0.85rem;
  font-weight: 600;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  border-radius: 2px;
  border: 1px solid var(--colors);
  transition: var(--transition);
  cursor: pointer;

  &:hover {
    background-color: var(--color-accent);
    border-color: var(--color-accent);
    color: var(--color-light);
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(184, 142, 44, 0.25);
  }
}

.btn-craft-outline {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 0.9rem 2.2rem;
  background-color: transparent;
  color: var(--color2);
  font-family: var(--subtext);
  font-size: 0.85rem;
  font-weight: 600;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  border-radius: 2px;
  border: 1px solid var(--color2);
  transition: var(--transition);
  cursor: pointer;

  &:hover {
    background-color: var(--color2);
    color: var(--color-light);
    transform: translateY(-2px);
  }
}

.page-hero {
  position: relative;
  background-color: var(--color2);
  background-image: linear-gradient(rgba(36, 33, 29, 0.75), rgba(36, 33, 29, 0.8)), url('https://gotra-web.goapp.my.id/web-upload/mataharicraft/1790228152-24-09-2026-jlmb2cE3S17naZz60sQyt5qWDwkMJhUY.webp');
  background-position: center;
  background-size: cover;
  color: #ffffff;
  padding: 5rem 0;
  text-align: center;

  .container-global {
    padding-top: 2rem;
    padding-bottom: 2rem;
  }

  .page-hero-title {
    font-family: var(--primtext);
    font-size: clamp(2.8rem, 4vw, 4rem);
    font-weight: 600;
    color: #ffffff;
    margin-bottom: 1rem;
    margin-top: 1rem;
    line-height: 1.15;
  }

  .page-hero-breadcrumb {
    display: inline-flex;
    align-items: center;
    gap: 0.6rem;
    font-family: var(--subtext);
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--colors);
    letter-spacing: 1.5px;
    text-transform: uppercase;

    a {
      color: #e5e0d8;
      transition: var(--transition);

      &:hover {
        color: var(--colors);
      }
    }

    .separator {
      font-size: 0.75rem;
      color: rgba(255, 255, 255, 0.4);
    }
  }
}



/* ======================= */
/* ============================================================
   COLLECTION SECTION
   ============================================================ */
.collection-section {
    position: relative;
    width: 100%;
    background: #ffffff;
}
/* ============================================================
   CONTAINER
   ============================================================ */
.collection-section .container-global {
    margin: 0 auto;
}
/* ============================================================
   HEADER
   ============================================================ */
.collection-header {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto 48px;
    text-align: center;
}
/* ============================================================
   EYEBROW
   ============================================================ */
.collection-eyebrow {
    display: block;
    margin-bottom: 14px;
    font-family: var(--titletext);
    font-size: 22px;
    font-weight: 500;
    font-style: italic;
    letter-spacing: .4px;
    line-height: 1.2;
    color: #e8864c;
}
/* ============================================================
   TITLE
   ============================================================ */
.collection-title {
    margin: 0;
    font-family: var(--primtext);
    font-size: clamp(
        42px,
        4vw,
        60px
    );
    font-weight: 500;
    line-height: 1.03;
    letter-spacing: -1.8px;
    color: #050505;
}
/* ============================================================
   DESCRIPTION
   ============================================================ */
.collection-description {
    max-width: 720px;
    margin: 8px auto 0;
    font-family: var(--subtext);
    font-size: 17px;
    font-weight: 400;
    line-height: 1.35;
    color: #111111;
}
/* ============================================================
   COLLECTION ROW
   ============================================================ */
.collection-row {
    --bs-gutter-x: 6rem;
    --bs-gutter-y: 3rem;
}
/* ============================================================
   COLLECTION CARD
   ============================================================ */
.collection-card {
    width: 100%;
    text-align: center;
}
/* ============================================================
   IMAGE CONTAINER
   ============================================================ */
.collection-image {
    position: relative;
    width: 100%;
    aspect-ratio: 1 / 1;
    overflow: hidden;
    border-radius: 24px;
    background: #eeeeee;
}
/* ============================================================
   IMAGE SLIDE
   ============================================================ */
.collection-slide {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    object-position: center;
    opacity: 0;
    transform: scale(1.015);
    transition:
        opacity 1.5s ease-in-out,
        transform 5s ease-out;
}
/* ============================================================
   ACTIVE IMAGE
   ============================================================ */
.collection-slide.active {
    opacity: 1;
    transform: scale(1);
}
/* ============================================================
   HOVER ZOOM
   ============================================================ */
.collection-image:hover .collection-slide.active {
    transform: scale(1.035);
}
/* ============================================================
   CONTENT
   ============================================================ */
.collection-content {
    padding: 8px 10px 0;
}
/* ============================================================
   COLLECTION NAME
   ============================================================ */
.collection-name {
    margin: 0;
    font-family: var(--primtext);
    font-size: 28px;
    font-weight: 500;
    line-height: 1.2;
	margin-top: 15px;
    letter-spacing: -.5px;
    color: #050505;
}
/* ============================================================
   MATERIALS
   ============================================================ */
.collection-materials {
    max-width: 360px;
    margin: 12px auto 10px;
    font-family: var(--subtext);
    font-size: 17px;
    font-weight: 300;
    line-height: 1.4;
    color: #666;
}
/* ============================================================
   TABLET
   ============================================================ */
@media (max-width: 991px) {
    .collection-section {
        /* padding: 80px 0 30px; */
    }
    .collection-header {
        margin-bottom: 40px;
    }
    .collection-title {
        font-size: clamp(
            40px,
            6vw,
            55px
        );
    }
    .collection-description {
        font-size: 15px;
    }
    .collection-row {
        --bs-gutter-x: 2rem;
        --bs-gutter-y: 3rem;
    }
    .collection-name {
        font-size: 26px;
    }
    .collection-materials {
        font-size: 15px;
    }

}
/* ============================================================
   MOBILE
   ============================================================ */
@media (max-width: 767px) {
    .collection-section {
        /* padding: 65px 0 20px; */
    }
    .collection-header {
        margin-bottom: 35px;
    }
    .collection-eyebrow {
        font-size: 18px;
        margin-bottom: 12px;
    }
    .collection-title {
        font-size: clamp(
            38px,
            11vw,
            52px
        );
        line-height: 1;
        letter-spacing: -1px;
    }
    .collection-description {
        margin-top: 14px;
        font-size: 14px;
        line-height: 1.45;
    }
    .collection-row {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 3rem;
    }
    .collection-image {
        border-radius: 20px;
    }
    .collection-content {
        padding-top: 7px;
    }
    .collection-name {
        font-size: 25px;
    }
    .collection-materials {
        margin-top: 8px;
        font-size: 14px;
        line-height: 1.45;
    }

}

</style>