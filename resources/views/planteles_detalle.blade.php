@extends('layouts.app')

@section('content')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
<link href="{{ asset('css/styles_planteles.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endpush

<div class="container mt-4">
    <!-- Encabezado principal estilo CECYTE -->
    <div class="card-body">
        <!-- Carrusel de fotos inicial -->
        <div id="plantel-carousel" class="carousel slide carousel-container mb-3 mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators"></div>
            <div class="carousel-inner rounded" id="carousel-inner"></div>
            <button class="carousel-control-prev" type="button" data-bs-target="#plantel-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#plantel-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>

    <div class="plantel-header text-center">
        <h1 class="mb-3 plantel-title" id="plantel-nombre">PLANTEL tipo </h1>
        <br>
        <span id="plantel-tipo-badge" class="badge fs-6 bg-primary">
            CECYTE
        </span>
        <div class="plantel-mission">
            <h2 class="mission-subtitle" id="plantel-lema">FORMACIÓN QUE TRANSFORMA</h2>
            <p class="mission-text" id="plantel-descripcion" style="text-align:center;">
                Cargando información del plantel...
            </p>
        </div>
    </div>

    {{-- El modal es lo que permite expandir imagenes cuando se les da click en la seccion de instalaciones --}}
    <div id="imagenesModal" class="modal fade" tabindex="-1" aria-labelledby="expandirImagenModal">
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
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seccion mapas -->
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
                        
                        <div class="card-body" id="mapas-content">
                            
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
                            </div>
                            <div class="carousel-inner rounded" id="carousel-inner">
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#comunidad-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#comunidad-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
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
                                            <div class="card-two-columns">
                
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
<script src="{{ asset('js/planteles_detalle.js') }}" type="module"></script>
@endpush

@endsection