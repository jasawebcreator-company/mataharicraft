<?php
$header_menu = json_decode(json_encode(simplify_menu($data->menu->primary_menu)));
?>

<?php
// $header_menu = json_decode(json_encode([
//   ['link' => '#hero', 'label' => 'Home'],
//   ['link' => '#profile', 'label' => 'About Us'],
//   ['link' => '#collection', 'label' => 'Products', 'child' => [
//     ['link' => '#collection', 'label' => 'Bamboo Craft'],
//     ['link' => '#collection', 'label' => 'Rattan Craft'],
//     ['link' => '#collection', 'label' => 'Wood Craft'],
//     ['link' => '#collection', 'label' => 'Coconut Shell Craft'],
//     ['link' => '#collection', 'label' => 'Paper Craft'],
//     ['link' => '#collection', 'label' => 'Home Decor']
//   ]],
//   ['link' => '#bussiness', 'label' => 'Decor & Wholesale'],
//   ['link' => '#process', 'label' => 'Our Process'],
//   ['link' => '#contact', 'label' => 'Contact']
// ]));
?>

<style>
#main-header {
  position: sticky;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000;
  background-color: #faf6f0;
  border-bottom: 1px solid rgba(184, 142, 44, 0.15);
  transition: var(--transition);

  .header-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1.2rem 2rem;
    max-width: 1320px;
    margin: 0 auto;
  }

  .brand-logo {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    color: var(--color2);

	img {
		height: 60px;
	}

    .logo-icon {
      font-size: 1.8rem;
      color: var(--colors);
    }

    .logo-text {
      font-family: var(--subtext);
      font-size: 0.85rem;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      line-height: 1.2;
    }
  }

  .nav-menu-desktop {
    display: flex;
    align-items: center;
    gap: 2rem;
    list-style: none;
    margin: 0;
    padding: 0;

    .nav-item {
      position: relative;

      .nav-link {
        font-family: var(--subtext);
        font-size: 0.9rem;
        font-weight: 500;
        color: var(--color2);
        padding: 0.5rem 0;
        display: flex;
        align-items: center;
        gap: 0.4rem;

        &:hover {
          color: var(--colors);
        }
      }

      .dropdown-menu-desktop {
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 220px;
        background-color: #ffffff;
        border: 1px solid rgba(184, 142, 44, 0.2);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border-radius: 4px;
        list-style: none;
        padding: 0.5rem 0;
        margin: 0;
        display: none;
        opacity: 0;
        transform: translateY(10px);
        transition: var(--transition);

        .dropdown-item {
          a {
            display: block;
            padding: 0.6rem 1.2rem;
            font-size: 0.85rem;
            color: var(--color2);

            &:hover {
              background-color: var(--color3);
              color: var(--colors);
            }
          }
        }
      }

      &:hover .dropdown-menu-desktop {
        display: block;
        opacity: 1;
        transform: translateY(0);
      }
    }
  }

  .header-actions {
    display: flex;
    align-items: center;
    gap: 1.5rem;

    .lang-select {
      font-size: 0.85rem;
      font-weight: 600;
      color: var(--color2);
      display: flex;
      align-items: center;
      gap: 0.4rem;
      cursor: pointer;
    }
  }

  .hamburger-btn {
    display: none;
    font-size: 1.5rem;
    color: var(--color2);
    background: none;
    border: none;
    cursor: pointer;
  }

  .mobile-menu-drawer {
    display: none;
    position: fixed;
    top: 0;
    right: -100%;
    width: 300px;
    height: 100vh;
    background-color: #faf6f0;
    box-shadow: -5px 0 25px rgba(0,0,0,0.15);
    z-index: 1050;
    padding: 2rem 1.5rem;
    transition: right 0.4s ease;
    overflow-y: auto;

    &.active {
      right: 0;
    }

    .drawer-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;

      .close-btn {
        font-size: 1.5rem;
        background: none;
        border: none;
        color: var(--color2);
        cursor: pointer;
      }
    }

    .mobile-nav-list {
      list-style: none;
      padding: 0;
      margin: 0;

      .mobile-nav-item {
        margin-bottom: 1rem;

        .mobile-nav-link {
          font-size: 1rem;
          font-weight: 600;
          color: var(--color2);
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 0.5rem 0;
        }

        .mobile-submenu {
          display: none;
          list-style: none;
          padding-left: 1rem;
          margin-top: 0.5rem;

          li a {
            font-size: 0.9rem;
            color: #666;
            display: block;
            padding: 0.4rem 0;
          }
        }
      }
    }
  }

  @media (max-width: 991px) {
    .nav-menu-desktop, .header-actions {
      display: none;
    }
    .hamburger-btn, .mobile-menu-drawer {
      display: block;
    }
  }
}
</style>

