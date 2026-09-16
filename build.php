<?php
// build.php - Clean UTF-8 compiler for GitHub Pages export
ob_start();
require __DIR__ . '/index.php';
$html = ob_get_clean();

file_put_contents(__DIR__ . '/index.html', $html);
echo "Compiled index.html cleanly: " . strlen($html) . " bytes.\n";
