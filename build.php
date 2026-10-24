<?php
// build.php - Clean UTF-8 compiler for GitHub Pages export

// 1. Build index.html
ob_start();
require __DIR__ . '/index.php';
$html = ob_get_clean();
file_put_contents(__DIR__ . '/index.html', $html);
echo "Compiled index.html cleanly: " . strlen($html) . " bytes.\n";

// 2. Build career.html and careers.html
ob_start();
require __DIR__ . '/career.php';
$careerHtml = ob_get_clean();
file_put_contents(__DIR__ . '/career.html', $careerHtml);
file_put_contents(__DIR__ . '/careers.html', $careerHtml);
echo "Compiled career.html and careers.html cleanly: " . strlen($careerHtml) . " bytes.\n";