<header id="main-header">
  <div class="header-container">
    <a href="<?= base_url() ?>" class="brand-logo">
      <img src="<?= $data->web->site_logo_alternative ?>" alt="logo" >
    </a>

    <ul class="nav-menu-desktop">
      <?php foreach ($header_menu as $item): ?>
        <li class="nav-item">
          <a href="<?php echo $item->link; ?>" class="nav-link">
            <?php echo $item->label; ?>
            <?php if (!empty($item->child)): ?>
              <i class="fa-solid fa-chevron-down" style="font-size: 0.75rem;"></i>
            <?php endif; ?>
          </a>
          <?php if (!empty($item->child)): ?>
            <ul class="dropdown-menu-desktop">
              <?php foreach ($item->child as $child): ?>
                <li class="dropdown-item">
                  <a href="<?php echo $child->link; ?>"><?php echo $child->label; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>

    <div class="header-actions">
      <a href="#contact" class="btn-craft-primary">Get In Touch</a>
      <!-- <div class="lang-select">
        <i class="fa-solid fa-globe"></i> EN
      </div> -->
    </div>

    <button class="hamburger-btn" id="open-drawer">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>

  <div class="mobile-menu-drawer" id="mobile-drawer">
    <div class="drawer-header">
      <a href="#hero" class="brand-logo">
        <i class="fa-solid fa-sun logo-icon"></i>
        <span class="logo-text">Matahari Craft</span>
      </a>
      <button class="close-btn" id="close-drawer">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>

    <ul class="mobile-nav-list">
      <?php foreach ($header_menu as $item): ?>
        <li class="mobile-nav-item">
          <a href="<?php echo $item->link; ?>" class="mobile-nav-link">
            <span><?php echo $item->label; ?></span>
            <?php if (!empty($item->child)): ?>
              <i class="fa-solid fa-chevron-down mobile-toggle-btn" style="font-size: 0.8rem;"></i>
            <?php endif; ?>
          </a>
          <?php if (!empty($item->child)): ?>
            <ul class="mobile-submenu">
              <?php foreach ($item->child as $child): ?>
                <li><a href="<?php echo $child->link; ?>"><?php echo $child->label; ?></a></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>

    <div style="margin-top: 2rem;">
      <a href="#contact" class="btn-craft-primary" style="width: 100%; text-align: center;">Get In Touch</a>
    </div>
  </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const openBtn = document.querySelector('#open-drawer');
  const closeBtn = document.querySelector('#close-drawer');
  const drawer = document.querySelector('#mobile-drawer');

  if (openBtn && closeBtn && drawer) {
    openBtn.addEventListener('click', function() {
      drawer.classList.add('active');
    });
    closeBtn.addEventListener('click', function() {
      drawer.classList.remove('active');
    });
  }

  const mobileToggleBtns = document.querySelectorAll('.mobile-toggle-btn');
  mobileToggleBtns.forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      const parent = this.closest('.mobile-nav-item');
      const submenu = parent.querySelector('.mobile-submenu');
      if (submenu) {
        submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
      }
    });
  });
});
</script>
