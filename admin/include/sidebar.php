<?php
// الصفحة الحالية
$currentPage = basename($_SERVER['PHP_SELF']);
$currentFolder = basename(dirname($_SERVER['PHP_SELF']));
?>

<div class="sidebar">
    <!-- Logo -->
    <div class="sidebar-header">
        <h4>🔥 Barbecue d'Alep</h4>
        <small>Administration</small>
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
        
        <a href="/restaurant/Restaurant/admin/logout.php" class="nav-item logout">
            <span class="icon">🚪</span> Déconnexion
        </a>
    </nav>
</div>

<style>
.sidebar {
    width: 250px;
    height: 100vh;
    background: #1a1a2e;
    position: fixed;
    top: 0;
    left: 0;
    color: white;
    z-index: 1000;
}

.sidebar-header {
    padding: 20px;
    text-align: center;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

.sidebar-header h4 {
    margin: 0;
    color: #D4A853;
}

.sidebar-header small {
    color: rgba(255,255,255,0.6);
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

/* Main content wrapper */
.main-content {
    margin-left: 250px;
    padding: 20px;
    min-height: 100vh;
    background: #f4f6f9;
}
</style>