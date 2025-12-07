<?php
session_start();

require_once __DIR__ . '/../config/database.php';

// ===== تحديد مسار الأدمن =====
define('ADMIN_URL', '/restaurant/Restaurant/admin');

// ===== وظيفة تسجيل الدخول =====
function login($email, $password) {
    global $pdo;
    
    // البحث عن المستخدم
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    
    // التحقق من كلمة المرور
    if ($user && password_verify($password, $user['password'])) {
        // ✅ صحيح! حفظ البيانات في الجلسة
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['admin_email'] = $user['email'];
        return true;
    }
    
    // ❌ خطأ
    return false;
}

// ===== هل المستخدم مسجل دخوله؟ =====
function isLoggedIn() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

// ===== حماية الصفحة =====
function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: ' . ADMIN_URL . '/login.php');
        exit;
    }
}

// ===== تسجيل الخروج =====
function logout() {
    session_destroy();
    header('Location: ' . ADMIN_URL . '/login.php');
    exit;
}
?>