<?php 
require_once "../include/auth.php";  
requireLogin();    

require_once "../config/database.php";

// حذف قسم
if (isset($_GET["action"]) && $_GET["action"] === "supprimer" && isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $stmt = $pdo->prepare("DELETE FROM categories WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: show.php?message=deleted");
    exit;
}

// جلب الأقسام
$stmt = $pdo->query("SELECT * FROM categories ORDER BY display_order ASC");
$categories = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Catégories</title>
</head>
<body>
    <?php include "../include/header.php"; ?>
    
    <div class="container py-5">
        <h1>Gestion des catégories</h1>
        
        <?php if (isset($_GET["message"])): ?>
            <div class="alert alert-success">
                <?php if ($_GET["message"] === "deleted"): ?>
                    Catégorie supprimée avec succès!
                <?php elseif ($_GET["message"] === "success"): ?>
                    Catégorie ajoutée avec succès!
                <?php elseif ($_GET["message"] === "updated"): ?>
                    Catégorie modifiée avec succès!
                <?php endif; ?>
            </div>
        <?php endif; ?>
        
        <a href="ajouter.php" class="btn btn-primary mb-3">
            Ajouter une catégorie
        </a>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Date de création</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categories as $categorie): ?>
                <tr>
                    <td><?= $categorie["id"] ?></td>
                    <td><?= htmlspecialchars($categorie["name"]) ?></td>
                    <td><?= date("d/m/Y", strtotime($categorie["created_at"])) ?></td>
                    <td>
                        <a href="modifier.php?id=<?= $categorie["id"] ?>" class="btn btn-sm btn-warning">
                            Modifier
                        </a>
                        <a href="show.php?action=supprimer&id=<?= $categorie["id"] ?>" 
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Voulez-vous supprimer cette catégorie?')">
                            Supprimer
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
