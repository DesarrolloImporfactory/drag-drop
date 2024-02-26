<button  onclick="enviarEnlace('{{ pagesetting('link') }}')"
    class="
        {{ pagesetting('rounded') == 'rounded' ? 'rounded' : '' }} 
        {{ pagesetting('block') == 'block' ? 'd-block w-100' : '' }} 
        {{ pagesetting('outline') == 'outline' ? 'btn-outline-' . pagesetting('color') : 'btn-' . pagesetting('color') }} 
        btn 
        btn-{{ pagesetting('size') }}   
        "
        {{ pagesetting('disabled') == 'disabled' ? 'disabled' : '' }} 
>
    @php
        if(pagesetting('icon-align') == 'left' )
            echo '<i class="' . pagesetting('icon') . ' fs-' . pagesetting('icon-size') . '"></i>';
        else {
            echo "";
        }
    @endphp
    <a class="text-decoration-none text-{{ pagesetting('texto_color') }} d-flex justify-content-center align-items-center" href="{{ pagesetting('link') }}" target="{{ pagesetting('target') }}">
        @if(pagesetting('animation') && pagesetting('icon-align') == 'left')
            <i class="{{ pagesetting('animation') }} {{ pagesetting('icon-size') }}"></i>
        @endif

        {{ pagesetting('texto') }}

        @php
            if(pagesetting('icon-align') == 'right' )
                echo '<i class="' . pagesetting('animation') . ' fs-' . pagesetting('icon-size') . '"></i>';
            else {
                echo "";
            }
        @endphp
    </a>
</button>

@pushonce(config('pagebuilder.site_script_var'))
<script>
    function enviarEnlace(link) {
        
        window.open(link, '_blank');

        
    }
</script>
@endpushonce