<?php
require_once 'include/auth.php';

// حماية الصفحة - يجب تسجيل الدخول
requireLogin();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Barbecue d'Alep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark" style="background: #1a1a2e;">
        <div class="container">
            <span class="navbar-brand">🔥 Barbecue d'Alep - Admin</span>
            <a href="logout.php" class="btn btn-outline-warning btn-sm">Déconnexion</a>
        </div>
    </nav>
    
    <div class="container mt-5">
        <div class="card">
            <div class="card-body text-center">
                <h1>🎉 Bienvenue!</h1>
                <p class="lead">Vous êtes connecté avec succès.</p>
                <p>Email: <strong><?= htmlspecialchars($_SESSION['admin_email']) ?></strong></p>
            </div>
        </div>
    </div>
</body>
</html>