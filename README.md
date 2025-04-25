# POS (Point Of Sale)
## Tugas1 WebPro 7
- Install
- Migration
- Seeder
- Model

## Tugas2 - Template
- template AdminLTE 3.2.0

## Cara Menggunakan Aplikasi
- Duplikat code dengan perintah clone
[code]
git clone https://github.com/muhidin/posWebPro7.git
[/code]
- masuk ke folder kerja dengan perintah
[code]
cd /posWebPro7
[/code]
- install vendor dan lain yang dibutuhkan dengan perintah
[code]
composer install
[/code]
- duplikat .env.example dengan perintah
[code]
cp .env.example .env
[/code]
- sesuaikan isi .env dengan informasi DB dan Password yang, misalnya
[code]
APP_NAME="WebPro 7 POS"
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pesat11_pos
DB_USERNAME=root
DB_PASSWORD=
[/code]
- Jalankan aplikasi dengan perintah
[code]
php artisan serve
[/code]
- Aplikasi siap digunakan pada [link]https://127.0.0.1:8000[/link]