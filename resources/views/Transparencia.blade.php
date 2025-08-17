@extends('layouts.app')

@section('title', 'Transparencia')
@push('styles')
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
        <img
          src="https://cecytepuebla.edu.mx/wp-content/uploads/elementor/thumbs/logo-pnt-pjckdpo5vb0iakjov9esqkwc3l3u58mj0gv9ks9t90.png"
          class="img-fluid" alt="Plataforma Nacional de Transparencia">
      </a>
    </div>
    <div class="col-12 col-md-4">
      <a href="#" class="d-block text-center p-3 cta-card">
        <img
          src="https://cecytepuebla.edu.mx/wp-content/uploads/elementor/thumbs/logo-obligaciones-pjckdkyyx4u2oiqimpdnw4314nr02r3vbtlu6egs44.png"
          class="img-fluid" alt="Obligaciones de Transparencia">
      </a>
    </div>
  </div>

  <h2 class="fw-bold mb-4">
    En cumplimiento al título V de la Ley General de Contabilidad Gubernamental y la Ley de Transparencia
  </h2>

  {{-- Acordeón principal --}}
  <div class="accordion" id="acordeonTransparencia">

    {{-- ITEM 1 - LGCG --}}
    <div class="accordion-item">
      <h2 class="accordion-header" id="h1">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c1"
          aria-expanded="true" aria-controls="c1">
          Información Presupuestal
        </button>
      </h2>
      <div id="c1" class="accordion-collapse collapse" aria-labelledby="h1" data-bs-parent="#acordeonTransparencia">
        <div class="accordion-body">
          <select id="presupuestoSelect" class="form-select yearDropdown">
            <option selected>Elige una opcion</option>
            @foreach ($infoPresupuesto as $item)
            <option value="{{ $item }}">{{$item}}</option>
            @endforeach
          </select>
          <div id="presupuesto">
          </div>
        </div>
      </div>
    </div>


    {{-- ITEM 4 – Declaraciones Patrimoniales --}}
    <div class="accordion-item">
      <h2 class="accordion-header" id="h2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2"
          aria-expanded="false" aria-controls="c2">
          Información Financiera Trimestral
        </button>
      </h2>
      <div id="c2" class="accordion-collapse collapse" aria-labelledby="h2" data-bs-parent="#acordeonTransparencia">
        <div class="accordion-body">
          <select id="infoFinancieraSelect" class="form-select yearDropdown">
            <option selected>Elige una opcion</option>
            @foreach ($infoFinanciera as $item)
            <option value="{{ $item }}">{{$item}}</option>
            @endforeach
          </select>
          <div id="infoFinanciera">
            <div>
              <button>Button</button>
              <button>Button</button>
              <button>Button</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- ITEM 2 – LDF --}}
    <div class="accordion-item">
      <h2 class="accordion-header" id="h3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c3"
          aria-expanded="false" aria-controls="c3">
          Indicadores de Desempeño
        </button>
      </h2>
      <div id="c3" class="accordion-collapse collapse" aria-labelledby="h3" data-bs-parent="#acordeonTransparencia">
        <div class="accordion-body">
          <select id="indicadoresSelect" class="form-select yearDropdown">
            <option selected>Elige una opcion</option>
            @foreach ($desempeno as $item)
            <option value="{{ $item }}">{{$item}}</option>
            @endforeach
          </select>
          <div id="indicadores">
          </div>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="h4">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c4"
          aria-expanded="false" aria-controls="c4">
          Programas Presupuestarios
        </button>
      </h2>
      <div id="c4" class="accordion-collapse collapse" aria-labelledby="h4" data-bs-parent="#acordeonTransparencia">
        <div class="accordion-body">
          <select id="progPresupuestoSelect" class="form-select yearDropdown">
            <option selected>Elige una opcion</option>
            @foreach ($progPresupuesto as $item)
            <option value="{{ $item }}">{{$item}}</option>
            @endforeach
          </select>
          <div id="progPresupuesto">
          </div>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="h5">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c5"
          aria-expanded="false" aria-controls="c5">
          Ayuda y Subsidios
        </button>
      </h2>
      <div id="c5" class="accordion-collapse collapse" aria-labelledby="h5" data-bs-parent="#acordeonTransparencia">
        <div class="accordion-body">
          <select id="ayudaSubsidiosSelect" class="form-select yearDropdown">
            <option selected>Elige una opcion</option>
            @foreach ($ayudaSubsidios as $item)
            <option value="{{ $item }}">{{$item}}</option>
            @endforeach
          </select>
          <div id="ayudaSubsidios">
          </div>
        </div>
      </div>
    </div>

    {{-- ITEM 5 - PMD 2024 --}}
    <div class="accordion-item">
      <h2 class="accordion-header" id="h6">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c6"
          aria-expanded="false" aria-controls="c6">
          Inventario </button>
      </h2>
      <div id="c6" class="accordion-collapse collapse" aria-labelledby="h6" data-bs-parent="#acordeonTransparencia">
        <div class="accordion-body">
          <select id="inventariosSelect" class="form-select yearDropdown">
            <option selected>Elige una opcion</option>
            @foreach ($inventarios as $item)
            <option value="{{ $item }}">{{$item}}</option>
            @endforeach
          </select>
          <div id="inventarios">
          </div>
        </div>

      </div>
    </div>

  </div><!-- /accordion principal -->

</div><!-- /container -->
@endsection

@push('scripts')
<script src="{{ asset('js/transparencia.js') }}"></script>
@endpush