<?php

declare(strict_types=1);

require_once __DIR__ . '/../app/bootstrap.php';
require_once __DIR__ . '/../app/Controllers/BaseController.php';
require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Controllers/ServiciosController.php';
require_once __DIR__ . '/../app/Controllers/NosotrosController.php';
require_once __DIR__ . '/../app/Controllers/ContactoController.php';
require_once __DIR__ . '/../app/Controllers/DisenoWebController.php';
require_once __DIR__ . '/../app/Controllers/RedisenoWebController.php';
require_once __DIR__ . '/../app/Controllers/MantenimientoWebController.php';
require_once __DIR__ . '/../app/Controllers/OptimizacionWebController.php';
require_once __DIR__ . '/../app/Controllers/AuditoriaWebController.php';
require_once __DIR__ . '/../app/Controllers/DisenoUxUiController.php';

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

    case '/servicios/diseno-web':
        (new DisenoWebController())->index();
        break;

    case '/servicios/rediseno-web':
        (new RedisenoWebController())->index();
        break;

    case '/servicios/mantenimiento-web':
        (new MantenimientoWebController())->index();
        break;

    case '/servicios/optimizacion-web':
        (new OptimizacionWebController())->index();
        break;

    case '/servicios/auditoria-web':
        (new AuditoriaWebController())->index();
        break;

    case '/servicios/diseno-ux-ui':
        (new DisenoUxUiController())->index();
        break;

    case '/nosotros':
        (new NosotrosController())->index();
        break;

    case '/contacto':
        (new ContactoController())->index();
        break;

    default:
        http_response_code(404);
        echo '404 - Página no encontrada';
        break;
}
