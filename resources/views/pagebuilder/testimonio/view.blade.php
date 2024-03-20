<div class="testimonio_cuerpo">
    <div class="testimonio_cabecera">
        <div class="estrellas">
            @php
                $estrellas = pagesetting('estrellas_testimonio');
            @endphp
            @for ($i = 0; $i < $estrellas; $i++)
                <i class='bx bxs-star' style="color: gold"></i>
            @endfor
        </div>
        <i class='quote bx bxs-quote-alt-right'></i>
    </div>
    <img class="testimonio_imagen" src="{{ pagesetting('imagen_testimonio')[0]['thumbnail'] ?? '' }}" alt="alt">

    <div class="textos_testimonio">
        <div class="mensaje">{{ pagesetting('texto_testimonio') }}</div>
        <div class="titulo_testimonio">
            {{ pagesetting('titulo_testimonio') }}
        </div>
    </div>
</div>



@pushonce(config('pagebuilder.site_script_var'))
    <script></script>
@endpushonce


@pushonce(config('pagebuilder.site_style_var'))
    <style>
        .testimonio_cuerpo {
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
