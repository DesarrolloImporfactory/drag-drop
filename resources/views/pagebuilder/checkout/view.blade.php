@pushonce(config('pagebuilder.site_style_var'))
<style>
    .modal-custom {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: -30px;
            width: 100%;
            /* Full width */
            height: 100vh;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            border: 1px solid #888;
        }

        .modal-content-main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;

        }

        .modal-content-custom {
            background-color: #fefefe;
            margin: 0 auto;
            /* 15% from the top and centered */
            border: 1px solid #888;
            width: 500px;
            border: 1px solid #888;
            /* Could be more or less, depending on screen size */
        }

        .modal-header-custom {
            display: flex;
            padding: 2px 10px;
            justify-content: space-between;
            align-items: center;
            
            border-bottom: 1px solid #888;
        }

        .modal-title{
            font-size: 0.75em;
        }

        .close-custom {
            color: rgb(0, 0, 0);
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close-custom:hover,
        .close-custom:focus {
            color: #535353;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-body-custom {
            padding: 2px 16px;
        }

        .custom-hr {
            border: 0;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
        }

        .product-head {
            display: flex;
            align-items: center;
            font-size: .75em;  
            margin-bottom: 1em;
            gap: 1em;
        }

        .gap-2 {
            gap: 1em;
        }

        .close-custom-producto {
            color: white;
            font-size: 1.0em;
            padding: 1px 5px;
            cursor: pointer;
            background-color: red;
        }

        .product-price {
            font-size: 1.25em;
            font-weight: bold;
        }

        .custom-top {
            display: flex;
            justify-content: space-between;
        }

        .product-description-back {
            background-color: #d2d2d2;
            border-radius: 10px;
        }

        .product-description {
            padding: 1px 5px;
            display: flex;
            justify-content: space-between;
        }

        .bold {
            font-weight: bold;
            padding-bottom: 3px;
        }

        .pt-1 {
            padding-top: 0.25em !important;
        }

        .form-main {
            padding-top: 20px;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 1em;
            width: 100%;
        }

        .icon {
            border: 1px solid #b1b1b1;
            padding: 0.52rem;
            background-color: #e1e1e1;

        }

        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #b1b1b1;
            border-left: none;
            box-sizing: border-box;
        }

        .btn {
            justify-content: center;
            display: block;
            border-radius: 15px;
            border: none;

        }

        .btn-red {
            width: 100%;
            /* Hace que el botón ocupe todo el ancho disponible */
            display: block;
            /* Permite que el botón llene el espacio horizontalmente */
            padding: 10px 20px;
            /* Ajusta al tamaño deseado */
            border: none;
            cursor: pointer;
            box-sizing: border-box;
            /* Asegúrate de que padding y border estén incluidos en el ancho */
            background-color: red;
            color: white;
            font-weight: bold;
        }
    
</style>
@endpushonce
 <!-- Modal -->
 <div id="myModal" class="modal-custom">
    <!-- Modal content -->
    <div class="modal-content-main">
