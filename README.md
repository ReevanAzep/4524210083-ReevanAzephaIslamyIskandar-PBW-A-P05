# 📘 Laporan Praktikum Pertemuan Ke-5

**Nama:** Reevan Azepha Islamy Iskandar  
**NIM:** 4524210083  
**Mata Kuliah:** Pemrograman Berbasis Web (PBW)

# 🏫 Website SMP Mentari Ceria

Website SMP Mentari Ceria merupakan aplikasi berbasis web yang dikembangkan menggunakan Laravel 12 dan PHP. Aplikasi ini bertujuan untuk menampilkan informasi kegiatan sekolah serta menyediakan buku tamu digital bagi pengunjung.

Website ini juga dilengkapi dengan sistem autentikasi dan dashboard administrator untuk mengelola kegiatan sekolah, pesan pengunjung, serta konfigurasi tampilan halaman utama.

## 📋 Daftar Isi

- Tentang Aplikasi
- Fitur Utama
- Teknologi yang Digunakan
- Persyaratan Sistem
- Instalasi
- Penggunaan Aplikasi
- Struktur Database
- Struktur Project
- Pengujian Aplikasi
- Dokumentasi Tampilan
- Pengembangan Selanjutnya

## 🎯 Tentang Aplikasi

Website SMP Mentari Ceria dikembangkan untuk membantu penyampaian informasi mengenai kegiatan sekolah melalui media digital. Pengunjung dapat melihat kegiatan terbaru dan mengirimkan pesan melalui formulir buku tamu.

Selain halaman publik, tersedia halaman dashboard yang dapat diakses oleh pengguna yang telah login. Dashboard tersebut menyediakan fasilitas untuk mengelola data kegiatan, mengelola pesan buku tamu, dan mengatur jumlah kegiatan yang ditampilkan pada halaman utama.

### Tujuan Pengembangan

1. Menyediakan media informasi kegiatan sekolah yang mudah diakses.
2. Mempermudah pengunjung dalam menyampaikan pesan melalui buku tamu digital.
3. Memudahkan administrator dalam mengelola informasi kegiatan sekolah.
4. Menerapkan penggunaan framework Laravel dalam pengembangan aplikasi web.
5. Mengimplementasikan pengelolaan database, autentikasi, validasi formulir, dan operasi CRUD.

## ✨ Fitur Utama

- ✅ **Halaman Home** — Menampilkan daftar kegiatan sekolah terbaru.
- ✅ **Buku Tamu Digital** — Memungkinkan pengunjung mengirimkan pesan melalui formulir.
- ✅ **Validasi Formulir** — Memvalidasi nama, email, dan pesan sebelum disimpan.
- ✅ **Notifikasi Sistem** — Menampilkan pemberitahuan setelah proses pengiriman atau pengelolaan data.
- ✅ **Registrasi dan Login** — Menyediakan autentikasi pengguna.
- ✅ **Dashboard** — Menyediakan halaman pengelolaan website bagi pengguna yang telah login.
- ✅ **Manajemen Kegiatan** — Mendukung penambahan, penampilan, pengubahan, dan penghapusan data kegiatan.
- ✅ **Manajemen Buku Tamu** — Memungkinkan administrator melihat dan menghapus pesan pengunjung.
- ✅ **Pengaturan Website** — Memungkinkan administrator mengubah konfigurasi website, termasuk jumlah kegiatan pada halaman utama.
- ✅ **Pagination** — Membagi daftar kegiatan atau pesan menjadi beberapa halaman sesuai konfigurasi.
- ✅ **Desain Responsif** — Menggunakan teknologi CSS untuk mendukung tampilan pada berbagai ukuran layar.

## 🛠️ Teknologi yang Digunakan

### Backend

- **Laravel 12** — Framework PHP untuk membangun aplikasi web.
- **PHP 8.2 atau lebih baru yang kompatibel** — Bahasa pemrograman utama.
- **Eloquent ORM** — Mempermudah interaksi dengan database.
- **Laravel Breeze** — Menyediakan fitur dasar autentikasi pengguna.

### Frontend

- **Blade Templates** — Digunakan untuk menyusun halaman web secara dinamis.
- **Tailwind CSS** — Membantu pengaturan tampilan dan tata letak.
- **Vite** — Digunakan untuk mengelola dan membangun aset frontend.
- **JavaScript dan Alpine.js** — Mendukung interaksi pada antarmuka pengguna.
- **Axios** — Mendukung kebutuhan komunikasi HTTP pada sisi frontend.

### Tools Pengembangan

- **Composer** — Mengelola dependensi PHP.
- **NPM** — Mengelola dependensi JavaScript.
- **Git dan GitHub** — Digunakan untuk version control dan penyimpanan repository proyek.
- **PHPUnit** — Digunakan dalam lingkungan pengujian aplikasi.

## 💻 Persyaratan Sistem

Sebelum menjalankan aplikasi, pastikan perangkat telah memiliki:

