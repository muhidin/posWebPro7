# POS (Point Of Sale)
## Tugas1 WebPro 7
- Install
- Migration
- Seeder
- Model

## Tugas2 - Template
- template AdminLTE 3.2.0

## Cara Menggunakan Aplikasi
1. Duplikat code dengan perintah clone.
'git clone https://github.com/muhidin/posWebPro7.git'
2. Masuk ke folder kerja dengan perintah.
`cd /posWebPro7`
3. Install vendor dan lain yang dibutuhkan dengan perintah.
`composer install`
4. duplikat .env.example dengan perintah.
`cp .env.example .env`
5. Sesuaikan isi .env dengan informasi DB dan Password yang, misalnya.
`APP_NAME="WebPro 7 POS"`
`DB_CONNECTION=mysql`
`DB_HOST=127.0.0.1`
`DB_PORT=3306`
`DB_DATABASE=pesat11_pos`
`DB_USERNAME=root`
`DB_PASSWORD=`
6. Jalankan aplikasi dengan perintah.
`php artisan serve`
7. Aplikasi siap digunakan pada http://127.0.0.1:8000