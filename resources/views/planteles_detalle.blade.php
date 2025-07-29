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
        <!-- Carrusel de fotos -->
        <div id="plantel-carousel" class="carousel slide carousel-container mb-3 mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators"></div>
            <div class="carousel-inner rounded" id="carousel-inner"></div>
            <button class="carousel-control-prev" type="button" data-bs-target="#plantel-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#plantel-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="plantel-header text-center">
        <h1 class="mb-3 plantel-title" id="plantel-nombre">PLANTEL tipo nombrePlantel</h1>
        <br>
        <span id="plantel-tipo-badge" class="badge fs-6 bg-primary">
            CECYTE
        </span>
        <div class="plantel-mission">
            <h2 class="mission-subtitle" id="plantel-lema">FORMACIÓN QUE TRANSFORMA</h2>
            <p class="mission-text" id="plantel-descripcion">
                Cargando información del plantel...
            </p>
        </div>
    </div>

    <!-- Sección: Nuestras Instalaciones - Versión Mejorada -->
    <div class="card section-card">
        <div class="section-header">
            <h4 class="mb-0">NUESTRAS INSTALACIONES</h4>
            <!-- todo: galeria -->
        </div>
        <div class="card-body" id="instalaciones-content">
            <!-- Contenido dinámico se cargará aquí desde JavaScript -->
            <div class="loading-text">Cargando información de las instalaciones...</div>
        </div>
    </div>

    <!-- todo: agregar "comunicados oficiales" -->
    <div class="card section-card">
        <div class="section-header">
            <h4 class="mb-0">COMUNICADOS OFICIALES</h4>
            <!-- todo: galeria -->
        </div>
        <div class="card-body" id="comunicados-content">
            <!-- Contenido dinámico se cargará aquí desde JavaScript -->
            <div class="loading-text">Cargando comunicados...</div>
        </div>
    </div>

    <!-- Sección: Comunidad CECYTE -->
    <div class="card section-card">
        <div class="section-header">
            <h4 class="mb-0">COMUNIDAD CECYTE</h4>
            <!-- todo: galeria -->
        </div>
        <div class="card-body" id="comunidad-content">
            <div class="loading-text">Cargando información de la comunidad...</div>
        </div>
    </div>

    <!-- Sección: Área Académica -->
    <div class="card section-card">
        <div class="section-header">
            <h4 class="mb-0">OFERTA EDUCATIVA</h4>
        </div>
        <div class="card-body">
            <div class="accordion" id="carrerasAcordeon">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCarreras">
                            Carreras Disponibles
                        </button>
                    </h2>
                    <div id="collapseCarreras" class="accordion-collapse collapse show" data-bs-parent="#carrerasAcordeon">
                        <div class="accordion-body">
                            <ul id="carreras-list">
                                <li>Cargando carreras...</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección: Vinculación -->
    <div class="card section-card">
        <div class="section-header">
            <h4 class="mb-0">VINCULACIÓN</h4>
        </div>
        <div class="card-body" id="vinculacion-content">
            <p>Cargando información de vinculación...</p>
        </div>
    </div>

    <!-- Sección: Extensión Educativa -->
    <div class="card section-card">
        <div class="section-header">
            <h4 class="mb-0">EXTENSIÓN EDUCATIVA</h4>
        </div>
        <div class="card-body" id="extension-content">
            <p>Cargando información de extensión educativa...</p>
        </div>
    </div>

    <!-- Seccion: Control escolar -->
    <div class="card section-card">
        <div class="section-header">
            <h4 class="mb-0">CONTROL ESCOLAR</h4>
        </div>
        <div class="card-body" id="ctrl-escolar-content">
            <p>Cargando información de control escolar</p>
        </div>
    </div>

    <!-- Botón Volver -->
    <button class="btn btn-primary mt-4 mb-5" onclick="window.history.back()">
        <i class="fas fa-arrow-left me-2"></i> Volver a la lista
    </button>
</div>

<script>
    window.plantelData = @json($plantel);
</script>

@push('scripts')
<script src="{{ asset('js/planteles_detalle.js') }}" type="module"></script>
@endpush

@endsection