# Projek Web Lune Bakery 🥐

---

# Installation Guide

Clone repository ini:

```bash
git clone https://github.com/lieameed/lune.git

```

Masuk ke direktori projek:

```bash
cd lune

```

Install dependensi PHP & Node.js, lalu jalankan server:

```bash
composer install
npm install
npm run dev
php artisan serve

```

---

# Installing The Database

* Buka `.env` dan atur konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lune
DB_USERNAME=root
DB_PASSWORD=

```

* Buat database bernama `lune` di PhpMyAdmin
* Jalankan migrasi database:

```bash
php artisan migrate

```

---

# Project Structure

```bash
LUNE/
├── .agents/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Controller.php
│   │       └── RouteController.php
│   ├── Models/
│   │   └── User.php
│   └── Providers/
│       └── AppServiceProvider.php
├── bootstrap/
│   ├── cache/
│   │   ├── .gitignore
│   │   ├── packages.php
│   │   └── services.php
│   ├── app.php
│   └── providers.php
├── config/
│   ├── app.php
│   ├── auth.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   └── session.php
├── database/
├── node_modules/
├── public/
│   ├── build/
│   ├── img/
│   ├── .htaccess
│   ├── favicon.ico
│   ├── fonts-manifest.dev.json
│   ├── hot
│   ├── index.php
│   └── robots.txt
├── resources/
│   ├── css/
│   │   └── app.css
│   ├── js/
│   │   └── app.js
│   └── views/
│       ├── anotherpage/
│       ├── pages/
│       │   ├── about-us.blade.php
│       │   ├── add.blade.php
│       │   ├── cart.blade.php
│       │   ├── catalogue.blade.php
│       │   ├── check-out.blade.php
│       │   ├── detail.blade.php
│       │   ├── history.blade.php
│       │   ├── index.blade.php
│       │   ├── login.blade.php
│       │   ├── reserve.blade.php
│       │   └── sign-up.blade.php
│       └── welcome.blade.php
├── routes/
│   ├── console.php
│   └── web.php
├── storage/
│   ├── app/
│   ├── framework/
│   └── logs/
├── tests/
├── vendor/
├── .editorconfig
├── .env
├── .env.example
├── .gitattributes
├── .gitignore
├── .npmrc
├── AGENTS.md
├── artisan
├── boost.json
├── composer.json
├── composer.lock
├── package-lock.json
├── package.json
├── phpunit.xml
├── README.md
└── vite.config.js

```

# Key Features ✨

* **Secure User Authentication:** Fitur registrasi dan login pelanggan untuk melacak riwayat pemesanan dan reservasi.
* **Artisan Bakery Catalogue:** Tampilan katalog produk roti, kue, pastry, dan minuman yang rapi serta responsif.
* **Reservation System:** Fitur reservasi meja atau pesanan khusus langsung dari aplikasi web.
* **Interactive Shopping Cart & Checkout:** Alur keranjang belanja dan checkout yang mulus untuk pemesanan produk secara langsung.
* **Order History:** Melacak status riwayat pesanan yang telah dilakukan pengguna.

---

# System Flow (Alur Sistem) 🔄

1. **Authentication Phase**
* **Pengguna Baru:** Mengakses halaman `sign-up.blade.php` untuk mendaftarkan akun baru.
* **Pengguna Terdaftar:** Masuk melalui `login.blade.php` untuk mengakses fitur keranjang, reservasi, dan riwayat pesanan.


2. **Exploring Bakery Catalogue**
* Pengguna dapat menjelajahi halaman katalog (`catalogue.blade.php`) atau halaman utama (`index.blade.php`) untuk melihat varian roti dan pastry.
* Melihat detail produk beserta harga dan deskripsi pada `detail.blade.php`.


3. **Ordering & Reservation Process**
* **Pemesanan:** Memasukkan menu pilihan ke keranjang belanja (`cart.blade.php`) dan melanjutkan ke tahap pembayaran di `check-out.blade.php`.
* **Reservasi:** Melakukan pemesanan tempat atau tanggal khusus melalui halaman reservasi (`reserve.blade.php`).


4. **Order History**
* Pengguna dapat melihat daftar transaksi dan pemesanan yang pernah dilakukan pada halaman `history.blade.php`.



---

# Coding Languages & Tools 🌐 🔥 🥶
<p align="left">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript" />
  <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS" />
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel" />
</p>

---

# Contributing

Kami menerima kontribusi untuk perbaikan bug, pengembangan fitur baru, maupun peningkatan antarmuka (UI/UX) projek Lune Bakery.

Cara Berkontribusi 🥐 👇 :

* Fork repository ini.
* Buat branch baru untuk fitur atau perbaikan bug kamu.
* Commit perubahan dengan pesan yang jelas.
* Push ke branch tersebut dan buat Pull Request.
* Tunggu review sebelum dimerge.

### Contribution Guidelines

* Tulis kode yang bersih dan mudah dirawat.
* Berikan dokumentasi singkat jika ada penambahan rute atau fitur baru.
* Jaga komunikasi yang sopan dan kolaboratif.

---

# License

Project ini dilindungi di bawah lisensi MIT License.
Bebas digunakan, dimodifikasi, dan didistribusikan kembali dengan mencantumkan kredit.

---

# Group Members
1. Marvin Alfredo
2. Michael Leonardo
3. Venan Sebastian Budianto
