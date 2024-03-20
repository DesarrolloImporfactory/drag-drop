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

    $sql = 'SELECT * FROM `testimonios`';
    $result = mysqli_query($tienda_db, $sql);
    $testimonios = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($tienda_db);

@endphp

<div class="centrar">
    {{ pagesetting('titulo_testimonios') }}
</div>

<div class="flex-testimonio">
    @foreach ($testimonios as $testimonio)
        @php
            $imagen = $testimonio['imagen'];
            if (strpos($imagen, '../../') === 0) {
                $imagen = $origen['origen_url'] . 'sysadmin/' . str_replace('../../', '', $imagen);
            }
        @endphp
        <div class="testimonio_cuerpos">
            <div class="testimonio_cabecera">
                <div class="estrellas">
                    @for ($i = 0; $i < 5; $i++)
                        <i class='bx bxs-star' style="color: gold"></i>
                    @endfor
                </div>
                <i class='quote bx bxs-quote-alt-right'></i>
            </div>
            <img class="testimonio_imagen" src="{{ $imagen }}" alt="alt">

            <div class="textos_testimonio">
                <div class="mensaje">{{ $testimonio['testimonio'] }}</div>
                <div class="titulo_testimonio">
                    {{ $testimonio['nombre'] }}
                </div>
            </div>
        </div>
    @endforeach
</div>
@pushonce(config('pagebuilder.site_script_var'))
    <script></script>
@endpushonce


@pushonce(config('pagebuilder.site_style_var'))
    <style>
        .flex-testimonio {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 150px;
            flex-wrap: wrap;
        }

        .testimonio_cuerpos {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .testimonio_cabecera {
            position: relative;
            padding-top: 10px;
        }

        .quote {
            position: absolute;
            top: 0;
            left: 150%;
            font-size: 1.5rem;
            color: #fff;
            background-color: blue;
            border-radius: 50%;
            padding: 5px;
        }

        .testimonio_imagen {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            margin-top: 10px;
        }

        .estrellas {
            color: gold
        }

        .textos_testimonio {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 10px;
            gap: 10px;
        }

        .mensaje {
            font-size: 0.75rem;

        }

        .titulo_testimonio {
            font-size: 1rem;
            font-weight: bold;
        }
    </style>
@endpushonce
