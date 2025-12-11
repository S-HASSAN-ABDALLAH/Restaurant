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

// ===== RECHERCHE & FILTRAGE =====
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$filterCategory = isset($_GET['category']) ? (int)$_GET['category'] : 0;

// جلب الفئات للفلتر
$stmtCategories = $pdo->query("SELECT * FROM categories ORDER BY display_order ASC");
$allCategories = $stmtCategories->fetchAll();

// ===== PAGINATION =====
$perPage = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

// بناء الاستعلام مع البحث والفلترة
$whereClause = "WHERE 1=1";
$params = [];

if (!empty($search)) {
    $whereClause .= " AND items.name LIKE :search";
    $params[':search'] = "%$search%";
}

if ($filterCategory > 0) {
    $whereClause .= " AND items.id_categorie = :category";
    $params[':category'] = $filterCategory;
}

// حساب العدد الإجمالي
$sqlCount = "SELECT COUNT(*) FROM items JOIN categories ON items.id_categorie = categories.id $whereClause";
$stmtCount = $pdo->prepare($sqlCount);
$stmtCount->execute($params);
$totalItems = $stmtCount->fetchColumn();
$totalPages = ceil($totalItems / $perPage);

// حساب OFFSET
$offset = ($page - 1) * $perPage;

// جلب الأطباق
$sql = "
    SELECT items.*, categories.name AS category_name 
    FROM items 
    JOIN categories ON items.id_categorie = categories.id 
    $whereClause
    ORDER BY categories.display_order, items.display_order ASC
    LIMIT :limit OFFSET :offset
";
$stmt = $pdo->prepare($sql);
foreach ($params as $key => $value) {
    $stmt->bindValue($key, $value);
}
$stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$plats = $stmt->fetchAll();

// بناء URL للـ Pagination مع الحفاظ على البحث والفلترة
$queryParams = [];
if (!empty($search)) $queryParams['search'] = $search;
if ($filterCategory > 0) $queryParams['category'] = $filterCategory;
$baseUrl = '?' . http_build_query($queryParams);
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
        .search-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
       
        .btn-reset {
            background-color: #6c757d;
            border-color: #6c757d;
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
        <i class="fas fa-plus"></i> Ajouter un plat
        </a>
        
        <!-- ===== SEARCH & FILTER BOX ===== -->
        <div class="search-box">
            <form method="GET" action="show.php" class="row g-3 align-items-end">
                <!-- Recherche par nom -->
                <div class="col-md-5">
                    <label for="search" class="form-label"><i class="fas fa-search"></i> Rechercher par nom</label>
                    <input type="text" 
                           class="form-control" 
                           id="search" 
                           name="search" 
                           placeholder="Nom du plat..."
                           value="<?= htmlspecialchars($search) ?>">
                </div>
                
                <!-- Filtrer par catégorie -->
                <div class="col-md-4">
                    <label for="category" class="form-label"><i class="fas fa-filter"></i> Filtrer par catégorie</label>
                    <select class="form-select" id="category" name="category">
                        <option value="0">Toutes les catégories</option>
                        <?php foreach ($allCategories as $cat): ?>
                        <option value="<?= $cat['id'] ?>" <?= $filterCategory === (int)$cat['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($cat['name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <!-- Boutons -->
                <div class="col-md-3">
                    <button type="submit" class="btn btn-search">
                         <i class="fas fa-search"></i> Rechercher
                    </button>
                    <a href="show.php" class="btn btn-reset">
                         <i class="fas fa-undo"></i> Réinitialiser
                    </a>
                </div>
            </form>
        </div>
        
        <!-- معلومات Pagination -->
        <p class="pagination-info">
            <?php if ($totalItems > 0): ?>
                Affichage de <?= $offset + 1 ?> à <?= min($offset + $perPage, $totalItems) ?> sur <?= $totalItems ?> plats
                <?php if (!empty($search) || $filterCategory > 0): ?>
                    <span class="text-muted">
                        (filtré<?= !empty($search) ? " par \"$search\"" : "" ?><?= $filterCategory > 0 ? " - catégorie sélectionnée" : "" ?>)
                    </span>
                <?php endif; ?>
            <?php else: ?>
                Aucun plat trouvé
                <?php if (!empty($search) || $filterCategory > 0): ?>
                    <a href="show.php">Réinitialiser les filtres</a>
                <?php endif; ?>
            <?php endif; ?>
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
                <?php if (count($plats) > 0): ?>
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
                            <i class="fas fa-edit"></i> Modifier
                            </a>

                            <button type="button" 
                             class="btn btn-sm btn-danger btn-delete" 
                             data-id="<?= $plat["id"] ?>"
                             data-name="<?= htmlspecialchars($plat["name"]) ?>">
                            <i class="fas fa-trash"></i> Supprimer
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            Aucun plat trouvé
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        
        <!-- أزرار Pagination -->
        <?php if ($totalPages > 1): ?>
        <nav aria-label="Pagination des plats">
            <ul class="pagination justify-content-center">
                <!-- زر السابق -->
                <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                    <a class="page-link" href="<?= $baseUrl ?>&page=<?= $page - 1 ?>">Précédent</a>
                </li>
                
                <!-- أرقام الصفحات -->
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?= $i === $page ? 'active' : '' ?>">
                    <a class="page-link" href="<?= $baseUrl ?>&page=<?= $i ?>"><?= $i ?></a>
                </li>
                <?php endfor; ?>
                
                <!-- زر التالي -->
                <li class="page-item <?= $page >= $totalPages ? 'disabled' : '' ?>">
                    <a class="page-link" href="<?= $baseUrl ?>&page=<?= $page + 1 ?>">Suivant</a>
                </li>
            </ul>
        </nav>
        <?php endif; ?>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</div><!-- end main-content -->

<script>
// SweetAlert Delete Confirmation
document.querySelectorAll('.btn-delete').forEach(button => {
    button.addEventListener('click', function() {
        const id = this.dataset.id;
        const name = this.dataset.name;
        
        Swal.fire({
            title: 'Êtes-vous sûr?',
            text: `Voulez-vous supprimer "${name}"?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Oui, supprimer!',
            cancelButtonText: 'Annuler'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `show.php?action=supprimer&id=${id}`;
            }
        });
    });
});
</script>
</body>
</html>