<?php

declare(strict_types=1);

// Base URL path (para que los assets/links funcionen si el proyecto no está en la raíz del dominio).
// Ejemplos:
// - DocumentRoot = public => URL_PATH = '/'
// - DocumentRoot = repo/ (y entras por /public/index.php) => URL_PATH = '/public/'
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
$scriptDir = $scriptDir === '/' ? '/' : rtrim($scriptDir, '/') . '/';

define('URL_PATH', $scriptDir);

define('APP_PATH', dirname(__DIR__));
define('VIEW_PATH', APP_PATH . '/Views');
