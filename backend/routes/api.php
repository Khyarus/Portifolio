<?php
require_once __DIR__ . '/../auth/AuthController.php';

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === '/api/login') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    $auth = new AuthController();
    $response = $auth->login($data['email'], $data['password']);
    
    if ($response) {
        echo json_encode($response);
    } else {
        http_response_code(401);
        echo json_encode(['error' => 'Unauthorized']);
    }
}