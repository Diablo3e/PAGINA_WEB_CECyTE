@extends('layouts.app')
<link href="{{ asset(path: 'css/styles_planteles.css') }}" rel="stylesheet">

@section('body-class', 'no-background')

@section('title', 'Planteles')

@section('content')
<div class="container-fluid">
    <!-- Página principal con lista de planteles -->
    <div id="planteles-list">
        <h1 class="text-center mb-5">Nuestros Planteles Educativos</h1>
        <div class="row">
            @foreach(['plantel1' => 'Plantel Cholula', 'plantel2' => 'Plantel Chignahuapan', 'plantel3' => 'Plantel EMsaD Ameluca'] as $id => $nombre)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card plantel-card h-100" onclick="mostrarPlantel('{{ $id }}')">
                    <div class="card-body text-center">
                        <h3 class="card-title">{{ $nombre }}</h3>
                         <i class="fas fa-{{ $id === 'plantel1' ? 'school' : ($id === 'plantel2' ? 'university' : 'graduation-cap') }} fa-4x mt-3 mb-3 plantel-icon {{ 'icon-' . $id }}"></i>
                         <p class="click-hint">Haz clic para ver más detalles</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Página detalle del plantel -->
    <div id="plantel-detail" style="display: none;">
        <button class="btn btn-outline-primary mb-4" onclick="volverALista()">
            <i class="fas fa-arrow-left me-2"></i> Volver a la lista
        </button>

        <h2 id="plantel-nombre" class="text-center mb-4"></h2>

        <!-- Carrusel de fotos -->
        <div id="plantel-carousel" class="carousel slide carousel-container mb-5" data-bs-ride="carousel">
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

        <!-- Dirección -->
        <div class="card mb-5">
            <div class="card-header directores-header">
                <h4 class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>Dirección</h4>
            </div>
            <div class="card-body">
                <p id="plantel-direccion" class="lead mb-0"></p>
            </div>
        </div>

        <!-- Directores -->
        <div class="card mb-5">
        <div class="card-header directores-header">
                <h4 class="mb-0"><i class="fas fa-users-cog me-2"></i>Directores</h4>
            </div>
            <div class="card-body">
                <div class="row" id="directores-container"></div>
            </div>
        </div>

        <!-- Carreras Disponibles -->
        <div class="card">
          <div class="card-header directores-header">
                <h4 class="mb-0"><i class="fas fa-graduation-cap me-2"></i>Carreras Disponibles</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover tabla-carreras" id="tabla-carreras">
                        <thead class="table-dark">
                            <tr>
                                <th>Nombre de la Carrera</th>
                                <th>Duración</th>
                                <th>Modalidad</th>
                            </tr>
                        </thead>
                        <tbody id="cuerpo-tabla-carreras">
                            <!-- Las carreras se llenarán dinámicamente -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('js/planteles.js') }}"></script>
@endpush

