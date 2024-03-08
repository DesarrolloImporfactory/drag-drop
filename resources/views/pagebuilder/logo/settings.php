<?php

return [
    'id' => 'logo',
    'name' => __('Logo'),
    'icon' => '<i class="bx bx-image-alt" ></i>',
    'tab' => "Pagina principal",
    'fields' => [
        [
            'id'            => 'logo',
            'type'          => 'file',
            'field_desc' => __('Solo .jpg,.png permitido y tamaño máximo es 3MB'),
            'max_size' => 3, // size in MB
            'ext' => [
                'jpg',
                'png',
                'webp'
            ],
            'label_title'   => __('logo')
        ],
        [
            'id'            => 'caption_logo',
            'type'          => 'text',
            'value'         => 'Fotografía técnica con dimensión',
            'class'         => '',
            'label_title'   => __('Leyenda de la logo'),
            'placeholder'   => __('Leyenda de la logo'),
            'hint'     => [
                'content' => __('Leyenda de la logon'),
            ],
        ],
        [
            'id'            => 'ancho',
            'type'          => 'text',
            'value'         => '100px',
            'class'         => '',
            'label_title'   => __('Ancho de la logo'),
            'placeholder'   => __('Ancho de la logo'),
            'hint'     => [
                'content' => __('Ancho de la logon'),
            ],
        ],
        [
            'id'            => 'alto',
            'type'          => 'text',
            'value'         => '100',
            'class'         => '',
            'label_title'   => __('Alto de la logo'),
            'placeholder'   => __('Alto de la logo'),
            'hint'     => [
                'content' => __('Alto de la logon'),
            ],
        ],


    ]
];
