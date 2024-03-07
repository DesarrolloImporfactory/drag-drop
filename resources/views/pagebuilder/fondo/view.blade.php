
@pushonce(config('pagebuilder.site_style_var'))
    <style>
      
        body{
            background-image: url({{ pagesetting('fondo')[0]['thumbnail'] ?? "" }});
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }        
    </style>
@endpushonce

