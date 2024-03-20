<?php

return [
    'id' => 'categories',
    'name' => __('Categorias de tienda'),
    'icon' => '<i class="bx bxs-category-alt"></i>',
    'tab' => "Ecommerce",
    'fields' => [
        [
            'id' => 'cabecera_categoria',
            'name' => 'cabecera_categoria',
            'type' => 'text',
            'label_title' => __('Cabecera de la categoria'),
            'placeholder' => __('Cabecera de la categoria'),
            'default' => 'Categorias',
            'hint' => [
                'content' => __('Cabecera de la categoria'),
            ],

        ]
    ]

];
