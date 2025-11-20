<?php
// php/signup.php
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);
if (!$data || !isset($data['email']) || !isset($data['password'])) {
    echo json_encode(['success'=>false,'message'=>'Invalid input']);
    exit;
}
$email = filter_var(trim($data['email']), FILTER_VALIDATE_EMAIL);
$password = trim($data['password']);
if (!$email) {
    echo json_encode(['success'=>false,'message'=>'Email tidak valid']);
    exit;
}
if (strlen($password) < 6) {
    echo json_encode(['success'=>false,'message'=>'Password minimal 6 karakter']);
    exit;
}
require_once __DIR__ . '/db.php';
try {
    // cek user exist
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo json_encode(['success'=>false,'message'=>'Email sudah terdaftar']);
        exit;
    }
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO users (email, password_hash, created_at) VALUES (?, ?, NOW())");
    $stmt->execute([$email, $hash]);
    echo json_encode(['success'=>true]);
} catch (Exception $e) {
    echo json_encode(['success'=>false,'message'=>$e->getMessage()]);
}
