<?php

return [
    'id' => 'faqs',
    'name' => __('FAQ'),
    'icon' => '<i class="icon-book"></i>',
    'tab' => "Preguntas frecuentes",
    'fields' => [
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'Preguntas frecuentes',
            'class'         => '',
            'label_title'   => __('Cabecera'),
            'placeholder'   => __('Cabecera'),
        ],

        [
            'id'                => 'faq_data',
            'type'              => 'repeater',
            'label_title'       => __('FAQs'),
            'repeater_title'    => __('FAQ'),
            'multi'       => true,
            'fields'       =>
            [
                [
                    'id'            => 'question',
                    'type'          => 'text',
                    'value'         => '¿Qué es Lorem Ipsum?',
                    'class'         => '',
                    'label_title'   => __('Pregunta'),
                    'placeholder'   => __('Pregunta'),
                ],
                [
                    'id'            => 'answer',
                    'type'          => 'editor',
                    'class'         => '',
                    'value'         => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Se popularizó en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
                    'label_title'   => __('Respuesta'),
                ],
            ],
        ]

    ]
];
