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
    <title>Contact - Barbecue d'Alep</title>
    
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


<!-- ==========================================
     SECTION HERO - CONTACT
     ========================================== -->
<section class="hero-contact">
    <div class="container">
        <div class="text-content">
            <h1 class="contact-title">Contactez-nous</h1>
            <p class="contact-description">Nous serions ravis de vous accueillir</p>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION INFORMATIONS (3 Cartes)
     ========================================== -->
<section class="contact-info">
    <div class="container">
        <div class="row">
            <!-- Carte 1: Téléphone -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="info-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <h3 class="card-title">Téléphone</h3>
                    <p class="card-text">09 88 01 42 72</p>
                    <p class="card-subtitle">Pour commander ou réserver</p>
                </div>
            </div>

            <!-- Carte 2: Adresse -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="info-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h3 class="card-title">Adresse</h3>
                    <p class="card-text">7 Rue Raoul Blanchard<br>38000 Grenoble</p>
                </div>
            </div>

            <!-- Carte 3: Horaires -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="info-card">
                    <div class="card-icon">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <h3 class="card-title">Horaires</h3>
                    <p class="card-text">
                        Mardi-Samedi<br>
                        11h30-15h00 / 18h30-22h00
                    </p>
                    <p class="card-closed">Fermé dimanche & lundi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION GOOGLE MAPS
     ========================================== -->
<section class="maps-section">
    <div class="maps-header">
        <h2>Google Maps Embed</h2>
    </div>
    <div class="maps-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805.0744888888884!2d5.720367!3d45.176853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478af4b7c3f3f3f3%3A0x3f3f3f3f3f3f3f3f!2s7%20Rue%20Raoul%20Blanchard%2C%2038000%20Grenoble!5e0!3m2!1sfr!2sfr!4v1234567890" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<!-- ==========================================
     SECTION NOTRE RESTAURANT
     ========================================== -->
<section class="notre-restaurant">
    <div class="container">
        <h2 class="section-title">Notre Restaurant</h2>
        
        <div class="restaurant-gallery">
            <!-- Image 1 -->
            <div class="gallery-item">
                <img src="./assets/images/Restaurant1.webp" alt="Vue intérieure du restaurant" loading="lazy">
            </div>
            
            <!-- Image 2 -->
            <div class="gallery-item">
                <img src="./assets/images/Restaurant2.webp" alt="Plats du restaurant" loading="lazy">
            </div>
            
            <!-- Image 3 -->
            <div class="gallery-item">
                <img src="./assets/images/Restaurant3.webp" alt="Ambiance du restaurant" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     FOOTER (Inclus depuis includes)
     ========================================== -->
<?php include './includes/footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script pour navbar scroll -->
<script>
    // Ajoute une classe "scrolled" quand on scroll
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