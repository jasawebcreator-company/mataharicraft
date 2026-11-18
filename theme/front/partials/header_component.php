<?php
/**
 * ============================================================
 * HELPER
 * ============================================================
 */

if (!function_exists('e')) {
    function e($value)
    {
        return htmlspecialchars(
            $value ?? '',
            ENT_QUOTES,
            'UTF-8'
        );
    }
}

if (!function_exists('isSpecialDropdown')) {
    function isSpecialDropdown($label)
    {
        return substr(trim((string) $label), -2) === '__';
    }
}

if (!function_exists('cleanMenuLabel')) {
    function cleanMenuLabel($label)
    {
        $label = trim((string) $label);

        if (substr($label, -2) === '__') {
            return trim(substr($label, 0, -2));
        }

        return $label;
    }
}

if (!function_exists('renderDesktopNested')) {
    function renderDesktopNested($items)
    {
        if (empty($items)) {
            return;
        }
        ?>

        <ul class="mega-nested-list">

            <?php foreach ($items as $item): ?>

                <?php
                $hasChild = !empty($item->child);
                $label = cleanMenuLabel($item->label);
                ?>

                <li class="<?= $hasChild ? 'has-nested' : ''; ?>">

                    <?php if ($hasChild): ?>

                        <div class="mega-nested-title">
                            <?= e($label); ?>
                        </div>

                        <?php renderDesktopNested($item->child); ?>

                    <?php else: ?>

                        <a href="<?= e($item->link); ?>">
                            <?= e($label); ?>
                        </a>

                    <?php endif; ?>

                </li>

            <?php endforeach; ?>

        </ul>

        <?php
    }
}
?>

