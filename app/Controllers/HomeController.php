<?php

declare(strict_types=1);

final class HomeController extends BaseController
{
    public function index(): void
    {
        $this->renderWithSeo(
            view: 'pages/home',
            title: 'Agencia de Marketing Digital | Código Nativo',
            description: 'Agencia de diseño web profesional para optimizar tu negocio online. Diseño, desarrollo y mantenimiento web en Colombia.'
        );
    }
}
