<div class="cuerpo">
    @php
        //numero random
        $base = '0123456789';
        $letras = 'abcdefghijklmnopqrstuvwxyz';
        $letrasMay = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $especiales = '!@#%^*()_-+=[{]};:<>|./?';

        $baseMax = strlen($base);
        $letrasMax = strlen($letras);
        $letrasMayMax = strlen($letrasMay);
        $especialesMax = strlen($especiales);

        $password = '';
        $password .= $base[rand(0, $baseMax - 1)];
        $password .= $letras[rand(0, $letrasMax - 1)];

    @endphp

    <div class="contenedor">
        <div>
            <img id="imgs{{ $password }}" src="" alt="img">
        </div>
        <div class="btn">
            <a class="button" href="{{ pagesetting('link_category') }}"
                id="myBtn{{ $password }}">{{ pagesetting('categoriaa') }}</a>
        </div>
    </div>

</div>

@php
    $enlace = pagesetting('link_category');
    $enlaceParts = preg_split('/\.com\//', $enlace);
    $dominioEsquema = $enlaceParts[0] . '.com';

    $archivo_tienda = $dominioEsquema . '/sysadmin/vistas/db1.php';

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
    $nombre_linea = pagesetting('categoriaa');
    $sql = "SELECT * FROM `lineas` WHERE `nombre_linea` = '$nombre_linea'";
    $result = mysqli_query($tienda_db, $sql);
    $row = mysqli_fetch_assoc($result);

    if (isset($row['id_linea'])) {
        $id_linea = $row['id_linea'];
    }
    mysqli_close($tienda_db);
@endphp


@pushonce(config('pagebuilder.site_script_var'))
    <script>
        (function() {
            let id = <?php if (isset($id_linea)) {
                echo $id_linea;
            } ?>;
            let image = "<?php if (isset($row['imagen'])) {
                echo $row['imagen'];
            } ?>"

            image = image.split("../../");
            image = "{{ $dominioEsquema }}/sysadmin/" + image[1];
            //se modifica el href del boton
            document.getElementById('myBtn{{ $password }}').href = `{{ pagesetting('link_category') }}${id}`;

            document.getElementById('imgs{{ $password }}').src = image;
        })
        ();
    </script>
@endpushonce


@pushonce(config('pagebuilder.site_style_var'))
    <style>
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
