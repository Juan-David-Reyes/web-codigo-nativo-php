<?php

declare(strict_types=1);

// Base URL path (para que los assets/links funcionen si el proyecto no está en la raíz del dominio).
// TEMPORAL: Forzar /test/ para producción
// TODO: Implementar detección automática después de debug
if (isset($_SERVER['HTTP_HOST']) && str_contains($_SERVER['HTTP_HOST'], 'test.codigonativo.com')) {
    define('URL_PATH', '/test/');
} else {
    // Para desarrollo local
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '/index.php';
    $scriptDir = str_replace('\\', '/', dirname($scriptName));
    
    if (str_ends_with($scriptDir, '/public')) {
        $scriptDir = dirname($scriptDir);
    }
    
    $scriptDir = $scriptDir === '/' ? '/' : rtrim($scriptDir, '/') . '/';
    define('URL_PATH', $scriptDir);
}

define('APP_PATH', dirname(__DIR__));
define('VIEW_PATH', APP_PATH . '/Views');
