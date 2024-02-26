<?php

return [
    'id' => 'video',
    'name' => __('Video'),
    'icon' => '<i class="bx bx-video" ></i>',
    'tab' => "Pagina principal",
    'fields' => [

        [
            'id'            => 'enlace',
            'type'          => 'text',
            'value'         => 'https://www.youtube.com/watch?v=',
            'class'         => '',
            'label_title'   => __('Enlace del video'),
            'placeholder'   => __('Enlace del video'),
            'hint'     => [
                'content' => __('Enlace del video'),
            ],



        ]

    ]
];