@php
if (!isset($_SESSION["comprar"])) {
  $session_id = 'user_' . mt_rand();
  $_SESSION["comprar"] = $session_id;
} else {
  $session_id = $_SESSION["comprar"];
}
@endphp
    <div class="modal-content-custom">
        <div class="modal-header-custom">
            <h2 class="modal-title">ENVÍO GRATIS 🚨</h2>
            <span class="close-custom">&times;</span>
        </div>
        <hr class="custom-hr">
        <div class="modal-body-custom">
            <div class="custom-top">

                <div class="product-head">
                    <img height="70" width="70" class="img-product"
                        src=""
                        alt="alt">
                    <span class="name-product"> </span>
                </div>
                <div class="product-head gap-2">
                    <span class="product-price">$25.00</span>
                    <span class="close-custom-producto">X</span>
                </div>
            </div>
            <div class="product-description-back">

                <div class="product-description pt-1">
                    <span>Subtotal</span>
                    <span class="subtotal-product">$15.00</span>

                </div>

                <div class="product-description">
                    <span>Envío</span>
                    <span>Gratis</span>

                </div>

                <hr class="custom-hr">

                <div class="product-description">
                    <span class="bold">Total</span>
                    <span class="bold total-product">$15.00</span>

                </div>


            </div>

            <div class="form-main">
                <form method="POST">

                    <input type="hidden" name="session" value="{{$session_id}}">


                    <div class="form-group">
                        <label class="icon" for="nombre"><i class='bx bx-user'></i></label>
                        <input class="form-input" type="text" id="nombre" name="nombre"
                            placeholder="Nombre y Apellido *" required>
                    </div>
                    <div class="form-group">
                        <label class="icon" for="telefono"><i class='bx bx-phone'></i></label>
                        <input class="form-input" type="text" id="telefono" name="telefono" placeholder="Teléfono *"
                            required>
                    </div>
                    <div class="form-group">
                        <label class="icon" for="calle_principal"><i class='bx bx-map'></i></label>
                        <input class="form-input" type="text" id="calle_principal" name="calle_principal"
                            placeholder="Calle Principal *" required>
                    </div>
                    <div class="form-group">
                        <label class="icon" for="calle_secundaria"><i class='bx bx-map'></i></label>
                        <input class="form-input" type="text" id="calle_secundaria" name="calle_secundaria"
                            placeholder="Calle Secundaria *" required>
                    </div>
                    <div class="form-group">
                        <label class="icon" for="referencia"><i class='bx bx-map'></i></label>
                        <input class="form-input" type="text" id="referencia" name="referencia"
                            placeholder="Referencia *" required>
                    </div>
                    <div class="form-group">
                        <label class="icon" for="provincia"><i class='bx bx-map'></i></label>
                        <select name="provincia" id="provincia" class="form-input">
                            <option value="">Provincia *</option>
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="icon" for="ciudad"><i class='bx bx-map'></i></label>
                        <select name="ciudad" id="ciudad" class="form-input" disabled>
                            <option value="">Ciudad *</option>
                          
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="icon" for="referencia_opcional"><i class='bx bx-right-arrow-alt'></i></label>
                        <input class="form-input" type="text" id="referencia_opcional" name="referencia_opcional"
                            placeholder="Referencia Adcicional (Opcional)" required>
                    </div>
                    <div class="form-group btn">
                        <button class="btn-red" onclick="enviarCompra(event)">Completa tu compra</button>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>


<button class="btn" style="background-color: {{pagesetting('color_checkout')}}; color: {{pagesetting('color_texto_checkout')}}; padding: 5px 10px;" id="myBtn">
    {{pagesetting('texto_checkout')}}
</button>

@pushonce(config('pagebuilder.site_script_var'))
<script>
    let codigo_producto ="{{ pagesetting('codigo_checkout')}}";
    let url = "{!! pagesetting('url_tienda') !!}";
    console.log(url);
    let path = "/sysadmin/vistas/ajax/checkout.php"
   async function checkout(){
       await fetch(url + path, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({codigo: codigo_producto})
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if(data.image_path.includes("../")){
                data.image_path = data.image_path.replace("../../", url + "/sysadmin/");
            }
            let product= {
                id_producto: data.id_producto,
                precio: data.valor1_producto,
            }
            let Storage_provincias = data.provincias;
            localStorage.setItem('provincias', JSON.stringify(Storage_provincias));
            localStorage.setItem('producto', JSON.stringify(product));
            document.querySelector('.img-product').src = data.image_path;
            document.querySelector('.name-product').textContent = data.nombre_producto;
            document.querySelector('.product-price').textContent = "$" + parseFloat( data.valor1_producto ).toFixed(2);
            document.querySelector('.subtotal-product').textContent = "$" + parseFloat( data.valor1_producto ).toFixed(2);
            document.querySelector('.total-product').textContent = "$" + parseFloat( data.valor1_producto ).toFixed(2);
            //cargar provincias
            let provincias = data.provincias;
            let select = document.querySelector('#provincia');
            
            provincias.forEach(provincia => {
                let option = document.createElement('option');
                option.value = provincia.provincia   ;
                option.textContent = provincia.provincia;
                select.appendChild(option);
            });
            //cargar ciudades
            document.querySelector('#provincia').addEventListener('change', () => {
                document.querySelector('#ciudad').disabled = false;
            });

            //en base a la provincia seleccionada cargar las ciudades
            document.querySelector('#provincia').addEventListener('change', () => {
                let provincia = document.querySelector('#provincia').value;
                let ciudades = data.provincias.filter(localidad => localidad.provincia == provincia);
                let select = document.querySelector('#ciudad');
                console.log(ciudades[0]);
                select.innerHTML = "";
                var first_option = document.createElement('option');
            first_option.value = "";
            first_option.textContent = "Provincia *";
            select.appendChild(first_option);
            
                ciudades[0]['localidades'].forEach(ciudad => {
                    let option = document.createElement('option');
                    option.value = ciudad.codigo;
                    option.textContent = ciudad.nombre;
                    select.appendChild(option);
                });
            });
            
            document.querySelector('.close-custom').addEventListener('click', () => {
                document.getElementById('myModal').style.display = "none";
            });
   })
        .catch((error) => {
            console.error('Error:', error)
        });
    }
    checkout();


