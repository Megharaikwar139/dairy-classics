<?php
// product.php - Dedicated Product Showcase Detail Page
require_once __DIR__ . '/includes/data.php';

$productId = isset($_GET['id']) ? trim($_GET['id']) : 'super-twist';
$product = getProductById($productId);

if (!$product) {
    $all = getAllProducts();
    $product = reset($all);
}

$design = 1;
$current_page = 'product';
$is_subpage = true;

// Select up to 4 related products (prefer same category, fallback to others)
$allProducts = getAllProducts();
$relatedProducts = [];

foreach ($allProducts as $pId => $p) {
    if ($pId === $product['id']) continue;
    if ($p['category_key'] === $product['category_key']) {
        $relatedProducts[] = $p;
    }
    if (count($relatedProducts) >= 4) break;
}

if (count($relatedProducts) < 4) {
    foreach ($allProducts as $pId => $p) {
        if ($pId === $product['id']) continue;
        $alreadyIn = false;
        foreach ($relatedProducts as $rp) {
            if ($rp['id'] === $pId) {
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

include __DIR__ . '/views/product-detail.php';
