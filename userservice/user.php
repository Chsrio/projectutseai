<?php
$users = [
    ['id' => 1, 'name' => 'Rio', 'email' => 'rio@mail.com'],
    ['id' => 2, 'name' => 'Cx', 'email' => 'cx@mail.com']
];

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode($users);
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Tidak tersedia']);
}
