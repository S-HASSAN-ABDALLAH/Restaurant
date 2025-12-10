<?php 
require_once "../include/auth.php";
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

// ===== PAGINATION =====
$perPage = 10; // عدد الأطباق في كل صفحة
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

// حساب العدد الإجمالي
$stmtCount = $pdo->query("SELECT COUNT(*) FROM items");
$totalItems = $stmtCount->fetchColumn();
$totalPages = ceil($totalItems / $perPage);

// حساب OFFSET
$offset = ($page - 1) * $perPage;

// جلب الأطباق مع Pagination
$stmt = $pdo->prepare("
    SELECT items.*, categories.name AS category_name 
    FROM items 
    JOIN categories ON items.id_categorie = categories.id 
    ORDER BY categories.display_order, items.display_order ASC
    LIMIT :limit OFFSET :offset
");
$stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$plats = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Gestion des plats</title>
    <style>
        .pagination-info {
            color: #666;
            font-size: 0.9rem;
        }
        .page-link {
            color: #D4A853;
        }
        .page-link:hover {
            color: #c49a4a;
            background-color: #f8f9fa;
        }
        .page-item.active .page-link {
            background-color: #D4A853;
            border-color: #D4A853;
            color: white;
        }
    </style>
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
        
        <!-- معلومات Pagination -->
        <p class="pagination-info">
            Affichage de <?= $offset + 1 ?> à <?= min($offset + $perPage, $totalItems) ?> sur <?= $totalItems ?> plats
        </p>
        
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
        
        <!-- أزرار Pagination -->
        <?php if ($totalPages > 1): ?>
        <nav aria-label="Pagination des plats">
            <ul class="pagination justify-content-center">
                <!-- زر السابق -->
                <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                    <a class="page-link" href="?page=<?= $page - 1 ?>">Précédent</a>
                </li>
                
                <!-- أرقام الصفحات -->
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?= $i === $page ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
                <?php endfor; ?>
                
                <!-- زر التالي -->
                <li class="page-item <?= $page >= $totalPages ? 'disabled' : '' ?>">
                    <a class="page-link" href="?page=<?= $page + 1 ?>">Suivant</a>
                </li>
            </ul>
        </nav>
        <?php endif; ?>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</div><!-- end main-content -->
</body>
</html>