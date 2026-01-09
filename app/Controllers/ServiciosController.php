<?php

declare(strict_types=1);

final class ServiciosController extends BaseController
{
    public function index(): void
    {
        $this->renderWithSeo(
            view: 'pages/servicios',
            title: 'Servicios de Diseño y Desarrollo Web | Código Nativo',
            description: 'Descubre nuestros servicios: diseño web, re-diseño, mantenimiento, optimización, auditorías y diseño UX/UI. Soluciones profesionales para tu negocio.'
        );
    }
}
