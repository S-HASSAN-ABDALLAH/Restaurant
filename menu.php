<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Meta essentiels -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- META DESCRIPTION (SEO) -->
    <meta name="description" content="Découvrez l'histoire de Barbecue d'Alep, restaurant syrien authentique à Grenoble. Cuisine traditionnelle, passion et hospitalité syrienne.">
    
    <!-- Keywords -->
    <meta name="keywords" content="à propos barbecue alep, restaurant syrien grenoble, histoire restaurant, cuisine traditionnelle alep">
    
    <!-- Titre de la page -->
    <title>Menu - Barbecue d'Alep</title>
    
    <!-- Préconnexions -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
    
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
    <a class="nav-link active" href="#">MEZZÉS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">ASSIETTES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">SANDWICHES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link">DESSERTS & BOISSONS</a>
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
            <!-- Plat 1 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MHoumous1.webp" alt="Hoummos">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Hoummos</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">7.00 €</span>
                    </div>
                    <p class="item-description">
                        Purée de pois chiches avec tahini, ail, citron, huile d'olive, servi avec pain Syrien
                    </p>
                </div>
            </div>
            
            <!-- Tu répèteras cette structure 12 fois -->
              <!-- Plat 2 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MMotabal.webp" alt="Motabal (Caviar d'aubergine)">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Motabal (Caviar d'aubergine)</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">7.00 €</span>
                    </div>
                    <p class="item-description">
                        Purée d'd'aubergines grillées avec crème de sésame, yaourt citron, ail, avec huile d'olive, servi avec pain Syrien
                    </p>
                </div>
            </div>

             <!-- Plat 3 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MMoussaka1.webp" alt="Moussaka">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Moussaka</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">7.00 €</span>
                    </div>
                    <p class="item-description">
                        Sauce tomate, aubergines, oignons, ail, poivron rouge ou vert, avec des épices Syriens, servi avec du pain Syrien
                    </p>
                </div>
            </div>

             <!-- Plat 4 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MFattouche.webp" alt="Fattouche (salade)">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Fattouche (salade)</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">7.00 €</span>
                    </div>
                    <p class="item-description">
                        Tomates, salade, chou rouge, ail, citron, concombre, mélasse de grenade, huile d'olive, avec pain grillé
                    </p>
                </div>
            </div>

             <!-- Plat 5 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MBurak fromage1.webp" alt="Burak fromages">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Burak fromages</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">6.00 €</span>
                    </div>
                    <p class="item-description">
                        3 pièces feuilles (fines) farcies au fromage Syrien, mélangee avec du mozzarella et de la menthe + paprika
                    </p>
                </div>
            </div>

             <!-- Plat 6 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MSpring Roll.webp" alt="Spring Roll">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Spring Roll</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">6.00 €</span>
                    </div>
                    <p class="item-description">
                        3 pièces feuilles (fines) farcies aux légumes de saison, épices et fromage
                    </p>
                </div>
            </div>

             <!-- Plat 7 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MKebbeh1.webp" alt="Kebbeb boulettes">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Kebbeh boulettes</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">8.00 €</span>
                    </div>
                    <p class="item-description">
                         3 pièces de boulgour farcie avec de la viande hachée marinée avec 7 épices Syriens, oignon + noix
                    </p>
                </div>
            </div>

             <!-- Plat 8 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MSamboussek viande.webp" alt="Samboussek viande">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Samboussek viande</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">6.00 €</span>
                    </div>
                    <p class="item-description">
                        3 pièces de chaussons rissolés aux viande
                    </p>
                </div>
            </div>

             <!-- Plat 9 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MSamboussek épinard.webp" alt="Samboussek épinard">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Samboussek épinard</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">6.00 €</span>
                    </div>
                    <p class="item-description">
                        3 pièces de chaussons rissolés aux épinard.
                    </p>
                </div>
            </div>

             <!-- Plat 10 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MFeuillesDeVigne1.webp" alt="Feuilles de vigne">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Feuilles de vigne</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">6.00 €</span>
                    </div>
                    <p class="item-description">
                        4 pièces de feuilles de vigne farcies au riz
                    </p>
                </div>
            </div>

             <!-- Plat 11 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MFalafel1.webp" alt="Falafel">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Falafel</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">6.00 €</span>
                    </div>
                    <p class="item-description">
                        3 pièces beignets de pois chiches servis avec crème de sésame
                    </p>
                </div>
            </div>

             <!-- Plat 12 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MLabneh.webp" alt="Labneh">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Labneh</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">7.00 €</span>
                    </div>
                    <p class="item-description">
                        Fromage blanc de lait vache caillé, menthe, servi avec du pain Syrien
                    </p>
                </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

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

</body>
</html>