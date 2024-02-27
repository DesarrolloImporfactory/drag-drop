<?php

return [
    'id' => 'formulario',
    'name' => __('Formulario'),
    'icon' => '<i class="bx bx-task"></i>',
    'tab' => "Ecommerce",
    'fields' => [
        [
            'id'            => 'headinger_formulario',
            'type'          => 'text',
            'value'         => 'Formulario de contacto',
            'class'         => '',
            'label_title'   => __('Formulario de contacto'),
            'placeholder'   => __('Formulario de contacto'),
        ],

        [
            'id'                => 'campos',
            'type'              => 'repeater',
            'label_title'       => __('campos'),
            'repeater_title'    => __('campos'),
            'multi'       => true,
            'fields'       =>
            [
                [
                    'id'            => 'campos_repetir',
                    'type'          => 'text',
                    'value'         => 'Nombre',
                    'class'         => '',
                    'label_title'   => __('Nombre'),
                    'placeholder'   => __('Nombre'),
                ],
                [
                    'id' => 'tipo', // 'id' => 'cod_producto',
                    'name' => 'tipo',
                    'type' => 'select',
                    'label_title' => __('Tipo'),
                    'default' => 'text',
                    'options' => [
                        'text' => 'Texto',
                        'email' => 'Email',
                        'date' => 'Fecha',
                        'textarea' => 'Area de texto',
                    ]
                ],
            ],
        ]
    ]
];
