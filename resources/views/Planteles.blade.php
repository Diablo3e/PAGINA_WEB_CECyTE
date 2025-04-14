@extends('layouts.app')

@section('title', 'Planteles')

@section('styles')
<link href="{{ asset('css/planteles.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Encabezado con margen para la barra fija -->
<div class="planteles-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="display-4 fw-bold text-primary mb-2">
                    <i class="fas fa-school me-2"></i>Planteles CECYTEPUEBLA
                </h1>
                <p class="lead text-muted mb-0">Sistema Integral de Información de Planteles Educativos</p>
            </div>
            <div class="col-md-4 text-md-end">
                <img src="{{ asset('img/logo-cecyte-full.png') }}" alt="Logo CECYTEPUEBLA" class="header-logo img-fluid">
            </div>
        </div>
        <hr class="border-primary opacity-100 my-3 border-2">
    </div>
</div>

<!-- Contenido principal -->
<div class="container planteles-container py-4">
    <div class="row g-4">
        <!-- Panel lateral de navegación -->
        <div class="col-lg-3">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-primary text-white py-3">
                    <h5 class="mb-0">
                        <i class="fas fa-list me-2"></i>Lista de Planteles
                    </h5>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush plantel-list">
                        @for($i = 1; $i <= 19; $i++)
                        <a href="#plantel-{{$i}}"
                           class="list-group-item list-group-item-action d-flex align-items-center {{ $i == 1 ? 'active' : '' }}"
                           data-bs-toggle="list">
                            <span class="plantel-badge me-3">{{ $i }}</span>
                            <span>Plantel {{ $i }}</span>
                            <i class="fas fa-chevron-right ms-auto"></i>
                        </a>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenido del plantel seleccionado -->
        <div class="col-lg-9">
            <div class="tab-content">
                @for($i = 1; $i <= 19; $i++)
                <div class="tab-pane fade {{ $i == 1 ? 'show active' : '' }}" id="plantel-{{$i}}">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-light py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0 text-primary">
                                    <i class="fas fa-info-circle me-2"></i>Información del Plantel {{$i}}
                                </h3>
                                <div>
                                    <button class="btn btn-sm btn-outline-primary me-2">
                                        <i class="fas fa-edit me-1"></i>Editar
                                    </button>
                                    <button class="btn btn-sm btn-primary">
                                        <i class="fas fa-expand me-1"></i>Ver completo
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Columna de imagen y horario -->
                                <div class="col-md-5">
                                    <div class="plantel-image-container mb-4">
                                        <img src="{{ asset('img/planteles/plantel'.$i.'.jpg') }}"
                                             class="img-fluid rounded-3 shadow"
                                             alt="Plantel {{$i}}"
                                             onerror="this.src='{{ asset('img/planteles/default.jpg') }}'">
                                        <div class="image-overlay">
                                            <button class="btn btn-light btn-sm">
                                                <i class="fas fa-search-plus me-1"></i>Ampliar
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary">
                                                <i class="fas fa-clock me-2"></i>Horario de atención
                                            </h5>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-1"><strong>Lunes a Viernes:</strong> 7:00 - 20:00 hrs</li>
                                                <li><strong>Sábados:</strong> 8:00 - 14:00 hrs</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Columna de información -->
                                <div class="col-md-7">
                                    <div class="info-card">
                                        <!-- Datos Generales -->
                                        <div class="info-section mb-4">
                                            <h4 class="info-title">
                                                <i class="fas fa-building me-2"></i>Datos Generales
                                            </h4>
                                            <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th width="30%">Nombre:</th>
                                                            <td>Plantel {{$i}} CECYTEPUEBLA</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Dirección:</th>
                                                            <td>Av. Principal #{{$i}}, Col. Centro, Puebla</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Teléfono:</th>
                                                            <td>222 123 45{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Director:</th>
                                                            <td>Lic. Nombre del Director</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Correo:</th>
                                                            <td>plantel{{$i}}@cecytepuebla.edu.mx</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Programas Académicos -->
                                        <div class="info-section mb-4">
                                            <h4 class="info-title">
                                                <i class="fas fa-book me-2"></i>Programas Académicos
                                            </h4>
                                            <div class="d-flex flex-wrap gap-2">
                                                <span class="badge bg-primary">Informática</span>
                                                <span class="badge bg-primary">Administración</span>
                                                <span class="badge bg-primary">Contabilidad</span>
                                                <span class="badge bg-primary">Electrónica</span>
                                                <span class="badge bg-primary">Mecánica</span>
                                            </div>
                                        </div>

                                        <!-- Ubicación -->
                                        <div class="info-section">
                                            <h4 class="info-title">
                                                <i class="fas fa-map-marked-alt me-2"></i>Ubicación
                                            </h4>
                                            <div class="ratio ratio-16x9 mb-3">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15078.4198232405!2d-98.201538!3d19.0415588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDAyJzI5LjYiTiA5OMKwMTInMDUuNSJX!5e0!3m2!1ses!2smx!4v1620000000000!5m2!1ses!2smx"
                                                        allowfullscreen
                                                        loading="lazy"
                                                        class="rounded-3 shadow-sm"></iframe>
                                            </div>
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fas fa-directions me-1"></i> Cómo llegar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Activar los tabs de Bootstrap
    const triggerTabList = document.querySelectorAll('.plantel-list a');
    triggerTabList.forEach(triggerEl => {
        const tabTrigger = new bootstrap.Tab(triggerEl);

        triggerEl.addEventListener('click', event => {
            event.preventDefault();
            tabTrigger.show();
        });
    });
</script>
@endsection
