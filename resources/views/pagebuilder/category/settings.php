<?php

use Illuminate\Support\Arr;

$id = $_SERVER["PATH_INFO"];
if (strpos($id, "/pages") === 0) {
    $id = str_replace("/pages/", "", $id);
    $id = str_replace("/build", "", $id);
    $id = str_replace("/iframe", "", $id);
}

$imporsuit_db = mysqli_connect("194.163.183.231", 'administrador', '69635201d674bcb6f0897604c7c97cf8', 'drag');
isset($_POST['id']) ? $id = $_POST['page_id'] : $id = $id;
$url_origen = "select origen_url from pagebuilder__pages where id = '$id'";
$result = mysqli_query($imporsuit_db, $url_origen);
$origen = mysqli_fetch_assoc($result);


$archivo_tienda =  $origen['origen_url'] . '/sysadmin/vistas/db1.php';

$archivo_destino_tienda = "../db_destino_guia.php";
$contenido_tienda = file_get_contents($archivo_tienda);
$get_data = json_decode($contenido_tienda, true);
if (file_put_contents($archivo_destino_tienda, $contenido_tienda) !== false) {

    $user_d = $get_data['DB_USER'];
    $pass_d = $get_data['DB_PASS'];
    $base_d = $get_data['DB_NAME'];
    // Conexión a la base de datos de la tienda, establece la hora -5 GTM
    date_default_timezone_set('America/Guayaquil');
    $tienda_db = mysqli_connect("158.220.107.176", $user_d, $pass_d, $base_d);
    if (!$tienda_db) {
        die("Connection failed: " . mysqli_connect_error());
    }
} else {
    echo "Error al copiar el archivo";
}

$sql = "SELECT * FROM `lineas`";
$result = mysqli_query($tienda_db, $sql);
$categories = [];
while ($row = mysqli_fetch_assoc($result)) {
    $categories[$row['nombre_linea']] = $row['nombre_linea'];
}

$categoria_link = "categoria.php?id_cat=";


$options =  $categories;


mysqli_close($tienda_db);


// realiza una peticion a la base de datos para obtener las categorias
//$categories = mysqli_connect("localhost", "root", "", "ecommerce");

return [
    'id' => 'category',
    'name' => __('Categoria'),
    'icon' => '<i class="bx bxs-category"></i>',
    'tab' => "Ecommerce",
    'fields' => [
        [
            'id' => 'categoriaa', // 'id' => 'cod_producto',
            'name' => 'categoriaa',
            'type' => 'select',
            'label_title' => __('Selecciona la categoria'),
            'options' => $options
        ],
        [
            'id' => 'link_category',
            'name' => 'link_category',
            'type' => 'text',
            'label_title' => __('Enlace'),

            'value' => $origen['origen_url'] . $categoria_link
        ]

    ]
];
