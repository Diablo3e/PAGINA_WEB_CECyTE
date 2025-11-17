@extends('layouts.app')
@section('title', 'Convenios CECYTE')
@section('body-class', 'no-background')
<link href="{{ asset(path: 'css/styles_convenios.css') }}" rel="stylesheet">

@section('content')
    <div class="convenios-container1">
        <h1>Convenios de CECYTE</h1>
        <div class="grid" id="tarjetas-container">
            @php
                $convenios = [
                    ['imagenOriginal' => 'Empresas1', 'imagenAlterna' => 'Empresas2', 'enlace' => 'https://www.ejemplo.com'],

                    ['imagenOriginal' => 'Unis privadas1', 'imagenAlterna' => 'Unis privadas2', 'enlace' => 'https://www.ejemplo.com'],

                    ['imagenOriginal' => 'Unis publicas1', 'imagenAlterna' => 'Unis publicas2', 'enlace' => 'https://www.ejemplo.com'],

                    ['imagenOriginal' => 'HotelesyRestauran1', 'imagenAlterna' => 'HotelesyRestauran2', 'enlace' => 'https://www.ejemplo.com'],

                    ['imagenOriginal' => 'Descuentos colaboradores1', 'imagenAlterna' => 'Descuentos colaboradores2', 'enlace' => 'https://www.ejemplo.com'],

                    ['imagenOriginal' => 'Asociaciones civiles1', 'imagenAlterna' => 'Asociaciones civiles2', 'enlace' => 'https://cecytepuebla.edu.mx/Vinculacion/convenios2024/CONVENIOS2024.pdf'],

                    ['imagenOriginal' => 'Estancias Infantiles1', 'imagenAlterna' => 'Estancias Infantiles2', 'enlace' => 'https://www.ejemplo.com'],

                    ['imagenOriginal' => 'Sector Guberna1', 'imagenAlterna' => 'Sector Guberna2', 'enlace' => 'https://www.ejemplo.com'],

                    ['imagenOriginal' => 'OtrosConvenios1', 'imagenAlterna' => 'OtrosConvenios2', 'enlace' => 'https://www.ejemplo.com'],
                ];
            @endphp

            <!-- Las tarjetas se insertarán dinámicamente aquí -->
            @foreach($convenios as $convenio)
                @php
                    $pathImagenesConvenios = 'imagenes/Convenios/';
                    $imgOriginal = $pathImagenesConvenios . $convenio['imagenOriginal'] . '.png';
                    $imgAlterna = $pathImagenesConvenios . $convenio['imagenAlterna'] . '.png';
                @endphp
                {{-- convenio --}}
                <div class="convenio"> 
                    <a href="{{ $convenio['enlace'] }}">
                        <img src="{{ asset($imgAlterna) }}"
                            alt="Imagen convenios" class="img-hover">
                        <img src="{{ asset($imgOriginal) }}"
                            alt="Imagen alterna convenios" class="img-default">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
