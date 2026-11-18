<?php
/**
 * ============================================================
 * HELPER
 * ============================================================
 */
function e($value)
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}
/**
 * Render nested menu untuk level yang lebih dalam.
 * Digunakan jika suatu submenu masih memiliki child lagi.
 */
function renderDesktopNested($items)
{
    if (empty($items)) {
        return;
    }
    ?>
    <ul class="mega-nested-list">
        <?php foreach ($items as $item): ?>
            <?php $hasChild = !empty($item->child); ?>
            <li class="<?= $hasChild ? 'has-nested' : ''; ?>">
                <?php if ($hasChild): ?>
                    <div class="mega-nested-title">
                        <?= e($item->label); ?>
                    </div>
                    <?php renderDesktopNested($item->child); ?>
                <?php else: ?>
                    <a href="<?= e($item->link); ?>">
                        <?= e($item->label); ?>
                    </a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php
}
/**
 * ============================================================
 * HEADER
 * ============================================================
 */
?>
<header id="main-header" class="main-header">
    <div class="header-inner">
        <!-- LOGO -->
        <div class="header-logo">
            <a href="<?= base_url(); ?>" aria-label="Home">
                <!-- SINGLE LOGO IMAGE -->
                <img
                    src="<?= e($data->web->site_logo); ?>"
                    alt="<?= e($data->web->site_name); ?>"
                    class="site-logo"
                >
            </a>
        </div>

        <!-- DESKTOP NAVIGATION -->
        <nav class="desktop-navigation">
            <ul class="main-menu">
                <?php foreach ($data->menu->primary_menu as $menu): ?>
                    <?php

                    $hasChild = !empty($menu->child);
                    /**
                     * Cek apakah ada child yang masih memiliki child.
                     *
                     * Contoh:
                     *
                     * Visa Services
                     *    ├── Visitor Visa
                     *    │     ├── VOA
                     *    │     ├── Single Entry
                     *    │     └── Multiple Entry
                     *
                     * Karena Visitor Visa memiliki child,
                     * maka Visa Services = MEGA MENU.
                     */
                    $hasNestedChild = false;
                    if ($hasChild) {

                        foreach ($menu->child as $submenu) {

                            if (!empty($submenu->child)) {
                                $hasNestedChild = true;
                                break;
                            }
                        }
                    }
                    ?>

                    <?php if (!$hasChild): ?>
                        <!-- ==================================================
                             NORMAL MENU
                             ================================================== -->
                        <li class="menu-item">
                            <a
                                href="<?= e($menu->link); ?>"
                                class="nav-link"
                                title="<?= e($menu->label); ?>"
                            >
                                <?= e($menu->label); ?>
                            </a>
                        </li>

                    <?php elseif ($hasNestedChild): ?>
                        <!-- ==================================================
                             MEGA MENU
                             ================================================== -->
                        <li class="menu-item has-mega-menu">
                            <a
                                href="#"
                                class="nav-link nav-has-child"
                                title="<?= e($menu->label); ?>"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <?= e($menu->label); ?>
                                <i class="fa-solid fa-chevron-down"></i>
                            </a>

                            <!-- MEGA MENU PANEL -->
                            <div class="mega-menu">
                                <div class="mega-menu-inner">
                                    <?php foreach ($menu->child as $submenu): ?>
                                        <?php $hasSubChild = !empty($submenu->child); ?>

                                        <div class="mega-column">
                                            <?php if ($hasSubChild): ?>
                                                <!-- CATEGORY TITLE -->
                                                <div class="mega-column-title">
                                                    <?= e($submenu->label); ?>
                                                </div>

                                                <!-- CATEGORY LINKS -->
                                                <ul class="mega-links">
                                                    <?php foreach ($submenu->child as $subSubmenu): ?>
                                                        <?php $hasThirdChild = !empty($subSubmenu->child); ?>

                                                        <li class="<?= $hasThirdChild ? 'has-deeper-menu' : ''; ?>">
                                                            <?php if ($hasThirdChild): ?>
                                                                <!-- Jika masih memiliki level berikutnya -->
                                                                <div class="mega-link-group">
                                                                    <span class="mega-link-title">
                                                                        <?= e($subSubmenu->label); ?>
                                                                    </span>
                                                                    <?php renderDesktopNested($subSubmenu->child); ?>
                                                                </div>
                                                            <?php else: ?>
                                                                <!-- Normal leaf link -->
                                                                <a
                                                                    href="<?= e($subSubmenu->link); ?>"
                                                                    class="mega-link"
                                                                >
                                                                    <?= e($subSubmenu->label); ?>
                                                                </a>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>

                                            <?php else: ?>
                                                <!--
                                                    Jika submenu tidak memiliki
                                                    child, tetap tampil sebagai
                                                    direct link.
                                                -->
                                                <a
                                                    href="<?= e($submenu->link); ?>"
                                                    class="mega-direct-link"
                                                >
                                                    <?= e($submenu->label); ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </li>

                    <?php else: ?>
                        <!-- ==================================================
                             SIMPLE DROPDOWN
                             ================================================== -->
                        <li class="menu-item has-simple-dropdown">
                            <a
                                href="#"
                                class="nav-link nav-has-child"
                                title="<?= e($menu->label); ?>"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <?= e($menu->label); ?>
                                <i class="fa-solid fa-chevron-down"></i>
                            </a>

                            <div class="simple-dropdown">
                                <?php foreach ($menu->child as $submenu): ?>
                                    <a
                                        href="<?= e($submenu->link); ?>"
                                        class="simple-dropdown-link"
                                    >
                                        <?= e($submenu->label); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>

        <!-- BOOK NOW -->
        <div class="header-action">
            <a href="#contact" class="book-now-btn">
                Get In Touch
            </a>
        </div>

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
        <button
            type="button"
            class="mobile-menu-close"
            aria-label="Close menu"
        >
            <i class="fa-solid fa-xmark"></i>
        </button>

        <nav class="mobile-navigation">
            <ul class="mobile-main-menu">
                <?php foreach ($data->menu->primary_menu as $menu): ?>
                    <?php $hasChild = !empty($menu->child); ?>

                    <?php if (!$hasChild): ?>
                        <li>
                            <a href="<?= e($menu->link); ?>">
                                <?= e($menu->label); ?>
                            </a>
                        </li>

                    <?php else: ?>
                        <li class="mobile-menu-item">
                            <button
                                type="button"
                                class="mobile-menu-parent"
                            >
                                <span>
                                    <?= e($menu->label); ?>
                                </span>
                                <i class="fa-solid fa-chevron-down"></i>
                            </button>

                            <ul class="mobile-submenu">
                                <?php foreach ($menu->child as $submenu): ?>
                                    <?php $hasSubChild = !empty($submenu->child); ?>

                                    <?php if (!$hasSubChild): ?>
                                        <li>
                                            <a href="<?= e($submenu->link); ?>">
                                                <?= e($submenu->label); ?>
                                            </a>
                                        </li>

                                    <?php else: ?>
                                        <li class="mobile-menu-item">
                                            <button
                                                type="button"
                                                class="mobile-menu-parent"
                                            >
                                                <span>
                                                    <?= e($submenu->label); ?>
                                                </span>
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </button>

                                            <ul class="mobile-submenu">
                                                <?php foreach ($submenu->child as $subSubmenu): ?>
                                                    <?php $hasThirdChild = !empty($subSubmenu->child); ?>

                                                    <?php if (!$hasThirdChild): ?>
                                                        <li>
                                                            <a href="<?= e($subSubmenu->link); ?>">
                                                                <?= e($subSubmenu->label); ?>
                                                            </a>
                                                        </li>
                                                    <?php else: ?>
                                                        <!--
                                                            Level lebih dalam.
                                                            Jika API nantinya memiliki
                                                            level ke-4, bagian ini tetap
                                                            bisa dikembangkan.
                                                        -->
                                                        <li class="mobile-menu-item">
                                                            <button
                                                                type="button"
                                                                class="mobile-menu-parent"
                                                            >
                                                                <span>
                                                                    <?= e($subSubmenu->label); ?>
                                                                </span>
                                                                <i class="fa-solid fa-chevron-down"></i>
                                                            </button>
                                                            <ul class="mobile-submenu">
                                                                <?php foreach ($subSubmenu->child as $deepItem): ?>
                                                                    <li>
                                                                        <a href="<?= e($deepItem->link); ?>">
                                                                            <?= e($deepItem->label); ?>
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

        <div class="mobile-book-now">
            <a href="#contact" class="book-now-btn">
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
		outline: none!important;
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
/* Header ketika scroll */
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
    /*
        Initial state:
        Logo dibuat putih.
    */
    filter: brightness(0) invert(1);
    transition: filter 0.35s ease;
}
/*
    Setelah scroll:
    kembali ke warna original.
*/
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
   NAV LINK
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
    letter-spacing: 0px;
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
/*
    Setelah scroll
*/
.main-header.scrolled .nav-link {
    color: #171717;
}
.main-header.scrolled .nav-link:hover {
    color: #17604f;
}
/* Chevron */
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
   WIDTH MENGIKUTI CONTENT
   ============================================================ */
