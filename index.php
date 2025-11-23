<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Meta essentiels -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--  META DESCRIPTION (SEO) -->
    <meta name="description" content="Barbecue d'Alep - Restaurant syrien authentique à Grenoble. Savourez de véritables grillades syriennes au charbon de bois. Cuisine traditionnelle d'Alep, ambiance chaleureuse. Réservez maintenant!">
    
    <!-- Keywords -->
    <meta name="keywords" content="restaurant syrien Grenoble, barbecue syrien, grillades charbon de bois, cuisine Alep, restaurant oriental Grenoble, mezze, kebab, livraison restaurant">
    
    <!-- Author -->
    <meta name="author" content="Barbecue d'Alep">
    
    <!-- Open Graph (réseaux sociaux) -->
    <meta property="og:title" content="Barbecue d'Alep - Restaurant Syrien Authentique à Grenoble">
    <meta property="og:description" content="Savourez de véritables grillades syriennes au charbon de bois. Cuisine traditionnelle d'Alep.">
    <meta property="og:image" content="./assets/images/Logo.webp">
    <meta property="og:url" content="https://www.barbecue-alep.fr">
    <meta property="og:type" content="restaurant">
    <meta property="og:locale" content="fr_FR">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Barbecue d'Alep - Restaurant Syrien à Grenoble">
    <meta name="twitter:description" content="Restaurant syrien authentique. Grillades au charbon de bois.">
    <meta name="twitter:image" content="./assets/images/Logo.webp">
    
    <!-- Titre de la page -->
    <title>Barbecue d'Alep - Restaurant Syrien Authentique à Grenoble</title>
    
    <!-- Préconnexions -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    
    <!-- Précharger l'image hero -->
    <link rel="preload" as="image" href="./assets/images/HeroAccueill.webp">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> -->
    
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/style.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="./assets/images/Logo.webp">
</head>
<body>

<!-- NAVBAR -->
 <?php include "includes/header.php"; ?>


<!-- HERO SECTION -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hero-title">De la citadelle d'Alep au cœur de Grenoble</h1>
                <p class="hero-subtitle">Savourez de véritables grillades syriennes au charbon de bois</p>
                <a href="#menu" class="btn-hero">Voir le Menu</a>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: L'esprit d'Alep -->
<section class="esprit-alep py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Colonne texte -->
            <div class="col-12 col-md-6">
    <h2>L'esprit d'Alep, la chaleur de la table syrienne</h2>
    <div class="title-underline"></div>
    <p>Au Barbecue d'Alep, nous célébrons la cuisine du cœur : grillades parfumées, mezzés faits maison, accueil chaleureux. Un lieu où la tradition rencontre la passion.</p>
    <a href="a-propos.html" class="btn-discover">En savoir plus <i class="fas fa-arrow-right"></i></a>
            </div>
            <!-- Colonne image -->
            <div class="col-12 col-md-6 text-center image-container">
                <img src="../Restaurant/assets/images/Restaurant d'Alep.webp" 
                     alt="Intérieur du restaurant"loading="lazy" 
                     class="img-fluid rounded-circle">
            </div>
        </div>
    
    </div>
</section>

<!-- Section 3: Nos Incontournables -->
<section class="nos-incontournables">
    <div class="container">
        <!-- العنوان مع padding كافي -->
        <div class="row">
            <div class="col-12 text-center section-title">
                <h2>Nos Incontournables</h2>
            </div>
        </div>
        
        <!-- البطاقات مع مسافات مناسبة -->
        <div class="row cards-container">
            <!-- بطاقة نباتية -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column">
                <div class="food-card">
                    <div class="card-image-wrapper">
                        <img src="assets/images/Végétarien & Végan.webp" 
                             alt="Plats végétariens et végans"
                             loading="lazy">
                    </div>
                    <div class="card-content">
                        <h5>Végétarien & Végan</h5>
                    </div>
                </div>
            </div>
            
            <!-- بطاقة السندويشات -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column">
                <div class="food-card">
                    <div class="card-image-wrapper">
                        <img src="assets/images/SANDWICHS.jpeg" 
                             alt="Sandwiches syriens"
                             loading="lazy">
                    </div>
                    <div class="card-content">
                        <h5>SANDWICHES</h5>
                    </div>
                </div>
            </div>
            
            <!-- بطاقة المشويات -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column">
                <div class="food-card">
                    <div class="card-image-wrapper">
                        <img src="assets/images/GRILLADES1.webp" 
                             alt="Grillades au charbon de bois"
                             loading="lazy">
                    </div>
                    <div class="card-content">
                        <h5>GRILLADES</h5>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- زر القائمة مع padding كافي -->
        <div class="row">
            <div class="col-12 text-center button-container">
                <a class="btn-menu" href="menu.php">
                    Voir le Menu Complet
                </a>
            </div>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<!-- Font Awesome Kit -->
<script src="https://kit.fontawesome.com/7d16ed7181.js" crossorigin="anonymous"></script>

<!-- Script navbar transparent → opaque au scroll -->
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

</body>
</html>