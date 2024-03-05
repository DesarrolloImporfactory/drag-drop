<?php

return [
    'id' => 'producto',
    'name' => __('Producto'),
    'icon' => '<i class="bx bx-package"> </i>',
    'tab' => "Ecommerce",
    'fields' => [
        [
            'id'            => 'cod_producto',
            'type'          => 'text',
            'value'         => 'producto de la página',
            'class'         => '',
            'label_title'   => __('Codigo Producto'),
            'placeholder'   => __('Codigo Producto'),
            'hint'     => [
                'content' => __('Codigo Producto'),
            ],
        ],
        [
            'id'            => 'nombre_producto',
            'type'          => 'text',
            'value'         => 'producto de la página',
            'class'         => '',
            'label_title'   => __('Nombre Producto'),
            'placeholder'   => __('Nombre Producto'),
            'hint'     => [
                'content' => __('Nombre Producto'),
            ],
        ],

        [
            'id'            => 'precio_producto',
            'type'          => 'text',
            'value'         => 'producto de la página',
            'class'         => '',
            'label_title'   => __('Precio Producto'),
            'placeholder'   => __('Precio Producto'),
            'hint'     => [
                'content' => __('Precio Producto'),
            ],
        ],
        [
            'id'            => 'imagen_producto',
            'type'          => 'file',
            'field_desc' => __('Solo .jpg,.png permitido y tamaño máximo es 3MB'),
            'max_size' => 3, // size in MB
            'ext' => [
                'jpg',
                'png',
            ],
            'label_title'   => __('Imagen Producto')
        ],
        [
            'id'            => 'descuento',
            'type'          => 'text',
            'value'         => 'producto de la página',
            'class'         => '',
            'label_title'   => __('Descuento'),
            'placeholder'   => __('Descuento'),
            'hint'     => [
                'content' => __('Descuento'),
            ],
        ],
        [
            'id'            => 'url_producto',
            'type'          => 'text',
            'value'         => 'producto de la página',
            'class'         => '',
            'label_title'   => __('URL Producto'),
            'placeholder'   => __('URL Producto'),
            'hint'     => [
                'content' => __('URL Producto'),
            ],
        ],
    ]
];