.mega-menu {
    position: absolute;
    top: 100%;
    left: 50%;
    /*
        Tidak menggunakan width: 100%;
        Tidak menggunakan width: 1200px.

        Width akan mengikuti ukuran content.
    */
    width: max-content;
    /*
        Batasi supaya tidak keluar viewport.
    */
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
/* Hover */
.has-mega-menu:hover > .mega-menu {

    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    transform: translateX(-50%) translateY(0);
}
/* ============================================================
   CONTENT
   ============================================================ */
.mega-menu-inner {

    /*
        Jangan menggunakan:
        grid-template-columns: repeat(auto-fit, ...)

        Karena itu bisa membuat column melebar memenuhi
        seluruh panel.

        Kita buat setiap column mengikuti content-nya.
    */
    display: flex;
    align-items: flex-start;
    gap: 40px;
    padding: 35px 40px 40px;
    width: max-content;
    max-width: calc(100vw - 40px);
}
/* ============================================================
   COLUMN
   ============================================================ */
.mega-column {

    /*
        Column mengikuti content.
    */
    width: max-content;
    min-width: 160px;
    max-width: 240px;
    flex: 0 0 auto;
}
/* ============================================================
   CATEGORY TITLE
   ============================================================ */
.mega-column-title {

    padding-bottom: 11px;
    margin-bottom: 12px;
    border-bottom: 1px solid #dddddd;
    color: #171717;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    white-space: nowrap;
}
/* ============================================================
   LINKS
   ============================================================ */
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
    font-size: 10px;
    line-height: 1.5;
    text-decoration: none;
    /*
        Supaya text panjang tetap satu baris
        jika masih muat.
    */
    white-space: nowrap;
    transition:
        color 0.2s ease,
        padding-left 0.2s ease;
}
.mega-link:hover {

    color: #17604f;
    padding-left: 4px;
}
/* ============================================================
   MEGA COLUMN
   ============================================================ */
