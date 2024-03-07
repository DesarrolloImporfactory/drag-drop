<?php

return [
    'id' => 'menu',
    'name' => __('Menu'),
    'icon' => '<i class="bx bx-image-alt" ></i>',
    'tab' => "Pagina principal",
    'fields' => [
        [
            'id' => 'menusA',
            'type' => 'repeater',
            'label_title'       => __('menusA'),
            'repeater_title'    => __('menusA'),
            'multi' => true,
            'fields' => [
                [
                    'id' => 'titulom',
                    'type' => 'text',
                    'label_title' => __('Titulo'),
                    'placeholder' => __('Titulo'),
                ],
                [
                    'id' => 'urli',
                    'type' => 'text',
                    'label' => __('Url'),
                    'placeholder' => __('Url'),

                ],

            ],
        ],
        [
            'id' => 'menu_color',
            'name' => 'menu_color',
            'type' => 'colorpicker',
            'label_title' => 'Color del menu',
            'value' => '#000000',
            'placeholder' => 'Color del menu',

        ],
        [
            'id' => 'menu_color_text',
            'name' => 'menu_color_text',
            'type' => 'colorpicker',
            'label_title' => 'Color del texto',
            'value' => '#ffffff',
            'placeholder' => 'Color del texto',

        ],
        [
            'id' => 'orientation',
            'type' => 'select',
            'label_title' => 'Orientacion',
            'default' => 'row', // 'row' or 'column
            'options' => [
                'row' => 'Horizontal',
                'column' => 'Vertical',
            ]

        ],


    ]
];

// Path: resources/views/pagebuilder/menu/view.php
