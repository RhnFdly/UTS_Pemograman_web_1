<?php
// php/registration_submit.php
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);
if (!$data) { echo json_encode(['success'=>false,'message'=>'Invalid']); exit; }
$name = trim($data['name'] ?? '');
$email = filter_var(trim($data['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$phone = trim($data['phone'] ?? '');
$address = trim($data['address'] ?? '');
$event = trim($data['eventName'] ?? '');

if (!$name || !$email || !$event) {
    echo json_encode(['success'=>false,'message'=>'Lengkapi nama, email, dan event']);
    exit;
}

require_once __DIR__ . '/db.php';
try {
    $stmt = $pdo->prepare("INSERT INTO registrations (name, email, phone, address, event_name, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
    $stmt->execute([$name, $email, $phone, $address, $event]);
    echo json_encode(['success'=>true]);
} catch (Exception $e) {
    echo json_encode(['success'=>false,'message'=>$e->getMessage()]);
}
