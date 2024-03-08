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
            'max_size' => 6, // size in MB
            'ext' => [
                'jpg',
                'png',
                'gif',
                'webp'
            ],
            'label_title'   => __('Imagen del banner')
        ],
    ]
];
