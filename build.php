<?php
// build.php - Clean UTF-8 compiler for GitHub Pages export
require_once __DIR__ . '/includes/data.php';

function convertPhpLinksToHtml(string $content): string {
    // 1. Dynamic product.php?id=slug to product-slug.html
    $content = preg_replace(
        '/href=(["\'])product\.php\?id=([a-zA-Z0-9_\-]+)(["\'])/i', 
        'href=$1product-$2.html$3', 
        $content
    );

    // 2. Exact standard navigation replacements
    $replacements = [
        'href="career.php"' => 'href="career.html"',
        'href="careers.php"' => 'href="careers.html"',
        'href="index.php"' => 'href="index.html"',
        'href="design1.php"' => 'href="index.html"',
        'href="design2.php"' => 'href="index.html"',
        'href="career.php#' => 'href="career.html#',
        'href="careers.php#' => 'href="careers.html#',
        'href="index.php#' => 'href="index.html#',
        'href="design1.php#' => 'href="index.html#',
        'href="design2.php#' => 'href="index.html#',
    ];
    return str_replace(array_keys($replacements), array_values($replacements), $content);
}

// 1. Build index.html
ob_start();
require __DIR__ . '/index.php';
$html = ob_get_clean();
$html = convertPhpLinksToHtml($html);
file_put_contents(__DIR__ . '/index.html', $html);
echo "Compiled index.html cleanly: " . strlen($html) . " bytes.\n";

// 2. Build career.html and careers.html
ob_start();
require __DIR__ . '/career.php';
$careerHtml = ob_get_clean();
$careerHtml = convertPhpLinksToHtml($careerHtml);
file_put_contents(__DIR__ . '/career.html', $careerHtml);
file_put_contents(__DIR__ . '/careers.html', $careerHtml);
echo "Compiled career.html and careers.html cleanly: " . strlen($careerHtml) . " bytes.\n";

// 3. Build product-<id>.html for every single product in the catalog
$allProducts = getAllProducts();
$countProducts = 0;

foreach ($allProducts as $pId => $prodData) {
    $_GET['id'] = $pId;
    $product = $prodData;
    
    // Select up to 4 related products
    $relatedProducts = [];
    foreach ($allProducts as $subId => $sp) {
        if ($subId === $pId) continue;
        if ($sp['category_key'] === $prodData['category_key']) {
            $relatedProducts[] = $sp;
        }
        if (count($relatedProducts) >= 4) break;
    }
    if (count($relatedProducts) < 4) {
        foreach ($allProducts as $subId => $sp) {
            if ($subId === $pId) continue;
            $already = false;
            foreach ($relatedProducts as $rp) {
                if ($rp['id'] === $subId) { $already = true; break; }
            }
            if (!$already) {
                $relatedProducts[] = $sp;
                if (count($relatedProducts) >= 4) break;
            }
        }
    }

    $design = 1;
    $current_page = 'product';
    $is_subpage = true;

    ob_start();
    include __DIR__ . '/views/product-detail.php';
    $prodHtml = ob_get_clean();
    $prodHtml = convertPhpLinksToHtml($prodHtml);
    
    file_put_contents(__DIR__ . '/product-' . $pId . '.html', $prodHtml);
    $countProducts++;
}
echo "Compiled " . $countProducts . " individual product detail pages cleanly.\n";

// Write a fallback product.html pointing to first product
if (!empty($allProducts)) {
    $firstKey = array_key_first($allProducts);
    copy(__DIR__ . '/product-' . $firstKey . '.html', __DIR__ . '/product.html');
    echo "Compiled fallback product.html cleanly.\n";
}
