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

    ]
];
