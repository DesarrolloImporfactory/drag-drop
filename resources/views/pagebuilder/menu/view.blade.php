
@pushonce(config('pagebuilder.site_style_var'))
<style>
    .enlace {
        text-decoration: none;
        display: flex;
        gap: 2em;
        place-content: center;
        margin: 0;
        padding: 0;
       
    
    }

    .enlace li {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .enlace li a:hover {
        background-color: rgba(0, 0, 0, 0.5)
    }
</style>
@endpushonce

<ul class="enlace" style="background-color: {{pagesetting('menu_color')}}; @if(pagesetting('orientation') == 'row')
max-width: 100%;
@else
max-width: min-content;
@endif  
flex-direction: {{pagesetting('orientation')}};
">
@if (!empty(pagesetting('menusA')))

    @foreach (pagesetting('menusA') as $menu)
   
        <li>
            <a  style="text-align: center; color: {{pagesetting("menu_color_text")}}" class="nav-link" href="{{ $menu['urli'] }}">{{ $menu['titulom'] }}</a>
        </li>
    @endforeach
@endif
</ul>
