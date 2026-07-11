<?php
/**
 * Router for PHP's built-in dev server. This project keeps its front
 * controller (index.php) and public assets directly in this folder
 * (no core/public/), so the stock Laravel server.php doesn't apply.
 */
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($uri !== '/' && file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false;
}

require_once __DIR__ . '/index.php';
