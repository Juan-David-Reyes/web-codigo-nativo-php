<?php

declare(strict_types=1);

final class RedisenoWebController extends BaseController
{
    public function index(): void
    {
        $this->renderWithSeo(
            view: 'pages/servicios/rediseno-web',
            title: 'Re-diseño Web | Código Nativo',
            description: 'Moderniza tu sitio web existente con un diseño actualizado que mejore la experiencia de usuario y los resultados de tu negocio.'
        );
    }
}
