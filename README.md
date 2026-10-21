# Backend REST API Toko Online - Modul Praktikum BAB III Web Programming

Proyek backend RESTful API untuk aplikasi e-commerce toko online yang dibangun menggunakan framework **Laravel 11**. Repositori ini menyediakan antarmuka API lengkap untuk manajemen autentikasi pengguna, kategorisasi produk, katalog barang, serta unggah berkas gambar produk.

---

## 🌐 Status Proyek & Live Demo

Proyek telah diuji dan berhasil dideploy ke server produksi (shared hosting / cPanel):

- **Website Toko (Frontend):** [https://toko.sumestawsome.xyz/](https://toko.sumestawsome.xyz/)
- **Endpoint API Publik (Katalog Produk):** [https://api.sumestawsome.xyz/api/products](https://api.sumestawsome.xyz/api/products)

---

## ✨ Ringkasan Fitur

1. **CRUD Produk & Kategori (Eloquent ORM)**  
   Pengelolaan data barang (nama, harga, stok, deskripsi, slug otomatis) dengan relasi `belongsTo` dan `hasMany` ke tabel kategori.
2. **Standarisasi JSON dengan API Resource (`ProductResource`)**  
   Format respon konsisten, tipe data terstruktur (casting harga/stok ke integer, rating ke float), serta relasi kategori tertanam secara rapi.
3. **Manajemen Unggah Gambar Produk (`Storage Symlink`)**  
   Mendukung penerimaan berkas foto (`jpg, jpeg, png, webp`) hingga 2MB, penyimpanan otomatis di disk `public`, dan pembuatan URL aset publik.
4. **Autentikasi Token API via Laravel Sanctum**  
   Sistem registrasi, login, penerbitan Bearer Token, proteksi endpoint sensitif (tambah, ubah, hapus produk), dan fitur logout aman.

---

## 🚀 Panduan Instalasi Lokal

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal (misal menggunakan Laragon / XAMPP):

### 1. Klon Repositori
```bash
git clone https://github.com/sumestawsome/belajar-laravel.git
cd belajar-laravel
```

### 2. Instal Dependensi Composer
```bash
composer install
```

### 3. Konfigurasi Environment (`.env`)
Salin file template `.env.example` menjadi `.env`:
```bash
cp .env.example .env
```
Sesuaikan konfigurasi database Anda pada `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_lokal
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Buat Application Key
```bash
php artisan key:generate
```

### 5. Jalankan Migrasi & Seeder Database
```bash
php artisan migrate --seed
```
> Akun pengujian bawaan seeder: `test@example.com` (password default bawaan factory).

### 6. Hubungkan Storage Publik (Symlink)
```bash
php artisan storage:link
```

### 7. Jalankan Server Lokal
```bash
php artisan serve
```
Aplikasi backend dapat diakses di: `http://127.0.0.1:8000/`

---

## 📋 Daftar Endpoint API

Base URL lokal: `http://127.0.0.1:8000/api`  
Base URL live server: `https://api.sumestawsome.xyz/api`

| Method | Endpoint | Deskripsi Ringkas | Status Proteksi |
| :--- | :--- | :--- | :--- |
| **POST** | `/register` | Mendaftarkan akun pengguna baru | Publik (Tanpa Token) |
| **POST** | `/login` | Masuk akun dan menerbitkan Bearer Token Sanctum | Publik (Tanpa Token) |
| **GET** | `/profile` | Mengambil data profil user yang sedang aktif login | 🔒 Wajib Token (`auth:sanctum`) |
| **POST** | `/logout` | Mencabut dan menghapus token akses yang aktif | 🔒 Wajib Token (`auth:sanctum`) |
| **GET** | `/products` | Mengambil seluruh katalog produk beserta relasi kategori | Publik (Tanpa Token) |
| **GET** | `/products/{id}` | Mengambil informasi detail satu produk tertentu | Publik (Tanpa Token) |
| **POST** | `/products` | Menambahkan produk baru (mendukung upload gambar `img`) | 🔒 Wajib Token (`auth:sanctum`) |
| **PUT/PATCH** | `/products/{id}` | Memperbarui data produk dan/atau mengganti foto produk | 🔒 Wajib Token (`auth:sanctum`) |
| **DELETE** | `/products/{id}` | Menghapus data produk dari database | 🔒 Wajib Token (`auth:sanctum`) |

> **Catatan Penggunaan Token:**  
> Untuk mengakses endpoint yang dilindungi, sertakan token pada header HTTP request:  
> `Authorization: Bearer <token_anda>`
