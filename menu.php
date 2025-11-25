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
    <link rel="stylesheet" href="./assets/style.css">
    
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
                <a href="#menu" class="btn-hero">Voir le Menu</a>
            </div>
        </div>
    </div>
</section>

<section>

        <div class="categories py-5">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link cat" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link cat" href="#">Much longer nav link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link cat" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link cat">Disabled</a>
  </li>
</ul>

        </div>


</section>

<section class="menu">
    <div class="container">
        <div class="title text-center">
            <h2>MEZZÉS</h2>
            <div class="underline"></div>
        </div>
        <div class="plat p-4 border rounded-3">
            <div class="row align-items-center">
                <div class="col-md-2 col-4 justify-content-center align-items-center d-flex">
                    <img width="120"class="plat-image" src="./assets/images/6.png" alt="">

                </div>
                <div class="col-md-10 col-8  ">
                    <div class="plat-titre d-flex justify-content-between border-bottom pb-2 mb-3 pe-5">
                        <h4>Hoummos</h4>
                        <span class="plat-price fw-bolder">7.00 €</span>
                    </div>
                    <p class="text-secondary ">yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy</p>
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