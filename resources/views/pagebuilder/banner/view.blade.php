<div class="tmp-sectionimg">
  <figure>
    <img style="max-height: 215px; width: 1527px"  @if (!empty(pagesetting('banner_image'))) src="{{ pagesetting('banner_image')[0]['thumbnail'] }}"
      alt="{{ __('Image') }}" />
    @else
    <img style="max-height: 215px; width: 1527px" src="{{ asset('demo/images/banner-placeholder.jpg') }}" alt="{{ __('Image') }}" />
    @endif
  </figure>
</div>