<?php

return [
    'id' => 'about-us',
    'name' => 'Acerca de nosotros',
    'icon' => '<i class="icon-clipboard"></i>',
    'tab' => "Acerca de nosotros",
    'fields' => [
        [
            'id'            => 'small-heading',
            'type'          => 'text',
            'value'         => 'Antes de meternos de lleno en su carrera, cuénteme un poco.',
            'class'         => '',
            'label_title'   => __('Sub cabecera'),
            'placeholder'   => __('Sub cabecera'),

        ],
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'Apple abre otra megatienda en China en medio de William Barr.',
            'class'         => '',
            'label_title'   => __('Cabecera'),
            'placeholder'   => __('Cabecera'),

        ],
        [
            'id'            => 'paragraph',
            'type'          => 'editor',
            'value'         => 'Lorem Ipsum',
            'class'         => '',
            'label_title'   => __('Párrafo'),
            'placeholder'   => __('Párrafo'),

        ],
        [
            'id'                => 'bullets',
            'type'              => 'repeater',
            'label_title'       => __('Viñetas'),
            'label_desc'        => __('Esta es la descripción del repetidor que puede utilizar aquí'),
            'field'             => [
                'id'            => 'bullets-point',
                'type'          => 'text',
                'value'         => 'Lorem Ipsum es simplemente un texto ficticio de la industria de la impresión y la composición tipográfica.',
                'class'         => '',
                'label_title'   => __('Viñeta'),
                'placeholder'   => __('Viñeta'),
            ]
        ],
        [
            'id'            => 'blue-cta',
            'type'          => 'text',
            'value'         => 'Unirse a nosotros',
            'class'         => '',
            'label_title'   => __('Texto del botón azul'),
            'placeholder'   => __('Texto del botón azul'),

        ],
        [
            'id'            => 'blue-cta-url',
            'type'          => 'text',
            'value'         => '#',
            'class'         => '',
            'label_title'   => __('URL del botón azul'),
            'placeholder'   => __('URL del botón azul'),

        ],
        [
            'id'            => 'white-cta',
            'type'          => 'text',
            'value'         => 'Cancelar',
            'class'         => '',
            'label_title'   => __('Texto del botón blanco'),
            'placeholder'   => __('Texto del botón blanco'),

        ],
        [
            'id'            => 'white-cta-url',
            'type'          => 'text',
            'value'         => 'Cancelar',
            'class'         => '',
            'label_title'   => __('URL del botón blanco'),
            'placeholder'   => __('URL del botón blanco'),

        ],

        [
            'id'            => 'last_paragraph',
            'type'          => 'editor',
            'value'         => 'Lorem Ipsum',
            'class'         => '',
            'label_title'   => __('Párrafo'),
            'placeholder'   => __('Párrafo'),

        ],
        [
            'id'            => 'aboutus_image',
            'type'          => 'file',
            'field_desc' => __('Solo .jpg,.png permitido y tamaño máximo es 3MB'),
            'max_size' => 3, // size in MB
            'ext' => [
                'jpg',
                'png',
            ],
            'label_title'   => __('Acerca de nosotros imagen')
        ],

    ]
];
