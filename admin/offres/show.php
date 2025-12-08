<?php 
require_once "../include/auth.php";  
requireLogin();  

require_once "../config/database.php";

// حذف
if (isset($_GET["action"]) && $_GET["action"] === "supprimer" && isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $stmt = $pdo->prepare("DELETE FROM special_offers WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: show.php?message=deleted");
    exit;
}

// جلب البيانات
$stmt = $pdo->query("SELECT * FROM special_offers ORDER BY id ASC");
$offers = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Gestion des Offres Spéciales</title>
</head>
<body>
    <?php include "../include/sidebar.php"; ?>

<div class="main-content">
    
    <div class="container py-5">
        <h1>Gestion des Offres Spéciales</h1>
        
        <?php if (isset($_GET["message"])): ?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Succès!',
        text: '<?php 
            if ($_GET["message"] === "deleted") echo "Offre supprimée avec succès!";
            elseif ($_GET["message"] === "success") echo "Offre ajoutée avec succès!";
            elseif ($_GET["message"] === "updated") echo "Offre modifiée avec succès!";
        ?>',
        confirmButtonColor: '#D4A853'
    });
</script>
<?php endif; ?>
        
        <a href="ajouter.php" class="btn btn-primary mb-3">
            Ajouter une offre
        </a>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Prix</th>
                    <th>Économie</th>
                    <th>Actif</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($offers as $offer): ?>
                <tr>
                    <td><?= $offer["id"] ?></td>
                    <td><?= htmlspecialchars($offer["title"]) ?></td>
                    <td><?= number_format($offer["price"], 2) ?> €</td>
                    <td><?= htmlspecialchars($offer["savings"]) ?></td>
                    <td>
                        <?php if ($offer["is_active"]): ?>
                            <span class="badge bg-success">Oui</span>
                        <?php else: ?>
                            <span class="badge bg-secondary">Non</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="modifier.php?id=<?= $offer["id"] ?>" class="btn btn-sm btn-warning">
                            Modifier
                        </a>
                        <a href="show.php?action=supprimer&id=<?= $offer["id"] ?>" 
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Voulez-vous supprimer cette offre?')">
                            Supprimer
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>