- PHP versi 8.2 atau versi kompatibel yang lebih baru.
- Composer.
- Node.js dan NPM.
- Database yang didukung oleh konfigurasi Laravel dengan MySQL.
- Git, apabila ingin mengunduh proyek melalui repository.
- Browser modern seperti Google Chrome, Microsoft Edge, atau Mozilla Firefox.

## 🚀 Instalasi

### 1. Clone Repository

Unduh repository proyek dari GitHub. Ganti URL berikut dengan URL repository milikmu.

```bash
git clone <URL_REPOSITORY_GITHUB_ANDA>
cd 4524210083-ReevanAzephaIslamyIskandar-PBW-A-Praktikum5-main
```

Jika proyek sudah diunduh dalam bentuk ZIP, ekstrak file tersebut dan buka terminal pada direktori proyek.

### 2. Install Dependencies

Jalankan perintah berikut untuk memasang dependensi aplikasi.

```bash
composer install
npm install
```

### 3. Setup Environment

Salin file konfigurasi lingkungan dan buat application key.

```bash
cp .env.example .env
php artisan key:generate
```

Pada Windows, file `.env.example` juga dapat disalin secara manual menjadi `.env`.

### 4. Konfigurasi Database

Buka file `.env` dan sesuaikan konfigurasi database dengan lingkungan yang digunakan.

Contoh konfigurasi MySQL:

```env
DB_CONNECTION=sqlite
```


### 5. Jalankan Migrasi Database

Jalankan perintah berikut untuk membuat tabel yang dibutuhkan aplikasi.

```bash
php artisan migrate
```

Migrasi proyek mencakup tabel bawaan Laravel serta tabel untuk pesan buku tamu, kegiatan sekolah, dan pengaturan website.

### 6. Build Frontend Assets

Untuk menjalankan frontend dalam mode pengembangan:

```bash
npm run dev
```

Untuk membangun aset frontend dalam mode produksi:

```bash
npm run build
```

### 7. Jalankan Aplikasi

Buka terminal dan jalankan:

```bash
php artisan serve
```

Setelah server berjalan, buka alamat berikut melalui browser:

`http://127.0.0.1:8000`

**Catatan:** Jika menggunakan `npm run dev`, biarkan proses Vite tetap berjalan selama pengembangan agar aset frontend dapat dimuat dengan benar.

## 📖 Penggunaan Aplikasi

### 1. Halaman Home

Halaman Home merupakan halaman utama website yang menampilkan kegiatan sekolah terbaru. Daftar kegiatan ditampilkan berdasarkan data yang tersimpan di database dan dilengkapi dengan pagination.

### 2. Buku Tamu Digital

Pengunjung dapat membuka halaman buku tamu dan mengisi formulir yang tersedia. Formulir tersebut mencakup nama, alamat email, dan pesan.

Sistem melakukan validasi terhadap data yang dimasukkan sebelum menyimpan pesan ke database.

### 3. Registrasi dan Login

Pengguna dapat melakukan registrasi dan login melalui fitur autentikasi. Halaman yang dilindungi autentikasi hanya dapat diakses sesuai ketentuan rute aplikasi.

### 4. Dashboard Administrator

Dashboard menyediakan akses ke fitur pengelolaan website, antara lain:

- Mengelola data kegiatan sekolah.
- Melihat dan menghapus pesan buku tamu.
- Mengubah pengaturan website.
- Mengelola informasi profil pengguna.

### 5. Pengaturan Tampilan Home

Administrator dapat mengubah jumlah kegiatan yang ditampilkan pada halaman utama. Nilai bawaan yang digunakan oleh aplikasi adalah enam kegiatan per halaman apabila pengaturan tersebut belum tersedia.

## 🗄️ Struktur Database

Aplikasi menggunakan Eloquent ORM untuk menghubungkan model dengan tabel database.

| Tabel | Fungsi |
|---|---|
| `users` | Menyimpan data pengguna aplikasi. |
| `kegiatans` | Menyimpan informasi kegiatan sekolah. |
| `pesan_tamus` | Menyimpan pesan yang dikirimkan melalui buku tamu. |
| `settings` | Menyimpan konfigurasi website. |
| `cache` | Mendukung penyimpanan cache apabila menggunakan konfigurasi database. |
| `jobs` | Mendukung antrean pekerjaan apabila menggunakan konfigurasi database. |

Tabel `users`, `cache`, dan `jobs` merupakan bagian dari struktur standar Laravel yang tersedia dalam proyek. Penggunaan tabel cache dan antrean bergantung pada konfigurasi aplikasi.

### Model Utama

- **User** — Merepresentasikan pengguna aplikasi.
- **Kegiatan** — Mengelola data kegiatan sekolah.
- **PesanTamu** — Mengelola pesan yang dikirimkan oleh pengunjung.
- **Setting** — Mengelola konfigurasi website.

## 📂 Struktur Project

Berikut struktur direktori utama proyek:

