<?php

declare(strict_types=1);

require_once __DIR__ . '/config/config.php';

/**
 * Renderiza una vista dentro del layout.
 *
 * @param string $view Ruta relativa desde app/Views (sin .php), ej: 'pages/home'
 * @param array<string,mixed> $data
 */
function render(string $view, array $data = [], string $layout = 'layouts/site'): void
{
    $viewFile = VIEW_PATH . '/' . $view . '.php';
    $layoutFile = VIEW_PATH . '/' . $layout . '.php';

    if (!is_file($viewFile)) {
        http_response_code(500);
        echo 'Vista no encontrada: ' . htmlspecialchars($view, ENT_QUOTES, 'UTF-8');
        return;
    }

    if (!is_file($layoutFile)) {
        http_response_code(500);
        echo 'Layout no encontrado: ' . htmlspecialchars($layout, ENT_QUOTES, 'UTF-8');
        return;
    }

    extract($data, EXTR_SKIP);

    ob_start();
    require $viewFile;
    $content = ob_get_clean();

    require $layoutFile;
}
