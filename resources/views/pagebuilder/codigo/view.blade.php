
@pushonce(config('pagebuilder.site_style_var'))
    <style>

        {{ pagesetting("codigo_css") }}
        
    </style>
@endpushonce


@pushonce(config('pagebuilder.site_script_var'))

<script>
    {!! pagesetting("codigo_js") !!}
</script>
@endpushonce
{!! pagesetting("codigo_html") !!}


