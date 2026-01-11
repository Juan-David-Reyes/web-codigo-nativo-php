<?php

declare(strict_types=1);

final class ContactoController extends BaseController
{
    public function index(): void
    {
        $data = [
            'pageTitle' => 'Contacto | Código Nativo',
            'pageDescription' => '¿Tienes un proyecto en mente? Contáctanos y hablemos sobre cómo podemos ayudarte a hacer crecer tu negocio online.'
        ];
        
        $this->render(
            view: 'pages/contacto',
            data: $data,
            layout: 'layouts/blank'
        );
    }
}
