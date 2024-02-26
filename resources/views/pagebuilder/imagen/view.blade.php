<div class="tmp-sectionimg">
    <figure>
      <img @if (!empty(pagesetting('image'))) src="{{ pagesetting('image')[0]['thumbnail'] }}"
        alt="{{ __('Image') }}" />
      @else
      <img src="{{ asset('demo/images/banner-placeholder.jpg') }}" alt="{{ __('Image') }}" />
      @endif
    </figure>
  </div>