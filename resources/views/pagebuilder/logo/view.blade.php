@pushonce(config('pagebuilder.site_style_var'))
<style>
  .banner-section {
    left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
  }

  @media (max-width: 980px) {
    .banner-section {
      width: 100%;
      transform: translate(-50%, -120%);

    }
  }
</style>
  @endpushonce

<div class="tmp-sectionimg">
    <figure >
      <div style="position:relative">

        <img class="banner-section" style="  width: {{pagesetting('ancho')}}; height: {{pagesetting('alto')}} " @if (!empty(pagesetting('logo'))) src="{{ pagesetting('logo')[0]['thumbnail'] }}"
        alt="{{ __('logo') }}" />
        @else
        <img class="banner-section"
         style="width: {{pagesetting('ancho')}}; height: {{pagesetting('alto')}} " src="{{ asset('demo/images/banner-placeholder.jpg') }}" alt="{{ __('logo') }}" />
        @endif
      </div>
    </figure>
  </div>

  
