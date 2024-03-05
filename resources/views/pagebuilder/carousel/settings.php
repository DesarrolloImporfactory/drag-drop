<?php

return [
    'id' => 'carousel',
    'name' => __('Codigo HTML'),
    'icon' => '<i class="bx bxs-carousel"></i>',
    'tab' => "Codigo",
    'fields' => [
        [
            'id'            => 'codigo_html',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Codigo HTML'),
            'placeholder'   => __('Codigo HTML'),
            'hint'     => [
                'content' => __('Codigo HTML'),
            ],
        ],
        [
            'id'            => 'codigo_css',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Codigo CSS'),
            'placeholder'   => __('Codigo CSS'),
            'hint'     => [
                'content' => __('Para agregar estilos CSS, debes agregar el codigo CSS con la etiqueta <style>'),
            ],

        ]

    ]
];
