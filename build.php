<?php
// build.php - Clean UTF-8 compiler for GitHub Pages export

function convertPhpLinksToHtml(string $content): string {
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
