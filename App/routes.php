<?php
// Rutas simples (opcional). Formato: 'METHOD' => [ 'pattern' => 'Controller@method' ]
return [
    'GET' => [
        '' => 'Page@home',
        'servicios' => 'Page@servicios',
        'nosotros' => 'Page@nosotros',
        'login' => 'Page@login',
        'politicas-de-privacidad' => 'Page@politicas-de-privacidad',
    ],
    'POST' => [
        'login' => 'Page@login',
    ],
    // 'ANY' => [ ... ] // coincidencias para cualquier método
];