.mega-column {
    min-width: 0;
}
/* ============================================================
   CATEGORY TITLE
   ============================================================ */
.mega-column-title {
    padding-bottom: 11px;
    margin-bottom: 12px;
    border-bottom: 1px solid #dddddd;
    color: #171717;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.6px;
}
/* ============================================================
   MEGA LINKS
   ============================================================ */
.mega-links {
    list-style: none;
    padding: 0;
    margin: 0;
}
.mega-links li {
    margin: 0;
    padding: 0;
}
/* Link */
.mega-link {
    display: block;
    padding: 5px 0;
    color: #4a4a4a;
    font-size: 13px;
    line-height: 1.5;
    text-decoration: none;
    transition:
        color 0.2s ease,
        padding-left 0.2s ease;
}
.mega-link:hover {
    color: #17604f;
    padding-left: 4px;
}
/* ============================================================
   DIRECT LINK
   Jika submenu tidak punya child
   ============================================================ */
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
/* ============================================================
   DEEPER NESTED MENU
   ============================================================ */
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
/* Recursive list */
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
    transition:
        background 0.2s ease,
        color 0.2s ease;
}
.simple-dropdown-link:hover {
    color: #17604f;
    background: #f7f7f7;
}
/* ============================================================
   BOOK NOW
   ============================================================ */
