<?php

declare(strict_types=1);

// Base URL path (para que los assets/links funcionen si el proyecto no está en la raíz del dominio).
// Usar REQUEST_URI en lugar de SCRIPT_NAME cuando hay reescritura con .htaccess
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '/index.php';

// Obtener el directorio base desde SCRIPT_NAME
$scriptDir = str_replace('\\', '/', dirname($scriptName));

// Si estamos en /test/public/ (acceso directo) o /test/ (por .htaccess), normalizar a /test/
if (str_ends_with($scriptDir, '/public')) {
    $scriptDir = dirname($scriptDir);
}

$scriptDir = $scriptDir === '/' ? '/' : rtrim($scriptDir, '/') . '/';

define('URL_PATH', $scriptDir);

define('APP_PATH', dirname(__DIR__));
define('VIEW_PATH', APP_PATH . '/Views');
