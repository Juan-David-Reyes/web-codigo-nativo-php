<?php

declare(strict_types=1);

final class DisenoWebController extends BaseController
{
    public function index(): void
    {
        $this->renderWithSeo(
            view: 'pages/servicios/diseno-web',
            title: 'Diseño Web Profesional | Código Nativo',
            description: 'Diseño web moderno, rápido y optimizado para convertir visitantes en clientes. Sitios responsive adaptados a todos los dispositivos.'
        );
    }
}
