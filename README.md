## Prasyarat
- PHP 8.4 ke atas
- Composer
- SQLite (sudah terkonfigurasi secara bawaan)

---

## Cara Menjalankannya

### 1. Hubungkan Symbolic Link Storage
Untuk thumbnail/foto berita yang diunggah ke storage dapat diakses secara publik melalui browser:
```bash
php artisan storage:link
```

### 2. Migrasi Database dan Seed Data
Reset database dan masukkan data berita awal (seed) secara otomatis:
```bash
php artisan migrate:fresh --seed
```

### 3. Jalankan Local Server
Nyalakan local development server Laravel:
```bash
php artisan serve
```

Aplikasi Anda kini dapat diakses melalui browser pada alamat:
- **Halaman Publik (Home):** [http://127.0.0.1:8000/](http://127.0.0.1:8000/)
- **Halaman Admin CMS:** [http://127.0.0.1:8000/admin/news](http://127.0.0.1:8000/admin/news)