<header id="main-header" class="main-header">

    <div class="header-inner">

        <!-- LOGO -->
        <div class="header-logo">

            <a
                href="<?= base_url(); ?>"
                aria-label="Home"
            >

                <img
                    src="<?= e($data->web->site_logo); ?>"
                    alt="<?= e($data->web->site_name); ?>"
                    class="site-logo"
                >

            </a>

        </div>


        <!-- ====================================================
             DESKTOP NAVIGATION
             ==================================================== -->

        <nav class="desktop-navigation">

            <ul class="main-menu">

                <?php
                $menuTotal = count((array) $data->menu->primary_menu);
                $menuIndex = 0;
                ?>

                <?php foreach ($data->menu->primary_menu as $menu): ?>

                    <?php
                    $menuIndex++;

                    // Menu terakhir tampil sebagai tombol CTA
                    $ctaClass = ($menuIndex === $menuTotal) ? ' nav-cta' : '';

                    $hasChild = !empty($menu->child);

                    $menuLabel = cleanMenuLabel($menu->label);

                    /*
                     * SPECIAL:
                     *
                     * Label mengandung "__"
                     * DAN memiliki child
                     */
                    $isSpecial =
                        isSpecialDropdown($menu->label)
                        && $hasChild;
                    ?>


                    <?php if (!$hasChild): ?>

                        <!-- NORMAL MENU -->

                        <li class="menu-item<?= $ctaClass; ?>">

                            <a
                                href="<?= e($menu->link); ?>"
                                class="nav-link"
                            >
                                <?= e($menuLabel); ?>
                            </a>

                        </li>


                    <?php elseif ($isSpecial): ?>

                        <!-- ==================================================
                             SPECIAL BUTTON + DROPDOWN
                             ================================================== -->

                        <li class="menu-item special-dropdown-menu">

                            <button
                                type="button"
                                class="special-dropdown-button"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >

                                <span>
                                    <?= e($menuLabel); ?>
                                </span>

                                <i class="fa-solid fa-chevron-down"></i>

                            </button>


                            <!-- CHILD DROPDOWN -->

                            <div class="special-dropdown-content">

                                <?php foreach ($menu->child as $submenu): ?>

                                    <a
                                        href="<?= e($submenu->link); ?>"
                                    >
                                        <?= e(
                                            cleanMenuLabel(
                                                $submenu->label
                                            )
                                        ); ?>
                                    </a>

                                <?php endforeach; ?>

                            </div>

                        </li>


                    <?php else: ?>

                        <!-- ==================================================
                             MENU NORMAL DENGAN CHILD
                             ================================================== -->

                        <?php
                        $hasNestedChild = false;

                        foreach ($menu->child as $submenu) {

                            if (!empty($submenu->child)) {

                                $hasNestedChild = true;

                                break;
                            }
                        }
                        ?>


                        <?php if ($hasNestedChild): ?>

                            <!-- MEGA MENU -->

                            <li class="menu-item has-mega-menu<?= $ctaClass; ?>">

                                <a
                                    href="<?= e($menu->link); ?>"
                                    class="nav-link nav-has-child"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >

                                    <?= e($menuLabel); ?>

                                    <i class="fa-solid fa-chevron-down"></i>

                                </a>


                                <div class="mega-menu">

                                    <div class="mega-menu-inner">

                                        <?php foreach ($menu->child as $submenu): ?>

                                            <?php
                                            $submenuLabel =
                                                cleanMenuLabel(
                                                    $submenu->label
                                                );
                                            ?>

                                            <div class="mega-column">

                                                <?php if (!empty($submenu->link)): ?>

                                                    <a
                                                        href="<?= e($submenu->link); ?>"
                                                        class="mega-direct-link"
                                                    >
                                                        <?= e($submenuLabel); ?>
                                                    </a>

                                                <?php else: ?>

                                                    <div class="mega-column-title">
                                                        <?= e($submenuLabel); ?>
                                                    </div>

                                                <?php endif; ?>


                                                <?php if (!empty($submenu->child)): ?>

                                                    <ul class="mega-links">

                                                        <?php foreach ($submenu->child as $subchild): ?>

                                                            <li>

                                                                <?php if (!empty($subchild->child)): ?>

                                                                    <div class="mega-link-group">

                                                                        <span class="mega-link-title">
                                                                            <?= e(
                                                                                cleanMenuLabel(
                                                                                    $subchild->label
                                                                                )
                                                                            ); ?>
                                                                        </span>

                                                                        <?php
                                                                        renderDesktopNested(
                                                                            $subchild->child
                                                                        );
                                                                        ?>

                                                                    </div>

                                                                <?php else: ?>

                                                                    <a
                                                                        href="<?= e($subchild->link); ?>"
                                                                        class="mega-link"
                                                                    >
                                                                        <?= e(
                                                                            cleanMenuLabel(
                                                                                $subchild->label
                                                                            )
                                                                        ); ?>
                                                                    </a>

                                                                <?php endif; ?>

                                                            </li>

                                                        <?php endforeach; ?>

                                                    </ul>

                                                <?php endif; ?>

                                            </div>

                                        <?php endforeach; ?>

                                    </div>

                                </div>

                            </li>


                        <?php else: ?>

                            <!-- SIMPLE DROPDOWN -->

                            <li class="menu-item has-simple-dropdown<?= $ctaClass; ?>">

                                <a
                                    href="<?= e($menu->link); ?>"
                                    class="nav-link nav-has-child"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >

                                    <?= e($menuLabel); ?>

                                    <i class="fa-solid fa-chevron-down"></i>

                                </a>


                                <div class="simple-dropdown">

                                    <?php foreach ($menu->child as $submenu): ?>

                                        <a
                                            href="<?= e($submenu->link); ?>"
                                            class="simple-dropdown-link"
                                        >
                                            <?= e(
                                                cleanMenuLabel(
                                                    $submenu->label
                                                )
                                            ); ?>
                                        </a>

                                    <?php endforeach; ?>

                                </div>

                            </li>

                        <?php endif; ?>

                    <?php endif; ?>

                <?php endforeach; ?>

            </ul>

        </nav>


        <!-- MOBILE TOGGLE -->

        <button
            type="button"
            class="mobile-menu-toggle"
            aria-label="Open menu"
            aria-expanded="false"
        >

            <span></span>
            <span></span>
            <span></span>

        </button>

    </div>

</header>


<!-- ============================================================
     MOBILE MENU
     ============================================================ -->

