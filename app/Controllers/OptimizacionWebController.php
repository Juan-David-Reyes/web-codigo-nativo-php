<?php

declare(strict_types=1);

final class OptimizacionWebController extends BaseController
{
    public function index(): void
    {
        $this->renderWithSeo(
            view: 'pages/servicios/optimizacion-web',
            title: 'Optimización Web y SEO | Código Nativo',
            description: 'Mejora la velocidad, rendimiento y posicionamiento SEO de tu sitio web. Core Web Vitals y optimización técnica avanzada.'
        );
    }
}
