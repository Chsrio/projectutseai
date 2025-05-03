# 📘 UserService API

## Endpoint: GET /index.php

Mengembalikan daftar user dalam format JSON.

### ✔ Contoh Response:
```json
[
  {
    "id": 1,
    "name": "Rio",
    "email": "rio@mail.com"
  },
  {
    "id": 2,
    "name": "Cx",
    "email": "cx@mail.com"
  }
]
```

### 🔁 Status Code:
- 200 Berhasil – berhasil mengambil data
- 405 Tidak tersedia – jika menggunakan method selain GET
