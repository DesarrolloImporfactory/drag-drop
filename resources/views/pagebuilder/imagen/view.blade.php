<div class="tmp-sectionimg">
    <figure>
        @php
            $isBuildPage = false;
            $info_path = $_SERVER['PATH_INFO'];

            if (strpos($info_path, '/pages') === 0) {
                $isBuildPage = true;
            }
        @endphp
        @if ($isBuildPage)
            <div id="resize-container" style="width: {{ pagesetting('ancho') }}; height: {{ pagesetting('alto') }};">
                <img id="resize-image"
                    src="{{ pagesetting('image')[0]['thumbnail'] ?? asset('demo/images/banner-placeholder.jpg') }}"
                    alt="{{ __('Image') }}" />
                <div id="resize-n" class="resize-bar"></div>
                <div id="resize-e" class="resize-bar"></div>
                <div id="resize-s" class="resize-bar"></div>
                <div id="resize-w" class="resize-bar"></div>
            </div>
        @else
            <img @if (!empty(pagesetting('image'))) src="{{ pagesetting('image')[0]['thumbnail'] }}"
        alt="{{ __('Image') }}" />
      
        @else
      <img style="width: {{ pagesetting('ancho') }}; height: {{ pagesetting('alto') }} " src="{{ asset('demo/images/banner-placeholder.jpg') }}" alt="{{ __('Image') }}" /> @endif
                @endif
    </figure>
</div>



@pushonce(config('pagebuilder.site_style_var'))
    <style>
        #resize-container {
            position: relative;
            display: inline-block;
        }

        #resize-image {
            display: block;
            width: 100%;
            height: auto;
        }

        .resize-bar {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: rgb(1, 1, 255);
        }

        #resize-n {
            top: -5px;
            left: 50%;
            transform: translateX(-50%);
            cursor: ns-resize;
            width: 50px;
            height: 5px;
        }

        #resize-e {
            top: 50%;
            right: -5px;
            transform: translateY(-50%);
            cursor: ew-resize;
            width: 5px;
            height: 50px;

        }

        #resize-s {
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            cursor: ns-resize;
            width: 50px;
            height: 5px;
        }

        #resize-w {
            top: 50%;
            left: -5px;
            transform: translateY(-50%);
            cursor: ew-resize;
            width: 5px;
            height: 50px;
        }
    </style>
@endpushonce

@pushonce(config('pagebuilder.site_script_var'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.getElementById("resize-image");
            let isResizing = false;

            document.querySelectorAll(".resize-bar").forEach((bar) => {
                bar.addEventListener("mousedown", function(e) {
                    isResizing = true;
                    let startX = e.clientX;
                    let startY = e.clientY;
                    let startWidth = parseInt(
                        document.defaultView.getComputedStyle(container).width,
                        10
                    );
                    let startHeight = parseInt(
                        document.defaultView.getComputedStyle(container).height,
                        10
                    );

                    document.addEventListener("mousemove", doResize);
                    document.addEventListener("mouseup", stopResize);

                    function doResize(e) {
                        if (isResizing) {
                            // Agrega aquí la lógica de redimensionamiento para cada barra
                            // Por ejemplo, para la barra sur (resize-s):
                            if (bar.id === "resize-s") {
                                const height = startHeight + e.clientY - startY;
                                if (height > 100) {
                                    // Mínimo tamaño para evitar que sea demasiado pequeño
                                    container.style.height = height + "px";
                                    container.style.width = startWidth + "px";
                                }
                            }
                            if (bar.id === "resize-e") {
                                const width = startWidth + e.clientX - startX;
                                if (width > 100) {
                                    container.style.width = width + "px";
                                    container.style.height = startHeight + "px";
                                }
                            }
                            if (bar.id === "resize-w") {
                                const width = startWidth - e.clientX + startX;
                                if (width > 100) {
                                    container.style.width = width + "px";
                                    container.style.left = e.clientX + "px";
                                }
                            }
                            if (bar.id === "resize-n") {
                                const height = startHeight - e.clientY + startY;
                                if (height > 100) {
                                    container.style.height = height + "px";
                                    container.style.top = e.clientY + "px";
                                }
                            }
                            // Implementa lógica similar para las otras barras
                        }
                    }

                    function stopResize() {
                        isResizing = false;
                        document.removeEventListener("mousemove", doResize);
                    }
                });
            });
        });
    </script>
@endpushonce
