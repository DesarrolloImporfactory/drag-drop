<?php

return [
    'id' => 'testimonios',
    'name' => __('Testimonios'),
    'icon' => '<i class="bx bxs-quote-right"></i>',
    'tab' => "Ecommerce",
    'fields' => [
        [
            'id' => 'titulo_testimonios',
            'name' => 'titulo_testimonio',
            'type' => 'text',
            'label_title' => __('Titulo de Testimonio.'),
            'placeholder' => __('Titulo de Testimonio.'),
            'default' => 'Testimonios',
            'hint' => [
                'content' => __('Titulo de Testimonio.'),
            ],
        ],


    ]


];
