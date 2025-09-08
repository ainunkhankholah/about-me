# Ainun Khan - Personal Portfolio


## Overview

Ini adalah **portofolio web pribadi** berbasis Laravel, Livewire, dan Filament.
Menampilkan informasi tentang saya, project experience, koleksi foto, pendidikan, dan skill. Halaman dirancang **responsive** untuk desktop maupun mobile, dengan storytelling di bagian About Me.

---

## Features

* **About Me**: Cerita lengkap tentang pengalaman, minat, dan hobi.
* **Project Experience**: Menampilkan proyek yang pernah dibuat dengan deskripsi, fitur, teknologi, dan dampaknya.
* **Photo Collection**: Galeri foto hasil trekking dan eksplorasi alam.
* **Education**: Informasi pendidikan dan pengalaman belajar.
* **Skills**: Skill programming dan tools yang dikuasai.
* **Admin Panel**: Filament admin panel untuk CRUD semua data portofolio.
* **Responsive & SEO friendly**: Tampilan optimal di semua device dan siap untuk optimasi SEO.

---

## Tech Stack

* **Backend**: Laravel 10
* **Frontend**: Livewire
* **Admin Panel**: Filament
* **Database**: MySQL

---

## Installation

1. Clone repository:

```bash
git clone https://github.com/ainunkhankholah/about-me.git
cd about-me
```

2. Install dependencies:

```bash
composer install
npm install
npm run dev
```

3. Copy `.env` dan konfigurasi database:

```bash
cp .env.example .env
php artisan key:generate
```

4. Jalankan migration & seeder:

```bash
php artisan migrate --seed
```

5. Jalankan server:

```bash
php artisan serve
```

6. Buka browser:

```
http://127.0.0.1:8000
```

---

## Admin Panel

* URL: `/admin`
* Bisa CRUD semua section: AboutMe, Project, Photo, Education, Skills

---
---

## License

Ini adalah proyek pribadi, silakan kontak saya untuk penggunaan lain.