</script>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close-custom")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function () {
        modal.style.display = "block";
        let product = JSON.parse(localStorage.getItem('producto'));
        let id = product.id_producto;
        let precio = product.precio;
        let session = document.querySelector('input[name="session"]').value;
        let formData = new FormData();
        formData.append('id', id);
        formData.append('precio_venta', precio);
        formData.append('sesion', session);
        formData.append('cantidad', 1);
        formData.append('proceso', 2);

        fetch(url + "/ajax/agregar_tmp_modalventas.php", {
            method: 'POST',
            body: formData


        })
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        
    }

</script>

<script>
    function enviarCompra(event){
        event.preventDefault();
        let nombre = document.querySelector('#nombre').value;
        let telefono = document.querySelector('#telefono').value;
        let calle_principal = document.querySelector('#calle_principal').value;
        let calle_secundaria = document.querySelector('#calle_secundaria').value;
        let referencia = document.querySelector('#referencia').value;
        let provincia = document.querySelector('#provincia').value;
        let ciudad = document.querySelector('#ciudad').value;
        let referencia_opcional = document.querySelector('#referencia_opcional').value;
        let Storage_provincias = localStorage.getItem('provincias');
        Storage_provincias = JSON.parse(Storage_provincias);
        provincia = Storage_provincias.filter(prov => prov.provincia == provincia); 
        provincia = provincia[0].codigo_provincia;
        
        let session = document.querySelector('input[name="session"]').value;

        // manda los datos al servidor para que se procese la compra 
        //genera un formulario con los datos y lo envía al servidor
        let form = document.createElement('form');
        form.method = "POST";
        form.action = url + "gracias.php";
        form.style.display = "none";
        let input = document.createElement('input');
        input.type = "text";
        input.name = "nombre";
        input.value = nombre;
        form.appendChild(input);
        input = document.createElement('input');
        input.type = "text";
        input.name = "telefono";
        input.value = telefono;
        form.appendChild(input);
        input = document.createElement('input');
        input.type = "text";
        input.name = "calle_principal";
        input.value = calle_principal;
        form.appendChild(input);
        input = document.createElement('input');
        input.type = "text";
        input.name = "calle_secundaria";
        input.value = calle_secundaria;
        form.appendChild(input);
        input = document.createElement('input');
        input.type = "text";
        input.name = "referencia";
        input.value = referencia;
        form.appendChild(input);
        input = document.createElement('input');
        input.type = "text";
        input.name = "provinica";
        input.value = provincia;
        form.appendChild(input);
        input = document.createElement('input');
        input.type = "text";
        input.name = "ciudad";
        input.value = ciudad;
        form.appendChild(input);
        input = document.createElement('input');
        input.type = "text";
        input.name = "referenobservacioncia_opcional";
        input.value = referencia_opcional;
        form.appendChild(input);
        input = document.createElement('input');
        input.type = "text";
        input.name = "session";
        input.value = session;
        form.appendChild(input);
        document.body.appendChild(form);
        input = document.createElement('input');
        input.type = "text";
        input.name = "cliente";
        input.value = "1";
        form.appendChild(input);
        input = document.createElement('input');
        input.type = "text";
        input.name = "shipping_rate_priority";
        input.value = "1";
        form.appendChild(input);
        form.submit();


        /*fetch(url + "/sysadmin/vistas/ajax/checkout.php", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: {
                nombre: nombre,
                telefono: telefono,
                calle_principal: calle_principal,
                calle_secundaria: calle_secundaria,
                referencia: referencia,
                provincia: provincia,
                ciudad: ciudad,
                referencia_opcional: referencia_opcional
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if(data.status == "success"){
                alert("Compra realizada con éxito");
                document.getElementById('myModal').style.display = "none";
            }
        })
        .catch((error) => {
            console.error('Error:', error)
        }); */
    }
</script>
@endpushonce
