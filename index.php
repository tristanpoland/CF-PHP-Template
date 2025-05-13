<?php
header('Content-Type: application/json');

echo json_encode([
    'status' => 'ok',
    'message' => 'Hello from PHP on Cloud Foundry!'
]);