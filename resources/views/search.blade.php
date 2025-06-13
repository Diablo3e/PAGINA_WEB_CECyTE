@extends('layouts/app')
@section('title', 'Busqueda')
<link href="{{ asset('css/styles_resultadosBusqueda.css') }}" rel="stylesheet">


@section('content')
    <div class="resultBox">
    @if ($resultados !== null && !empty($resultados))
        @foreach($resultados as $resultado)
            @php
                //Construccion del url
                $strOriginal = $resultado['nombre'];
                error_log('La str original = ' . $strOriginal);
                //Eliminar caracteres con acentos y ñ
                $url = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $strOriginal);
                $url = strtolower($url);
                //Cambiar espacios por - y eliminar los ' resultantes de eliminar acentos
                $url = str_ireplace(" ", "-", $url);
                $url = str_ireplace("'", "", $url);
                $url = '/' . $url;
            @endphp
            <a href="{{ url($url) }}">
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

    @push('scripts')
    <script src="{{ asset('js/planteles.js') }}"></script>
    @endpush
@endsection