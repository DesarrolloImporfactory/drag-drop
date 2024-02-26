@php
    $url = pagesetting('url_producto');
    if($url == null){
        $url = '#';
    }


@endphp

<a href="{{$url}}">
    <div class="card" >
        <img class="card-img-top"
             @if(!empty(pagesetting('imagen_producto'))) src="{{pagesetting('imagen_producto')[0]['thumbnail']}}"
             alt="producto"/>
        @else
            src="{{ asset('demo/images/banner-placeholder.jpg') }}" alt="{{ __('Image') }}"
        @endif

        <div class="card-bod text-center">
            <a href="{{$url}}" class="btn btn-danger w-100">Comprar</a>    
            <h5 class="card-title text-center fs-6 pt-1">{{pagesetting('nombre_producto')}}</h5>
            <p class="card-text">
                @if(pagesetting('descuento') != null)
                    @php
                        $descuento = pagesetting('descuento');
                        $precio = pagesetting('precio_producto');
                        $descuento = floatval($descuento);
                        $precio = floatval($precio);
                        $precioDescuento = $precio - ($precio * $descuento / 100);
                    @endphp
                    <span class="text-primary fs-5 font-weight-bold"> ${{ $precioDescuento }}</span>
                    <span class="text-muted fs-6 text-decoration-line-through">${{ pagesetting('precio_producto') }}</span>
                @else 
                    <span class="text-primary font-weight-bold"> ${{ pagesetting('precio_producto') }}</span>
                @endif
            </p>
            @if(pagesetting('descuento') !=null)
                <div class="badge bg-primary position-absolute" style="top: 0.5rem; left: 0.5rem;">
                    Ahorra un {{pagesetting('descuento')}}%
                </div>
            @endif
        </div>
    </div>
</a>
