@extends('layouts.app')
@section('title', 'Inicio - Plantel CECyTE')
@section('content')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_estandar.css') }}">
@endpush
<section class="seccion-con-fondo-blanco">
    {{-- Sección 1: Imagen de fondo y texto --}}
    <section class="seccion-hero text-center text-white" style="background-image: url('/imagenes/estandar1/fondo1.jpg');">
        <div>
            <h1 class="display-4">Bienvenido al Plantel CECyTE Estandar</h1>
            <p class="lead">Hoy un estudiante, mañana un líder.</p>
        </div>
    </section>

    
    {{-- Sección 2: Dirección y Mapa --}}
    <section class="container py-5">
        <h2 class="mb-4 text-center">Dirección</h2>
        <div class="caja-direccion">
            <p>Colorines 2, Bello Horizonte, 72700 Heroica Puebla de Zaragoza, Pue.</p>
        </div>
    </section>
    

    <section class="mapa-ancho">
        <div class="ratio ratio-16x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7542.164700030432!2d-98.2620295!3d19.0601166!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc6f9bfcfcdf3%3A0xad07be6c09541ae2!2sCECYTE%20PUEBLA%20COLEGIO%20DE%20ESTUDIOS%20CIENT%C3%8DFICOS%20Y%20TECNOLOGICOS%20DEL%20ESTADO%20DE%20PUEBLA!5e0!3m2!1ses-419!2smx!4v1745429036732!5m2!1ses-419!2smx" width="1400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>


    {{-- Sección 3: Equipo Responsable --}}
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Equipo Responsable</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="{{ asset('imagenes/estandar1/Sonia.jpg') }}" class="equipo-img mb-2">
                    <h5>Sonia Abigail Espinoza Robles</h5>
                    <p>Encargada del despacho de la dirección del plantel</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('imagenes/estandar1/Jonathan.jpg') }}" class="equipo-img mb-2">
                    <h5>Jonathan Luis Barron Bracho</h5>
                    <p>Coordinación Académica</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('imagenes/estandar1/Magaly.jpg') }}" class="equipo-img mb-2">
                    <h5>Magaly Amaro Amaro</h5>
                    <p>Control Escolar</p>
                </div>
                
                </div>
            </div>
        </div>
    </section>

{{-- Sección 4: Galería (Carrusel) --}}
<section class="container py-5">
    <h2 class="text-center mb-4">Galería</h2>
    <div id="carouselGaleria" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/imagenes/estandar1/ENTRADA1.jpg" class="d-block w-100 galeria-img">
            </div>
            <div class="carousel-item">
                <img src="/imagenes/estandar1/salon1.jpg" class="d-block w-100 galeria-img">
            </div>
            <div class="carousel-item">
                <img src="/imagenes/estandar1/SALONES.jpg" class="d-block w-100 galeria-img">
            </div>
            <div class="carousel-item">
                <img src="/imagenes/estandar1/LABORATORIO-DE-SUS-MULTIPLES.jpg" class="d-block w-100 galeria-img">
            </div>
            <div class="carousel-item">
                <img src="/imagenes/estandar1/LABORATORIO-DE-SUS-MULTIPLES1.jpg" class="d-block w-100 galeria-img">
            </div>
            <div class="carousel-item">
                <img src="/imagenes/estandar1/LABORATORIO-DE-SUS-MULTIPLES3.jpg" class="d-block w-100 galeria-img">
            </div>
            <div class="carousel-item">
                <img src="/imagenes/estandar1/LABORATORIO-DE-COMPUTO1.jpg" class="d-block w-100 galeria-img">
            </div>
            <div class="carousel-item">
                <img src="/imagenes/estandar1/COOPERATIVA.jpg" class="d-block w-100 galeria-img">
            </div>
        </div>
        <!-- Botones corregidos -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselGaleria" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselGaleria" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    {{-- Sección 5: Carreras Disponibles --}}
<section class="container py-5">
    <h2 class="text-center mb-4">Carreras Disponibles</h2>
    <div class="tabla-carreras-wrapper">
        <table class="tabla-carreras">
            <thead>
                <tr>
                    <th>Nombre de la Carrera</th>
                    <th>Duración</th>
                    <th>Modalidad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Derecho</td>
                    <td>4 años</td>
                    <td>Presencial</td>
                </tr>
                <tr>
                    <td>Arquitectura</td>
                    <td>5 años</td>
                    <td>Presencial</td>
                </tr>
                <tr>
                    <td>Contaduría Pública</td>
                    <td>4 años</td>
                    <td>En línea</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

</section>
    </div>
</section>
</section>

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
