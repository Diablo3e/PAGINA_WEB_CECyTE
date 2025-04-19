@extends('layouts.app')
<link href="{{ asset('css/styles_planteles.css') }}" rel="stylesheet">

@section('body-class', 'no-background')

@section('title', 'Planteles')

@section('content')
<div class="container-fluid">
    <!-- Página principal con lista de planteles -->
    <div id="planteles-list">
        <h1 class="text-center mb-5">Nuestros Planteles Educativos</h1>

        <!-- Pestañas de navegación -->
        <ul class="nav nav-tabs justify-content-center mb-4" id="plantelesTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="cecyte-tab" data-bs-toggle="tab" data-bs-target="#cecyte" type="button" role="tab">
                    <i class="fas fa-school me-2"></i>Planteles CECyTE
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="emsad-tab" data-bs-toggle="tab" data-bs-target="#emsad" type="button" role="tab">
                    <i class="fas fa-graduation-cap me-2"></i>Planteles EMSaD
                </button>
            </li>
        </ul>

        <!-- Contenido de las pestañas -->
        <div class="tab-content" id="plantelesTabsContent">
            <!-- Pestaña CECyTE -->
            <div class="tab-pane fade show active" id="cecyte" role="tabpanel">
                <div class="row">
                    @foreach(['plantel1' => 'Plantel Cholula', 'plantel2' => 'Plantel Chignahuapan', 'plantel10' => 'Plantel Guadalupe Victoria', 'plantel11' => 'Plantel Huejotzingo'] as $id => $nombre)
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card plantel-card h-100" onclick="mostrarPlantel('{{ $id }}')">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{ $nombre }}</h3>
                                <i class="fas fa-school fa-4x mt-3 mb-3 plantel-icon {{ 'icon-' . $id }}"></i>
                                <p class="click-hint">Haz clic para ver más detalles</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Pestaña EMSaD -->
            <div class="tab-pane fade" id="emsad" role="tabpanel">
                <div class="row">
                    @foreach(['plantel3' => 'Plantel EMSaD Ameluca', 'plantel4' => 'Plantel EMSaD Boca del Monte', 'plantel5' => 'Plantel EMSaD Buena Vista',
                    'plantel6' => 'Plantel EMSaD La Pahua','plantel7' => 'Plantel EMSaD Mexcaltochintla', 'plantel8' => 'Plantel EMSaD Naranjastitla',
                    'plantel9' => 'Plantel EMSaD Santa Elena'] as $id => $nombre)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card plantel-card h-100" onclick="mostrarPlantel('{{ $id }}')">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{ $nombre }}</h3>
                                <i class="fas fa-graduation-cap fa-4x mt-3 mb-3 plantel-icon {{ 'icon-' . $id }}"></i>
                                <p class="click-hint">Haz clic para ver más detalles</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-10">
    <button
        onclick="location.href='{{ url('/Planteles') }}'"
        class="btn-inicio"
    >
        <i class="fas fa-home mr-2"></i> Volver al inicio
    </button>
</div>

</div>
@endsection

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

@push('scripts')
<script src="{{ asset('js/planteles.js') }}"></script>
@endpush
