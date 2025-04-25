@extends('layouts.app')

@section('title', 'Transparencia')
@push('styles')
    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset(path: 'css/Styles_Transparencia.css') }}" rel="stylesheet">

@endpush

@section('body-class', 'no-background')

@section('content')
    <div class="top-strip w-100"></div>

    <div class="container py-4">

        <h1 class="mb-4">UNIDAD DE TRANSPARENCIA Y ACCESO A LA INFORMACIÓN</h1>

        {{-- Tarjetas superiores --}}
        <div class="row justify-content-center g-4 mb-4">
            <div class="col-12 col-md-4">
                <a href="#" class="d-block text-center p-3 cta-card">
                    <img src="https://cecytepuebla.edu.mx/wp-content/uploads/elementor/thumbs/logo-pnt-pjckdpo5vb0iakjov9esqkwc3l3u58mj0gv9ks9t90.png"
                        class="img-fluid" alt="Plataforma Nacional de Transparencia">
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="#" class="d-block text-center p-3 cta-card">
                    <img src="https://cecytepuebla.edu.mx/wp-content/uploads/elementor/thumbs/logo-obligaciones-pjckdkyyx4u2oiqimpdnw4314nr02r3vbtlu6egs44.png"
                        class="img-fluid" alt="Obligaciones de Transparencia">
                </a>
            </div>
        </div>

        <h2 class="fw-bold mb-4">
            En cumplimiento al título V de la Ley General de Contabilidad Gubernamental y la Ley de Transparencia
        </h2>

        {{-- Acordeón principal --}}
        <div class="accordion" id="acordeonTransparencia">

            {{-- ITEM 1 – LGCG --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="h1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c1"
                        aria-expanded="true" aria-controls="c1">
                        Información Presupuestal
                    </button>
                </h2>

                <div id="c1" class="accordion-collapse collapse show" aria-labelledby="h1"
                    data-bs-parent="#acordeonTransparencia">
                    <div class="accordion-body p-0">
                        <ul class="list-group list-group-flush">

                            {{-- Submenú: Cuentas públicas --}}
                            <li class="list-group-item p-0">
                                <button class="accordion-button submenu collapsed py-2 px-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#cuentasAnios" aria-expanded="false"
                                    aria-controls="cuentasAnios">
                                    CUENTAS PÚBLICAS
                                </button>

                                <div id="cuentasAnios" class="collapse">
                                    <ul class="inner-menu list-unstyled">
                                        <li><a href="#">2019</a></li>
                                        <li><a href="#">2020</a></li>
                                        <li><a href="#">2021</a></li>
                                        <li><a href="#">2022</a></li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Submenú: Ayudas y Subsidios --}}
                            <li class="list-group-item p-0">
                                <button class="accordion-button submenu collapsed py-2 px-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#ayudasAnios" aria-expanded="false"
                                    aria-controls="ayudasAnios">
                                    AYUDAS Y SUBSIDIOS
                                </button>

                                <div id="ayudasAnios" class="collapse">
                                    <ul class="inner-menu list-unstyled">
                                        <li><a href="#">2023</a></li>
                                        <li><a href="#">2022</a></li>
                                        <li><a href="#">2021</a></li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Enlace simple --}}
                            <li class="list-group-item">
                                <a href="#">PROGRAMAS PRESUPUESTARIOS</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            {{-- ITEM 2 – LDF --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="h2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2"
                        aria-expanded="false" aria-controls="c2">
                        Indicadores de Desempeño
                    </button>
                </h2>
                <div id="c2" class="accordion-collapse collapse" aria-labelledby="h2"
                    data-bs-parent="#acordeonTransparencia">
                    <div class="accordion-body">
                        <a href="#">Ver documentos</a>
                    </div>
                </div>
            </div>

            {{-- ITEM 3 – Actas Comité --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="h3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c3"
                        aria-expanded="false" aria-controls="c3">
                        ACTAS DEL COMITÉ DE TRANSPARENCIA
                    </button>
                </h2>
                <div id="c3" class="accordion-collapse collapse" aria-labelledby="h3"
                    data-bs-parent="#acordeonTransparencia">
                    <div class="accordion-body">
                        <a href="#">Ver actas</a>
                    </div>
                </div>
            </div>

            {{-- ITEM 4 – Declaraciones Patrimoniales --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="h4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c4"
                        aria-expanded="false" aria-controls="c4">
                        Información Financiera Trimestral
                    </button>
                </h2>
                <div id="c4" class="accordion-collapse collapse" aria-labelledby="h4"
                    data-bs-parent="#acordeonTransparencia">
                    <div class="accordion-body">
                        <a href="#">Ver declaraciones</a>
                    </div>
                </div>
            </div>

            {{-- ITEM 5 – PMD 2024 --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="h5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c5"
                        aria-expanded="false" aria-controls="c5">
                        EVALUACIÓN DEL PMD 2024
                    </button>
                </h2>
                <div id="c5" class="accordion-collapse collapse" aria-labelledby="h5"
                    data-bs-parent="#acordeonTransparencia">
                    <div class="accordion-body">
                        <a href="#">Ver evaluación</a>
                    </div>
                </div>
            </div>

        </div><!-- /accordion principal -->

    </div><!-- /container -->
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endpush