<?php

$id = $_SERVER["PATH_INFO"];
if (strpos($id, "/pages") === 0) {
    $id = str_replace("/pages/", "", $id);
    $id = str_replace("/build", "", $id);
    $id = str_replace("/iframe", "", $id);
}



$imporsuit_db = mysqli_connect("194.163.183.231", 'administrador', '69635201d674bcb6f0897604c7c97cf8', 'drag');

$url_origen = "select origen_url from pagebuilder__pages where id = '$id'";
$result = mysqli_query($imporsuit_db, $url_origen);
$origen = mysqli_fetch_assoc($result);


$archivo_tienda =  $origen['origen_url'] . '/sysadmin/vistas/db1.php';
$archivo_destino_tienda = $origen['origen_url'] . "/sysadmin/vistas/db_destino_guia.php";
$contenido_tienda = file_get_contents($archivo_tienda);
$get_data = json_decode($contenido_tienda, true);
if (file_put_contents($archivo_destino_tienda, $contenido_tienda) !== false) {
    $host_d = $get_data['DB_HOST'];
    $user_d = $get_data['DB_USER'];
    $pass_d = $get_data['DB_PASS'];
    $base_d = $get_data['DB_NAME'];
    // Conexión a la base de datos de la tienda, establece la hora -5 GTM
    date_default_timezone_set('America/Guayaquil');
    $tienda_db = mysqli_connect($host_d, $user_d, $pass_d, $base_d);
    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conexion;
} else {
    echo "Error al copiar el archivo";
}

$sql = "SELECT * FROM `lineas`";
$result = mysqli_query($tienda_db, $sql);
$categories = [];

while ($row = mysqli_fetch_assoc($result)) {
    $categories[] = $row;
}

print_r($categories);


// realiza una peticion a la base de datos para obtener las categorias
//$categories = mysqli_connect("localhost", "root", "", "ecommerce");

return [
    'id' => 'category',
    'name' => __('Carousel de imagenes'),
    'icon' => '<i class="bx bxs-category"></i>',
    'tab' => "Ecommerce",
    'fields' => []
];
