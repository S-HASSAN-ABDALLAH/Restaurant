<?php
require_once 'config/database.php';

// جلب الأقسام مرتبة
$stmt = $pdo->query("SELECT * FROM categories ORDER BY display_order ASC");
$categories = $stmt->fetchAll();

// جلب كل الأطباق
$stmt = $pdo->query("SELECT * FROM items ORDER BY id_categorie, display_order ASC");
$allItems = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Meta essentiels -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- META DESCRIPTION (SEO) -->
    <meta name="description" content="Découvrez notre menu authentique syrien : mezzés, grillades, sandwiches et desserts. Barbecue d'Alep à Grenoble.">
    
    <!-- Keywords -->
    <meta name="keywords" content="menu barbecue alep, mezzés syriens, grillades grenoble, sandwich syrien, desserts orientaux">
    
    <!-- Titre de la page -->
    <title>Menu - Barbecue d'Alep</title>
    
    <!-- Préconnexions -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> 
    
    <!-- CSS personnalisé -->
    <link rel="stylesheet" href="./assets/style.css?v=2">
    

    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="./assets/images/Logo.webp">


</head>
<body>

<!-- ========================================
     NAVBAR
     ======================================== -->
<?php include "includes/header.php"; ?>

<!-- ========================================
     HERO SECTION - Section d'accueil
     ======================================== -->
<section class="hero-menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hero-title">NOTRE MENU</h1>
                <p class="hero-subtitle">Savourez de véritables grillades syriennes au charbon de bois</p>
                
            </div>
        </div>
    </div>
</section>

<section>

        <div class="categories ">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="#menu">MEZZÉS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#assiettes">ASSIETTES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#sandwiches">SANDWICHES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#desserts-boissons">DESSERTS & BOISSONS</a>
  </li>
</ul>

        </div>


</section>



<section class="menu-section" id="menu">
   
    <div class="container">
        <!-- Titre de la catégorie -->
        <div class="category-title text-center">
            <h2>MEZZÉS</h2>
            <div class="title-underline"></div>
        </div>
        
        <!-- Container des plats -->
        <div class="menu-items"> 
            <?php
            $stmt = $pdo->prepare("SELECT * FROM items WHERE id_categorie = ? ORDER BY display_order ASC");
            $stmt->execute([1]); // 1 = Mezzés
            $items = $stmt->fetchAll();
            
            foreach ($items as $item):
            ?>
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/<?= htmlspecialchars($item['picture']) ?>" 
                         alt="<?= htmlspecialchars($item['name']) ?>" loading="lazy">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title"><?= htmlspecialchars($item['name']) ?></h4>
                        <span class="item-dots"></span>
                        <span class="item-price"><?= number_format($item['price'], 2) ?> €</span>
                    </div>
                    <p class="item-description">
                        <?= htmlspecialchars($item['description']) ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ========================================
     SECTION ASSIETTES
     ======================================== -->
<section class="menu-section" id="assiettes">
   
    <div class="container">
        <!-- Titre de la catégorie -->
        <div class="category-title text-center">
            <h2>ASSIETTES</h2>
            <div class="title-underline"></div>
        </div>
        
        <!-- Container des plats -->
        <div class="menu-items"> 
            <!-- Assiette 1 -->
            <?php
            $stmt = $pdo->prepare("SELECT * FROM items WHERE id_categorie = ? ORDER BY display_order ASC");
            $stmt->execute([3]); // 3 = Assiettes
            $items = $stmt->fetchAll();
            
            foreach ($items as $item):
            ?>
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/<?= htmlspecialchars($item['picture']) ?>" 
                         alt="<?= htmlspecialchars($item['name']) ?>" loading="lazy">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title"><?= htmlspecialchars($item['name']) ?></h4>
                        <span class="item-dots"></span>
                        <span class="item-price"><?= number_format($item['price'], 2) ?> €</span>
                    </div>
                    <p class="item-description">
                        <?= htmlspecialchars($item['description']) ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========================================
     SECTION SANDWICHES
     ======================================== -->
