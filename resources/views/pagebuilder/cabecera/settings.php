<?php

return [
    'id' => 'cabecera',
    'name' => __('Titulo de la página'),
    'icon' => '<i class="bx bx-heading"></i>',
    'tab' => "Pagina principal",
    'fields' => [
        [
            'id'            => 'titulo',
            'type'          => 'editor',
            'value'         => 'Titulo de la página',
            'class'         => '',
            'label_title'   => __('Titulo de la página'),
            'placeholder'   => __('Titulo de la página'),
            'hint'     => [
                'content' => __('Titulo de la página'),
            ],
        ],
        [
            'id'            => 'subtitulo',
            'type'          => 'editor',
            'value'         => 'Subtitulo de la página',
            'class'         => '',
            'label_title'   => __('Subtitulo de la página'),
            'placeholder'   => __('Subtitulo de la página'),
            'hint'     => [
                'content' => __('Subtitulo de la página'),
            ],
        ],

    ]
];
