<?php

declare(strict_types=1);

// Base URL path (para que los assets/links funcionen si el proyecto no está en la raíz del dominio).
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '/index.php';
$scriptDir = str_replace('\\', '/', dirname($scriptName));

// Si estamos en /public/ (cuando se accede por .htaccess que redirige a public/)
// ajustar para que URL_PATH sea /
if (str_ends_with($scriptDir, '/public')) {
    $scriptDir = dirname($scriptDir);
}

$scriptDir = $scriptDir === '/' ? '/' : rtrim($scriptDir, '/') . '/';

define('URL_PATH', $scriptDir);
define('APP_PATH', dirname(__DIR__));
define('VIEW_PATH', APP_PATH . '/Views');
