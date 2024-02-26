<?php

return [
    'id' => 'botones',
    'name' => __('Boton'),
    'icon' => '<i class="bx bxs-square-rounded"></i>',
    'tab' => "Ecommerce",
    'fields' => [
        [
            'id' => 'texto', // 'id' => 'cod_producto',
            'name' => 'text',
            'type' => 'text',
            'label_title' => __('Texto'),
            'default' => 'Boton'
        ],
        [
            'id' => 'texto_color', // 'id' => 'cod_producto',
            'name' => 'text-color',
            'type' => 'select',
            'label_title' => __('Color del texto'),
            'default' => 'white',
            'options' => [
                'white' => 'Blanco',
                'black' => 'Negro',
                'primary' => 'Azul',
                'danger' => 'Rojo',
                'warning' => 'Amarillo'
            ]
        ],
        [
            'id' => 'link', // 'id' => 'cod_producto',
            'name' => 'link',
            'type' => 'text',
            'label_title' => __('Link'),
            'default' => '#'
        ],
        [
            'id' => 'target', // 'id' => 'cod_producto',
            'name' => 'target',
            'type' => 'select',
            'label_title' => __('Target'),
            'default' => '_self',
            'options' => [
                '_self' => 'Misma ventana',
                '_blank' => 'Nueva ventana'
            ]
        ],
        [
            'id' => 'color', // 'id' => 'cod_producto',
            'name' => 'color',
            'type' => 'select',
            'label_title' => __('Color'),
            'default' => 'primary',
            'options' => [
                'primary' => 'Primario',
                'secondary' => 'Secundario',
                'success' => 'Exito',
                'danger' => 'Peligro',
                'warning' => 'Advertencia',
                'info' => 'Informacion',
                'light' => 'Claro',
                'dark' => 'Oscuro'
            ]
        ],
        [
            'id' => 'size', // 'id' => 'cod_producto',
            'name' => 'size',
            'type' => 'select',
            'label_title' => __('Tamaño'),
            'default' => 'md',
            'options' => [
                'sm' => 'Pequeño',
                'md' => 'Mediano',
                'lg' => 'Grande'
            ]
        ],
        [
            'id' => 'rounded', // 'id' => 'cod_producto',
            'name' => 'rounded',
            'type' => 'select',
            'label_title' => __('Borde redondeado'),
            'default' => 'rounded',
            'options' => [
                'rounded' => 'Si',
                'not-rounded' => 'No'
            ]
        ],
        [
            'id' => 'block', // 'id' => 'cod_producto',
            'name' => 'block',
            'type' => 'select',
            'label_title' => __('Bloque'),
            'default' => 'not-block',
            'options' => [
                'block' => 'Si',
                'not-block' => 'No'
            ]
        ],
        [
            'id' => 'outline', // 'id' => 'cod_producto',
            'name' => 'outline',
            'type' => 'select',
            'label_title' => __('Borde'),
            'default' => 'not-outline',
            'options' => [
                'outline' => 'Si',
                'not-outline' => 'No'
            ]
        ],
        [
            'id' => 'disabled', // 'id' => 'cod_producto',
            'name' => 'disabled',
            'type' => 'select',
            'label_title' => __('Deshabilitado'),
            'default' => 'not-disabled',
            'options' => [
                'disabled' => 'Si',
                'not-disabled' => 'No'
            ]
        ],
        [
            'id' => 'animation', // 'id' => 'cod_producto',
            'name' => 'icon',
            'type' => 'text',
            'label_title' => __('Icono'),
            'default' => ''
        ],
        [
            'id' => 'icon-align', // 'id' => 'cod_producto',
            'name' => 'icon-align',
            'type' => 'select',
            'label_title' => __('Alineacion del icono'),
            'default' => 'left',
            'options' => [
                'left' => 'Izquierda',
                'right' => 'Derecha'
            ]
        ],

        [
            'id' => 'icon-size', // 'id' => 'cod_producto',
            'name' => 'icon-size',
            'type' => 'select',
            'label_title' => __('Tamaño del icono'),
            'default' => 'md',
            'options' => [
                'fs-6' => 'Pequeño',
                'fs-3' => 'Mediano',
                'fs-1' => 'Grande'
            ]
        ],


    ]
];
