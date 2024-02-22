<?php

return [
    'id' => 'banner',
    'name' => __('Banner'),
    'icon' => '<i class="icon-book-open"></i>',
    'tab' => "Acerca de nosotros",
    'fields' => [
        [
            'id'            => 'banner_image',
            'type'          => 'file',
            'field_desc' => __('Solo .jpg,.png permitido y tamaño máximo es 3MB'),
            'max_size' => 3, // size in MB
            'ext' => [
                'jpg',
                'png',
            ],
            'label_title'   => __('Imagen del banner')
        ],

        [
            'id'            => 'caption',
            'type'          => 'text',
            'value'         => 'Fotografía técnica con dimensión',
            'class'         => '',
            'label_title'   => __('Leyenda de la imagen'),
            'placeholder'   => __('Leyenda de la imagen'),
            'hint'     => [
                'content' => __('Leyenda de la imagen'),
            ],
        ],

    ]
];
