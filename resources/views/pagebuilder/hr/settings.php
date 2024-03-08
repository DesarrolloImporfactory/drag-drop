<?php

return [
    'id' => 'hr',
    'name' => __('Barra horizontal'),
    'icon' => '<i class="bx bx-move-horizontal"></i>',
    'tab' => "Pagina principal",
    'fields' => [
        [
            'id'        => 'hr1',
            'type'      => 'text',
            'value'     => '10px',
            'class'     => '',
            'label_title'   => __('Alto de la barra'),
            'placeholder'   => __('Alto de la barra'),
            'hint'     => [
                'content' => __('Alto de la barra'),
            ],
        ],
        [
            'id'        => 'hr_color',
            'type'      => 'colorpicker',
            'value'     => '#000000',
            'class'     => '',
            'label_title'   => __('Color de la barra'),
            'placeholder'   => __('Color de la barra'),
            'hint'     => [
                'content' => __('Color de la barra'),
            ],

        ],

    ]
];
