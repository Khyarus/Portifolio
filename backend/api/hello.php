<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$response = [
    'message' => 'Hello World from PHP Backend!',
    'timestamp' => time()
];

echo json_encode($response);
?>