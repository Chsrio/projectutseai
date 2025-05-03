## Endpoint: POST /index.php

Menggabungkan data dari `UserService` dan `ProductService` untuk membuat suatu pesanan

### 📝 Contoh Response:
```json
{
  "order_id": 0001,
  "user": {
    "id": 1,
    "name": "Rio",
    "email": "rio@mail.com"
  },
  "product": {
    "id": 100,
    "name": "Kopi Gayo",
    "price": 15000
  },
  "status": "Order berhasil diproses"
}
```

### 🔁 Status Code:
- 200 Berhasil – berhasil membuat pesanan
- 405 Tidak tersedia – jika bukan method POST
