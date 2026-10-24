<?php
// views/product-detail.php - Dedicated Product Showcase Detail Page
$current_page = 'product';
$is_subpage = true;
$home_url = 'index.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($product['name']) ?> | Dairy Classic Artisanal Ice Cream</title>
  <meta name="description" content="<?= htmlspecialchars(substr($product['description'], 0, 155)) ?>. Crafted by Dairy Classic (Since 1996).">
  
  <link rel="stylesheet" href="assets/css/shared.css">
  <link rel="stylesheet" href="assets/css/design1.css">
  <link rel="stylesheet" href="assets/css/product-detail.css">
</head>
<body class="theme-artisanal page-product-detail">

<?php include __DIR__ . '/../includes/header.php'; ?>

<main id="main-content">
  <!-- Top Breadcrumb & Return Bar -->
  <section class="prod-breadcrumb-bar">
    <div class="container prod-breadcrumb-inner">
      <nav class="prod-breadcrumb-nav" aria-label="Breadcrumb">
        <a href="index.html">Home</a>
        <span class="sep">/</span>
        <a href="index.html#catalog-showcase">Treats</a>
        <span class="sep">/</span>
        <a href="index.html#catalog-showcase" onclick="if(window.filterCatalogCategory) window.filterCatalogCategory('<?= $product['category_key'] ?>')"><?= htmlspecialchars($product['category']) ?></a>
        <span class="sep">/</span>
        <span class="current"><?= htmlspecialchars($product['name']) ?></span>
      </nav>

      <a href="index.html#catalog-showcase" class="btn-back-treats" aria-label="Back to all treats">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        <span>Back to Treats</span>
      </a>
    </div>
  </section>

  <!-- Product Hero Showcase -->
  <section class="section-prod-hero">
    <div class="container prod-hero-grid">
      <!-- Left Column: Visual Showcase Pedestal -->
      <div class="prod-visual-col">
        <div class="prod-pedestal-card">
          <div class="prod-badge-corner">
            <span><?= htmlspecialchars($product['badge']) ?></span>
          </div>

          <div class="prod-image-wrapper">
            <img src="<?= htmlspecialchars($product['image']) ?>" 
                 alt="<?= htmlspecialchars($product['name']) ?>" 
                 class="prod-hero-img"
                 loading="eager"
                 decoding="async">
            <div class="prod-radial-glow"></div>
          </div>

          <div class="prod-pedestal-footer">
            <span class="hallmark-dot"></span>
            <span>100% Real Farm Milk &bull; Sub-Zero -18&deg;C Cold Chain</span>
          </div>
        </div>
      </div>

      <!-- Right Column: Information & Actions -->
      <div class="prod-info-col">
        <div class="prod-meta-strip">
          <span class="prod-cat-pill"><?= htmlspecialchars($product['category']) ?></span>
          <span class="prod-size-pill"><?= htmlspecialchars($product['size']) ?></span>
          <span class="prod-since-pill">Since 1996</span>
        </div>

        <h1 class="prod-title"><?= htmlspecialchars($product['name']) ?></h1>

        <div class="prod-rating-strip">
          <div class="stars-cluster">★★★★★</div>
          <span class="rating-score">4.9 / 5.0</span>
          <span class="rating-count">(<?= number_format($product['reviews_count']) ?> reviews across Uzbekistan)</span>
        </div>

        <p class="prod-lead-desc"><?= htmlspecialchars($product['description']) ?></p>

        <!-- Tasting Notes Section -->
        <div class="prod-section-block">
          <h3 class="prod-subheading">Flavor Profile &amp; Tasting Notes</h3>
          <div class="tasting-chips-row">
            <?php foreach ($product['tasting_notes'] as $note): ?>
              <span class="tasting-chip">
                <span class="chip-sparkle">✦</span>
                <span><?= htmlspecialchars($note) ?></span>
              </span>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Quick Facts Matrix -->
        <div class="prod-section-block">
          <h3 class="prod-subheading">Craftsmanship &amp; Nutrition Facts</h3>
          <div class="facts-grid">
            <div class="fact-card">
              <span class="fact-icon">⚡</span>
              <div>
                <span class="fact-val"><?= htmlspecialchars($product['calories']) ?></span>
                <span class="fact-lbl">Energy / Serving</span>
              </div>
            </div>
            <div class="fact-card">
              <span class="fact-icon">🥛</span>
              <div>
                <span class="fact-val">100% Whole Milk</span>
                <span class="fact-lbl">Farm Pure Butterfat</span>
              </div>
            </div>
            <div class="fact-card">
              <span class="fact-icon">💪</span>
              <div>
                <span class="fact-val"><?= htmlspecialchars($product['protein']) ?></span>
                <span class="fact-lbl">Natural Protein</span>
              </div>
            </div>
            <div class="fact-card">
              <span class="fact-icon">❄️</span>
              <div>
                <span class="fact-val">-18&deg;C Sub-Zero</span>
                <span class="fact-lbl">Storage Temp</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Purchase & Retail Inquiries CTAs -->
        <div class="prod-actions-wrap">
          <a href="#retailers" class="btn-prod-primary">
            <span>Where to Buy in Stores</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>

          <a href="https://t.me/DC_Dairy" target="_blank" rel="noopener noreferrer" class="btn-prod-telegram">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69a.2.2 0 0 0-.05-.18c-.06-.05-.14-.03-.21-.02-.09.02-1.49.95-4.22 2.79-.4.27-.76.41-1.08.4-.36-.01-1.04-.2-1.55-.37-.63-.2-1.12-.31-1.08-.66.02-.18.27-.36.74-.55 2.92-1.27 4.86-2.11 5.83-2.51 2.78-1.16 3.35-1.36 3.73-1.36.08 0 .27.02.39.12.1.08.13.19.14.27-.01.06.01.24 0 .38z"/></svg>
            <span>Inquire on Telegram</span>
          </a>

          <a href="tel:+998781203377" class="btn-prod-phone">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <span>+99878 120 33 77</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Supermarket Retailers Section -->
  <section class="section-retailers" id="retailers">
    <div class="container">
      <div class="retailers-card">
        <div class="retail-info-left">
          <span class="retail-kicker">NATIONWIDE AVAILABILITY</span>
          <h2 class="retail-title">Available in 1,200+ Freezers Across Uzbekistan</h2>
          <p class="retail-desc">
            Find <?= htmlspecialchars($product['name']) ?> freshly restocked daily in all leading supermarket chains, neighborhood convenience stores, and regional depots in Tashkent, Samarkand, and Bukhara.
          </p>
          <div class="supermarket-badges-row">
            <span class="supermarket-pill">🛒 Korzinka</span>
            <span class="supermarket-pill">🛍️ Makro</span>
            <span class="supermarket-pill">🏬 Havas</span>
            <span class="supermarket-pill">🏪 Baraka Market</span>
            <span class="supermarket-pill">📍 Tashkent Supermarkets</span>
          </div>
        </div>
        <div class="retail-info-right">
          <div class="factory-info-box">
            <strong>Direct Factory Orders</strong>
            <p>For supermarket distribution, weddings, or wholesale party bulk orders, reach our Tashkent HQ dispatch team.</p>
            <div class="factory-contacts">
              <span>📍 БУТ 5, Tashkent, Uzbekistan</span>
              <span>📞 +998 90 998 2019 (Tashkent Hub)</span>
              <span>📞 +998 90 502 9292 (Samarkand Hub)</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Treats Section -->
  <?php if (!empty($relatedProducts)): ?>
    <section class="section-related-treats">
      <div class="container">
        <div class="related-head-row">
          <div>
            <span class="section-kicker">YOU MAY ALSO LOVE</span>
            <h2 class="section-title-large">More Artisanal Creations</h2>
          </div>
          <a href="index.html#catalog-showcase" class="btn-view-all-link">
            <span>View All Treats</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="related-products-grid">
          <?php foreach ($relatedProducts as $rel): ?>
            <div class="rel-product-card">
              <div class="rel-badge"><?= htmlspecialchars($rel['badge']) ?></div>
              <a href="product.php?id=<?= urlencode($rel['id']) ?>" class="rel-visual-box" aria-label="<?= htmlspecialchars($rel['name']) ?>">
                <img src="<?= htmlspecialchars($rel['image']) ?>" alt="<?= htmlspecialchars($rel['name']) ?>" loading="lazy">
              </a>
              <div class="rel-info-box">
                <span class="rel-meta"><?= htmlspecialchars($rel['category']) ?> &bull; <?= htmlspecialchars($rel['size']) ?></span>
                <h3 class="rel-name">
                  <a href="product.php?id=<?= urlencode($rel['id']) ?>"><?= htmlspecialchars($rel['name']) ?></a>
                </h3>
                <p class="rel-desc"><?= htmlspecialchars(substr($rel['description'], 0, 95)) ?>...</p>
                <div class="rel-foot">
                  <a href="product.php?id=<?= urlencode($rel['id']) ?>" class="btn-rel-details">
                    <span>Explore Treat</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
