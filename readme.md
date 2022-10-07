![Laravel](https://laravel.com/assets/img/components/logo-laravel.svg)

<h1 align="center">Forum Sekolah</h1>

## Fitur

1. Akun User
    - Login dan Logout User (Bisa memakai akun Google)
    - Registrasi (Bisa memakai akun Google)
2. Menu **Browse Users**
    - Melihat daftar User yang terdaftar
    - Klik **View Profile**
3. Menu **Browse Post**
    - Membuat post(Artikel)
    - Upload thumbnail untuk Artikel
    - Fitur search post(Artikel)
4. Fitur Komentar
    - Membuat komentar ke post(artikel) user
5. Fitur Realtime
    - Notifikasi kepada user ketika post user dikomentari user lainnya
    - Jumlah Unread Notif bertambah otomatis
6. Menggunakan Komponen Vuejs
    - Jumlah Unread Notif

### Spesifikasi
- PHP >=7.0 dan semua extension untuk Laravel 5.5.
- MySQL.
- SQlite (untuk `automated testing`).

### Install Aplikasi
1. Pada terminal, clone repo dengan git `git clone https://github.com/Fadilahhagy/forum-sekolah.git`
2. `cd forum-sekolah`
3. `cp .env.example .env`
4. `composer install`
5. Pada terminal `php artisan key:generate`
6. Buat database pada mysql untuk aplikasi ini
7. Setting database ada file `.env`
8. `php artisan migrate`
9. (optional) Buat beberapa akun dengan tinker dan factory
10. Jalankan server `php -S localhost:8000 -t public`
11. Selesai, silakan registrasi dan coba aplikasinya

## License

Project ini adalah software open source di bawah [Lisensi MIT](LICENSE).
