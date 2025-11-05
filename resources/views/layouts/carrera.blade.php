{{-- 
Cosas a llenar:
title
archivo-programa-estudios
page-title
descripcion-carrera
descripcion-perfil-ingreso
descripcion-perfil-egreso
competencias-egreso
descripcion-escenarios

opcionales:
styles
scripts
--}}

@extends('layouts.app')

@section('title')
  @yield('page-title')
@endsection

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/styles_carreras.css') }}">
  @yield('styles')
@endpush

@section('content')
  <header>
    <h1>@yield('carrera-title')</h1>
  </header>

  <div class="tabs">
    <ul class="tab-titles">
      <li class="active" onclick="openTab(event, 'datos-generales')">Datos generales</li>
      <li onclick="openTab(event, 'perfil-ingreso')">Perfil de Ingreso</li>
      <li onclick="openTab(event, 'perfil-egreso')">Perfil de Egreso</li>
      <li><a href="@yield('archivo-programa-estudios')" target="_blank" style="color: inherit; text-decoration: none;">Programa de estudios</a></li>
      <li onclick="openTab(event, 'escenarios')">Escenarios de Actuación</li>
    </ul>

    <div class="tab-content">
      <div id="datos-generales" class="tab-pane active">
        <h2>Datos generales de la carrera técnica</h2>
        <p>@yield('descripcion-carrera')</p>
      </div>

      <div id="perfil-ingreso" class="tab-pane">
        <h2>Perfil de Ingreso</h2>
        @yield('descripcion-perfil-ingreso')
        </ul>
      </div>

      <div id="perfil-egreso" class="tab-pane">
        <h2>Perfil de Egreso</h2>
        @yield('descripcion-perfil-egreso')
        <p>Durante el proceso de formación de los cinco módulos, el estudiante desarrollará o reforzará las siguientes competencias profesionales:</p>
        @yield('competencias-egreso')
      </div>


      <div id="escenarios" class="tab-pane">
        <h2>Escenarios de Actuación</h2>
        <p>@yield('descripcion-escenarios')</p>
      </div>
    </div>
  </div>
  @push('scripts')
    <script src="{{ asset('js/carreras.js') }}"></script>
    @yield('scripts')
  @endpush
@endsection