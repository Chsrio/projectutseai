## 📌 Deskripsi Proyek
Proyek ini mengimplementasikan komunikasi antar layanan (service-to-service) tanpa API Gateway menggunakan bahasa PHP dan protokol HTTP+JSON. Sistem terdiri dari tiga layanan independen:
- `UserService` – Menyediakan data user
- `ProductService` – Menyediakan data produk
- `OrderService` – Mengambil data user & produk lalu memproses pesanan

## 🔧 Teknologi
- PHP 7/8
- REST API via `file_get_contents()`
- JSON (data format)
- Built-in PHP Web Server

## 📐 Arsitektur Sistem
```
             GET /user.php             GET /product.php
[UserService] ──────────────┐       ┌────────────── [ProductService]
                            ▼       ▼
                      [OrderService]
                          POST /order.php
```

## 🚀 Cara Menjalankan
1. Jalankan setiap service di terminal berbeda:

```bash
cd userservice
php -S localhost:8001

cd productservice
php -S localhost:8002

cd orderservice
php -S localhost:8003
```

2. Uji dengan Postman / browser / ThunderClient:

- `GET http://localhost:8001/user.php` → Data user
- `GET http://localhost:8002/product.php` → Data produk
- `POST http://localhost:8003/order.php` → Proses order

## 📄 Dokumentasi API
Setiap service memiliki dokumentasi di folder:

userservice/docs/api.md  
productservice/docs/api.md  
orderservice/docs/api.md
