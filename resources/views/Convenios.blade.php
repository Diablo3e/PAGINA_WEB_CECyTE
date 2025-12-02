@extends('layouts.app')
@section('title', 'Convenios CECYTE')
@section('body-class', 'no-background')

@push('styles')
    <link href="{{ asset(path: 'css/styles_convenios.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="convenios-container1">
        <h1>Convenios de CECYTE</h1>
        <div class="grid" id="tarjetas-container">
            @php
                $convenios = [
                    ['imagenOriginal' => 'Empresas1', 'imagenAlterna' => 'Empresas2', 'documento' => 'pdfs/convenios/EMPRESAS.pdf'],

                    ['imagenOriginal' => 'Unis privadas1', 'imagenAlterna' => 'Unis privadas2', 'documento' => 'pdfs/convenios/UNIVERSIDADES PRIVADAS.pdf'],

                    ['imagenOriginal' => 'Unis publicas1', 'imagenAlterna' => 'Unis publicas2', 'documento' => 'pdfs/convenios/UNIVERSIDADES PÚBLICAS.pdf'],

                    ['imagenOriginal' => 'HotelesyRestauran1', 'imagenAlterna' => 'HotelesyRestauran2', 'documento' => 'pdfs/convenios/HOTELES Y RESTAURANTES.pdf'],

                    ['imagenOriginal' => 'Descuentos colaboradores1', 'imagenAlterna' => 'Descuentos colaboradores2', 'documento' => 'pdfs/convenios/DESCUENTOS PARA COLABORADORES.pdf'],

                    ['imagenOriginal' => 'Asociaciones civiles1', 'imagenAlterna' => 'Asociaciones civiles2', 'documento' => 'pdfs/convenios/ASOCIACIONES CIVILES.pdf'],

                    ['imagenOriginal' => 'Estancias Infantiles1', 'imagenAlterna' => 'Estancias Infantiles2', 'documento' => 'pdfs/convenios/ESTANCIAS INFANTILES.pdf'],

                    ['imagenOriginal' => 'Sector Guberna1', 'imagenAlterna' => 'Sector Guberna2', 'documento' => 'pdfs/convenios/SECTOR GUBERNAMENTAL.pdf'],

                    ['imagenOriginal' => 'OtrosConvenios1', 'imagenAlterna' => 'OtrosConvenios2', 'documento' => '#'],
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
                    <a href="{{ asset($convenio['documento']) }}" target="_blank">
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
