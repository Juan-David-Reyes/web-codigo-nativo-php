<?php

declare(strict_types=1);

/**
 * Controlador base abstracto con funcionalidad común.
 */
abstract class BaseController
{
    /**
     * Renderiza una vista con layout y metadata SEO.
     *
     * @param string $view Ruta de la vista (ej: 'pages/home')
     * @param array<string,mixed> $data Datos a pasar a la vista
     * @param string $layout Layout a usar
     */
    protected function render(
        string $view,
        array $data = [],
        string $layout = 'layouts/site'
    ): void {
        render($view, $data, $layout);
    }

    /**
     * Renderiza una vista con metadata SEO personalizada.
     *
     * @param string $view Ruta de la vista
     * @param string $title Título de la página
     * @param string $description Meta descripción
     * @param array<string,mixed> $data Datos adicionales
     */
    protected function renderWithSeo(
        string $view,
        string $title,
        string $description,
        array $data = []
    ): void {
        $data['pageTitle'] = $title;
        $data['pageDescription'] = $description;
        $this->render($view, $data);
    }

    /**
     * Redirecciona a una URL.
     *
     * @param string $url URL de destino
     * @param int $statusCode Código HTTP (301 permanente, 302 temporal)
     */
    protected function redirect(string $url, int $statusCode = 302): never
    {
        header("Location: $url", true, $statusCode);
        exit;
    }

    /**
     * Devuelve una respuesta JSON.
     *
     * @param mixed $data Datos a serializar
     * @param int $statusCode Código HTTP
     */
    protected function json(mixed $data, int $statusCode = 200): never
    {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data, JSON_THROW_ON_ERROR);
        exit;
    }

    /**
     * Devuelve respuesta 404.
     */
    protected function notFound(string $message = '404 - Página no encontrada'): never
    {
        http_response_code(404);
        echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
        exit;
    }
}