```text
project/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Auth/
│   │       ├── DashboardController.php
│   │       ├── KegiatanController.php
│   │       ├── PageController.php
│   │       ├── PesanTamuController.php
│   │       └── SettingController.php
│   └── Models/
│       ├── Kegiatan.php
│       ├── PesanTamu.php
│       ├── Setting.php
│       └── User.php
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── admin/
│       ├── auth/
│       ├── kegiatan/
│       └── home.blade.php
├── routes/
│   ├── auth.php
│   └── web.php
├── .env.example
├── artisan
├── composer.json
├── package.json
└── README.md
```

## 🧪 Pengujian Aplikasi

Pengujian dilakukan untuk memastikan fungsi utama website berjalan sesuai kebutuhan.

| No. | Fitur yang Diuji | Skenario Pengujian | Hasil yang Diharapkan |
|---|---|---|---|
| 1 | Halaman Home | Membuka halaman utama | Daftar kegiatan ditampilkan. |
| 2 | Buku Tamu | Mengirim formulir dengan data valid | Pesan tersimpan dan notifikasi muncul. |
| 3 | Validasi Formulir | Mengirim formulir dengan data tidak valid | Sistem menampilkan pesan validasi. |
| 4 | Registrasi | Mendaftarkan pengguna baru | Data pengguna diproses sesuai validasi. |
| 5 | Login | Memasukkan kredensial yang valid | Pengguna dapat masuk ke aplikasi. |
| 6 | Dashboard | Membuka dashboard tanpa autentikasi | Akses dibatasi sesuai middleware. |
| 7 | Manajemen Kegiatan | Menambah, mengubah, dan menghapus kegiatan | Perubahan data tersimpan sesuai operasi. |
| 8 | Manajemen Buku Tamu | Melihat dan menghapus pesan | Data pesan dapat dikelola oleh pengguna terautentikasi. |
| 9 | Pengaturan Website | Mengubah jumlah kegiatan per halaman | Tampilan Home mengikuti pengaturan. |

Tabel tersebut merupakan rencana pengujian berdasarkan fitur yang tersedia di dalam kode. Status lulus atau gagal perlu diisi berdasarkan hasil pengujian langsung pada aplikasi.

Untuk menjalankan pengujian otomatis yang tersedia, gunakan:

```bash
php artisan test
```

## 📸 Dokumentasi Tampilan Website

Bagian ini dapat dilengkapi dengan screenshot hasil implementasi website yang diambil saat aplikasi dijalankan.

### Halaman Home

Menampilkan daftar kegiatan sekolah terbaru.

**Screenshot:** Tambahkan gambar halaman Home dari proyek.

### Halaman Buku Tamu

Menampilkan formulir untuk mengirimkan pesan pengunjung.

**Screenshot:** Tambahkan gambar halaman Buku Tamu dari proyek.

### Halaman Registrasi dan Login

Menampilkan halaman autentikasi pengguna.

**Screenshot:** Tambahkan screenshot halaman Registrasi dan Login.

### Halaman Dashboard

Menampilkan pusat pengelolaan website setelah pengguna berhasil login.

**Screenshot:** Tambahkan gambar Dashboard.

### Halaman Pengelolaan Kegiatan

Menampilkan fitur untuk mengelola informasi kegiatan sekolah.

**Screenshot:** Tambahkan gambar halaman pengelolaan kegiatan.

### Halaman Pengelolaan Buku Tamu

Menampilkan daftar pesan pengunjung yang dapat dikelola oleh pengguna terautentikasi.

**Screenshot:** Tambahkan gambar halaman pengelolaan buku tamu.

### Halaman Pengaturan Website

Menampilkan konfigurasi website, termasuk jumlah kegiatan yang ditampilkan pada halaman utama.

**Screenshot:** Tambahkan gambar halaman pengaturan website.

## 🔧 Pengembangan Selanjutnya

Beberapa pengembangan yang dapat dipertimbangkan untuk meningkatkan kualitas aplikasi meliputi:

1. Menambahkan fitur pencarian kegiatan sekolah.
2. Mengembangkan sistem kategori kegiatan.
3. Meningkatkan keamanan dan pengaturan hak akses administrator.
4. Menambahkan fitur ekspor data buku tamu.
5. Meningkatkan pengujian otomatis untuk setiap fitur utama.
6. Mengoptimalkan performa aplikasi dan pengelolaan database.

Pengembangan tersebut merupakan rekomendasi lanjutan dan bukan klaim bahwa fitur-fitur tersebut sudah tersedia dalam aplikasi saat ini.

## 📝 Kesimpulan

Website SMP Mentari Ceria merupakan aplikasi berbasis Laravel yang menyediakan informasi kegiatan sekolah dan buku tamu digital. Aplikasi ini menerapkan konsep pengembangan web menggunakan framework Laravel, Blade Templates, Eloquent ORM, autentikasi pengguna, validasi formulir, serta operasi CRUD.

Melalui pengembangan aplikasi ini, konsep Pemrograman Berbasis Web dapat diterapkan dalam bentuk sistem yang mendukung penyampaian informasi dan pengelolaan data sekolah secara digital.

---

<p align="center">
  **Dibuat oleh Reevan Azepha Islamy Iskandar**  
  <br>
  4524210083  
  <br>
  Praktikum Pemrograman Berbasis Web — Pertemuan Ke-5
</p>
