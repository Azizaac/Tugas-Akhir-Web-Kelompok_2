# 🏫 Tugas-Akhir-Web-Kelompok_2

<div align="center">
  <img src="https://github.com/user-attachments/assets/f639d81d-13f2-46a3-b947-e1c8e77420d4" alt="Sekolahku Banner" width="100%">
</div>

<p align="center">
  <a href="#features">Features</a> •
  <a href="#preview">Preview</a> •
  <a href="#installation">Installation</a> •
  <a href="#usage">Usage</a> •
  <a href="#tech-stack">Tech Stack</a> •
  <a href="#contact">Contact</a>
</p>

---

## 📋 Overview

**Sekolahku** adalah aplikasi manajemen sekolah berbasis website yang dibangun dan dikembangkan menggunakan **Framework Laravel**. Aplikasi ini dirancang untuk memudahkan pengelolaan berbagai aspek administrasi sekolah secara **digital, efisien, dan terintegrasi**.

---

## ✨ Features <a name="features"></a>

<table>
  <tr>
    <td>
      <h3>📚 Website Sekolah</h3>
      <p>Portal utama sekolah dengan konten edukatif, berita, pengumuman, dan dokumentasi kegiatan.</p>
    </td>
    <td>
      <h3>📝 PPDB Online</h3>
      <p>Pendaftaran peserta didik baru secara online dengan alur seleksi yang terotomatisasi.</p>
    </td>
  </tr>
  <tr>
    <td>
      <h3>📖 Perpustakaan Digital</h3>
      <p>Sistem manajemen buku, peminjaman, dan pengembalian berbasis katalog digital.</p>
    </td>
    <td>
      <h3>💳 Sistem SPP</h3>
      <p>Fitur pengelolaan pembayaran SPP yang aman, transparan, dan terintegrasi.</p>
    </td>
  </tr>
</table>

---

## 🖼️ Preview <a name="preview"></a>

### 🏠 Profil Sekolah
<p align="center">
  <img src="https://github.com/user-attachments/assets/149d011d-4b8c-407b-a293-d49dfc295670" alt="Profile Sekolah" width="80%">
</p>

### 📊 Program Studi
<div align="center">
  <img src="https://github.com/user-attachments/assets/75333070-afee-419e-8837-4e3bd11e34c8" alt="Program Studi" width="80%">
</div>

### 📚 PPDB / SPMB
<div align="center">
  <img src="https://github.com/user-attachments/assets/713d2033-b3c4-4d75-bcc5-cda41a39975e" alt="PPDB Online" width="80%">
</div>

### 📖 Berita
<div align="center">
  <img src="https://github.com/user-attachments/assets/cc196367-86c9-415b-85a2-998c33f555b8" alt="Perpustakaan" width="80%">
</div>

---

## 🚀 Installation <a name="installation"></a>

1. **Install Composer dan NPM**
2. **Clone repository**:
   ```bash
   git clone https://github.com/Azizaac/Tugas-Akhir-Web-Kelompok_2.git
   cd Tugas-Akhir-Web-Kelompok_2
   ```

3. **Install dependencies**:
   ```bash
   composer install
   npm install
   npm run dev
   ```

4. **Buat file `.env` dan generate key**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Migrasi dan seeding database**:
   ```bash
   php artisan migrate --seed
   ```

6. **Buat symbolic link untuk storage**:
   ```bash
   php artisan storage:link
   ```

---

## 👤 Usage <a name="usage"></a>

### Akun Default

- **Admin**
  - Email: `kepsek@sch.id`
  - Password: `Bismillah`

- **PPDB, Perpustakaan, Staf, Pengajar**
  - Password: `12345678`

---

## 🧱 Tech Stack <a name="tech-stack"></a>

- PHP 8.x
- Laravel 10.x
- MySQL / MariaDB
- Tailwind CSS & Bootstrap
- JavaScript (ES6)
- Blade Template Engine

---

## 💬 Contact <a name="contact"></a>

Jika ada pertanyaan atau saran, silakan hubungi kami:

- 📧 Email: *[email akan ditambahkan]*
- 🧑‍💻 GitHub: [Azizaac](https://github.com/Azizaac)

---

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).  
Laravel Framework © Taylor Otwell.
