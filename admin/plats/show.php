<?php 
require_once "../include/auth.php";  // ← أضيفي هذا
requireLogin(); 

require_once "../config/database.php";

// حذف طبق
if (isset($_GET["action"]) && $_GET["action"] === "supprimer" && isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $stmt = $pdo->prepare("DELETE FROM items WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: show.php?message=deleted");
    exit;
}

// جلب الأطباق مع اسم القسم
$stmt = $pdo->query("
    SELECT items.*, categories.name AS category_name 
    FROM items 
    JOIN categories ON items.id_categorie = categories.id 
    ORDER BY items.id_categorie, items.id ASC
");
$plats = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Gestion des plats</title>
</head>
<body>
    <?php include "../include/sidebar.php"; ?>

<div class="main-content">
    
    <div class="container py-5">
        <h1>Gestion des plats</h1>
        
       <?php if (isset($_GET["message"])): ?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Succès!',
        text: '<?php 
            if ($_GET["message"] === "deleted") echo "Plat supprimé avec succès!";
            elseif ($_GET["message"] === "success") echo "Plat ajouté avec succès!";
            elseif ($_GET["message"] === "updated") echo "Plat modifié avec succès!";
        ?>',
        confirmButtonColor: '#D4A853'
    });
</script>
<?php endif; ?>
        
        <a href="ajouter.php" class="btn btn-primary mb-3">
            Ajouter un plat
        </a>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($plats as $plat): ?>
                <tr>
                    <td><?= $plat["id"] ?></td>
                    <td>
                        <?php if (!empty($plat["picture"])): ?>
                            <img src="../../uploads/<?= htmlspecialchars($plat["picture"]) ?>" 
                                 alt="<?= htmlspecialchars($plat["name"]) ?>" 
                                 style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                        <?php else: ?>
                            <span class="text-muted">Pas d'image</span>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($plat["name"]) ?></td>
                    <td><?= htmlspecialchars($plat["category_name"]) ?></td>
                    <td><?= number_format($plat["price"], 2) ?> €</td>
                    <td>
                        <a href="modifier.php?id=<?= $plat["id"] ?>" class="btn btn-sm btn-warning">
                            Modifier
                        </a>
                        <a href="show.php?action=supprimer&id=<?= $plat["id"] ?>" 
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Voulez-vous supprimer ce plat?')">
                            Supprimer
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </div><!-- end main-content -->
</body>
</html>