<?php

declare(strict_types=1);

final class MantenimientoWebController extends BaseController
{
    public function index(): void
    {
        $this->renderWithSeo(
            view: 'pages/servicios/mantenimiento-web',
            title: 'Mantenimiento Web WordPress Profesional | Código Nativo',
            description: 'Servicio profesional de mantenimiento web WordPress. Actualizaciones, seguridad, backups automáticos, monitoreo 24/7 y soporte técnico. Planes desde $70/mes. ¡Protege tu sitio web!'
        );
    }
}
