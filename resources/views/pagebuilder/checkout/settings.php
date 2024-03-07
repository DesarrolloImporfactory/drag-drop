<?php

return [
    'id' => 'checkout',
    'name' => __('Boton de compra'),
    'icon' => '<i class="bx bx-purchase-tag-alt"></i>',
    'tab' => "Ecommerce",
    'fields' => [
        [
            'id'            => 'codigo_checkout',
            'type'          => 'text',
            'value'         => '',
            'class'         => '',
            'label_title'   => __('Codigo de boton de compra'),
            'placeholder'   => __('Codigo de boton de compra'),
            'hint'     => [
                'content' => __('Codigo de boton de compra'),
            ],
        ],
        [
            'id'        => 'url_tienda',
            'type'      => 'text',
            'value'     => '',
            'class'     => '',
            'label_title'   => __('Url de la tienda'),
            'placeholder'   => __('Url de la tienda'),
            'hint'     => [
                'content' => __('Url de su tienda'),
            ],
        ],
        [
            'id'        => 'texto_checkout',
            'type'      => 'text',
            'value'     => 'COMPRAR AHORA',
            'class'     => '',
            'label_title'   => __('Texto del boton'),
            'placeholder'   => __('Texto del boton'),
            'hint'     => [
                'content' => __('Texto del boton'),
            ],
        ],
        [
            'id'        => 'color_checkout',
            'type'      => 'colorpicker',
            'value'     => '#FF0000',
            'class'     => '',
            'label_title'   => __('Color del boton'),
            'placeholder'   => __('Color del boton'),
            'hint'     => [
                'content' => __('Color del boton'),
            ],
        ],
        [
            'id'        => 'color_texto_checkout',
            'type'      => 'colorpicker',
            'value'     => '#FFFFFF',
            'class'     => '',
            'label_title'   => __('Color del texto'),
            'placeholder'   => __('Color del texto'),
            'hint'     => [
                'content' => __('Color del texto'),
            ],
        ]
    ]

];
