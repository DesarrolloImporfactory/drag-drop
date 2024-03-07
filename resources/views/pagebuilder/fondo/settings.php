<?php

return [
    'id' => 'fondo',
    'name' => __('Fondo'),
    'icon' => '<i class="bx bx-image" ></i>',
    'tab' => "Pagina principal",
    'fields' => [
        [
            'id'            => 'fondo',
            'type'          => 'file',
            'field_desc' => __('Solo .jpg,.png permitido y tamaño máximo es 20MB'),
            'max_size' => 20, // size in MB
            'ext' => [
                'jpg',
                'png',

            ],
            'label_title'   => __('Imagen')
        ],


    ]
];
