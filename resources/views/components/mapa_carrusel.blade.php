{{-- Carrousel hecho con Bootstrap --}}

<div id="carruselInicio" class="carousel slide mt-0 mt-sm-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Imagen 1"></button>
    <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="1" aria-label="Imagen 2"></button>
    <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="2" aria-label="Imagen 3"></button>
    <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="3" aria-label="Imagen 4"></button>
    <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="4" aria-label="Imagen 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="{{ asset('pdfs/carruselInicio/Convocatoria_FIRMA.pdf') }}" target=”_blank”>
        <img src="{{ asset('imagenes/carruselInicio/bannerWEB_manita.png') }}" class="d-block w-100" alt="..." data-bs-interval="100">
      </a>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagenes/carruselInicio/FotoPortadaWeb.png') }}" class="d-block w-100" alt="..." data-bs-interval="100">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagenes/carruselInicio/Hackathon.png') }}" class="d-block w-100" alt="..." data-bs-interval="100">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagenes/carruselInicio/FotoPortadaWeb.png') }}" class="d-block w-100" alt="..." data-bs-interval="100">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagenes/carruselInicio/Admision-docente.jpg') }}" class="d-block w-100" alt="..." data-bs-interval="100"   >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carruselInicio" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carruselInicio" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
</div>