.header-action {
    margin-left: 15px;
}
.book-now-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 105px;
    /* height: 42px; */
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
   MOBILE BUTTON
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
    transition: background 0.3s ease;
}
.main-header.scrolled .mobile-menu-toggle span {
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
    transition: transform 0.35s ease;
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
    transition: transform 0.3s ease;
}
.mobile-menu-item.open > .mobile-menu-parent i {
    transform: rotate(180deg);
}
/* Mobile submenu */
.mobile-submenu {
    display: none;
    padding: 0 0 10px 15px;
}
.mobile-menu-item.open > .mobile-submenu {
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
/* Book now */
.mobile-book-now {
    margin-top: 30px;
}
/* ============================================================
   RESPONSIVE
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
}
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
	.menu-item.menu-open > .mega-menu,
.menu-item.menu-open > .simple-dropdown {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    transform: translateX(-50%) translateY(0);
}
.menu-item.has-simple-dropdown.menu-open > .simple-dropdown {
    transform: translateY(0);
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
       MOBILE MENU OPEN
       ======================================================== */
    if (mobileToggle) {

        mobileToggle.addEventListener('click', function () {

            mobileMenu.classList.add('active');
            mobileToggle.setAttribute(
                'aria-expanded',
                'true'
            );
            document.body.style.overflow = 'hidden';
        });
    }
    /* ========================================================
       MOBILE MENU CLOSE
       ======================================================== */
    if (mobileClose) {

        mobileClose.addEventListener('click', function () {

            mobileMenu.classList.remove('active');
            mobileToggle.setAttribute(
                'aria-expanded',
                'false'
            );
            document.body.style.overflow = '';
        });
    }
    /* ========================================================
       MOBILE SUBMENU
       ======================================================== */
    const mobileParents =
        document.querySelectorAll('.mobile-menu-parent');

    mobileParents.forEach(function (button) {

        button.addEventListener('click', function () {

            const parent =
                button.closest('.mobile-menu-item');
            parent.classList.toggle('open');
        });
    });

    /* ========================================================
       DESKTOP DROPDOWN CLICK
       ======================================================== */
    const dropdownTriggers =
        document.querySelectorAll('.nav-has-child');

    dropdownTriggers.forEach(function (trigger) {

        trigger.addEventListener('click', function (event) {

            event.preventDefault();
            const parent =
                trigger.closest('.menu-item');
            const isOpen =
                parent.classList.contains('menu-open');

            /*
                Close all other menus
            */
            document
                .querySelectorAll('.menu-item.menu-open')
                .forEach(function (item) {

                    item.classList.remove('menu-open');
                    const link =
                        item.querySelector('.nav-has-child');
                    if (link) {

                        link.setAttribute(
                            'aria-expanded',
                            'false'
                        );
                    }
                });

            /*
                Toggle current menu
            */
            if (!isOpen) {

                parent.classList.add('menu-open');
                trigger.setAttribute(
                    'aria-expanded',
                    'true'
                );
            }
        });
    });

    /* ========================================================
       CLOSE DESKTOP MENU WHEN CLICK OUTSIDE
       ======================================================== */
    document.addEventListener('click', function (event) {

        if (
            !event.target.closest('.menu-item')
        ) {

            document
                .querySelectorAll('.menu-item.menu-open')
                .forEach(function (item) {

                    item.classList.remove('menu-open');
                    const link =
                        item.querySelector('.nav-has-child');
                    if (link) {

                        link.setAttribute(
                            'aria-expanded',
                            'false'
                        );
                    }
                });
        }
    });

    /* ========================================================
       ESC CLOSE
       ======================================================== */
    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape') {

            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
            document
                .querySelectorAll('.menu-item.menu-open')
                .forEach(function (item) {

                    item.classList.remove('menu-open');
                });
        }
    });
});
</script>