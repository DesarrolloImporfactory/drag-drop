<?php

return [
    'id' => 'carousel',
    'name' => __('Carousel de imagenes'),
    'icon' => '<i class="bx bxs-carousel"></i>',
    'tab' => "Ecommerce",
    'fields' => [
        [
            'id'            => 'image_1',
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
            'id'            => 'image_2',
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
            'id'            => 'image_3',
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
            'id'            => 'tiempo',
            'type'          => 'text',
            'value'         => '5000',
            'class'         => '',
            'label_title'   => __('Tiempo de transición'),
            'placeholder'   => __('Tiempo de transición'),
            'hint'     => [
                'content' => __('Tiempo de transición'),
            ],
        ]
    ]
];
