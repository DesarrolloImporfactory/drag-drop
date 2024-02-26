<div class="tmp-video">
  @php
      $videoUrl = pagesetting('enlace');
      if($videoUrl != null){
        $videoUrl = str_replace('watch?v=', 'embed/', $videoUrl);
      }
      else{
        $videoUrl = pagesetting('video');
      }

  @endphp

  @if(strpos($videoUrl, 'youtube') !== false)
  <iframe class="w-100" height="360px"  src="{{$videoUrl}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  @else
  <video src="{{$videoUrl}}" class="w-100 "height="360px"></video>
@endif    


</div>
