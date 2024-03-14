<div class="cuerpo">

    
    <div class="contenedor">
        <div>
            <img src="" alt="img">
        </div>
        <div class="btn">
            <a class="button"  href="{{pagesetting('link_category')}}" id="myBtn">{{pagesetting('categoriaa')}}</a>
        </div>
    </div>
    
</div>


@pushonce(config('pagebuilder.site_script_var'))

<script>
 (function(){
    document.getElementById('myBtn').addEventListener('click', function(){
        //obtiene el href del boton
        var href = this.getAttribute('href');
        window.location.href = ;
    });

    
 })()
 
</script>
@endpushonce


@pushonce(config('pagebuilder.site_style_var'))
    <style>.contenedor {
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