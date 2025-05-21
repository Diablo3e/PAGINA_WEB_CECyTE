<link href="{{ asset('css/styles_planteles.css') }}" rel="stylesheet">

@section('body-class', 'no-background')

<div class="container mt-5 pt-4">
    <div id="planteles-list">
        <h1 class="text-center mb-4" style="color: var(--color-vino);">PLANTELES</h1>

        <div class="row">
            <!-- Columna izquierda - Lista EMSaD -->
            <div class="col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-header text-white" style="background-color: var(--color-vino);">
                        <h4 class="mb-0 pt-1"><i class="fas fa-school me-2"></i> Planteles EMSaD</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush" id="lista-emsad"></div>
                    </div>
                </div>
            </div>

            <!-- Columna central - Mapa -->
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-header text-white" style="background-color: var(--color-vino);">
                        <h3 class="mb-0"><i class="fas fa-map-marked-alt me-2"></i>MAPA INTERACTIVO</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="map-container position-relative">
                            <img src="{{ asset('imagenes/planteles.jpg') }}" alt="Mapa de Planteles" class="map-image"
                                id="mapImage" usemap="#plantelesMap">
                            <div class="plantel-highlight" id="plantelHighlight"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Columna derecha - Lista CECyTE -->
            <div class="col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-header text-white" style="background-color: var(--color-vino);">
                        <h4 class="mb-0"><i class="fas fa-university me-2"></i> Planteles CECyTE</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush" id="lista-cecyte"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Listado alternativo para móviles -->
<div class="d-block d-md-none mt-4">
    <h3 class="mb-3">Selecciona un plantel:</h3>
    <select class="form-select" id="mobilePlantelSelector">
        <option value="">-- Selecciona --</option>
        @foreach($planteles as $id => $plantel)
        <option value="{{ $id }}">{{ $plantel['nombre'] }}</option>
        @endforeach
    </select>
</div>

<script src="{{ asset('js/planteles.js') }}"></script>
