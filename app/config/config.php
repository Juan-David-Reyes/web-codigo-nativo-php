<?php

declare(strict_types=1);

// Base URL path (para que los assets/links funcionen si el proyecto no está en la raíz del dominio).
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));

// Si estamos en /test/public/, ajustar a /test/
// Esto maneja el caso donde el .htaccess raíz redirige a /public/
if (str_ends_with($scriptDir, '/public')) {
    $scriptDir = dirname($scriptDir);
}

$scriptDir = $scriptDir === '/' ? '/' : rtrim($scriptDir, '/') . '/';

define('URL_PATH', $scriptDir);

define('APP_PATH', dirname(__DIR__));
define('VIEW_PATH', APP_PATH . '/Views');
