<?php
// product.php - Dedicated Product Showcase Detail Page
require_once __DIR__ . '/includes/data.php';

$productId = (isset($_GET['id']) && is_string($_GET['id'])) ? trim($_GET['id']) : 'super-twist';
$product = getProductById($productId);

if (!$product) {
    $all = getAllProducts();
    $product = reset($all) ?: null;
}

$design = 1;
$current_page = 'product';
$is_subpage = true;

// Select up to 4 related products (prefer same category, fallback to others)
$allProducts = getAllProducts();
$relatedProducts = [];

if ($product && !empty($product['id'])) {
    $currentId = (string)$product['id'];
    $currentCatKey = (string)($product['category_key'] ?? '');

    foreach ($allProducts as $pId => $p) {
        if ((string)$pId === $currentId) continue;
        if (isset($p['category_key']) && (string)$p['category_key'] === $currentCatKey) {
            $relatedProducts[] = $p;
        }
        if (count($relatedProducts) >= 4) break;
    }

    if (count($relatedProducts) < 4) {
        foreach ($allProducts as $pId => $p) {
            if ((string)$pId === $currentId) continue;
            $alreadyIn = false;
            foreach ($relatedProducts as $rp) {
                if (isset($rp['id']) && (string)$rp['id'] === (string)$pId) {
                    $alreadyIn = true;
                    break;
                }
            }
            if (!$alreadyIn) {
                $relatedProducts[] = $p;
                if (count($relatedProducts) >= 4) break;
            }
        }
    }
}

include __DIR__ . '/views/product-detail.php';

