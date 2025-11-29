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
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/Mviande ALEP.webp" alt="Plat viande ALEP">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Plat viande ALEP (avec 3 mezzés)</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">16.50 €</span>
                    </div>
                    <p class="item-description">
                        2 brochettes de viande hachée (bœuf) marinée avec 7 épices spéciales d’Alep, servi avec riz jaune (ou frites +1€), hommos, caviar d’aubergine, salade, sauce à l’ail et pain Syrien
                    </p>
                </div>
            </div>
            
            <!-- Assiette 2 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/Mviande EXTRA.webp" alt="Plat viande EXTRA">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Plat viande EXTRA (avec 3 mezzés)</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">19.50 €</span>
                    </div>
                    <p class="item-description">
                        2 brochettes de viandes hachée (bœuf) marinée, mélangée avec des oignons, persil, poivron rouge, servi avec riz jaune (ou frites +1€), hommos, caviar d’aubergine, salade, sauce à l’ail et pain Syrien
                    </p>
                </div>
            </div>

            <!-- Assiette 3 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MKebbeb grillé.webp" alt="Plat Kebbeb grillé">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Plat Kebbeb grillé</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">19.50 €</span>
                    </div>
                    <p class="item-description">
                        2 brochettes de viandes hachée (bœuf) avec boulghur marinée à la menthe séchée, oignon, poivron rouge, servi avec riz jaune (ou frites +1€), salade, hommos, caviar d’aubergine, sauce à l’ail et pain Syrien
                    </p>
                </div>
            </div>

            <!-- Assiette 4 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MChiche Taouk.webp" alt="Plat Chiche Taouk">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Plat Chiche Taouk</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">19.50 €</span>
                    </div>
                    <p class="item-description">
                        2 brochettes de viandes poulet marinée, servi avec riz jaune (ou frites +1€), hommos, caviar d’aubergine, salade, sauce à l’ail et pain Syrien
                    </p>
                </div>
            </div>

            <!-- Assiette 5 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MMenu Alep.webp" alt="Plat Menu Alep">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Plat Menu Alep</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">23.50€</span>
                    </div>
                    <p class="item-description">
                        3 brochettes de viandes au choix, riz jaune, hommos, caviar d’aubergine, salade, sauce à l’ail, pain Syrien avec une boisson au choix
                    </p>
                </div>
            </div>

            <!-- Assiette 6 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MPlatMix.webp" alt="Plat Mix">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Plat Mix</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">19.50 €</span>
                    </div>
                    <p class="item-description">
                        2 brochettes de viandes au choix, servi avec riz jaune (ou frites +1€), hommos, caviar d’aubergine, salade, sauce à l’ail, pain Syrien
                    </p>
                </div>
            </div>

            <!-- Assiette 7 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MFalafel d’Alep.webp" alt="Plat Falafel d’Alep (végétarien)  ">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Plat Falafel d’Alep (végétarien)  </h4>
                        <span class="item-dots"></span>
                        <span class="item-price">17.00 €</span>
                    </div>
                    <p class="item-description">
                        4 morceaux de pain farcis avec falafel, tomate, salade, chou,menthe, persil, crème de sésame servi avec hommos et une pièce falafel
                    </p>
                </div>
            </div>

            <!-- Assiette 8 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/Mvégétarien.webp" alt="Plat végétarien">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Plat végétarien</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">19.50 €</span>
                    </div>
                    <p class="item-description">
                        Assortiment de 10 mezzés, hommos, caviar d’aubergine, moussaka, salade, falafel, burak fromages, samboussek épinard, labneh
                    </p>
                </div>
            </div>

            <!-- Assiette 9 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/Menfant.webp" alt="Plat enfant">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Plat enfant</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">12.50 €</span>
                    </div>
                    <p class="item-description">
                        Une brochette de viande au choix, frites, riz jaune, salade + Jus
                    </p>
                </div>
            </div>
            
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
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MSTaouck.webp" alt="Sandwich chiche taouk">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Sandwich chiche taouk</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">9.00 €</span>
                    </div>
                    <p class="item-description">
                        Viande de poulet marinée avec tomate, salade, chou, sauce à l'ail
                    </p>
                </div>
            </div>
            
            <!-- Sandwich 2 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MSViande.webp" alt="Sandwich viande Alep">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Sandwich viande Alep</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">9.00 €</span>
                    </div>
                    <p class="item-description">
                        Viande hachée de bœuf marinée avec 7 épices spéciaux d'Alep, tomate, salade, chou, sauce à l'ail, persil
                    </p>
                </div>
            </div>

            <!-- Sandwich 3 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/h.png" alt="Sandwich viande EXTRA (Kofta)">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Sandwich viande EXTRA (Kofta)</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">9.00 €</span>
                    </div>
                    <p class="item-description">
                        Viande hachée de bœuf marinée (oignon, persil, 7 épices), tomate, salade, chou, sauce à l'ail
                    </p>
                </div>
            </div>

            <!-- Sandwich 4 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MSFalafel.webp" alt="Sandwich falafel">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Sandwich falafel</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">8.50 €</span>
                    </div>
                    <p class="item-description">
                        Beignets de pois chiches, crème sésame avec tomate, chou, persil, menthe, salade
                    </p>
                </div>
            </div>

            <!-- Sandwich 5 -->
            <div class="menu-item">
                <div class="item-image">
                    <img src="./assets/images/MSFrites.webp" alt="Sandwich frites">
                </div>
                <div class="item-content">
                    <div class="item-header">
                        <h4 class="item-title">Sandwich frites</h4>
                        <span class="item-dots"></span>
                        <span class="item-price">7.00 €</span>
                    </div>
                    <p class="item-description">
                        Frites, tomate, salade, chou, sauce à l'ail..
                    </p>
                </div>
            </div>

            <!-- ========================================
                 BARQUETTES DE FRITES
                 ======================================== -->
            <div class="frites-section">
                <h3 class="frites-title">Barquettes de Frites</h3>
                
                <div class="frites-options">
                    <div class="frites-option">
                        <span class="frites-size">Petite</span>
                        <span class="frites-dots"></span>
                        <span class="frites-price">3.50 €</span>
                    </div>
                    <div class="frites-option">
                        <span class="frites-size">Grande</span>
                        <span class="frites-dots"></span>
                        <span class="frites-price">4.50 €</span>
                    </div>
                </div>
                
                <div class="frites-image">
                    <img src="./assets/images/MFritesGrande.webp" alt="Barquettes de frites">
                </div>
            </div>

           <!-- ========================================
     MENU SPÉCIAL
     ======================================== -->
