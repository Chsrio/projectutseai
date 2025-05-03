## Endpoint: GET /index.php

Mengembalikan daftar produk dalam format JSON.

### ✔ Contoh Response:
```json
[
  {
    "id": 100,
    "name": "Kopi Gayo",
    "price": 15000
  },
  {
    "id": 101,
    "name": "Keripik Pisang",
    "price": 10000
  }
]
```

### 🔁 Status Code:
- 200 Berhasil – berhasil mengambil data
- 405 Tidak tersedia – jika menggunakan method selain GET
