<?php

return [
    'id' => 'parrafo',
    'name' => __('Parrafo de la página'),
    'icon' => '<i class="bx bx-paragraph"> </i>',
    'tab' => "Pagina principal",
    'fields' => [
        [
            'id'            => 'parrafo',
            'type'          => 'editor',
            'value'         => 'Parrafo de la página',
            'class'         => '',
            'label_title'   => __('Parrafo'),
            'placeholder'   => __('Parrafo'),
            'hint'     => [
                'content' => __('Parrafo'),
            ],
        ],

    ]
];
