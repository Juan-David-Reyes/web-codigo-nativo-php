<?php

declare(strict_types=1);

final class MantenimientoWebController extends BaseController
{
    public function index(): void
    {
        $this->renderWithSeo(
            view: 'pages/servicios/mantenimiento-web',
            title: 'Mantenimiento Web Profesional | Código Nativo',
            description: 'Mantén tu sitio web seguro, actualizado y funcionando al máximo rendimiento. Respaldos automáticos, monitoreo 24/7 y soporte técnico.'
        );
    }
}
