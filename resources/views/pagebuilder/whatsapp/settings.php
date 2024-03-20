<?php

return [

    'id' => 'whatsapp',
    'name' => __('Whatsapp'),
    'icon' => '<i class="bx bxl-whatsapp"></i>',
    'tab' => "Contacto",
    'fields' => [
        [
            'id' => 'whatsapp_title',
            'name' => 'whatsapp_title',
            'type' => 'text',
            'label_title' => __('Titulo de Whatsapp.'),
            'placeholder' => __('Titulo de Whatsapp.'),
            'default' => 'Contactanos por Whatsapp',
            'hint' => [
                'content' => __('Titulo de Whatsapp.'),
            ],
        ],
        [
            'id' => 'whatsapp_number',
            'name' => 'whatsapp',
            'type' => 'text',
            'label_title' => __('Whatsapp.'),
            'placeholder' => __('Whatsapp.'),
            'default' => 'Whatsapp',
            'hint' => [
                'content' => __('Whatsapp.'),
            ],
        ],
        [
            'id' => 'whatsapp_button_color',
            'name' => 'whatsapp_button_color',
            'type' => 'colorpicker',
            'label_title' => __('Color del boton de Whatsapp.'),
            'placeholder' => __('Color del boton de Whatsapp.'),
            'default' => '#25d366',
            'hint' => [
                'content' => __('Color del boton de Whatsapp.'),
            ],
        ]
    ]
];