<div class="mobile-menu">

    <div class="mobile-menu-inner">


        <!-- CLOSE -->

        <button
            type="button"
            class="mobile-menu-close"
            aria-label="Close menu"
        >

            <i class="fa-solid fa-xmark"></i>

        </button>


        <!-- ====================================================
             MOBILE NAVIGATION
             ==================================================== -->

        <nav class="mobile-navigation">

            <ul class="mobile-main-menu">

                <?php foreach ($data->menu->primary_menu as $menu): ?>

                    <?php

                    $hasChild = !empty($menu->child);

                    $menuLabel =
                        cleanMenuLabel(
                            $menu->label
                        );

                    ?>


                    <?php if (!$hasChild): ?>

                        <!-- ==================================================
                             MOBILE NORMAL MENU
                             ================================================== -->

                        <li>

                            <a
                                href="<?= e($menu->link); ?>"
                            >

                                <?= e($menuLabel); ?>

                            </a>

                        </li>


                    <?php else: ?>

                        <!-- ==================================================
                             MOBILE MENU WITH CHILD
                             ================================================== -->

                        <li class="mobile-menu-item">

                            <button
                                type="button"
                                class="mobile-menu-parent"
                            >

                                <span>

                                    <?= e($menuLabel); ?>

                                </span>

                                <i class="fa-solid fa-chevron-down"></i>

                            </button>


                            <!-- ==================================================
                                 LEVEL 2
                                 ================================================== -->

                            <ul class="mobile-submenu">

                                <?php foreach ($menu->child as $submenu): ?>

                                    <?php

                                    $hasSubChild =
                                        !empty($submenu->child);

                                    $submenuLabel =
                                        cleanMenuLabel(
                                            $submenu->label
                                        );

                                    ?>


                                    <?php if (!$hasSubChild): ?>

                                        <!-- LEVEL 2 LINK -->

                                        <li>

                                            <a
                                                href="<?= e($submenu->link); ?>"
                                            >

                                                <?= e($submenuLabel); ?>

                                            </a>

                                        </li>


                                    <?php else: ?>

                                        <!-- ==================================================
                                             LEVEL 3
                                             ================================================== -->

                                        <li class="mobile-menu-item">

                                            <button
                                                type="button"
                                                class="mobile-menu-parent"
                                            >

                                                <span>

                                                    <?= e($submenuLabel); ?>

                                                </span>

                                                <i class="fa-solid fa-chevron-down"></i>

                                            </button>


                                            <!-- LEVEL 3 CHILDREN -->

                                            <ul class="mobile-submenu">

                                                <?php foreach ($submenu->child as $subSubmenu): ?>

                                                    <?php

                                                    $hasThirdChild =
                                                        !empty(
                                                            $subSubmenu->child
                                                        );

                                                    $subSubmenuLabel =
                                                        cleanMenuLabel(
                                                            $subSubmenu->label
                                                        );

                                                    ?>


                                                    <?php if (!$hasThirdChild): ?>

                                                        <!-- LEVEL 3 LINK -->

                                                        <li>

                                                            <a
                                                                href="<?= e($subSubmenu->link); ?>"
                                                            >

                                                                <?= e(
                                                                    $subSubmenuLabel
                                                                ); ?>

                                                            </a>

                                                        </li>


                                                    <?php else: ?>

                                                        <!-- ==================================================
                                                             LEVEL 4
                                                             ================================================== -->

                                                        <li class="mobile-menu-item">

                                                            <button
                                                                type="button"
                                                                class="mobile-menu-parent"
                                                            >

                                                                <span>

                                                                    <?= e(
                                                                        $subSubmenuLabel
                                                                    ); ?>

                                                                </span>

                                                                <i class="fa-solid fa-chevron-down"></i>

                                                            </button>


                                                            <ul class="mobile-submenu">

                                                                <?php foreach ($subSubmenu->child as $deepItem): ?>

                                                                    <li>

                                                                        <a
                                                                            href="<?= e($deepItem->link); ?>"
                                                                        >

                                                                            <?= e(
                                                                                cleanMenuLabel(
                                                                                    $deepItem->label
                                                                                )
                                                                            ); ?>

                                                                        </a>

                                                                    </li>

                                                                <?php endforeach; ?>

                                                            </ul>

                                                        </li>

                                                    <?php endif; ?>

                                                <?php endforeach; ?>

                                            </ul>

                                        </li>

                                    <?php endif; ?>

                                <?php endforeach; ?>

                            </ul>

                        </li>

                    <?php endif; ?>

                <?php endforeach; ?>

            </ul>

        </nav>


        <!-- ====================================================
             MOBILE GET IN TOUCH
             ==================================================== -->

        <div class="mobile-book-now">

            <a
                href="#contact"
                class="book-now-btn"
            >

                Get In Touch

            </a>

        </div>

    </div>

</div>


<style>
/* ============================================================
   HEADER
   ============================================================ */

button:focus {
    outline: none !important;
}

.main-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 9999;
    background: transparent;
    transition:
        background-color 0.35s ease,
        box-shadow 0.35s ease;
}

.main-header.scrolled {
    background: #ffffff;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.06);
}

.header-inner {
    width: 100%;
    max-width: 1350px;
    margin: 0 auto;
    min-height: 90px;
    padding: 5px 40px;
    display: flex;
    align-items: center;
    position: relative;
}


/* ============================================================
   LOGO
   ============================================================ */

.header-logo {
    flex-shrink: 0;
}

.header-logo a {
    display: flex;
    align-items: center;
}

.site-logo {
    display: block;
    max-height: 80px;
    width: auto;
    height: auto;
    filter: brightness(0) invert(1);
    transition: filter 0.35s ease;
}

.main-header.scrolled .site-logo {
    filter: none;
}


