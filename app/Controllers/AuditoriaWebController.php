<?php

declare(strict_types=1);

final class AuditoriaWebController extends BaseController
{
    public function index(): void
    {
        $this->renderWithSeo(
            view: 'pages/servicios/auditoria-web',
            title: 'Auditoría Web Completa | Código Nativo',
            description: 'Diagnóstico completo de tu sitio web con recomendaciones accionables. Análisis técnico, SEO, UX y rendimiento.'
        );
    }
}
