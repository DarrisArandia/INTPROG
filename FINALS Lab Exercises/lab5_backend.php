<?php
header('Content-Type: application/json');

// Read raw JSON input
$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (!$data) {
    // invalid or empty JSON
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Invalid or missing JSON input."
    ]);
    exit;
}

$name = trim($data['name'] ?? 'Guest');

$response = [
    "status" => "success",
    "message" => "Welcome, " . $name . "!"
];

echo json_encode($response);
?>
