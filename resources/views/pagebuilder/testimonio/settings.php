<?php

return [
    'id' => 'testimonio',
    'name' => __('Testimonio'),
    'icon' => '<i class="bx bxs-quote-right"></i>',
    'tab' => "Ecommerce",
    'fields' => [
        [
            'id' => 'titulo_testimonio',
            'name' => 'titulo_testimonio',
            'type' => 'text',
            'label_title' => __('Titulo de Testimonio.'),
            'placeholder' => __('Titulo de Testimonio.'),
            'default' => 'Testimonios',
            'hint' => [
                'content' => __('Titulo de Testimonio.'),
            ],
        ],
        [
            'id' => 'texto_testimonio',
            'name' => 'texto_testimonio',
            'type' => 'text',
            'label_title' => __('Texto de Testimonio.'),
            'placeholder' => __('Texto de Testimonio.'),
            'default' => 'Nuestros clientes opinan.',
            'hint' => [
                'content' => __('Texto de Testimonio.'),
            ],
        ],
        [
            'id' => 'imagen_testimonio',
            'name' => 'imagen_testimonio',
            'type'          => 'file',
            'field_desc' => __('Solo .jpg,.png permitido y tamaño máximo es 3MB'),
            'max_size' => 3, // size in MB
            'ext' => [
                'jpg',
                'png',
                'webp',
            ],
            'label_title'   => __('Imagen')


        ],
        [
            'id' => 'estrellas_testimonio',
            'name' => 'estrellas_testimonio',
            'type' => 'select',
            'label_title' => __('Estrellas de Testimonio.'),
            'placeholder' => __('Estrellas de Testimonio.'),
            'default' => '5',
            'options' => [
                '1' => '1 Estrella',
                '2' => '2 Estrellas',
                '3' => '3 Estrellas',
                '4' => '4 Estrellas',
                '5' => '5 Estrellas',
            ],
        ]

    ]


];
