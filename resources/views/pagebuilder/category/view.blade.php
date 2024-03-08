@pushonce(config('pagebuilder.site_style_var'))
<style>
  
    .carousel-main {

        display: flex;
        justify-content: center;
        align-items: center;
        height: 600px;
        margin: 0;
        position: relative;
    }

    .carousel-container {
        /* Ajusta al tamaño deseado */
        overflow: hidden;
        /* Oculta las imágenes fuera del contenedor */
    }

    .carousel-slide {
        display: flex;
        /* Alinea las imágenes horizontalmente */
        transition: transform 0.5s ease-in-out;
    }

    .carousel-slide img {
        min-width: 100%;
        max-height: 600px !important;
        /* Asegura que cada imagen ocupe el 100% del contenedor */
        object-fit: cover;
        /* Asegura que las imágenes cubran el espacio sin deformarse */
    }

    #prevBtn,
    #nextBtn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: transparent;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        height: calc(100% - 30vw
        );
        color: #ffffff !important;
        font-size: 20px;
        z-index: 10;  

    }

    #prevBtn {
        left: 10px;
    }

    #nextBtn {
        right: 10px;
    }

    #prevBtn:hover,
    #nextBtn:hover {
        background-color: #f2f2f2;
    }
</style>
@endpushonce

@pushonce(config('pagebuilder.site_script_var'))
<script>
    let slideIndex = 0;
    const slides = document.querySelectorAll('.carousel-slide img');
    const totalSlides = slides.length;

    document.getElementById('nextBtn').addEventListener('click', () => {
        moveToNextSlide();
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
        moveToPrevSlide();
    });

    function updateSlidePosition() {
        const slideWidth = document.querySelector('.carousel-slide img').clientWidth;
        const slideMovement = slideIndex * slideWidth;
        document.querySelector('.carousel-slide').style.transform = `translateX(-${slideMovement}px)`;
    }

    function moveToNextSlide() {
        if (slideIndex === totalSlides - 1) {
            slideIndex = 0; // Vuelve al inicio si es la última imagen
        } else {
            slideIndex++;
        }
        updateSlidePosition();
    }

    function moveToPrevSlide() {
        if (slideIndex === 0) {
            slideIndex = totalSlides - 1; // Va a la última imagen si es la primera
        } else {
            slideIndex--;
        }
        updateSlidePosition();
    }

    // Función para avanzar al siguiente slide automáticamente cada 3 segundos
    function autoSlide() {
        setInterval(moveToNextSlide, {{pagesetting('tiempo')}}); // Cambia a la siguiente imagen cada 3000 milisegundos
    }

    autoSlide(); // Inicia el carrusel automático al cargar la página
</script>
@endpushonce

<div class="carousel-main">
    @php if(!empty(pagesetting('image_1'))) {
    $image1 = pagesetting('image_1')[0]['thumbnail']; }else{ $image1 = "https://via.placeholder.com/600x300?text=Imagen+1";} @endphp

    @php if(!empty(pagesetting('image_2'))){
    $image2 = pagesetting('image_2')[0]['thumbnail']; }else{ $image2 = "https://via.placeholder.com/600x300?text=Imagen+2"; }@endphp

    @php if(!empty(pagesetting('image_3'))){
    $image3 = pagesetting('image_3')[0]['thumbnail']; }else{ $image3 = "https://via.placeholder.com/600x300?text=Imagen+3";}@endphp
    <div class="carousel-container">
        <div class="carousel-slide">
            <img  src="{{$image1}}" alt="Imagen 1">
            <img src="{{$image2}}" alt="Imagen 2">
            <img src="{{$image3}}" alt="Imagen 3">
        </div>
    </div>
    <button id="prevBtn"><i class='bx bx-chevron-left' ></i></button>
    <button id="nextBtn"><i class='bx bx-chevron-right' ></i></button>
</div>
