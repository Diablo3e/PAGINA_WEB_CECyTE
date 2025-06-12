@extends('layouts/app')
@section('title', 'Busqueda')
<link href="{{ asset('css/styles_resultadosBusqueda.css') }}" rel="stylesheet">

@section('content')
    <div class="resultBox">
    
    @if ($resultados !== null && !empty($resultados))
        @foreach($resultados as $resultado)
            <a href="#">
                <div class="card">
                    <div class="card-body text-start">
                        {{ $resultado['nombre'] }}
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    @else
        <h3 class="sinResultados">Sin resultados</h3>
    @endif
@endsection