<?php
$products = [
    ['id' => 101, 'name' => 'Kopi Lokal', 'price' => 15000],
    ['id' => 102, 'name' => 'Keripik Pisang', 'price' => 10000]
];

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode($products);
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Tidak tersedia']);
}
