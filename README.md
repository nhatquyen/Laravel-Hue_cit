# Laravel-Hue_cit

Sau khi clone code về chúng ta chạy lệnh
composer install để cài đặt vendor vào trong dự án,
chạy xong ta copy file .env bằng lệnh cp .env.example .env,,
căn chỉnh cấu hình của database trong file env rồi chạy php artisan key:generate,
chạy lệnh php artisan migrate để chạy file migrate tạo table trong database,
Lưu ý nếu có database rồi thì ta không cần chạy lệnh migrate,
chạy lệnh php artisan storage:link để liên kết thư mục storage trong thư mục public,
chạy lệnh php artisan serve để chạy dự án,