<div class="menu-special">
    <div class="special-badge">MENU SPÉCIAL</div>
    
    <div class="special-center">
        <h3 class="special-title">SANDWICH + FRITES + BOISSON</h3>
        <p class="special-saving">Économisez 2€</p>
    </div>
    
    <div class="special-right">
        <i class="fas fa-star special-star"></i>
        <span class="special-price">13€</span>
    </div>
</div>
                <div class="special-star">
                    <i class="fas fa-star"></i>
                </div>
            </div>
            
        </div>
    </div>
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
            <div class="desserts-category">
                <div class="category-content">
                    <h3 class="category-subtitle">Desserts</h3>
                    
                    <div class="simple-item">
                        <span class="simple-name">Halawat el jubn</span>
                        <span class="simple-dots"></span>
                        <span class="simple-price">3.50€</span>
                    </div>
                    
                    <div class="simple-item">
                        <span class="simple-name">Mohallabiya</span>
                        <span class="simple-dots"></span>
                        <span class="simple-price">4.00€</span>
                    </div>
                </div>
                
                <div class="category-image">
                    <img src="./assets/images/Halawat.jpeg" alt="Desserts syriens" style="margin-top:10px">
                </div>
            </div>
            
            <!-- ========== BOISSONS ========== -->
            <div class="desserts-category">
                <div class="category-content">
                    <h3 class="category-subtitle">Boissons</h3>
                    
                    <div class="simple-item">
                        <span class="simple-name">Canettes 33 cl</span>
                        <span class="simple-dots"></span>
                        <span class="simple-price">2.50€</span>
                    </div>
                    
                    <div class="simple-item">
                        <span class="simple-name">Bouteilles 50 cl</span>
                        <span class="simple-dots"></span>
                        <span class="simple-price">3.00€</span>
                    </div>
                    
                    <div class="simple-item">
                        <span class="simple-name">Bouteille d'eau 50 cl</span>
                        <span class="simple-dots"></span>
                        <span class="simple-price">1.50€</span>
                    </div>
                    
                    <div class="simple-item">
                        <span class="simple-name">Ayran</span>
                        <span class="simple-dots"></span>
                        <span class="simple-price">2.50€</span>
                    </div>
                </div>
                
                <div class="category-image">
                    <img src="./assets/images/coca.jpeg" alt="Boissons fraîches">
                </div>
            </div>
            
            <!-- ========== BOISSONS CHAUDES ========== -->
            <div class="desserts-category">
                <div class="category-content">
                    <h3 class="category-subtitle">Boissons Chaudes</h3>
                    
                    <div class="simple-item">
                        <span class="simple-name">Café Expresso</span>
                        <span class="simple-dots"></span>
                        <span class="simple-price">2.50€</span>
                    </div>
                    
                    <div class="simple-item">
                        <span class="simple-name">Café Syrien</span>
                        <span class="simple-dots"></span>
                        <span class="simple-price">3.00€</span>
                    </div>
                    
                    <div class="simple-item">
                        <span class="simple-name">Thé à la menthe</span>
                        <span class="simple-dots"></span>
                        <span class="simple-price">2.50€</span>
                    </div>
                    
                    <div class="simple-item">
                        <span class="simple-name">Thé rouge</span>
                        <span class="simple-dots"></span>
                        <span class="simple-price">2.50€</span>
                    </div>
                </div>
                
                <div class="category-image">
                    <img src="./assets/images/cafe.jpeg" alt="Boissons chaudes">
                </div>
            </div>
            
            <!-- ========== GRANDE IMAGE THÉ ========== -->
            <div class="tea-banner">
                <img src="./assets/images/g.png" alt="Thé syrien traditionnel">
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