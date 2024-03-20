<div class="centrar">
    {{ pagesetting('whatsapp_title') }}
</div>
<div class="formulario-whatsapp">
    <form>
        <div class="form-duo">
            <div>
                <input class="form-input-text" type="text" placeholder="Nombre*" id="nombre" name="nombre" required>
            </div>
            <div>
                <input class="form-input-text" type="text" placeholder="Email*" id="correo" name="correo" required>
            </div>
        </div>
        <div>
            <input class="form-input-text" type="text" placeholder="Teléfono" id="telefono" name="telefono"
                required>
        </div>
        <div>
            <textarea class="form-input-textarea" id="mensaje" placeholder="Mensaje*" name="mensaje" required></textarea>
        </div>
        <div class="btn-whatsapp">
            <button class="btn-whatsap" type="submit">Enviar mensaje a Whatsapp</button>
        </div>
    </form>
</div>
@pushonce(config('pagebuilder.site_style_var'))
    <style>
        .formulario-whatsapp {
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-input-text {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-input-textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-duo {
            display: flex;
            gap: 10px;
        }

        .form-duo>div {
            flex: 1;
            /* hace que cada div dentro de form-duo tome todo el espacio disponible */
        }

        .btn-whatsapp {
            text-align: center;
        }

        .btn-whatsap {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: {{ pagesetting('whatsapp_button_color') }};
            color: #fff;
            cursor: pointer;
            width: 100%;
        }
    </style>
@endpushonce


@pushonce(config('pagebuilder.site_script_var'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.formulario-whatsapp form').addEventListener('submit', function(e) {
                e.preventDefault();
                let nombre = document.getElementById('nombre').value;
                let correo = document.getElementById('correo').value;
                let telefono = document.getElementById('telefono').value;
                let mensaje = document.getElementById('mensaje').value;
                let url =
                    `https://api.whatsapp.com/send?phone={{ pagesetting('whatsapp_number') }}&text=Hola, mi nombre es ${nombre}, mi correo es ${correo}, mi teléfono es ${telefono}, y mi mensaje es: ${mensaje}`;
                window.open(url, '_blank');
            });
        });
    </script>
@endpushonce
