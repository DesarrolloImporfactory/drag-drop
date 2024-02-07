<?php

return [
    'id' => 'skills',
    'name' => __('Skills'),
    'icon' => '<i class="icon-briefcase"></i>',
    'tab' => "Acerca de nosotros",
    'fields' => [
        [
            'id'            => 'image',
            'type'          => 'file',
            'field_desc' => __('solo .jpg,.png permitido y tamaño máximo es 3MB'),
            'max_size' => 3, // size in MB
            'ext' => [
                'jpg',
                'png',
            ],
            'label_title'   => __('Imagen')
        ],
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
            'id'            => 'counter',
            'type'          => 'text',
            'value'         => '548,324',
            'class'         => '',
            'label_title'   => __('Contador'),
            'placeholder'   => __('Contador'),

        ],
        [
            'id'            => 'counter-text',
            'type'          => 'text',
            'value'         => 'All lorem ipsum text counter',
            'class'         => '',
            'label_title'   => __('Texto del contador'),
            'placeholder'   => __('Texto del contador'),

        ],
        [
            'id'            => 'button-cta',
            'type'          => 'text',
            'value'         => 'Buy edition now',
            'class'         => '',
            'label_title'   => __('Texto del botón'),
            'placeholder'   => __('Texto del botón'),

        ],
    ]
];
