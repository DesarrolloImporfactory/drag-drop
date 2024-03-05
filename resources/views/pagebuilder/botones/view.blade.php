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

   
    <a class="text-decoration-none text-{{ pagesetting('texto_color') }} d-flex justify-content-center align-items-center" href="{{ pagesetting('link') }}" target="{{ pagesetting('target') }}">
        @if(pagesetting('animation') && pagesetting('icon-align') == 'left')
        <span class="d-flex justify-content-center align-items-center {{ pagesetting('icon-size') }}">
            
            {!! pagesetting('animation') !!}
        </span>
        @endif

        {{ pagesetting('texto') }}

        @if(pagesetting('icon-align') == 'right' )
        

            <span class="d-flex justify-content-center align-items-center {{ pagesetting('icon-size') }}">
                {!! pagesetting('animation') !!}
            </span>
            
        
        @endif
    </a>
</button>

@pushonce(config('pagebuilder.site_script_var'))
<script>
    function enviarEnlace(link) {
        
        window.open(link, '_blank');

        
    }
</script>
@endpushonce