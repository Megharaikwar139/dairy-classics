<?php
// includes/header.php - Exact Header Menu & Socials from dairyclassics.com
$current_design = isset($design) ? $design : 1;
?>

<!-- Header Navigation Bar -->
<header class="site-header <?= $current_design == 2 ? 'header-luxury' : 'header-playful' ?>" id="site-header">
  <div class="container header-inner">
    <!-- Brand Logo (User's Official Dairy Classic Logo) -->
    <a href="<?= $current_design == 2 ? 'design2.php' : 'index.php' ?>" class="brand-logo" aria-label="Dairy Classic Home">
      <div class="brand-logo-badge">
        <img src="assets/images/dairy-classic-logo.jpg" alt="Dairy Classic Since 1996" class="brand-logo-img">
      </div>
      <div class="logo-text-col">
        <span class="brand-main-name">Dairy Classic</span>
        <span class="brand-tagline-sub">Since 1996 &bull; Uzbekistan</span>
      </div>
    </a>

    <!-- Exact Navigation from dairyclassics.com -->
    <nav class="main-nav" aria-label="Main Navigation">
      <ul class="nav-links">
        <li><a href="#flavors" class="nav-link">Cones</a></li>
        <li><a href="#flavors" class="nav-link">Sticks</a></li>
        <li><a href="#categories" class="nav-link">Cups</a></li>
        <li><a href="#categories" class="nav-link">Biscuit</a></li>
        
        <!-- Others Dropdown (Exact match to dairyclassics.com) -->
        <li class="nav-item-dropdown">
          <a href="#" class="nav-link nav-dropdown-toggle" onclick="event.preventDefault()">
            <span>Others</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
          </a>
          <ul class="nav-dropdown-menu">
            <li><a href="#categories">Cassatta</a></li>
            <li><a href="#spin360">Tubs</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#craving-cta">FAQs</a></li>
            <li><a href="#stores">Contact Us</a></li>
          </ul>
        </li>
      </ul>
    </nav>

    <!-- Header Social Icons (Exact from dairyclassics.com) & CTA -->
    <div class="header-actions">
      <div class="header-socials-strip" aria-label="Official Social Channels">
        <a href="https://www.instagram.com/dairyclassic.uz/" target="_blank" rel="noopener noreferrer" class="header-soc-btn" aria-label="Instagram" title="Instagram">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
        </a>
        <a href="https://www.facebook.com/DairyClassicsIceCream/" target="_blank" rel="noopener noreferrer" class="header-soc-btn" aria-label="Facebook" title="Facebook">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
        </a>
        <a href="https://x.com/dairyclassicUz" target="_blank" rel="noopener noreferrer" class="header-soc-btn" aria-label="X Twitter" title="X Twitter">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
        </a>
        <a href="https://www.tiktok.com/@dairyclassic.uz" target="_blank" rel="noopener noreferrer" class="header-soc-btn" aria-label="TikTok" title="TikTok">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.298-.002.595.042.88.13V9.4a6.33 6.33 0 0 0-1-.08A6.34 6.34 0 0 0 3 15.66a6.34 6.34 0 0 0 10.82 4.47 6.28 6.28 0 0 0 1.93-4.47V8.71a8.28 8.28 0 0 0 4.84 1.45V6.69z"/></svg>
        </a>
        <a href="https://www.youtube.com/@dairyclassic.uz.official" target="_blank" rel="noopener noreferrer" class="header-soc-btn" aria-label="YouTube" title="YouTube">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
        </a>
      </div>

      <a href="#flavors" class="btn-header-cta <?= $current_design == 2 ? 'btn-cta-gold' : 'btn-cta-pastel' ?>">
        <span>Explore Treats</span>
      </a>
    </div>
  </div>
</header>