<section class="menu-section" id="sandwiches">
   
    <div class="container">
        <!-- Titre de la catégorie -->
        <div class="category-title text-center">
            <h2>SANDWICHES</h2>
            <div class="title-underline"></div>
        </div>
        
        <!-- Container des plats -->
        <div class="menu-items"> 
            <!-- Sandwich 1 -->
            <?php
            $stmt = $pdo->prepare("SELECT * FROM items WHERE id_categorie = ? ORDER BY display_order ASC");
            $stmt->execute([11]); // 11 = Sandwiches
            $items = $stmt->fetchAll();
            
            foreach ($items as $item):
            ?>
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/<?= htmlspecialchars($item['picture']) ?>" 
                         alt="<?= htmlspecialchars($item['name']) ?>" loading="lazy">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title"><?= htmlspecialchars($item['name']) ?></h4>
                        <span class="item-dots"></span>
                        <span class="item-price"><?= number_format($item['price'], 2) ?> €</span>
                    </div>
                    <p class="item-description">
                        <?= htmlspecialchars($item['description']) ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    

            <!-- ========================================
                 BARQUETTES DE FRITES
                 ======================================== -->
            <div class="frites-section">
                <h4 class="frites-title">Barquettes de Frites</h4>
                
                <div class="frites-options">
                    <?php
        $stmt = $pdo->query("SELECT * FROM frites_options ORDER BY display_order ASC");
        $frites = $stmt->fetchAll();
        
        foreach ($frites as $frite):
        ?>
        <div class="frites-option">
            <span class="frites-size"><?= htmlspecialchars($frite['size']) ?></span>
            <span class="frites-dots"></span>
            <span class="frites-price"><?= number_format($frite['price'], 2) ?> €</span>
        </div>
        <?php endforeach; ?>
    </div>
    
    <div class="frites-image">
        <img src="./assets/images/MFritesGrande.webp" alt="Barquettes de frites" loading="lazy">
    </div>
</div>

<!-- ========================================
     MENU SPÉCIAL
     ======================================== -->
<?php
$stmt = $pdo->query("SELECT * FROM special_offers WHERE is_active = TRUE LIMIT 1");
$offer = $stmt->fetch();

if ($offer):
?>
<div class="menu-special">
    <div class="special-badge">MENU SPÉCIAL</div>
    
    <div class="special-center">
        <h4 class="special-title"><?= htmlspecialchars($offer['title']) ?></h4>
        <p class="special-saving"><?= htmlspecialchars($offer['savings']) ?></p>
    </div>
    
    <div class="special-right">
        <i class="fas fa-star special-star"></i>
        <span class="special-price"><?= number_format($offer['price'], 0) ?>€</span>
    </div>
</div>
<?php endif; ?>
                
</section>

<!-- ========================================
     SECTION DESSERTS & BOISSONS
     ======================================== -->
<section class="menu-section" id="desserts-boissons">
   
    <div class="container">
        <!-- Titre de la catégorie -->
        <div class="category-title text-center">
            <h2>DESSERTS & BOISSONS</h2>
            <div class="title-underline"></div>
        </div>
        
        <!-- Container principal -->
        <div class="menu-items desserts-container">
            
            <!-- ========== DESSERTS ========== -->
            <?php
            $subcategories = ['Desserts', 'Boissons', 'Boissons Chaudes'];
            $images = [
                'Desserts' => 'Halawat el jubn.webp',
                'Boissons' => 'coca.webp',
                'Boissons Chaudes' => 'cafe.webp'
            ];
            
            foreach ($subcategories as $subcat):
                $stmt = $pdo->prepare("SELECT * FROM items WHERE id_categorie = ? AND subcategory = ? ORDER BY display_order ASC");
                $stmt->execute([4, $subcat]);
                $items = $stmt->fetchAll();
                
                if (!empty($items)):
            ?>
            <div class="desserts-category">
                <div class="category-content">
                    <h3 class="category-subtitle"><?= htmlspecialchars($subcat) ?></h3>
                    
                    <?php foreach ($items as $item): ?>
                    <div class="simple-item">
                        <span class="simple-name"><?= htmlspecialchars($item['name']) ?></span>
                        <span class="simple-dots"></span>
                        <span class="simple-price"><?= number_format($item['price'], 2) ?>€</span>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="category-image">
                    <img src="./assets/images/<?= $images[$subcat] ?>" 
                         alt="<?= htmlspecialchars($subcat) ?>" loading="lazy">
                </div>
            </div>
            <?php 
                endif;
            endforeach; 
            ?>
            
            <!-- Grande image thé -->
            <div class="tea-banner">
                <img src="./assets/images/Thé.webp" alt="Thé syrien traditionnel" loading="lazy">
            </div>
            
        </div>
    </div>
</section>

<!-- ========================================
     FOOTER
     ======================================== -->
<?php include "includes/footer.php"; ?>

<!-- ========================================
     SCRIPTS
     ======================================== -->


<!-- Script navbar scroll -->
<script>
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>