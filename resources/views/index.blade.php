@extends('layouts.app')

@section('title', 'CECyTE')
<link href="{{ asset('css/styles_mapa_carrusel.css') }}" rel="stylesheet">
<link href="{{ asset('css/styles_pestanas_carrera.css') }}" rel="stylesheet">
<link href="{{ asset('css/styles_pestanas_carrera.css') }}" rel="stylesheet">
<link href="{{ asset('css/styles_planteles.css') }}" rel="stylesheet">


@section('content')

    <div class="container-fluid">
        <div class="row inicio-container">


            <!-- Contenido adicional -->
            <section>
                <div>
                    @include('components.formulario', compact('modalidades', 'niveles', 'planteles', 'carreras'))
                </div>
            </section>

        </div>
        <!-- Carrusel-->
        <section>
            <div>
                @include('components.mapa_carrusel')
            </div>
        </section>
        <!-- Pestañas Carreras -->
        <section>
            <div>
                @include('components.pestanas_carrera')
            </div>
        </section>
        <!-- Planteles-Mapa -->
        <section>
            <div>
                @include('components.mapa-Planteles')
            </div>
        </section>
    </div>



    @push('scripts')
        <script src="{{ asset('js/pestanas_carrera.js') }}"></script>
        <script src="{{ asset('js/carrusel.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('js/main_formulario.js') }}"></script>


    @endpush

@endsection