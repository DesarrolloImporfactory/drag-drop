<?php

return [
    'id' => 'services',
    'name' => __('Services'),
    'icon' => '<i class="icon-pie-chart"></i>',
    'tab' => "Inicio",
    'fields' => [
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'La atención es el nuevo marketing',
            'class'         => '',
            'label_title'   => __('Cabecera'),
            'placeholder'   => __('Cabecera'),

        ],
        [
            'id'            => 'paragraph',
            'type'          => 'editor',
            'value'         => 'Todos los generadores Lorem Ipsum de Internet tienden a repetir trozos predefinidos según sea necesario, por lo que éste es el primer generador auténtico de Internet.',
            'class'         => '',
            'label_title'   => __('Párrafo'),
            'placeholder'   => __('Párrafo'),

        ],
        [
            'id'                => 'service_details',
            'type'              => 'repeater',
            'label_title'       => __('Servicios'),
            'repeater_title'    => __('Servicio'),
            'multi'       => true,
            'fields'       =>
            [
                [
                    'id'            => 'image',
                    'type'          => 'file',
                    'field_desc' => __('Solo .jpg,.png permitido y tamaño máximo es 3MB'),
                    'max_size' => 3, // size in MB
                    'ext' => [
                        'jpg',
                        'png',
                    ],
                    'label_title'   => __('Imagen')
                ],
                [
                    'id'            => 'heading',
                    'type'          => 'text',
                    'class'         => '',
                    'value'         => 'Nunc eleifend sapien',
                    'label_title'   => __('Cabecera'),
                ],
                [
                    'id'            => 'paragraph',
                    'type'          => 'editor',
                    'class'         => '',
                    'value'         => 'Muchos paquetes de autoedición y editores de páginas web utilizan Lorem Ipsum como modelo de texto por defecto.',
                    'label_title'   => __('Párrafo'),
                ],
                [
                    'id'            => 'cta-text',
                    'type'          => 'text',
                    'class'         => '',
                    'value'         => 'Leer más',
                    'label_title'   => __('Texto del botón'),
                ],
                [
                    'id'            => 'cta-url',
                    'type'          => 'text',
                    'class'         => '',
                    'value'         => '#',
                    'label_title'   => __('URL del botón'),
                ],
            ],
        ]
    ]
];
