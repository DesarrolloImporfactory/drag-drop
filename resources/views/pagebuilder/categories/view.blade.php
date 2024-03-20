@php

    $id = $_SERVER['PATH_INFO'];
    $imporsuit_db = mysqli_connect('194.163.183.231', 'administrador', '69635201d674bcb6f0897604c7c97cf8', 'drag');
    if (strpos($id, '/pages') === 0) {
        $id = str_replace('/pages/', '', $id);
        $id = str_replace('/build', '', $id);
        $id = str_replace('/iframe', '', $id);
        $url_origen = "select origen_url from pagebuilder__pages where id = '$id'";
    } else {
        $id = str_replace('/', '', $id);
        $url_origen = "select origen_url from pagebuilder__pages where title = '$id'";
    }

    isset($_POST['id']) ? ($id = $_POST['page_id']) : ($id = $id);
    $result = mysqli_query($imporsuit_db, $url_origen);
    $origen = mysqli_fetch_assoc($result);

    $archivo_tienda = $origen['origen_url'] . '/sysadmin/vistas/db1.php';

    $archivo_destino_tienda = '../db_destino_guia.php';
    $contenido_tienda = file_get_contents($archivo_tienda);
    $get_data = json_decode($contenido_tienda, true);
    if (file_put_contents($archivo_destino_tienda, $contenido_tienda) !== false) {
        $user_d = $get_data['DB_USER'];
        $pass_d = $get_data['DB_PASS'];
        $base_d = $get_data['DB_NAME'];
        // Conexión a la base de datos de la tienda, establece la hora -5 GTM
        date_default_timezone_set('America/Guayaquil');
        $tienda_db = mysqli_connect('158.220.107.176', $user_d, $pass_d, $base_d);
        if (!$tienda_db) {
            die('Connection failed: ' . mysqli_connect_error());
        }
    } else {
        echo 'Error al copiar el archivo';
    }

    $sql = 'SELECT * FROM `lineas`';
    $result = mysqli_query($tienda_db, $sql);
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($tienda_db);

@endphp


<div class="centrar">
    {{ pagesetting('cabecera_categoria') }}
</div>

<div class="flex-category">
    @foreach ($categories as $category)
        @php
            $id_linea = $category['id_linea'];

            $imagen = $category['imagen'];
            if (strpos($imagen, '../../') === 0) {
                $imagen = $origen['origen_url'] . 'sysadmin/' . str_replace('../../', '', $imagen);
            }
        @endphp
        <div class="contenedor">
            <div class="multiple">
                <img id="imgs{{ $category['id_linea'] }}"
                    src="{{ $imagen ?? 'https://static.vecteezy.com/system/resources/previews/013/149/674/non_2x/unavailable-image-icon-in-trendy-flat-style-isolated-on-white-background-photo-gallery-symbol-for-web-and-mobile-apps-free-vector.jpg' }}"
                    alt="img">
            </div>
            <div class="btn">
                <a class="button" href="" id="myBtn{{ $category['id_linea'] }}">{{ $category['nombre_linea'] }}</a>
            </div>
        </div>
    @endforeach
</div>
@pushonce(config('pagebuilder.site_style_var'))
    <style>
        .centrar {
            display: flex;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 20px 0;
        }

        .flex-category {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;

        }

        .contenedor>.multiple>img {
            width: 230px;
            height: 200px;
            object-fit: contain;
        }

        .contenedor {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            align-items: center;
            height: 260px;
            width: 240px;
            background-color: #f1f1f1;
        }

        .btn {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .button {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40px;
            border: none;
            background-color: red;
            color: white;
            border-radius: 10px;
        }

        .button:hover {
            background-color: #ff6a6a;
            cursor: pointer;
            text-decoration: underline;

        }

        .cuerpo {
            display: flex;
            justify-content: center;
        }
    </style>
@endpushonce
