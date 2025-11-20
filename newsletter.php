<?php
// php/newsletter.php
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);
$email = filter_var(trim($data['email'] ?? ''), FILTER_VALIDATE_EMAIL);
if (!$email) { echo json_encode(['success'=>false,'message'=>'Email tidak valid']); exit; }
require_once __DIR__ . '/db.php';
try {
    // hindari duplikat
    $stmt = $pdo->prepare("SELECT id FROM newsletter WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo json_encode(['success'=>false,'message'=>'Email sudah berlangganan']);
        exit;
    }
    $stmt = $pdo->prepare("INSERT INTO newsletter (email, created_at) VALUES (?, NOW())");
    $stmt->execute([$email]);
    echo json_encode(['success'=>true]);
} catch (Exception $e) {
    echo json_encode(['success'=>false,'message'=>$e->getMessage()]);
}