/* ============================================================
   DESKTOP NAVIGATION
   ============================================================ */

.desktop-navigation {
    margin-left: auto;
}

.main-menu {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: stretch;
    height: 90px;
}

.main-menu > .menu-item {
    position: relative;
    display: flex;
    align-items: center;
}


/* ============================================================
   NORMAL NAV LINK
   ============================================================ */

.nav-link {
    position: relative;
    height: 90px;
    display: flex;
    align-items: center;
    padding: 0 18px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0;
    text-decoration: none;
    white-space: nowrap;
    transition:
        color 0.3s ease,
        opacity 0.3s ease;
}

.nav-link:hover {
    color: #ffffff;
    opacity: 0.7;
}

.main-header.scrolled .nav-link {
    color: #171717;
}

.main-header.scrolled .nav-link:hover {
    color: #17604f;
}


/* ============================================================
   CHEVRON NORMAL MENU
   ============================================================ */

.nav-link i {
    margin-left: 7px;
    font-size: 9px;
    transition: transform 0.3s ease;
}

.menu-item:hover > .nav-link i {
    transform: rotate(180deg);
}


/* ============================================================
   MEGA MENU
   ============================================================ */

.mega-menu {
    position: absolute;
    top: 100%;
    /* left: 50%; */
    width: max-content;
    max-width: calc(100vw - 40px);
    background: #ffffff;
    border-top: 1px solid #eeeeee;
    box-shadow:
        0 15px 40px rgba(0, 0, 0, 0.08);
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transform: translateX(-50%) translateY(10px);
    transition:
        opacity 0.25s ease,
        transform 0.25s ease,
        visibility 0.25s ease;
}

.has-mega-menu:hover > .mega-menu {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    transform: translateX(-50%) translateY(0);
}

.mega-menu-inner {
    display: flex;
    align-items: flex-start;
    gap: 40px;
    padding: 35px 40px 40px;
    width: max-content;
    max-width: calc(100vw - 40px);
}

.mega-column {
    width: max-content;
    min-width: 160px;
    max-width: 240px;
    flex: 0 0 auto;
}

.mega-column-title {
    padding-bottom: 11px;
    margin-bottom: 12px;
    border-bottom: 1px solid #dddddd;
    color: #171717;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    white-space: nowrap;
}

.mega-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.mega-links li {
    margin: 0;
    padding: 0;
}

.mega-link {
    display: block;
    padding: 5px 0;
    color: #4a4a4a;
    font-size: 13px;
    line-height: 1.5;
    text-decoration: none;
    white-space: nowrap;
    transition:
        color 0.2s ease,
        padding-left 0.2s ease;
}

.mega-link:hover {
    color: #17604f;
    padding-left: 4px;
}

.mega-direct-link {
    display: block;
    padding-bottom: 11px;
    margin-bottom: 0;
    border-bottom: 1px solid #dddddd;
    color: #171717;
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    text-decoration: none;
}

.mega-direct-link:hover {
    color: #17604f;
}

.mega-link-group {
    margin-bottom: 10px;
}

.mega-link-title {
    display: block;
    padding: 5px 0;
    color: #171717;
    font-size: 10px;
    font-weight: 600;
}

.mega-nested-list {
    list-style: none;
    padding: 0 0 0 10px;
    margin: 0;
}

.mega-nested-list li {
    margin: 0;
}

.mega-nested-list a {
    display: block;
    padding: 4px 0;
    color: #555555;
    font-size: 10px;
    text-decoration: none;
}

.mega-nested-list a:hover {
    color: #17604f;
}


/* ============================================================
   SIMPLE DROPDOWN
   ============================================================ */

.simple-dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    min-width: 220px;
    padding: 10px 0;
    background: #ffffff;
    box-shadow:
        0 15px 35px rgba(0, 0, 0, 0.08);
    border-top: 1px solid #eeeeee;
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    pointer-events: none;
    transition:
        opacity 0.25s ease,
        transform 0.25s ease,
        visibility 0.25s ease;
}

.has-simple-dropdown:hover > .simple-dropdown {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    transform: translateY(0);
}

.simple-dropdown-link {
    display: block;
    padding: 9px 20px;
    color: #333333;
    font-size: 11px;
    text-decoration: none;
    white-space: nowrap;
    transition:
        background 0.2s ease,
        color 0.2s ease;
}

.simple-dropdown-link:hover {
    color: #17604f;
    background: #f7f7f7;
}


/* ============================================================
   CTA MENU (menu terakhir, mis. CONTACT)
   Dropdown tetap memakai .has-simple-dropdown / .has-mega-menu
   ============================================================ */

