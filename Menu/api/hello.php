<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Accept');

// Força o modo de desenvolvimento
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Resposta estendida para debug
$response = [
    'status' => 'success',
    'message' => 'Hello World from PHP Backend!',
    'timestamp' => date('Y-m-d H:i:s'),
    'server' => [
        'REQUEST_METHOD' => $_SERVER['REQUEST_METHOD'],
        'REMOTE_ADDR' => $_SERVER['REMOTE_ADDR']
    ]
];

// Simula delay para teste
sleep(1);

echo json_encode($response);
exit; // Garante que nada mais é enviado
?>