<?php

declare(strict_types=1);

final class ContactoController extends BaseController
{
    public function index(): void
    {
        $this->renderWithSeo(
            view: 'pages/contacto',
            title: 'Contacto | Código Nativo',
            description: '¿Tienes un proyecto en mente? Contáctanos y hablemos sobre cómo podemos ayudarte a hacer crecer tu negocio online.'
        );
    }
}
