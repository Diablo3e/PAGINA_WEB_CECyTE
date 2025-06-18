@extends('layouts/app')
@section('title', 'Busqueda')
<link href="{{ asset('css/styles_resultadosBusqueda.css') }}" rel="stylesheet">


@section('content')
    <div class="resultBox">
    @if (count($resultados) !== 0)
        @foreach($resultados as $resultado)
            <a href="{{ url($resultado->url) }}">
                <div class="card">
                    <div class="card-body text-start">
                        {{ $resultado->resultado }}
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    @else
        <h3 class="sinResultados">Sin resultados</h3>
    @endif

    @push('scripts')
    <script src="{{ asset('js/planteles.js') }}"></script>
    @endpush
@endsection