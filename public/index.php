<?php

declare(strict_types=1);

require_once __DIR__ . '/../app/bootstrap.php';
require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Controllers/ServiciosController.php';

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';

// Ajusta el path si estás entrando desde /public/index.php (o si la app vive en un subdirectorio).
$base = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
$base = $base === '/' ? '' : rtrim($base, '/');
if ($base !== '' && str_starts_with($path, $base)) {
    $path = substr($path, strlen($base));
}
$path = '/' . ltrim($path, '/');

switch ($path) {
    case '/':
        (new HomeController())->index();
        break;

    case '/servicios':
        (new ServiciosController())->index();
        break;

    default:
        http_response_code(404);
        echo '404 - Página no encontrada';
        break;
}
