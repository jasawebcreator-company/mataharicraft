# Mataharicraft

Website Mataharicraft, dibangun di atas **CodeIgniter 3.1.11** (PHP) dengan sistem tema JWC (Jasa Web Creator).

## Struktur Project

| Path | Keterangan |
|------|------------|
| `application/` | Controller (`Home`, `Mail`), model, library, view, dan konfigurasi CodeIgniter |
| `system/` | Core framework CodeIgniter |
| `theme/` | Template front-end (blog, booking form, biolink, dll.), CSS, dan sitemap |
| `assets/` | Aset statis front-end |
| `ThemeConfig.php`, `jwc_theme_config*.php` | Konfigurasi & loader tema |
| `jwc_update.php`, `sync.php`, `read_list_home.php` | Utilitas sinkronisasi/update JWC |
| `theme.zip` | Arsip tema |
| `.htaccess` | Redirect www → non-www (HTTPS) dan rewrite ke `index.php` |

## Kebutuhan

- PHP 7.x/8.x (kompatibel CodeIgniter 3.1.11)
- Apache dengan `mod_rewrite`
- MySQL/MariaDB

## Instalasi

1. Clone repo ini ke `public_html`.
2. Buat file konfigurasi berikut (tidak disertakan di repo karena berisi data sensitif):
   - `application/config/database.php` — koneksi database
   - `jwc_config.php` — konfigurasi JWC
3. Pastikan folder `application/logs/` dapat ditulis oleh web server.
4. `base_url` terdeteksi otomatis dari `HTTP_HOST`.

## File yang Diabaikan (.gitignore)

```
application/config/database.php
jwc_config.php
file_editor.php
application/logs/*
!application/logs/index.html
.DS_Store
```

## Hosting

Deploy via FTP ke direktori `public_html` pada server hosting.
