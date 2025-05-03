<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userResponse = file_get_contents('http://localhost:8001/user.php');
    $users = json_decode($userResponse, true);

    $productResponse = file_get_contents('http://localhost:8002/product.php');
    $products = json_decode($productResponse, true);

    $order = [
        'order_id' => rand(1000, 9999),
        'user' => $users[0],
        'product' => $products[0],
        'status' => 'Order berhasil diproses'
    ];

    echo json_encode($order);
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Tidak tersedia']);
}