.main-menu > .menu-item.nav-cta {
    margin-left: 15px;
}

.main-header .menu-item.nav-cta > .nav-link {
    height: 45px;
    align-self: center;
    padding: 0 22px;
    background: var(--colors, #17604f);
    color: #ffffff;
    font-weight: 600;
    letter-spacing: 0.4px;
    opacity: 1;
    transition:
        background-color 0.25s ease,
        color 0.25s ease;
}

.main-header .menu-item.nav-cta > .nav-link:hover,
.main-header .menu-item.nav-cta:hover > .nav-link,
.main-header .menu-item.nav-cta.menu-open > .nav-link {
    background: var(--color3, #124d40);
    color: #000000;
    opacity: 1;
}

/* State setelah scroll: tetap berwarna CTA */
.main-header.scrolled .menu-item.nav-cta > .nav-link {
    background: var(--colors, #17604f);
    color: #ffffff;
}

.main-header.scrolled .menu-item.nav-cta > .nav-link:hover,
.main-header.scrolled .menu-item.nav-cta:hover > .nav-link,
.main-header.scrolled .menu-item.nav-cta.menu-open > .nav-link {
    background: var(--color3, #124d40);
    color: #000000;
}

/* Dropdown CTA rata kanan agar tidak keluar layar */
.menu-item.nav-cta > .simple-dropdown {
    left: auto;
    right: 0;
}

@media (max-width: 1100px) {
    .main-menu > .menu-item.nav-cta {
        margin-left: 10px;
    }

    .main-header .menu-item.nav-cta > .nav-link {
        padding: 0 16px;
    }
}


/* ============================================================
   SPECIAL GET IN TOUCH
   HANYA UNTUK MENU DENGAN "__" + CHILD
   ============================================================ */

.special-contact-menu {
    position: relative;
    display: flex;
    align-items: center;
    margin-left: 15px;
}

.special-contact-wrapper {
    position: relative;
}


/* BUTTON */

.special-contact-btn {
    width: auto;
    min-width: 185px;
    height: 48px;

    margin: 0;
    padding: 0 18px;

    border: 0;
    border-radius: 0;

    background: #EF8B54;
    color: #ffffff !important;

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 14px;

    font-family: inherit;
    font-size: 14px;
    font-weight: 500;
    line-height: 1;
    letter-spacing: 0;

    text-decoration: none;
    white-space: nowrap;

    cursor: pointer;

    box-sizing: border-box;

    transition:
        background-color 0.3s ease;
}


/* Hover */

.special-contact-btn:hover {
    background: #e67d47;
    color: #ffffff !important;
    opacity: 1;
}


/* Text */

.special-contact-text {
    display: block;
    white-space: nowrap;
}


/* Arrow */

.special-contact-arrow {
    display: flex;
    align-items: center;
    justify-content: center;

    flex-shrink: 0;
}

.special-contact-arrow i {
    margin: 0 !important;
    padding: 0;

    font-size: 9px;
    line-height: 1;

    transition:
        transform 0.3s ease;
}


/* Arrow ketika dropdown dibuka */

.special-contact-menu.menu-open
.special-contact-arrow i {
    transform: rotate(180deg);
}


/* ============================================================
   SPECIAL DROPDOWN
   ============================================================ */

.special-contact-dropdown {
    position: absolute;

    top: 100%;
    left: 0;

    min-width: 185px;

    padding: 10px 0;

    background: #ffffff;

    border-top: 1px solid #eeeeee;

    box-shadow:
        0 15px 35px rgba(0, 0, 0, 0.08);

    opacity: 0;
    visibility: hidden;
    pointer-events: none;

    transform: translateY(10px);

    transition:
        opacity 0.25s ease,
        transform 0.25s ease,
        visibility 0.25s ease;

    z-index: 10000;
}


/* Hover */

.special-contact-menu:hover
.special-contact-dropdown {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    transform: translateY(0);
}


/* Click */

.special-contact-menu.menu-open
.special-contact-dropdown {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    transform: translateY(0);
}


/* Dropdown link */

.special-contact-dropdown
.simple-dropdown-link {
    display: block;

    padding: 10px 18px;

    color: #333333;

    font-size: 12px;
    line-height: 1.5;

    text-decoration: none;
    white-space: nowrap;

    transition:
        background 0.2s ease,
        color 0.2s ease;
}

.special-contact-dropdown
.simple-dropdown-link:hover {
    color: #17604f;
    background: #f7f7f7;
}


/* ============================================================
   BOOK NOW / FALLBACK
   ============================================================ */

.header-action {
    margin-left: 15px;
}

.book-now-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    min-width: 105px;

    padding: 12px 20px;

    background: var(--colors);
    color: #ffffff;

    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.4px;

    text-decoration: none;

    transition:
        background 0.25s ease,
        transform 0.25s ease;
}

.book-now-btn:hover {
    background: #124d40;
    color: #ffffff;
    transform: translateY(-1px);
}


/* ============================================================
   MOBILE TOGGLE
   ============================================================ */

.mobile-menu-toggle {
    display: none;

    margin-left: 15px;

    width: 42px;
    height: 42px;

    padding: 0;

    border: 0;
    background: transparent;

    flex-direction: column;
    align-items: center;
    justify-content: center;

    gap: 5px;

    cursor: pointer;
}

.mobile-menu-toggle span {
    display: block;

    width: 22px;
    height: 1px;

    background: #ffffff;

    transition:
        background 0.3s ease;
}

.main-header.scrolled
.mobile-menu-toggle span {
    background: #171717;
}


/* ============================================================
   MOBILE MENU
   ============================================================ */

.mobile-menu {
    position: fixed;

    top: 0;
    right: 0;

    width: 100%;
    max-width: 420px;
    height: 100vh;

    background: #ffffff;

    z-index: 10001;

    transform: translateX(100%);

    transition:
        transform 0.35s ease;

    overflow-y: auto;

    box-shadow:
        -10px 0 40px rgba(0, 0, 0, 0.08);
}

.mobile-menu.active {
    transform: translateX(0);
}

.mobile-menu-inner {
    padding: 30px;
}


/* Close */

.mobile-menu-close {
    width: 42px;
    height: 42px;

    margin-left: auto;

    display: flex;
    align-items: center;
    justify-content: center;

    border: 1px solid #dddddd;

    background: #ffffff;
    color: #171717;

    cursor: pointer;
}


/* Navigation */

.mobile-navigation {
    margin-top: 35px;
}

.mobile-main-menu,
.mobile-submenu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.mobile-main-menu > li {
    border-bottom: 1px solid #eeeeee;
}


/* Main mobile link */

.mobile-main-menu > li > a,
.mobile-menu-parent {
    width: 100%;

    display: flex;
    align-items: center;
    justify-content: space-between;

    padding: 16px 0;

    border: 0;
    background: transparent;

    color: #171717;

    font-size: 13px;
    font-weight: 500;

    text-align: left;
    text-decoration: none;

    cursor: pointer;
}


/* Chevron */

.mobile-menu-parent i {
    font-size: 9px;

    transition:
        transform 0.3s ease;
}

.mobile-menu-item.open
> .mobile-menu-parent i {
    transform: rotate(180deg);
}


/* Mobile submenu */

.mobile-submenu {
    display: none;

    padding: 0 0 10px 15px;
}

.mobile-menu-item.open
> .mobile-submenu {
    display: block;
}

.mobile-submenu li {
    border: 0;
}

.mobile-submenu a {
    display: block;

    padding: 8px 0;

    color: #555555;

    font-size: 12px;
    line-height: 1.5;

    text-decoration: none;
}

.mobile-submenu a:hover {
    color: #17604f;
}


/* Mobile Book Now */

.mobile-book-now {
    margin-top: 30px;
}


/* ============================================================
   DROPDOWN OPEN STATE
   ============================================================ */

.menu-item.menu-open > .mega-menu,
.menu-item.menu-open > .simple-dropdown {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    transform: translateX(-50%) translateY(0);
}


/*
 * Simple dropdown normal
 */
.menu-item.has-simple-dropdown.menu-open
> .simple-dropdown {
    transform: translateY(0);
}


/*
 * Special Get In Touch
 */
.special-contact-menu.menu-open
.special-contact-dropdown {
    transform: translateY(0);
}


/* ============================================================
   RESPONSIVE 1100px
   ============================================================ */

@media (max-width: 1100px) {

    .header-inner {
        padding: 0 25px;
    }

    .nav-link {
        padding: 0 11px;
        font-size: 13px;
    }

    .mega-menu {
        width: calc(100vw - 30px);
    }

    .mega-menu-inner {
        padding: 30px;
        column-gap: 25px;
    }

    .special-contact-menu {
        margin-left: 10px;
    }

    .special-contact-btn {
        min-width: 165px;
        padding: 0 15px;
        font-size: 13px;
    }

}


/* ============================================================
   RESPONSIVE 900px
   ============================================================ */

@media (max-width: 900px) {

    .desktop-navigation,
    .header-action {
        display: none;
    }

    .mobile-menu-toggle {
        display: flex;
    }

    .header-inner {
        min-height: 80px;
    }

    .main-menu {
        height: 80px;
    }

    .site-logo {
        max-height: 65px;
    }

}


	/* ============================================================
   SPECIAL MENU
   LABEL "__" + HAS CHILD
   ============================================================ */

.special-dropdown-menu {
    position: relative;
    display: flex;
    align-items: center;
    margin-left: 15px;
}


/* ============================================================
   SPECIAL BUTTON
   ============================================================ */

.special-dropdown-button {
    position: relative;

    width: auto;
    min-width: 150px;
    height: 45px;

    padding: 0 18px;

    border: none;
    border-radius: 0;

    background: var(--colors);
    color: #ffffff;

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;

    font-family: inherit;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.4px;

    white-space: nowrap;

    cursor: pointer;

    transition:
        background-color 0.25s ease,
        color 0.25s ease;
}


/* Hover */

.special-dropdown-button:hover {
    background: var(--color3);
    color: #000;
}


/* Chevron */

.special-dropdown-button i {
    margin: 0 !important;
    font-size: 8px;

    transition:
        transform 0.25s ease;
}


/* Rotate saat open */

.special-dropdown-menu.open
.special-dropdown-button i {
    transform: rotate(180deg);
}


/* ============================================================
   DROPDOWN
   ============================================================ */

.special-dropdown-content {
    position: absolute;

    top: 100%;
    left: 0;

    min-width: 150px;

    padding: 8px 0;

    background: #ffffff;

    border-top: 1px solid #eeeeee;

    box-shadow:
        0 15px 35px rgba(0, 0, 0, 0.10);

    opacity: 0;
    visibility: hidden;
    pointer-events: none;

    transform: translateY(8px);

    transition:
        opacity 0.2s ease,
        visibility 0.2s ease,
        transform 0.2s ease;

    z-index: 99999;
}


/* ============================================================
   HOVER
   ============================================================ */

.special-dropdown-menu:hover
.special-dropdown-content {

    opacity: 1;
    visibility: visible;
    pointer-events: auto;

    transform: translateY(0);
}


/* ============================================================
   CLICK
   ============================================================ */

.special-dropdown-menu.open
.special-dropdown-content {

    opacity: 1;
    visibility: visible;
    pointer-events: auto;

    transform: translateY(0);
}


/* ============================================================
   DROPDOWN ITEM
   ============================================================ */

.special-dropdown-content a {

    display: block;

    padding: 10px 18px;

    color: #333333;

    font-size: 12px;
    line-height: 1.4;

    text-decoration: none;

    white-space: nowrap;

    transition:
        background-color 0.2s ease,
        color 0.2s ease;
}

.special-dropdown-content a:hover {

    background: #f7f7f7;

    color: #17604f;
}


/* ============================================================
   MOBILE
   ============================================================ */

@media (max-width: 900px) {

    .special-dropdown-menu {
        display: block;
        margin-left: 0;
    }

    .special-dropdown-button {
        width: 100%;
        justify-content: space-between;
    }

    .special-dropdown-content {
        display: none;
    }

    .special-dropdown-menu.open
    .special-dropdown-content {
        display: block;

        position: static;

        opacity: 1;
        visibility: visible;
        pointer-events: auto;

        transform: none;

        box-shadow: none;
        border-top: 0;
    }

}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const header = document.getElementById('main-header');

    const mobileToggle =
        document.querySelector('.mobile-menu-toggle');

    const mobileMenu =
        document.querySelector('.mobile-menu');

    const mobileClose =
        document.querySelector('.mobile-menu-close');


    /* ========================================================
       HEADER SCROLL
       ======================================================== */

    function handleHeaderScroll() {

        if (window.scrollY > 50) {

            header.classList.add('scrolled');

        } else {

            header.classList.remove('scrolled');

        }

    }

    window.addEventListener(
        'scroll',
        handleHeaderScroll,
        { passive: true }
    );

    handleHeaderScroll();


    /* ========================================================
       SPECIAL DROPDOWN
       
       Label "__" menjadi button.
       
       Bisa:
       - hover
       - click
       ======================================================== */

    const specialMenus =
        document.querySelectorAll(
            '.special-dropdown-menu'
        );


    specialMenus.forEach(function (menu) {

        const button =
            menu.querySelector(
                '.special-dropdown-button'
            );


        if (!button) {
            return;
        }


        /* ==================================================
           CLICK BUTTON
           ================================================== */

        button.addEventListener(
            'click',
            function (event) {

                event.preventDefault();
                event.stopPropagation();


                const isOpen =
                    menu.classList.contains('open');


                /*
                 * Tutup special menu lainnya
                 */

                specialMenus.forEach(
                    function (otherMenu) {

                        otherMenu.classList.remove(
                            'open'
                        );

                        const otherButton =
                            otherMenu.querySelector(
                                '.special-dropdown-button'
                            );

                        if (otherButton) {

                            otherButton.setAttribute(
                                'aria-expanded',
                                'false'
                            );

                        }

                    }
                );


                /*
                 * Buka menu yang diklik
                 */

                if (!isOpen) {

                    menu.classList.add('open');

                    button.setAttribute(
                        'aria-expanded',
                        'true'
                    );

                }

            }
        );

    });


    /* ========================================================
       CLICK OUTSIDE SPECIAL DROPDOWN
       ======================================================== */

    document.addEventListener(
        'click',
        function (event) {

            if (
                !event.target.closest(
                    '.special-dropdown-menu'
                )
            ) {

                specialMenus.forEach(
                    function (menu) {

                        menu.classList.remove(
                            'open'
                        );

                        const button =
                            menu.querySelector(
                                '.special-dropdown-button'
                            );

                        if (button) {

                            button.setAttribute(
                                'aria-expanded',
                                'false'
                            );

                        }

                    }
                );

            }

        }
    );


    /* ========================================================
       MOBILE MENU OPEN
       ======================================================== */

    if (mobileToggle && mobileMenu) {

        mobileToggle.addEventListener(
            'click',
            function () {

                mobileMenu.classList.add(
                    'active'
                );

                mobileToggle.setAttribute(
                    'aria-expanded',
                    'true'
                );

                document.body.style.overflow =
                    'hidden';

            }
        );

    }


    /* ========================================================
       MOBILE MENU CLOSE
       ======================================================== */

    if (mobileClose && mobileMenu) {

        mobileClose.addEventListener(
            'click',
            function () {

                mobileMenu.classList.remove(
                    'active'
                );

                if (mobileToggle) {

                    mobileToggle.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                }

                document.body.style.overflow =
                    '';

            }
        );

    }


    /* ========================================================
       MOBILE SUBMENU
       ======================================================== */

    const mobileParents =
        document.querySelectorAll(
            '.mobile-menu-parent'
        );


    mobileParents.forEach(
        function (button) {

            button.addEventListener(
                'click',
                function () {

                    const parent =
                        button.closest(
                            '.mobile-menu-item'
                        );

                    if (!parent) {
                        return;
                    }

                    parent.classList.toggle(
                        'open'
                    );

                }
            );

        }
    );


    /* ========================================================
       EXISTING DESKTOP DROPDOWN
       ======================================================== */

    const dropdownTriggers =
        document.querySelectorAll(
            '.nav-link.nav-has-child'
        );


    dropdownTriggers.forEach(
        function (trigger) {

            trigger.addEventListener(
                'click',
                function (event) {

                    event.preventDefault();
                    event.stopPropagation();


                    const parent =
                        trigger.closest(
                            '.menu-item'
                        );

                    if (!parent) {
                        return;
                    }


                    const isOpen =
                        parent.classList.contains(
                            'menu-open'
                        );


                    document
                        .querySelectorAll(
                            '.menu-item.menu-open'
                        )
                        .forEach(
                            function (item) {

                                item.classList.remove(
                                    'menu-open'
                                );

                                const link =
                                    item.querySelector(
                                        '.nav-has-child'
                                    );

                                if (link) {

                                    link.setAttribute(
                                        'aria-expanded',
                                        'false'
                                    );

                                }

                            }
                        );


                    if (!isOpen) {

                        parent.classList.add(
                            'menu-open'
                        );

                        trigger.setAttribute(
                            'aria-expanded',
                            'true'
                        );

                    }

                }
            );

        }
    );


    /* ========================================================
       ESC
       ======================================================== */

    document.addEventListener(
        'keydown',
        function (event) {

            if (event.key !== 'Escape') {
                return;
            }


            /* Special dropdown */

            specialMenus.forEach(
                function (menu) {

                    menu.classList.remove(
                        'open'
                    );

                    const button =
                        menu.querySelector(
                            '.special-dropdown-button'
                        );

                    if (button) {

                        button.setAttribute(
                            'aria-expanded',
                            'false'
                        );

                    }

                }
            );


            /* Normal desktop dropdown */

            document
                .querySelectorAll(
                    '.menu-item.menu-open'
                )
                .forEach(
                    function (item) {

                        item.classList.remove(
                            'menu-open'
                        );

                    }
                );


            /* Mobile */

            if (mobileMenu) {

                mobileMenu.classList.remove(
                    'active'
                );

            }

            if (mobileToggle) {

                mobileToggle.setAttribute(
                    'aria-expanded',
                    'false'
                );

            }

            document.body.style.overflow = '';

        }
    );

});
</script>