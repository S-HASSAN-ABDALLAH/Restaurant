<?php
// الصفحة الحالية
$currentPage = basename($_SERVER['PHP_SELF']);
$currentFolder = basename(dirname($_SERVER['PHP_SELF']));
?>

<!-- زر القائمة للموبايل -->
<div class="mobile-header">
    <button class="menu-btn" onclick="toggleSidebar()">☰</button>
    <img src="/restaurant/Restaurant/assets/images/Logo.webp" alt="Logo" class="mobile-logo">
</div>

<!-- Overlay للموبايل -->
<div class="sidebar-overlay" onclick="toggleSidebar()"></div>

<div class="sidebar" id="sidebar">
    <!-- Logo -->
  <div class="sidebar-header">
    <img src="/restaurant/Restaurant/assets/images/Logo.webp" alt="Logo" class="sidebar-logo">
    <small>Administration</small>
    <button class="close-btn" onclick="toggleSidebar()">✕</button>
  </div>
    
    <!-- Menu -->
    <nav class="sidebar-nav">
        <a href="/restaurant/Restaurant/admin/dashboard.php" 
           class="nav-item <?= $currentPage === 'dashboard.php' ? 'active' : '' ?>">
            <span class="icon">📊</span> Dashboard
        </a>
        
        <a href="/restaurant/Restaurant/admin/categorie/show.php" 
           class="nav-item <?= $currentFolder === 'categorie' ? 'active' : '' ?>">
            <span class="icon">📁</span> Catégories
        </a>
        
        <a href="/restaurant/Restaurant/admin/plats/show.php" 
           class="nav-item <?= $currentFolder === 'plats' ? 'active' : '' ?>">
            <span class="icon">🍽️</span> Plats
        </a>
        
        <a href="/restaurant/Restaurant/admin/frites/show.php" 
           class="nav-item <?= $currentFolder === 'frites' ? 'active' : '' ?>">
            <span class="icon">🍟</span> Frites
        </a>
        
        <a href="/restaurant/Restaurant/admin/offres/show.php" 
           class="nav-item <?= $currentFolder === 'offres' ? 'active' : '' ?>">
            <span class="icon">🏷️</span> Offres
        </a>
        
        <div class="nav-divider"></div>
        
        <a href="/restaurant/Restaurant/admin/password.php" 
           class="nav-item <?= $currentPage === 'password.php' ? 'active' : '' ?>">
            <span class="icon">🔐</span> Mot de passe
        </a>
        
        <a href="/restaurant/Restaurant/admin/logout.php" class="nav-item logout">
            <span class="icon">🚪</span> Déconnexion
        </a>
    </nav>
</div>

<style>
/* ===== Sidebar ===== */
.sidebar {
    width: 250px;
    height: 100vh;
    background: #1a1a2e;
    position: fixed;
    top: 0;
    left: 0;
    color: white;
    z-index: 1000;
    transition: transform 0.3s ease;
}

.sidebar-header {
    padding: 20px;
    text-align: center;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    position: relative;
}

.sidebar-header h4 {
    margin: 0;
    color: #D4A853;
}

.sidebar-logo {
    width: 120px;
    height: auto;
    margin-bottom: 10px;
}

.mobile-logo {
    height: 40px;
    width: auto;
    margin-left: 15px;
}

.sidebar-header small {
    color: rgba(255,255,255,0.6);
}

.close-btn {
    display: none;
    position: absolute;
    top: 10px;
    right: 10px;
    background: none;
    border: none;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
}

.sidebar-nav {
    padding: 20px 0;
}

.nav-item {
    display: flex;
    align-items: center;
    padding: 12px 20px;
    color: rgba(255,255,255,0.8);
    text-decoration: none;
    transition: all 0.3s;
}

.nav-item:hover {
    background: rgba(212, 168, 83, 0.2);
    color: #D4A853;
}

.nav-item.active {
    background: rgba(212, 168, 83, 0.3);
    color: #D4A853;
    border-left: 4px solid #D4A853;
}

.nav-item .icon {
    margin-right: 10px;
    font-size: 1.2rem;
}

.nav-divider {
    height: 1px;
    background: rgba(255,255,255,0.1);
    margin: 15px 20px;
}

.nav-item.logout:hover {
    background: rgba(220, 53, 69, 0.3);
    color: #ff6b6b;
}

/* ===== Main Content ===== */
.main-content {
    margin-left: 250px;
    padding: 20px;
    min-height: 100vh;
    background: #f4f6f9;
}

/* ===== Mobile Header ===== */
.mobile-header {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 60px;
    background: #1a1a2e;
    color: white;
    align-items: center;
    padding: 0 15px;
    z-index: 999;
}

.menu-btn {
    background: none;
    border: none;
    color: #D4A853;
    font-size: 1.8rem;
    cursor: pointer;
    padding: 5px 10px;
}

.mobile-title {
    margin-left: 15px;
    font-size: 1.2rem;
    color: #D4A853;
}

/* ===== Overlay ===== */
.sidebar-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.5);
    z-index: 998;
}

/* ===== Responsive - Mobile ===== */
@media (max-width: 768px) {
    .sidebar {
        transform: translateX(-100%);
    }
    
    .sidebar.active {
        transform: translateX(0);
    }
    
    .close-btn {
        display: block;
    }
    
    .mobile-header {
        display: flex;
    }
    
    .sidebar-overlay.active {
        display: block;
    }
    
    .main-content {
        margin-left: 0;
        padding-top: 80px;
    }
}

/* ===== Responsive Tables ===== */
@media (max-width: 768px) {
    .table-responsive {
        overflow-x: auto;
    }
    
    table {
        min-width: 500px;
    }
    
    .btn-sm {
        padding: 4px 8px;
        font-size: 0.75rem;
    }
    
    .container {
        padding-left: 10px;
        padding-right: 10px;
    }
    
    h1 {
        font-size: 1.5rem;
    }
}
</style>

<script>
function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('active');
    document.querySelector('.sidebar-overlay').classList.toggle('active');
}
</script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>