<?php

declare(strict_types=1);

final class DisenoUxUiController extends BaseController
{
    public function index(): void
    {
        $this->renderWithSeo(
            view: 'pages/servicios/diseno-ux-ui',
            title: 'Diseño UX/UI Profesional | Código Nativo',
            description: 'Crea experiencias digitales intuitivas y atractivas. Research, wireframes, prototipos y testing de usabilidad.'
        );
    }
}
