# Fast Food

Aplikasi web **Fast Food** yang dibangun menggunakan Laravel 13, Tailwind CSS, Vite, dan Docker Laravel Sail.

## 🛠️ Tech Stack

* **Laravel 13**
* **PHP 8.5**
* **Tailwind CSS 4**
* **Vite**
* **MySQL 8.4**
* **Redis**
* **Laravel Sail / Docker**
* **Mailpit**
* **Meilisearch**
* **Selenium**

---

## 📋 Requirements

Sebelum menjalankan project, pastikan sudah menginstall:

* Git
* Docker Desktop
* WSL 2
* Ubuntu (WSL)
* Composer
* Node.js & NPM

Pastikan Docker Desktop sudah aktif dan WSL Integration untuk Ubuntu sudah diaktifkan.

Cek Docker:

```bash
docker --version
docker compose version
```

Cek Composer:

```bash
composer --version
```

---

# 🚀 Installation

## 1. Clone Repository

Clone repository ke folder project:

```bash
git clone <URL_REPOSITORY> fast-food
```

Masuk ke folder project:

```bash
cd fast-food
```

---

## 2. Install PHP Dependencies

Install dependency Laravel menggunakan Composer:

```bash
composer install
```

---

## 3. Buat File `.env`

Salin `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

Kemudian generate application key:

```bash
php artisan key:generate
```

> Jika menggunakan Docker/Sail dan PHP/Composer tidak tersedia di host, dependency dan konfigurasi dapat dijalankan menggunakan environment Docker sesuai konfigurasi project.

---

## 4. Jalankan Docker Laravel Sail

Pastikan Docker Desktop sedang berjalan.

Jalankan:

```bash
./vendor/bin/sail up -d
```

Periksa container:

```bash
./vendor/bin/sail ps
```

Pastikan container Laravel dan MySQL dalam status `Up`.

---

## 5. Jalankan Database Migration

Setelah container MySQL berjalan, jalankan:

```bash
./vendor/bin/sail artisan migrate
```

Jika project memiliki database seeder, jalankan:

```bash
./vendor/bin/sail artisan db:seed
```

Atau jika ingin menjalankan migration sekaligus seeder:

```bash
./vendor/bin/sail artisan migrate --seed
```

---

## 6. Install Node Dependencies

Install dependency frontend:

```bash
./vendor/bin/sail npm install
```

---

## 7. Jalankan Vite dan Tailwind CSS

Jalankan:

```bash
./vendor/bin/sail npm run dev
```

Vite akan berjalan dan memproses Tailwind CSS.

Biarkan terminal tetap terbuka selama development.

---

# ⚡ Menjalankan Project dengan Satu Terminal

Untuk menjalankan Docker Laravel sekaligus Vite/Tailwind dalam satu terminal, gunakan:

```bash
./vendor/bin/sail up -d && ./vendor/bin/sail npm run dev
```

Perintah tersebut akan:

1. Menyalakan seluruh container Docker.
2. Menjalankan Laravel melalui Laravel Sail.
3. Menjalankan Vite.
4. Memproses Tailwind CSS.

Setelah Vite berjalan, buka browser:

```text
http://localhost
```

---

# 🌐 Menjalankan Project

Setelah Docker dan Vite berjalan, akses aplikasi melalui:

```text
http://localhost
```

Laravel berjalan melalui Docker pada port `80`.

Vite menggunakan port:

```text
5173
```

---

# 🗄️ Database

Project menggunakan MySQL yang dijalankan melalui Docker.

Konfigurasi database di `.env` menggunakan hostname Docker:

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```

> Jangan mengubah `DB_HOST=mysql` menjadi `localhost` ketika Laravel berjalan di dalam Docker.

---

# 🧰 Perintah Laravel yang Sering Digunakan

Menjalankan Artisan:

```bash
./vendor/bin/sail artisan
```

Membuat controller:

```bash
./vendor/bin/sail artisan make:controller ProductController
```

Membuat model dan migration:

```bash
./vendor/bin/sail artisan make:model Product -m
```

Menjalankan migration:

```bash
./vendor/bin/sail artisan migrate
```

Melihat status migration:

```bash
./vendor/bin/sail artisan migrate:status
```

Membuat seeder:

```bash
./vendor/bin/sail artisan make:seeder ProductSeeder
```

Membersihkan cache:

```bash
./vendor/bin/sail artisan optimize:clear
```

---

# 🎨 Tailwind CSS

Project menggunakan **Tailwind CSS v4** dengan Vite.

File CSS utama:

```text
resources/css/app.css
```

Konfigurasi Vite:

```text
vite.config.js
```

Untuk menjalankan Vite:

```bash
./vendor/bin/sail npm run dev
```

Untuk membuat build production:

```bash
./vendor/bin/sail npm run build
```

---

# 🐳 Docker / Laravel Sail

Melihat container yang sedang berjalan:

```bash
./vendor/bin/sail ps
```

Menyalakan container:

```bash
./vendor/bin/sail up -d
```

Menjalankan container sekaligus melihat log:

```bash
./vendor/bin/sail up
```

Menghentikan container:

```bash
./vendor/bin/sail down
```

Melihat log:

```bash
./vendor/bin/sail logs
```

Melihat log Laravel:

```bash
./vendor/bin/sail logs laravel.test
```

---

# 📦 NPM Commands

Install dependency:

```bash
./vendor/bin/sail npm install
```

Menjalankan development server:

```bash
./vendor/bin/sail npm run dev
```

Build production:

```bash
./vendor/bin/sail npm run build
```

---

# 🧹 Menghentikan Project

Jika selesai bekerja, hentikan Vite dengan:

```text
Ctrl + C
```

Kemudian hentikan container Docker:

```bash
./vendor/bin/sail down
```

Saat ingin bekerja kembali:

```bash
./vendor/bin/sail up -d && ./vendor/bin/sail npm run dev
```

---

# ⚠️ Important

Jangan upload file berikut ke repository:

```text
.env
/vendor
/node_modules
/public/build
/public/hot
```

File `.env` berisi konfigurasi lokal dan informasi sensitif.

Gunakan:

```text
.env.example
```

sebagai template konfigurasi.

---

# 📁 Project Structure

```text
fast-food/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   ├── css/
│   │   └── app.css
│   ├── js/
│   └── views/
├── routes/
├── storage/
├── tests/
├── .env.example
├── artisan
├── compose.yaml
├── composer.json
├── package.json
├── package-lock.json
├── vite.config.js
└── README.md
```

---

# 👨‍💻 Development Workflow

Setelah repository berhasil di-clone dan konfigurasi awal selesai, workflow development cukup menggunakan satu terminal:

```bash
cd fast-food
./vendor/bin/sail up -d && ./vendor/bin/sail npm run dev
```

Kemudian buka:

```text
http://localhost
```

Saat selesai:

```text
Ctrl + C
```

Kemudian:

```bash
./vendor/bin/sail down
```

---

## 📄 License

This project is developed for learning and development purposes.
