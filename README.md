# Web-Based-Accounting-Journal-System

Sistem pencatatan jurnal akuntansi berbasis web, dibangun untuk tugas mata kuliah Pemrograman Komputer Akuntansi, Program Stusi Akuntansi, Universitas Andalas.

# Web-Based Accounting Journal System

Sistem pencatatan jurnal akuntansi berbasis web, dibangun untuk tugas mata kuliah 
Pemrograman Komputer Akuntansi, Program Studi Akuntansi, Universitas Andalas.

## 📋 Deskripsi
Aplikasi ini mengotomatisasi pencatatan transaksi ke dalam jurnal umum dengan 
struktur arsitektur MVC (Model-View-Controller) custom. Data transaksi, jurnal, 
dan akun disimpan dan direlasikan melalui query SQL (multi-table JOIN) untuk 
menghasilkan laporan jurnal secara otomatis.

## 🛠️ Tech Stack
- **Backend:** PHP (custom MVC architecture — controllers, models, views)
- **Database:** MySQL/MariaDB
- **Frontend:** HTML, CSS

## ✨ Fitur Utama
- Pencatatan transaksi otomatis ke jurnal umum
- Relasi data antar tabel `journals`, `journal_items`, dan `accounts` menggunakan SQL JOIN
- Struktur folder MVC (`app/controllers`, `app/models`, `app/views`) untuk pemisahan logic dan tampilan
- Sistem routing custom (`route.php`)

## 📂 Struktur Project
asia/
├── app/
│ ├── controllers/
│ ├── helpers/
│ ├── models/
│ └── views/
├── public/
├── system/
│ ├── Database.php
│ ├── General.php
│ ├── Routing.php
│ └── Session.php
├── cnf.php # Konfigurasi database
├── db_asia.sql # Struktur database
├── query_jurnal.sql # Query jurnal akuntansi
└── route.php

## ⚙️ Setup Lokal
1. Clone repository ini
2. Import `asia/db_asia.sql` ke MySQL/MariaDB
3. Sesuaikan konfigurasi database di `asia/cnf.php`
4. Jalankan folder `asia` menggunakan local server (XAMPP/Laragon)

## ⚠️ Catatan
File `cnf.php` menggunakan kredensial database lokal untuk keperluan development. 
Untuk deployment production, kredensial sebaiknya disimpan melalui environment 
variable, bukan hardcoded di source code.

## 👤 Author
Nabila Atma Maulani  
Universitas Andalas — Akuntansi
