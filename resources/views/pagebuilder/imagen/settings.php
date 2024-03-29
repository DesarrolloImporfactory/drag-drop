<?php

return [
    'id' => 'imagen',
    'name' => __('Imagen'),
    'icon' => '<i class="bx bx-image-alt" ></i>',
    'tab' => "Pagina principal",
    'fields' => [
        [
            'id'            => 'image',
            'type'          => 'file',
            'field_desc' => __('Solo .jpg,.png permitido y tamaño máximo es 3MB'),
            'max_size' => 3, // size in MB
            'ext' => [
                'jpg',
                'png',
                'webp',
            ],
            'label_title'   => __('Imagen')
        ],
        [
            'id'            => 'caption_image',
            'type'          => 'text',
            'value'         => 'Fotografía técnica con dimensión',
            'class'         => '',
            'label_title'   => __('Leyenda de la imagen'),
            'placeholder'   => __('Leyenda de la imagen'),
            'hint'     => [
                'content' => __('Leyenda de la imagen'),
            ],
        ],
        [
            'id'            => 'ancho',
            'type'          => 'text',
            'value'         => '100px',
            'class'         => '',
            'label_title'   => __('Ancho de la imagen'),
            'placeholder'   => __('Ancho de la imagen'),
            'hint'     => [
                'content' => __('Ancho de la imagen'),
            ],
        ],
        [
            'id'            => 'alto',
            'type'          => 'text',
            'value'         => '100',
            'class'         => '',
            'label_title'   => __('Alto de la imagen'),
            'placeholder'   => __('Alto de la imagen'),
            'hint'     => [
                'content' => __('Alto de la imagen'),
            ],
        ],


    ]
];
