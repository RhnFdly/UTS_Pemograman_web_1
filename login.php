<?php
// php/login.php
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
require_once __DIR__ . '/db.php';
try {
    $stmt = $pdo->prepare("SELECT id, password_hash FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    if (!$user) {
        echo json_encode(['success'=>false,'message'=>'Email tidak ditemukan']);
        exit;
    }
    if (!password_verify($password, $user['password_hash'])) {
        echo json_encode(['success'=>false,'message'=>'Password salah']);
        exit;
    }
    // buat session
    session_start();
    $_SESSION['user_id'] = $user['id'];
    echo json_encode(['success'=>true]);
} catch (Exception $e) {
    echo json_encode(['success'=>false,'message'=>$e->getMessage()]);
}
