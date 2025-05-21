<link href="{{ asset('css/styles_planteles.css') }}" rel="stylesheet">

<div class="container mt-4">
    <h2 id="plantel-nombre" class="text-center mb-4 pt-2"></h2>
    <div class="text-center mb-3">
        <span id="plantel-tipo-badge-detail" class="badge"></span>
    </div>

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

    <!-- Sección de Información -->
    <div class="row mb-5">
        <!-- Dirección -->
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="card h-100">
                <div class="card-header text-white py-3">
                    <h4 class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>Dirección y Contacto</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-start gap-4 mb-4">
                        <div class="flex-shrink-0 bg-light rounded p-3">
                            <i class="fas fa-info-circle fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h5 class="mb-3">Información de contacto</h5>
                            <div id="plantel-direccion" class="mb-3"></div>
                            <p class="mb-2"><i class="fas fa-phone me-2"></i> <strong>Teléfono:</strong> <span
                                    id="plantel-telefono"></span></p>
                            <p class="mb-2"><i class="fas fa-envelope me-2"></i> <strong>Email:</strong> <span
                                    id="plantel-email"></span></p>
                            <p class="mb-0"><i class="fas fa-clock me-2"></i> <strong>Horario:</strong> <span
                                    id="plantel-horario"></span></p>
                        </div>
                    </div>
                    <div class="mt-3 border-top pt-3">
                        <h5 class="mb-3"><i class="fas fa-map-marked-alt me-2"></i> Ubicación en mapa</h5>
                        <div id="map-container" style="height: 400px; width: 100%; border-radius: 8px;">
                            <!-- Mapa se cargará dinámicamente -->
                        </div>
                        <small class="text-center d-block mt-2">
                            <a id="map-link" href="#" target="_blank">
                                Ver mapa más grande
                            </a>
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Directores -->
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header text-white py-3">
                    <h4 class="mb-0"><i class="fas fa-users-cog me-2"></i>Directores</h4>
                </div>
                <div class="card-body">
                    <div class="row" id="directores-container"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carreras Disponibles -->
    <div class="accordion mb-5" id="seccionesAcordeon">
        <!-- Acordeón de Carreras -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseCarreras">
                    <i class="fas fa-graduation-cap me-2"></i> Carreras Disponibles
                </button>
            </h2>
            <div id="collapseCarreras" class="accordion-collapse collapse show" data-bs-parent="#seccionesAcordeon">
                <div class="accordion-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover tabla-carreras mb-0" id="tabla-carreras">
                            <thead class="table-dark">
                                <tr>
                                    <th class="py-3">Nombre de la Carrera</th>
                                    <th class="py-3">Duración</th>
                                    <th class="py-3">Modalidad</th>
                                </tr>
                            </thead>
                            <tbody id="cuerpo-tabla-carreras"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Acordeón de Alumnos -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseAlumnos">
                    <i class="fas fa-users me-2"></i> Área de Alumnos
                </button>
            </h2>
            <div id="collapseAlumnos" class="accordion-collapse collapse" data-bs-parent="#seccionesAcordeon">
                <div class="accordion-body">
                    <!-- Pestañas para Alumnos -->
                    <ul class="nav nav-tabs mb-4" id="alumnosTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="avisos-tab" data-bs-toggle="tab"
                                data-bs-target="#avisos" type="button" role="tab">
                                <i class="fas fa-bullhorn me-2"></i>Avisos
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="calendario-tab" data-bs-toggle="tab"
                                data-bs-target="#calendario" type="button" role="tab">
                                <i class="fas fa-calendar-alt me-2"></i>Calendario
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="galeria-tab" data-bs-toggle="tab" data-bs-target="#galeria"
                                type="button" role="tab">
                                <i class="fas fa-images me-2"></i>Galería
                            </button>
                        </li>
                    </ul>

                    <!-- Contenido de las pestañas -->
                    <div class="tab-content" id="alumnosTabsContent">
                        <!-- Pestaña de Avisos -->
                        <div class="tab-pane fade show active" id="avisos" role="tabpanel">
                            <div id="lista-avisos" class="list-group"></div>
                            <div id="sin-avisos" class="alert alert-info" style="display: none;">
                                No hay avisos disponibles en este momento.
                            </div>
                        </div>

                        <!-- Pestaña de Calendario -->
                        <div class="tab-pane fade" id="calendario" role="tabpanel">
                            <div id="eventos-calendario"></div>
                        </div>

                        <!-- Pestaña de Galería -->
                        <div class="tab-pane fade" id="galeria" role="tabpanel">
                            <div class="text-center mb-3">
                                <h5 id="galeria-titulo"></h5>
                                <p id="galeria-descripcion" class="text-muted"></p>
                            </div>
                            <div id="galeria-alumnos-carousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators" id="galeria-indicators"></div>
                                <div class="carousel-inner" id="galeria-inner"></div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#galeria-alumnos-carousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Anterior</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#galeria-alumnos-carousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Siguiente</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="volver-btn" onclick="window.history.back()">
        <i class="fas fa-arrow-left me-2"></i> Volver a la lista
    </button>
</div>

<script src="{{ asset('js/plantel-detalle.js') }}"></script>
