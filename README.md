# Panduan Instalasi Proyek Laravel dari GitHub

Berikut adalah langkah-langkah untuk menginstal dan menjalankan proyek Laravel yang telah Anda clone dari GitHub ke sistem Anda. Pastikan Anda telah memenuhi persyaratan sistem sebelum memulai.

## Persyaratan Sistem

- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/) versi 8.0 atau lebih tinggi
- [Git](https://git-scm.com/)

## Langkah 1: Clone Repositori dari GitHub

Buka terminal Anda dan jalankan perintah berikut untuk clone repositori proyek Laravel dari GitHub:

```bash
git clone https://github.com/juanakbar/rentalCar_jasamedika_technicalTest.git /rental
```


## Langkah 2: Masuk ke Direktori Proyek

Pindah ke direktori proyek yang baru saja Anda clone:



`cd rental` 

## Langkah 3: Instal Dependensi PHP

Jalankan perintah Composer untuk menginstal semua dependensi PHP yang diperlukan oleh proyek:



`composer install` 

## Langkah 4: Konfigurasi Lingkungan

Salin file `.env.example` menjadi `.env`:



`cp .env.example .env` 

Kemudian, buka file `.env` dan konfigurasikan pengaturan database Anda.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rental
DB_USERNAME=root
DB_PASSWORD=root
```

## Langkah 5: Generate Key Aplikasi

Jalankan perintah berikut untuk menghasilkan kunci aplikasi Laravel:


`php artisan key:generate` 

## Langkah 6: Migrasi dan Seeder Database

Jalankan migrasi dan seeder untuk membuat tabel-tabel yang diperlukan dan mengisi data awal:



`php artisan migrate --seed` 

## Langkah 7: Jalankan Server Lokal

Untuk menjalankan server pengembangan Laravel, gunakan perintah:


`php artisan serve` 

Server akan berjalan pada alamat `http://localhost:8000`. Buka browser Anda dan akses URL tersebut.

Anda bisa login sebagai admin menggunakan

```
email = admin@rental.com
password = password
```
