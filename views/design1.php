<?php
// views/design1.php - Artisanal Gelateria (Warm Strawberry & Cream Palette)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dairy Classics | Pure Artisanal Joy</title>
  <meta name="description" content="100% single-origin farm milk, slow-churned artisanal ice cream. Discover Dairy Classics.">
  <link rel="stylesheet" href="assets/css/shared.css">
  <link rel="stylesheet" href="assets/css/design1.css">
</head>
<body class="theme-artisanal">

<?php include 'includes/header.php'; ?>

<main id="main-content">
  <!-- ========================================================
       SECTION 1: HERO (Artisanal 3D Floating Stage)
       ======================================================== -->
  <section class="art-hero" id="hero">
    <div class="art-hero-bg" id="art-hero-bg"></div>

    <div class="container art-hero-layout">
      <!-- Minimal Headline & Copy -->
      <div class="art-hero-text">
        <div class="art-badge-pill">
          <span class="pill-spark">🍨</span>
          <span>100% SINGLE-FARM JERSEY MILK</span>
        </div>

        <h1 class="art-headline">
          Pure Joy in <br>
          <span class="art-berry-title" id="art-title-highlight">Every Scoop.</span>
        </h1>

        <p class="art-subtitle" id="art-sub-desc">
          Single-origin farm milk, slow-churned in small batches with honest, all-natural European ingredients.
        </p>

        <div class="art-cta-row">
          <a href="#flavors" class="btn-art-primary" id="art-order-cta" onclick="addToCart(currentFlavor.name)">
            <span>Order Delivery</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#stores" class="btn-art-secondary">
            <span>Find Parlours</span>
          </a>
        </div>

        <div class="art-tags-row" id="art-tags-row">
          <span class="art-tag">🍦 Bourbon Vanilla</span>
          <span class="art-tag">🥛 16% Butterfat</span>
          <span class="art-tag">🌿 Zero Artificial Gums</span>
        </div>
      </div>

      <!-- Center 3D Floating Product Stage -->
      <div class="art-hero-stage" id="art-hero-stage">
        <div class="art-glow-halo" id="art-glow-halo"></div>

        <!-- 3D Planetary Orbiting Particles System (Earth-like Orbits) -->
        <div class="orbit-system-wrap" id="orbit-system-wrap">
          <!-- Orbital Cosmic Ring -->
          <svg class="orbit-ring-svg" viewBox="0 0 580 580">
            <ellipse cx="290" cy="290" rx="250" ry="120" class="orbit-ellipse-path"/>
          </svg>

          <!-- Track 1: Outer Orbit -->
          <div class="orbit-track orbit-track-1">
            <div class="orbit-item orbit-item-1">
              <img id="orbit-particle-1" src="assets/images/particles/particle-vanilla-orchid.png" alt="Orbiting Ingredient 1">
            </div>
          </div>

          <!-- Track 2: Wider Elliptical Orbit -->
          <div class="orbit-track orbit-track-2">
            <div class="orbit-item orbit-item-2">
              <img id="orbit-particle-2" src="assets/images/particles/particle-cocoa-bean.png" alt="Orbiting Ingredient 2">
            </div>
          </div>

          <!-- Track 3: Fast Inner Orbit -->
          <div class="orbit-track orbit-track-3">
            <div class="orbit-item orbit-item-3">
              <img id="orbit-particle-3" src="assets/images/particles/particle-mint-leaf.png" alt="Orbiting Ingredient 3">
            </div>
          </div>
        </div>

        <!-- Center 3D Transparent Product Tub -->
        <div class="art-tub-anchor" id="art-tub-anchor">
          <img id="art-stage-img" src="assets/images/products/french-vanilla-splash-tub.png" alt="French Vanilla Royale" class="art-stage-tub hero-splash-active-tub">
          <div class="art-tub-shadow"></div>
        </div>

        <!-- Dynamic Flavor Capsule (Pure Brand Portfolio - No Price) -->
        <div class="art-price-pill" id="art-price-pill">
          <div>
            <span class="art-pill-name" id="art-pill-name">French Vanilla Royale</span>
            <span class="art-pill-size">500ml Gourmet Pint &bull; 100% Real Milk</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Minimal Flavor Selector Strip -->
    <div class="art-flavor-strip">
      <div class="container art-strip-inner">
        <span class="art-strip-title">Select Flavor:</span>
        <div class="art-strip-buttons">
          <button class="art-tab-btn active" data-flavor="french-vanilla">
            <span class="swatch" style="background:#C59B4B;"></span>
            <span>French Vanilla</span>
          </button>
          <button class="art-tab-btn" data-flavor="belgian-chocolate">
            <span class="swatch" style="background:#54311C;"></span>
            <span>Belgian Chocolate</span>
          </button>
          <button class="art-tab-btn" data-flavor="mint-pistachio">
            <span class="swatch" style="background:#3D7356;"></span>
            <span>Mint Pistachio</span>
          </button>
          <button class="art-tab-btn" data-flavor="almond-crunch">
            <span class="swatch" style="background:#8C5627;"></span>
            <span>Almond Crunch Bar</span>
          </button>
          <button class="art-tab-btn" data-flavor="celebration-cake">
            <span class="swatch" style="background:#B83248;"></span>
            <span>Gateau Cake</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 2: 3D/2D INTERACTIVE SHOWCASE SLIDER
       ======================================================== -->
  <section class="section-360-viewer choco-theme-360" id="spin360">
    <div class="choco-ambient-radial"></div>

    <div class="container">
      <div class="sec-head-360">
        <span class="badge-360-pill choco-gold-badge">
          <span>✦ 3D / 2D INTERACTIVE SHOWCASE SLIDER</span>
        </span>
        <h2 class="title-360 choco-title">Signature Churned Creations</h2>
        <p class="subtitle-360 choco-sub">Explore our handcrafted creations in responsive 3D. Move your cursor across or drag to inspect every decadent detail.</p>
      </div>

      <div class="showcase-slider-card">
        <!-- Minimal Top HUD Bar with Slider Navigation (Timer Removed) -->
        <div class="showcase-top-bar">
          <div class="showcase-counter-pill">
            <span class="showcase-counter-num" id="showcase-counter-text">01 / 06</span>
            <span>SIGNATURE CREATION</span>
          </div>

          <div class="showcase-cue-hint">
            <span class="showcase-cue-pulse"></span>
            <span>Move cursor or drag to spin in 3D</span>
          </div>

          <div class="showcase-nav-controls">
            <button class="showcase-nav-btn" id="showcase-prev-btn" aria-label="Previous Product">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="showcase-nav-btn" id="showcase-next-btn" aria-label="Next Product">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </button>
          </div>
        </div>

        <!-- Split Grid: Product Details & 3D Interactive Stage -->
        <div class="showcase-split-grid">
          <!-- Left Info Pane -->
          <div class="showcase-info-pane">
            <span class="showcase-cat-badge" id="showcase-cat-badge">Artisanal Pint</span>
            <h3 class="showcase-prod-title" id="showcase-title">Belgian Chocolate Truffle</h3>
            <p class="showcase-prod-desc" id="showcase-desc">Single-origin 72% dark cocoa ribbons folded into velvet gelato, finished with handmade chocolate truffles and rich cocoa dust.</p>
            
            <div class="showcase-chips-row" id="showcase-chips">
              <span class="showcase-chip">72% Belgian Couverture</span>
              <span class="showcase-chip">Jersey Butterfat</span>
              <span class="showcase-chip">Dark Cocoa Truffles</span>
            </div>

            <div class="showcase-footer-row">
              <span class="card-pure-badge" style="font-size: 0.88rem; padding: 6px 16px;">100% Real Farm Milk</span>
              <span class="showcase-size-spec" id="showcase-size" style="font-size: 0.82rem; font-weight: 600; opacity: 0.75;">500ml Gourmet Pint</span>
            </div>
          </div>

          <!-- Right 3D Interactive Stage -->
          <div class="showcase-stage-pane" id="stage-360">
            <div class="showcase-ambient-glow" id="showcase-glow"></div>
            <div class="showcase-stage-disc"></div>
            <div class="specular-glow" id="specular-glow"></div>

            <!-- 3D Rotating Anchor -->
            <div class="rotator-3d-wrap" id="rotator-3d-wrap">
              <img id="product-360-img" src="assets/images/products/belgian-chocolate-tub.png" alt="Belgian Chocolate Truffle 360" class="product-360-visual" draggable="false">
              <div class="rotator-shadow" id="rotator-shadow"></div>
            </div>

            <!-- Custom Cursor Pointer Animation -->
            <div class="choco-cursor-tracker" id="choco-cursor-tracker">
              <div class="tracker-ring"></div>
              <div class="tracker-core">
                <span class="tracker-arrow-left">◂</span>
                <span class="tracker-icon">360°</span>
                <span class="tracker-arrow-right">▸</span>
              </div>
              <div class="tracker-ripple"></div>
            </div>
          </div>
        </div>

        <!-- Slider Dots Bar -->
        <div class="showcase-dots-bar" id="showcase-dots-bar">
          <button class="showcase-dot-btn active" data-index="0" aria-label="Slide 1"></button>
          <button class="showcase-dot-btn" data-index="1" aria-label="Slide 2"></button>
          <button class="showcase-dot-btn" data-index="2" aria-label="Slide 3"></button>
          <button class="showcase-dot-btn" data-index="3" aria-label="Slide 4"></button>
          <button class="showcase-dot-btn" data-index="4" aria-label="Slide 5"></button>
          <button class="showcase-dot-btn" data-index="5" aria-label="Slide 6"></button>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 3: FRESH CHURNED PINTS & CONES (Clean Static Cards)
       ======================================================== -->
  <section class="section-pints-slider" id="flavors">
    <div class="container">
      <div class="pints-slider-head">
        <div>
          <span class="pill-kicker-pink">SMALL-BATCH LINEUP</span>
          <h2 class="pints-slider-title">Fresh Churned Treats</h2>
        </div>
        <div class="slider-arrows-wrap">
          <button class="slider-arrow-btn prev-arrow" id="pints-arrow-prev" onclick="if(window.scrollPintsSlider) window.scrollPintsSlider(-1)" aria-label="Previous Products">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 18l-6-6 6-6"/></svg>
          </button>
          <button class="slider-arrow-btn next-arrow" id="pints-arrow-next" onclick="if(window.scrollPintsSlider) window.scrollPintsSlider(1)" aria-label="Next Products">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
          </button>
        </div>
      </div>

      <div class="pints-track-viewport" id="pints-viewport">
        <div class="pints-cards-track" id="pints-track">
          <?php foreach ($products as $id => $p): ?>
            <div class="pints-pop-card">
              <!-- Clean Card: Removed behind-image tag badge -->
              <div class="card-tub-popout">
                <img src="<?= $p['image'] ?>" alt="<?= $p['name'] ?>" loading="lazy">
              </div>

              <span class="card-meta-category"><?= $p['category'] ?> • <?= $p['size'] ?></span>
              <h3 class="card-pop-title"><?= $p['name'] ?></h3>
              <p class="card-pop-desc"><?= htmlspecialchars($p['description']) ?></p>

              <!-- Clean Static Action Row (No Price, Clean Quality Hallmark) -->
              <div class="card-foot-action-row" style="justify-content: center;">
                <span class="card-pure-badge" style="width: 100%; text-align: center;">100% Real Farm Milk</span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 4: EXPLORE BY CATEGORY (Live Dairy Classics Content)
       ======================================================== -->
  <section class="section-categories" id="categories">
    <!-- Atmospheric Rain of Products Container -->
    <div class="category-product-rain-container" id="category-product-rain" aria-hidden="true"></div>

    <div class="container" style="position: relative; z-index: 2;">
      <div class="art-section-head text-center">
        <span class="art-kicker">CURATED RANGE</span>
        <h2 class="art-title">Explore by Category</h2>
        <p class="art-desc" style="max-width: 600px; margin: 10px auto 0;">Discover the full portfolio of Dairy Classic crafted in Uzbekistan since 1996.</p>
      </div>

      <div class="categories-grid">
        <div class="cat-explore-card" data-card-index="0">
          <div class="cat-explore-img-wrap">
            <img src="assets/images/products/golden-fantasy.png" alt="Gourmet Cones" class="cat-explore-img">
            <div class="card-landing-ripple"></div>
            <div class="card-drop-shadow"></div>
          </div>
          <h3 class="cat-explore-title">Gourmet Cones</h3>
          <span class="cat-explore-sub">Golden Fantasy & Choco Boom</span>
        </div>

        <div class="cat-explore-card" data-card-index="1">
          <div class="cat-explore-img-wrap">
            <img src="assets/images/products/almond-crunch-bar.png" alt="Sticks & Bars" class="cat-explore-img">
            <div class="card-landing-ripple"></div>
            <div class="card-drop-shadow"></div>
          </div>
          <h3 class="cat-explore-title">Sticks & Bars</h3>
          <span class="cat-explore-sub">Almond Praline & Vega Bar</span>
        </div>

        <div class="cat-explore-card" data-card-index="2">
          <div class="cat-explore-img-wrap">
            <img src="assets/images/products/belgian-chocolate-tub.png" alt="Artisanal Tubs" class="cat-explore-img">
            <div class="card-landing-ripple"></div>
            <div class="card-drop-shadow"></div>
          </div>
          <h3 class="cat-explore-title">Artisanal Tubs</h3>
          <span class="cat-explore-sub">500ml Churned Gourmet Pints</span>
        </div>

        <div class="cat-explore-card" data-card-index="3">
          <div class="cat-explore-img-wrap">
            <img src="assets/images/products/chocolate-celebration-cake.png" alt="Gateau Cakes" class="cat-explore-img">
            <div class="card-landing-ripple"></div>
            <div class="card-drop-shadow"></div>
          </div>
          <h3 class="cat-explore-title">Celebration Cakes</h3>
          <span class="cat-explore-sub">Layered Gelato Gateaux</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 5: THE DELICIOUS DIFFERENCE / OUR STORY (oklch(25% .075 40))
       ======================================================== -->
  <section class="section-story-delicious" id="about">
    <div class="container">
      <div class="story-delicious-card">
        <!-- Left Visual Side with Floating Badge -->
        <div class="story-delicious-visual">
          <img src="assets/images/story-chocolate-churn.jpg" alt="Good things take time. Great ice cream does too." loading="lazy">
          <div class="story-floating-badge">
            <span class="story-badge-icon">🥛</span>
            <div>
              <strong class="story-badge-title">Farm-fresh milk</strong>
              <span class="story-badge-sub">Churned within 24 hours</span>
            </div>
          </div>
        </div>

        <!-- Right Content Side with oklch(25% 0.075 40) Background -->
        <div class="story-delicious-content">
          <span class="story-kicker-gold">THE DELICIOUS DIFFERENCE</span>
          <h2 class="story-main-heading">Good things take time. Great ice cream does too.</h2>
          <p class="story-body-text">
            We begin with milk from trusted local farms, then fold in ingredients chosen at their flavorful peak. Slow churning creates our signature velvety texture — no shortcuts, just honest craft.
          </p>

          <div class="story-features-grid">
            <div class="story-feature-item">
              <span class="story-feature-icon">🍃</span>
              <div>
                <h4 class="story-feature-title">Thoughtfully sourced</h4>
                <p class="story-feature-desc">Better ingredients, naturally.</p>
              </div>
            </div>
            <div class="story-feature-item">
              <span class="story-feature-icon">✨</span>
              <div>
                <h4 class="story-feature-title">Slow churned</h4>
                <p class="story-feature-desc">For that velvet finish.</p>
              </div>
            </div>
          </div>

          <div class="story-actions-row">
            <a href="#video-craft" class="btn-story-white">
              <span>Our story</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 6: 3D VIDEO CRAFT SHOWCASE (Live Churn Experience)
       ======================================================== -->
  <section class="section-video-craft" id="video-craft">
    <div class="container">
      <div class="video-craft-grid">
        <div class="video-craft-text">
          <div class="video-badge-pill">
            <span class="v-dot"></span>
            <span>SINCE 1996 • 3D CHURNING PROCESS</span>
          </div>
          <h2 class="video-craft-heading">
            Pure Cream in Motion. <br>
            <span>Slow-Churned 3D Craft.</span>
          </h2>
          <p class="video-craft-desc">
            Experience the authentic swirl of Dairy Classic. We cold-churn single-origin farm milk with zero artificial overrun, capturing rich density that melts luxuriously on the tongue.
          </p>

          <div class="video-craft-metrics">
            <div class="v-metric-item">
              <span class="v-metric-val">16%</span>
              <span class="v-metric-lbl">Jersey Butterfat</span>
            </div>
            <div class="v-metric-item">
              <span class="v-metric-val">40L</span>
              <span class="v-metric-lbl">Micro Batches</span>
            </div>
            <div class="v-metric-item">
              <span class="v-metric-val">-18°C</span>
              <span class="v-metric-lbl">Cold Preserved</span>
            </div>
          </div>

          <div class="v-action-row">
            <a href="#spin360" class="btn-video-explore">
              <span>Spin in 360° 3D</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>

        <div class="video-player-wrap">
          <div class="video-screen-glow"></div>
          <div class="video-frame">
            <video id="craft-hero-video" class="craft-video-element" autoplay loop muted playsinline poster="assets/images/3d-elements/milk-chocolate-splash.jpg">
              <source src="assets/videos/hero-bricket.mp4" type="video/mp4">
              <source src="https://dairyclassics.com/wp-content/uploads/2025/05/Final-Bricket.mp4" type="video/mp4">
            </video>
            
            <div class="video-overlay-badge">
              <span class="v-pulse-dot"></span>
              <span>Official Dairy Classic 3D Video</span>
            </div>

            <div class="video-player-controls">
              <button class="btn-v-ctrl" id="btn-video-toggle" onclick="toggleCraftVideo()" aria-label="Play or Pause Video">
                <span id="video-play-icon">⏸</span>
              </button>
              <button class="btn-v-ctrl" id="btn-video-sound" onclick="toggleCraftAudio()" aria-label="Mute or Unmute Video">
                <span id="video-sound-icon">🔇</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 7: PURE INDULGENCE WITH EVERY SCOOP (Live Website Section)
       ======================================================== -->
  <section class="section-pure-indulgence" id="indulgence">
    <!-- Floating 3D Elements (Top-Right Choco Scoop & Bottom-Left Mint Scoop) -->
    <div class="floating-3d-decor decor-top-right decor-scoop" aria-hidden="true">
      <img src="assets/images/3d-elements/choco-splash-float.png" alt="3D Floating Chocolate Splash Scoop" class="float-3d-img">
      <div class="float-3d-shadow"></div>
    </div>
    <div class="floating-3d-decor decor-bottom-left decor-scoop" aria-hidden="true">
      <img src="assets/images/3d-elements/mint-scoop-float.png" alt="3D Floating Mint Scoop" class="float-3d-img">
      <div class="float-3d-shadow"></div>
    </div>

    <div class="container">
      <div class="indulgence-split-card">
        <div class="indulgence-text-col">
          <span class="heritage-badge">FINEST INGREDIENTS</span>
          <h2 class="heritage-main-title">Pure Indulgence With Every Scoop</h2>
          <p class="heritage-desc">
            Crafted with passion, our ice creams bring pure delight in every bite. Made with the finest ingredients, we ensure a rich, creamy experience. From classic flavors to exciting twists, there's something for everyone. Taste the tradition, love the flavor!
          </p>
          <div class="heritage-actions-row">
            <a href="#flavors" class="btn-heritage-primary">Explore Treats</a>
            <a href="#about" class="btn-heritage-secondary">Our Story</a>
          </div>
        </div>

        <div class="indulgence-img-collage">
          <div class="indulgence-collage-item">
            <img src="assets/images/products/golden-fantasy.png" alt="Golden Fantasy Cone" loading="lazy">
            <span class="collage-item-name">Golden Fantasy</span>
          </div>
          <div class="indulgence-collage-item">
            <img src="assets/images/products/round-pie.webp" alt="Round Pie" loading="lazy">
            <span class="collage-item-name">Round Pie</span>
          </div>
          <div class="indulgence-collage-item">
            <img src="assets/images/products/sandwich.webp" alt="Sandwich Biscuit" loading="lazy">
            <span class="collage-item-name">Sandwich Biscuit</span>
          </div>
          <div class="indulgence-collage-item">
            <img src="assets/images/products/vega-bar.png" alt="Vega Bar" loading="lazy">
            <span class="collage-item-name">Vega Crunchy Bar</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 8: UZBEKISTAN'S FAVORITE ICE CREAM (Live Website Section)
       ======================================================== -->
  <section class="section-heritage" id="uzbekistan-favorite" style="padding-top: 20px;">
    <div class="container">
      <div class="heritage-split-grid">
        <div class="heritage-text-col">
          <span class="heritage-badge">LOCAL PRIDE &amp; TRADITION</span>
          <h2 class="heritage-main-title">Uzbekistan's Favorite Ice Cream</h2>
          <p class="heritage-desc">
            Bringing smiles with every scoop, one indulgence at a time. From nostalgic classics to exciting new treats, we have it all. A world of flavor, crafted for pure happiness. Dive into delight today!
          </p>
          <div class="heritage-actions-row">
            <a href="#about" class="btn-heritage-primary">About Us</a>
            <a href="#stores" class="btn-heritage-secondary">Find a Parlour</a>
          </div>
        </div>

        <div class="heritage-visual-wrap">
          <img src="assets/images/3d-elements/waffle-cone-scoop.jpg" alt="Uzbekistan Favorite Ice Cream Since 1996" loading="lazy">
          <div class="heritage-stamp">PRIDE OF UZBEKISTAN</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 9: SIGNATURE RECIPES (Creamica Milkshake - dairyclassics.com)
       ======================================================== -->
  <section class="section-recipes" id="recipes">
    <!-- Floating 3D Elements (Top-Right Vanilla Scoop & Bottom-Left Cube) -->
    <div class="floating-3d-decor decor-top-right decor-scoop" aria-hidden="true">
      <img src="assets/images/3d-elements/vanilla-scoop-float.png" alt="3D Floating Vanilla Splash Scoop" class="float-3d-img">
      <div class="float-3d-shadow"></div>
    </div>
    <div class="floating-3d-decor decor-bottom-left decor-cube" aria-hidden="true">
      <img src="assets/images/3d-elements/ice-cream-cube-3d.png" alt="3D Floating Ice Cream Cube" class="float-3d-img">
      <div class="float-3d-shadow"></div>
    </div>

    <div class="container">
      <div class="recipes-card">
        <div class="recipes-info-col">
          <span class="recipe-badge">SIGNATURE RECIPE</span>
          <h2 class="recipe-title">Creamica Milkshake</h2>
          <p class="recipe-desc">Iconic recipe with just few ingredients, best for summers. Creamy taste of Dairy classic creamica in your milkshake.</p>
          
          <div class="recipe-steps-list">
            <div class="recipe-step-item">
              <span class="step-circle">1</span>
              <span>Scoop 2 generous scoops of Belgian Chocolate or French Vanilla into a blender.</span>
            </div>
            <div class="recipe-step-item">
              <span class="step-circle">2</span>
              <span>Add 150ml of chilled whole farm milk and 1 tablespoon of dark cocoa powder or fresh berries.</span>
            </div>
            <div class="recipe-step-item">
              <span class="step-circle">3</span>
              <span>Blend on medium for 35 seconds until ultra-thick and velvety. Pour into a chilled tall glass and garnish with roasted nuts.</span>
            </div>
          </div>
        </div>

        <div class="recipe-img-box">
          <img src="assets/images/products/french-vanilla-splash-tub.png" alt="Creamica Milkshake Glass" loading="lazy">
        </div>
      </div>
    </div>
  </section>


  <!-- ========================================================
       SECTION 10: GOT A CRAVING OR A QUESTION? (Live Website Section)
       ======================================================== -->
  <section class="section-craving-cta" id="craving-cta">
    <div class="container">
      <div class="craving-cta-box">
        <h2>Got a Craving or a Question?</h2>
        <p>Have a question or looking for something special? We’d love to hear from you! Reach out and let’s make every moment delicious.</p>
        <div class="craving-cta-actions">
          <a href="#stores" class="btn-cta-contact">Contact Us</a>
          <a href="tel:+998781203377" class="btn-cta-phone">
            <span>📞 +99878 120 33 77</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 11: PARLOUR & FACTORY NETWORK (Uzbekistan Locations)
       ======================================================== -->
  <section class="art-section" id="stores">
    <div class="container">
      <div class="art-stores-grid">
        <!-- Parlours Column -->
        <div class="art-stores-col">
          <span class="art-kicker">OFFICIAL DESTINATIONS</span>
          <h3 class="art-sub-heading">Experience Centers</h3>

          <div class="art-city-chips">
            <button class="city-tab-btn active" data-city="all">All</button>
            <button class="city-tab-btn" data-city="Tashkent">Tashkent</button>
            <button class="city-tab-btn" data-city="Samarkand">Samarkand</button>
            <button class="city-tab-btn" data-city="Bukhara">Bukhara</button>
          </div>

          <div class="art-store-list">
            <?php foreach ($store_locations as $store): ?>
              <div class="art-store-item" data-city="<?= $store['city'] ?>">
                <div class="store-top">
                  <strong><?= $store['area'] ?></strong>
                  <span class="store-pill"><?= $store['status'] ?></span>
                </div>
                <p class="store-addr"><?= $store['address'] ?></p>
                <div class="store-foot">
                  <span><?= $store['hours'] ?> • <?= $store['phone'] ?></span>
                  <a href="https://maps.google.com/?q=<?= urlencode($store['address']) ?>" target="_blank" class="store-link">Directions ↗</a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Reviews Column -->
        <div class="art-reviews-col">
          <span class="art-kicker">VERIFIED HERITAGE</span>
          <h3 class="art-sub-heading">What Customers Say</h3>

          <div class="art-review-box">
            <div class="art-stars">★★★★★</div>
            <p class="art-quote">“The Golden Fantasy cone and Belgian Truffle pint are absolute perfection. No artificial oily aftertaste, just pure cream that melts beautifully.”</p>
            <span class="art-author">— Alisher K., Tashkent</span>
          </div>

          <div class="art-review-box">
            <div class="art-stars">★★★★★</div>
            <p class="art-quote">“Dairy Classic has been a family favorite since childhood in 1996. The new cones and Vega bars have raised the standard even higher!”</p>
            <span class="art-author">— Nilufar R., Samarkand</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Scroll-Driven Flight Animation Proxy (Hero to 3D Showcase) -->
  <div id="flight-proxy-tub" aria-hidden="true">
    <img id="flight-proxy-img" src="assets/images/products/french-vanilla-splash-tub.png" alt="Flying Ice Cream Tub">
  </div>
</main>

<?php include 'includes/footer.php'; ?>
