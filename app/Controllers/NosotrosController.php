<?php

declare(strict_types=1);

final class NosotrosController extends BaseController
{
    public function index(): void
    {
        $this->renderWithSeo(
            view: 'pages/nosotros',
            title: 'Sobre Nosotros | Código Nativo',
            description: 'Conoce nuestra historia, misión y valores. Somos una agencia de marketing digital apasionada por crear experiencias web excepcionales.'
        );
    }
}
