@extends('layouts.app')
@section('title', 'Directorio - Plantel CECyTE')
@section('content')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_directorio.css') }}">
@endpush
<div class="bg-white"> 
<section class="seccion-con-fondo-blanco">
    <section class="seccion-hero text-center text-white" style="background-image: url('/imagenes/estandar1/fondo1.jpg'); min-height: 300px; background-size: cover; background-position: center;">
        <div class="container py-5">
            <div class="card shadow-lg p-5 text-center bg-white rounded-4">
                <h1 class="display-5 fw-bold mb-3">Directorio del Plantel</h1>
                <p class="lead">Conoce a las áreas que conforman nuestra institución</p>
            </div>
        </div>
        
    </section>
</section>


<section class="telefono-section text-center my-5">
    <h2>Teléfono</h2>
    <div class="numero fs-4 fw-bold text-primary">22 29 62 11 25</div>
</section>

<section class="container py-5">
    <div class="row g-4">
        @php
            $contactos = [
                ['titulo' => 'Dir. General', 'ext' => '119'],
                ['titulo' => 'Dir. Académica', 'ext' => '109'],
                ['titulo' => 'Dir. de Vinculación', 'ext' => '115'],
                ['titulo' => 'Secretario Particular', 'ext' => '105'],
                ['titulo' => 'Área Académica', 'ext' => '106'],
                ['titulo' => 'Vinculación', 'ext' => '107'],
                ['titulo' => 'Secretaria General', 'ext' => '101'],
                ['titulo' => 'COSIG', 'ext' => '113'],
                ['titulo' => 'Recursos Humanos', 'ext' => '116'],
                ['titulo' => 'Dir. Administrativa', 'ext' => '114'],
                ['titulo' => 'Coord. Jurídica', 'ext' => '102'],
                ['titulo' => 'Informática', 'ext' => '111'],
                ['titulo' => 'Área Administrativa', 'ext' => '108'],
                ['titulo' => 'Dir. de Planeación', 'ext' => '112'],
                ['titulo' => 'Área de Planeación', 'ext' => '104'],
            ];
        @endphp

        @foreach($contactos as $contacto)
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front d-flex align-items-center justify-content-center">
                            <h5 class="m-0">{{ $contacto['titulo'] }}</h5>
                        </div>
                        <div class="flip-card-back d-flex align-items-center justify-content-center">
                            <p class="m-0">Ext. {{ $contacto['ext'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
</div>
@push('scripts')
<script>
    document.querySelectorAll('.flip-card').forEach(card => {
        card.addEventListener('click', () => {
            card.classList.toggle('flipped');
        });
    });
</script>
@endpush

@endsection

