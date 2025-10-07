{{-- ❗❗❗❗❗❗❗❗❗❗❗❗❗❗❗TEMP: Demo plantel magdalena ❗❗❗❗❗❗❗❗❗❗❗❗❗❗❗--}}

@extends('layouts.app')

@section('content')
    @push('styles')
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/styles_planteles.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @endpush

    <div class="container mt-4">
        <!-- Encabezado principal estilo CECYTE -->
        <div id="plantel-carousel" class="carousel slide carousel-container mb-3 mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#plantel-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Imagen 1"></button>
                <button type="button" data-bs-target="#plantel-carousel" data-bs-slide-to="1" class aria-current="true" aria-label="Imagen 2"></button>
                <button type="button" data-bs-target="#plantel-carousel" data-bs-slide-to="2" class aria-current="true" aria-label="Imagen 3"></button>
                <button type="button" data-bs-target="#plantel-carousel" data-bs-slide-to="3" class aria-current="true" aria-label="Imagen 4"></button>
                <button type="button" data-bs-target="#plantel-carousel" data-bs-slide-to="4" class aria-current="true" aria-label="Imagen 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item  active">
                    <img src="{{ asset('storage/demoMagdalena/fotosPlantel/20250702_081606.jpg') }}" class="carousel-img d-block w-100" alt="Imagen del plantel" style="height: 400px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/demoMagdalena/fotosPlantel/20250702_090935.jpg') }}" class="carousel-img d-block w-100" alt="Imagen del plantel" style="height: 400px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/demoMagdalena/fotosPlantel/20250702_080832.jpg') }}" class="carousel-img d-block w-100" alt="Imagen del plantel" style="height: 400px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/demoMagdalena/fotosPlantel/20250704_121402.jpg') }}" class="carousel-img d-block w-100" alt="Imagen del plantel" style="height: 400px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/demoMagdalena/fotosPlantel/20250702_090440.jpg') }}" class="carousel-img d-block w-100" alt="Imagen del plantel" style="height: 400px; object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#plantel-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#plantel-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
        </div>

        <div class="plantel-header text-center">
            <h1 class="mb-3 plantel-title" id="plantel-nombre">PLANTEL Magdalena Acajete</h1>
            <br>
            <span id="plantel-tipo-badge" class="badge fs-6 bg-primary">
                CECYTE
            </span>
            <div class="plantel-mission">
                {{-- <h2 class="mission-subtitle" id="plantel-lema">FORMACIÓN QUE TRANSFORMA</h2> --}}
                <p class="mission-text" id="plantel-descripcion" style="text-align:center;">
                    CCT: 21ETC0013X
                </p>
            </div>
        </div>
        
        {{-- El modal es lo que permite expandir imagenes cuando se les da click en la seccion de instalaciones --}}
        <div id="imagenesModal" class="modal fade" tabindex="-1" aria-labelledby="expandirImagenModal" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección: Nuestras Instalaciones - Versión Mejorada -->
        <div class="accordion" id="acordionSeccionInstalaciones">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-section collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#seccionInstalaciones" aria-expanded="true" aria-controls="seccionInstalaciones">
                    <h4 class="center-accordion-text">
                        NUESTRAS INSTALACIONES
                    </h4>
                </button>
            </h2>
            <div id="seccionInstalaciones" class="accordion-collapse collapse">
                <div class="accordion-body">
                    
                    <div class="card section-card">
                        <div class="card-body" id="instalaciones-content">
                            
                                <a class="btnExpandirImagen" data-bs-toggle="modal" data-bs-target="#imagenesModal">
                                    <img class="img-fluid" src="{{ asset('storage/demoMagdalena/fotosPlantel/20250702_080832.jpg') }}" alt="imagen instalaciones">
                                </a>
                                <a class="btnExpandirImagen" data-bs-toggle="modal" data-bs-target="#imagenesModal">
                                    <img class="img-fluid" src="{{ asset('storage/demoMagdalena/fotosPlantel/20250702_080912.jpg') }}" alt="imagen instalaciones">
                                </a>
                                <a class="btnExpandirImagen" data-bs-toggle="modal" data-bs-target="#imagenesModal">
                                    <img class="img-fluid" src="{{ asset('storage/demoMagdalena/fotosPlantel/20250702_081347.jpg') }}" alt="imagen instalaciones">
                                </a>
                                <a class="btnExpandirImagen" data-bs-toggle="modal" data-bs-target="#imagenesModal">
                                    <img class="img-fluid" src="{{ asset('storage/demoMagdalena/fotosPlantel/20250702_082537.jpg') }}" alt="imagen instalaciones">
                                </a>
                                <a class="btnExpandirImagen" data-bs-toggle="modal" data-bs-target="#imagenesModal">
                                    <img class="img-fluid" src="{{ asset('storage/demoMagdalena/fotosPlantel/20250702_083315.jpg') }}" alt="imagen instalaciones">
                                </a>
                                <a class="btnExpandirImagen" data-bs-toggle="modal" data-bs-target="#imagenesModal">
                                    <img class="img-fluid" src="{{ asset('storage/demoMagdalena/fotosPlantel/20250702_085120.jpg') }}" alt="imagen instalaciones">
                                </a>
                                <a class="btnExpandirImagen" data-bs-toggle="modal" data-bs-target="#imagenesModal">
                                    <img class="img-fluid" src="{{ asset('storage/demoMagdalena/fotosPlantel/20250702_090741.jpg') }}" alt="imagen instalaciones">
                                </a>
                                <a class="btnExpandirImagen" data-bs-toggle="modal" data-bs-target="#imagenesModal">
                                    <img class="img-fluid" src="{{ asset('storage/demoMagdalena/fotosPlantel/20250702_101308.jpg') }}" alt="imagen instalaciones">
                                </a>
                                <a class="btnExpandirImagen" data-bs-toggle="modal" data-bs-target="#imagenesModal">
                                    <img class="img-fluid" src="{{ asset('storage/demoMagdalena/fotosPlantel/20250703_102448.jpg') }}" alt="imagen instalaciones">
                                </a>
                                <a class="btnExpandirImagen" data-bs-toggle="modal" data-bs-target="#imagenesModal">
                                    <img class="img-fluid" src="{{ asset('storage/demoMagdalena/fotosPlantel/20250703_143344.jpg') }}" alt="imagen instalaciones">
                                </a>
                                <a class="btnExpandirImagen" data-bs-toggle="modal" data-bs-target="#imagenesModal">
                                    <img class="img-fluid" src="{{ asset('storage/demoMagdalena/fotosPlantel/20250704_121343.jpg') }}" alt="imagen instalaciones">
                                </a>
                                <a class="btnExpandirImagen" data-bs-toggle="modal" data-bs-target="#imagenesModal">
                                    <img class="img-fluid" src="{{ asset('storage/demoMagdalena/fotosPlantel/20250702_083255.jpg') }}" alt="imagen instalaciones">
                                </a>

                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion" id="acordionSeccionMapas">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-section mb-0 collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#seccionMapas" aria-expanded="true" aria-controls="seccionMapas">
                        <h4 class="center-accordion-text">
                            Mapas
                        </h4>
                    </button>
                </h2>
                <div id="seccionMapas" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        
                        <div class="card-body" id="personal-content">
                            
                            <div class="accordion" id="acordionUbicaciones">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button normal-accordion collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#ubicaciones" aria-expanded="true" aria-controls="ubicaciones">
                                            Ubicaciones
                                        </button>
                                    </h2>
                                    <div id="ubicaciones" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="card-flex">
            
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Plantel Magdalena</h5>
                                                        <a href="https://maps.app.goo.gl/Va3PNjwS49ogifiw9" class="card-link" target="_blank">Ver ubicación</a>
                                                    </div>
                                                </div>
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion" id="acordionCroquis">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button normal-accordion collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#croquis" aria-expanded="true" aria-controls="croquis">
                                            Croquis
                                        </button>
                                    </h2>
                                    <div id="croquis" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="card-flex">
            
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Croquis 2025 plantel magdalena</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/mapa/Croquis 2025 Plantel Magdalena Semestra A.pdf') }}" class="card-link" target="_blank">Ver croquis</a>
                                                    </div>
                                                </div>
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Sección: Personal -->
        <div class="accordion" id="acordionSeccionPersonal">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-section collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#seccionPersonal" aria-expanded="true" aria-controls="seccionPersonal">
                        <h4 class="center-accordion-text">
                            Equipo responsable
                        </h4>
                    </button>
                </h2>
                <div id="seccionPersonal" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        
                        <div class="card-body" id="personal-content">
                            <div class="card-flex">

                                <div class="card no-hover personnel-card">
                                    <div class="card-body">
                                        <img src="{{ asset('storage/demoMagdalena/ImgPersonal/Placeholder.png') }}" alt="encargado" style="border-radius: 50%; max-width: 70%;">
                                        <h5 class="card-title mb-3">Jane doe</h5>
                                        <h5 class="card-subtitle">Encargada del despacho de la dirección del plantel</h5>
                                    </div>
                                </div>
                                
                                <div class="card no-hover  personnel-card">
                                    <div class="card-body">
                                        <img src="{{ asset('storage/demoMagdalena/ImgPersonal/Placeholder.png') }}" alt="encargado" style="border-radius: 50%; max-width: 70%;">
                                        <h5 class="card-title mb-3">Jane Doe</h5>
                                        <h5 class="card-subtitle">Coordinación Académica</h5>
                                    </div>
                                </div>
                                <div class="card no-hover  personnel-card">
                                    <div class="card-body">
                                        <img src="{{ asset('storage/demoMagdalena/ImgPersonal/Placeholder.png') }}" alt="encargado" style="border-radius: 50%; max-width: 70%;">
                                        <h5 class="card-title mb-3">John Doe</h5>
                                        <h5 class="card-subtitle">Control Escolar</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección: Comunicados -->
        <div class="accordion" id="acordionSeccionComunicados">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-section collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#seccionComunicados" aria-expanded="true" aria-controls="seccionComunicados">
                        <h4 class="center-accordion-text">
                            comunicados oficiales
                        </h4>
                    </button>
                </h2>
                <div id="seccionComunicados" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        
                        <div class="card-body" id="comunicados-content">
                            <div class="card-flex">
                
                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                    <div class="card-body">
                                        <h5 class="card-title">Ejercicio fiscal</h5>
                                        <a href="{{ asset('storage/demoMagdalena/filesComunicados/Ejercicio Fiscal.jpg') }}" class="card-link" target="_blank">Ver comunicado</a>
                                    </div>
                                </div>
                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        

        <!-- Sección: Comunidad CECYTE -->
        <div class="accordion" id="acordionSeccionComunidad">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-section collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#seccionComunidad" aria-expanded="true" aria-controls="seccionComunidad">
                        <h4 class="center-accordion-text">
                            comunidad cecyte
                        </h4>
                    </button>
                </h2>
                <div id="seccionComunidad" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        
                        <div class="card-body" id="comunidad-content">
                            <!-- Carrusel de fotos de comunidad -->
                            <div id="comunidad-carousel" class="carousel slide carousel-container mb-3 mt-5" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#comunidad-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Imagen 1"></button>
                                    <button type="button" data-bs-target="#comunidad-carousel" data-bs-slide-to="1" class aria-current="true" aria-label="Imagen 2"></button>
                                    <button type="button" data-bs-target="#comunidad-carousel" data-bs-slide-to="2" class aria-current="true" aria-label="Imagen 3"></button>
                                    <button type="button" data-bs-target="#comunidad-carousel" data-bs-slide-to="3" class aria-current="true" aria-label="Imagen 4"></button>
                                    <button type="button" data-bs-target="#comunidad-carousel" data-bs-slide-to="4" class aria-current="true" aria-label="Imagen 5"></button>
                                    <button type="button" data-bs-target="#comunidad-carousel" data-bs-slide-to="5" class aria-current="true" aria-label="Imagen 6"></button>
                                </div>
                                <div class="carousel-inner rounded" id="carousel-inner">
                
                                    <div class="carousel-item  active">
                                        <img src="{{ asset('storage/demoMagdalena/fotosComunidad/20250703_084534.jpg') }}" class="carousel-img d-block w-100" alt="Imagen del plantel" style="height: 400px; object-fit: cover;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/demoMagdalena/fotosComunidad/IMG_1402.jpg') }}" class="carousel-img d-block w-100" alt="Imagen del plantel" style="height: 400px; object-fit: cover;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/demoMagdalena/fotosComunidad/IMG_20240627_092130.jpg') }}" class="carousel-img d-block w-100" alt="Imagen del plantel" style="height: 400px; object-fit: cover;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/demoMagdalena/fotosComunidad/20250702_101033.jpg') }}" class="carousel-img d-block w-100" alt="Imagen del plantel" style="height: 400px; object-fit: cover;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/demoMagdalena/fotosComunidad/Concurso estatal escoltas de bandera nacional 2025.jpg') }}" class="carousel-img d-block w-100" alt="Imagen del plantel" style="height: 400px; object-fit: cover;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/demoMagdalena/fotosComunidad/IMG-20250531-WA0068.jpg') }}" class="carousel-img d-block w-100" alt="Imagen del plantel" style="height: 400px; object-fit: cover;">
                                    </div>
                
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#comunidad-carousel"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#comunidad-carousel"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        <!-- Sección: Área Académica -->
        <div class="accordion" id="acordionSeccionOfertaEducativa">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-section collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#seccionOfertaEducativa" aria-expanded="true" aria-controls="seccionOfertaEducativa">
                        <h4 class="center-accordion-text">
                            oferta educativa
                        </h4>
                    </button>
                </h2>
                <div id="seccionOfertaEducativa" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        
                        <div class="card-body">
                            <div class="accordion" id="carrerasAcordeon">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button normal-accordion collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseCarreras">
                                            Carreras Disponibles
                                        </button>
                                    </h2>
                                    <div id="collapseCarreras" class="accordion-collapse collapse"
                                        data-bs-parent="#carrerasAcordeon">
                                        <div class="accordion-body">
                                            <div id="carreras-list" class="card-two-columns">
                                                
                                                <a href="{{ route('Proceso-de-Gestión') }}" style="text-decoration: none;">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            Procesos de Gestión Administrativa
                                                        </div>
                                                    </div>
                                                </a>
                                                
                                                <a href="{{ route('Programacion') }}" style="text-decoration: none;">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            Programación
                                                        </div>
                                                    </div>
                                                </a>
                                                
                                                <a href="{{ route('Mantenimiento_Automotriz') }}" style="text-decoration: none;">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            Mantenimiento Automotriz
                                                        </div>
                                                    </div>
                                                </a>
                                                
                                                <a href="{{ route('Electronica') }}" style="text-decoration: none;">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            Mecatrónica
                                                        </div>
                                                    </div>
                                                </a>
                                                
                                                <a href="{{ route('Electronica') }}" style="text-decoration: none;">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            Inteligencia artificial
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- Sección: Vinculación -->
        <div class="accordion" id="acordionSeccionVinculacion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-section collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#seccionVinculacion" aria-expanded="true" aria-controls="seccionVinculacion">
                        <h4 class="center-accordion-text">
                            vinculación
                        </h4>
                    </button>
                </h2>
                <div id="seccionVinculacion" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        
                        <div class="card-body" id="vinculacion-content">
                            <!-- Oferta Laboral -->
                            <div class="accordion" id="acordionOferta">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button normal-accordion collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#ofertaLaboral" aria-expanded="true" aria-controls="ofertaLaboral">
                                            Ofertas de Empleo
                                        </button>
                                    </h2>
                                    <div id="ofertaLaboral" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="card-flex">
                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <!-- Servicio social -->
                            <div class="accordion" id="acordionServicio">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button normal-accordion collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#servicioSocial" aria-expanded="true" aria-controls="servicioSocial">
                                            Servicio social
                                        </button>
                                    </h2>
                                    <div id="servicioSocial" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="card-flex">
                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Solicitud practicas servicio social</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/servicioSocial/1. SOLICITUD DE SERVICIO SOCIAL.docx') }}" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Carta compromiso de servicio social</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/servicioSocial/2. CARTA COMPROMISO DE SERVICIO SOCIAL.docx') }}" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Oficio de presentación de servicio social</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/servicioSocial/3. OFICIO DE PRESENTACION DE SERVICIO SOCIAL SlmS.docx') }}" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Oficio de aceptación de servicio social</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/servicioSocial/4. OFICIO DE ACEPTACION DE SERVICIO SOCIAL.docx') }}" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Reporte bimestral de servicio social</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/servicioSocial/5. REPORTE BIMESTRAL DE SERVICIO SOCIAL.docx') }}" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Reporte final de servicio social</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/servicioSocial/6. REPORTE FINAL DE SERVICIO SOCIAL.docx') }}" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Constancia de terminación de servicio social</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/servicioSocial/7. CONSTANCIA DE TERMINACIÓN DE SERVICIO SOCIAL.docx') }}" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                
                                            </div>
                                        </div>
                                    </div>
                
                                </div>
                            </div>
                            <!-- Practicas profesionales -->
                            <div class="accordion" id="acordionPracticas">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button normal-accordion collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#practicasProfesionales" aria-expanded="true"
                                            aria-controls="practicasProfesionales">
                                            Prácticas Profesionales
                                        </button>
                                    </h2>
                                    <div id="practicasProfesionales" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="card-flex">
                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Solicitud practicas profesionales</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/practicasProfesionales/1. SOLICITUD DE PRÁCTICAS PROFESIONALES.docx') }}" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Carta compromiso de prácticas profesionales</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/practicasProfesionales/2. CARTA COMPROMISO DE PRÁCTICAS PROFESIONALES.docx') }}" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Oficio de presentacion de prácticas profesionales</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/practicasProfesionales/3. OFICIO DE PRESENTACION DE PRÁCTICAS PROFESIONALES.docx') }}" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Oficio de aceptacion de prácticas profesionales</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/practicasProfesionales/4. OFICIO DE ACEPTACION DE PRÁCTICAS PROFESIONALES.docx') }}" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Reporte bimestral de prácticas profesionales</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/practicasProfesionales/5. REPORTE BIMESTRAL DE PRACTICAS PROFESIONALES.docx') }}" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Reporte final de prácticas profesionales</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/practicasProfesionales/6. REPORTE FINAL DE PRÁCTICAS PROFESIONALES.docx') }}" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Constancia de terminacion de prácticas profesionales</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/practicasProfesionales/7. CONSTANCIA DE TERMINACIÓN DE PRÁCTICAS PROFESIONALES.docx') }}" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Redes sociales -->
                            <div class="accordion" id="acordionRedes">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button normal-accordion collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#redesSociales" aria-expanded="true" aria-controls="redesSociales">
                                            Redes Sociales
                                        </button>
                                    </h2>
                                    <div id="redesSociales" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="card-flex">
                
                                                <div class="card social-card" style="min-width: 10vw; min-height: fit-content">
                                                    <a href="https://x.com/CECyTEMagdalena?t=HT2fLKUgTt0QMRfcAsB_PQ" style="text-decoration: none;" target="_blank">
                                                        <div class="card-body">                    
                                                            <img src="{{ asset ('/imagenes/Barra-redes-sociales/icon-X.svg') }}" alt="X" style="width:100%;">
                                                        </div>
                                                    </a>
                                                </div>
                                                
                                                <div class="card social-card" style="min-width: 10vw; min-height: fit-content">
                                                    <a href="https://www.instagram.com/cecyteodalena/#" style="text-decoration: none;" target="_blank">
                                                        <div class="card-body">
                                                            <img src="{{ asset ('/imagenes/Barra-redes-sociales/icon-Instagram.svg') }}"alt="Instagram" style="width:100%;">
                                                        </div>
                                                    </a>
                                                </div>
                                                
                                                <div class="card social-card" style="min-width: 10vw; min-height: fit-content">
                                                    <a href="https://www.facebook.com/cecytemagdalena.bachillerato?rdid=F5hzy3QYF54cDVio&amp;share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1CBagzfACu%2F#" style="text-decoration: none;" target="_blank">
                                                        <div class="card-body">
                                                            <img src="{{ asset ( '/imagenes/Barra-redes-sociales/icon-Facebook.svg') }}"alt="Facebook" style="width:100%;">
                                                        </div>
                                                    </a>
                                                </div>
                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Seguimiento de egresados -->
                            <div class="accordion" id="acordionEgresados">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button normal-accordion collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#segEgresados" aria-expanded="true" aria-controls="segEgresados">
                                            Seguimiento de Egresados
                                        </button>
                                    </h2>
                                    <div id="segEgresados" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="card-flex">
                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sistema dual -->
                            <div class="accordion" id="acordionDual">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button normal-accordion collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#sistDual" aria-expanded="true" aria-controls="sistDual">
                                            Sistema Dual
                                        </button>
                                    </h2>
                                    <div id="sistDual" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="card-flex">
                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Calendario Dual</h5>
                                                        <a href="https://modelo.formaciondual.sems.gob.mx/Calendario_2026_OI.pdf" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                
                                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Sistema de educación dual</h5>
                                                        <a href="https://modelo.formaciondual.sems.gob.mx/" class="card-link" target="_blank">Ver información</a>
                                                    </div>
                                                </div>
                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- Sección: Extensión Educativa -->
        <div class="accordion" id="acordionSeccionExtensionEducativa">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-section collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#seccionExtensionEducativa" aria-expanded="true" aria-controls="seccionExtensionEducativa">
                        <h4 class="center-accordion-text">
                            EXTENSIÓN EDUCATIVA
                        </h4>
                    </button>
                </h2>
                <div id="seccionExtensionEducativa" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        
                        <div class="card-body" id="extension-content">
                            <div class="card-flex">
                
                                <div class="card no-hover responsive-card" style="min-width: 20%; min-height: fit-content">
                                    <div class="card-body">
                                        <h5 class="card-title">Actividades culturales y deportivas</h5>
                                        <a href="{{ asset('storage/demoMagdalena/filesExtensionEducativa/ACTIVIDADES CULTURALES Y DEPORTIVAS.pdf') }}" class="card-link" target="_blank">Ver archivo</a>
                                    </div>
                                </div>
                
                            </div>                
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- Seccion: Control escolar -->
        <div class="accordion" id="acordionseccionControlEscolar">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-section collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#seccionControlEscolar" aria-expanded="true" aria-controls="seccionControlEscolar">
                        <h4 class="center-accordion-text">
                            control escolar
                        </h4>
                    </button>
                </h2>
                <div id="seccionControlEscolar" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        
                        <div class="card-body" id="ctrl-escolar-content">
                            <!-- Avisos -->
                            <div class="accordion" id="acordionAvisos">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button normal-accordion collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#avisos" aria-expanded="true" aria-controls="avisos">
                                            Avisos
                                        </button>
                                    </h2>
                                    <div id="avisos" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="card-flex">
                                                
                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Planes de estudio -->
                
                            <div class="accordion" id="acordionPlanesEstudio">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button normal-accordion collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#planesEstudio" aria-expanded="true" aria-controls="planesEstudio">
                                            Planes de estudio
                                        </button>
                                    </h2>
                                    <div id="planesEstudio" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="card-flex">
                                                <select id="filterSelectPlanEstudio">
                                                    <option value="0">Selecciona una opción</option>
                                                    <option value="Mantenimiento Automotriz">Mantenimiento Automotriz</option>
                                                    <option value="Mecatronica">Mecatrónica</option>
                                                    <option value="Programación">Programación</option>
                                                    <option value="Inteligencia artificial">Inteligencia artificial</option>
                                                    <option value="Gestion Administrativa">Gestion Administrativa</option>
                                                </select>
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Mantenimiento Automotriz</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/planesEstudio/Acuerdo 653 Mantenimiento Automotriz.pdf') }}" class="card-link" target="_blank">Ver plan de estudio</a>
                                                    </div>
                                                </div>
                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Mecatrónica</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/planesEstudio/Acuerdo 653 Mecatronica.pdf') }}" class="card-link" target="_blank">Ver plan de estudio</a>
                                                    </div>
                                                </div>
                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Programación</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/planesEstudio/Acuerdo 653 Programacion.pdf') }}" class="card-link" target="_blank">Ver plan de estudio</a>
                                                    </div>
                                                </div>
                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Inteligencia Artificial</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/planesEstudio/Acuerdo 09082023 Inteligencia Artificial.pdf') }}" class="card-link" target="_blank">Ver plan de estudio</a>
                                                    </div>
                                                </div>
                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Gestion Administrativa</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/planesEstudio/Octubre 2013 Procesos de Gestion Administrativa.pdf') }}" class="card-link" target="_blank">Ver plan de estudio</a>
                                                    </div>
                                                </div>
                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <!-- Horarios   -->
                            <div class="accordion" id="acordionHorarios">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button normal-accordion collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#horarios" aria-expanded="true" aria-controls="horarios">
                                            Horarios
                                        </button>
                                    </h2>
                                    <div id="horarios" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="card-flex">
                                                <select id="filterSelectHorario">
                                                    <option value="0">Selecciona una opción</option>
                                                    <option value="Tronco común">Tronco común</option>
                                                    <option value="Mantenimiento Automotriz">Mantenimiento Automotriz</option>
                                                    <option value="Mecatronica">Mecatrónica</option>
                                                    <option value="Procesos de gestión administrativa">Procesos de gestión administrativa</option>
                                                    <option value="Inteligencia artificial">Inteligencia artificial</option>
                                                    <option value="Programación">Programación</option>
                                                </select>
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Tronco común</h5>
                                                        <h5 class="card-subtitle">1A</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/01-1-1A.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Tronco común</h5>
                                                        <h5 class="card-subtitle">1B</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/02-1-1B.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Tronco común</h5>
                                                        <h5 class="card-subtitle">1C</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/03-1-1C.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Tronco común</h5>
                                                        <h5 class="card-subtitle">1D</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/04-1-1D.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Tronco común</h5>
                                                        <h5 class="card-subtitle">1E</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/05-1-1E.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Tronco común</h5>
                                                        <h5 class="card-subtitle">1F</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/06-1-1F.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Mantenimiento Automotriz</h5>
                                                        <h5 class="card-subtitle">3A</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/07-3-MAUT 3A.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Mantenimiento Automotriz</h5>
                                                        <h5 class="card-subtitle">3B</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/08-3-MAUT 3B.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Mecatrónica</h5>
                                                        <h5 class="card-subtitle">3A</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/09-3-MECA 3A.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Mecatrónica</h5>
                                                        <h5 class="card-subtitle">3B</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/09-3-MECA 3B.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Procesos de gestión administrativa</h5>
                                                        <h5 class="card-subtitle">3A</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/11-3-PGEA 3A.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Inteligencia artificial</h5>
                                                        <h5 class="card-subtitle">3A</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/12-3-IA 3A.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Mantenimiento Automotriz</h5>
                                                        <h5 class="card-subtitle">5A</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/13-5-MAUT 5A.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Mantenimiento Automotriz</h5>
                                                        <h5 class="card-subtitle">5B</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/14-5-MAUT 5B.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Mecatrónica</h5>
                                                        <h5 class="card-subtitle">5A</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/15-5-MECA 5A.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Mecatrónica</h5>
                                                        <h5 class="card-subtitle">5B</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/16-5-MECA 5B.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div> 
                                                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Procesos de gestión administrativa</h5>
                                                        <h5 class="card-subtitle">5A</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/17-5-PGEA 5A.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div> 
                                                
                                                <div class="card no-hover responsive-card" style="display: none; min-width: 20%; min-height: fit-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Programación</h5>
                                                        <h5 class="card-subtitle">5A</h5>
                                                        <a href="{{ asset('storage/demoMagdalena/horarios/18-5-PROG 5A.pdf') }}" class="card-link" target="_blank">Ver horario</a>
                                                    </div>
                                                </div> 
                
                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <!-- <p>Cargando información de control escolar</p> -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>



        <!-- Botón Volver -->
        <button class="btn btn-primary mt-4 mb-5" onclick="window.history.back()">
            <i class="fas fa-arrow-left me-2"></i> Volver a la lista
        </button>
    </div>
@push('scripts')
    <script src= "{{ asset('js/demoMagdalena.js') }}" type="module"></script>
@endpush

@endsection
