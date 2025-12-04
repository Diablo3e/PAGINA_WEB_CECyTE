@extends('layouts/app')
@section('title', 'COSIG')
@push('styles')
    <link href="{{ asset('css/style_cosig.css') }}" rel="stylesheet">
@endpush


@section('content')
    <div class="imgContainer">
        <img class="img-fluid" src="{{ asset('/imagenes/COSIG/BannerWebCOSIG.jpg') }}" alt="logo COSIG" style="width: 100%">
    </div>

    {{-- Documentos normativa --}}
    @php
        $documentosNormaMexicana = [
            ['titulo' => 'Politíca', 'documento' => 'pdfs/COSIG/Norma Igualdad/Política.PDF'],
            ['titulo' => 'Politíca audio', 'documento' => '#'],
            ['titulo' => 'Lineamientos de quejas', 'documento' => '#'],
            ['titulo' => 'Organigrama', 'documento' => 'imagenes/COSIG/Organigrama Comite de Igualdad_Carta.jpg'],
            ['titulo' => 'Declaración', 'documento' => 'pdfs/COSIG/Norma Igualdad/Declaración 032.pdf'],
            ]
    @endphp
    <div class="imgContainer">
        <img class="img-fluid" src="{{ asset('imagenes/COSIG/normativa.png') }}" alt="Norma Mexicana NMX-R-025-SCFI-2015">
    </div>
    <div class="documentContainer extraSpace">
        @foreach ($documentosNormaMexicana as $documento)
        <div class="card">
            <a href="{{ asset($documento['documento']) }}" style="text-decoration: none; height: 100%;" target="_blank">
                <div class="card-body cartaDocumento">
                    <strong>
                        {{ $documento['titulo'] }}
                    </strong>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    {{-- Documentos calidad --}}
    <div class="imgContainer">
        <img class="img-fluid" src="{{ asset('imagenes/COSIG/calidadPlaceholder.png') }}" alt="Norma Mexicana NMX-R-025-SCFI-2015">
    </div>
    <div class="documentContainer extraSpace">
        <div class="card">
            <a href="https://www.dropbox.com/sh/lpruf7fv5m0eoib/AACYD5i3uCXGWqukc_It_Hb1a?dl=0&e=1" style="text-decoration: none; height: 100%; width: 100%;" target="_blank">
                <div class="card-body cartaDocumento">
                    <strong>
                        Dropbox
                    </strong>
                </div>
            </a>
        </div>
    </div>


    {{-- Documentos CEPCI --}}
    @php
        $documentosCEPCI = [
            ['titulo' => 'Código de Ética para las Personas Servidoras Públicas de la Administración Pública Estatal', 'documento' => 'pdfs/COSIG/CEPCI/codigo-de-etica.pdf'],
            ['titulo' => 'Código de conducta', 'documento' => 'pdfs/COSIG/CEPCI/CodigoDeConductaV05.pdf'],
            ['titulo' => 'Carta Compromiso', 'documento' => '#'],
            ]
    @endphp
    <div class="imgContainer">
        <img class="img-fluid" src="{{ asset('/imagenes/COSIG/CEPCI.png') }}" alt="logo CEPCI">
    </div>
    <div class="documentContainer extraSpace">
        @foreach ($documentosCEPCI as $documento)
        <div class="card">
            <a href="{{ asset($documento['documento']) }}" style="text-decoration: none; height: 100%;" target="_blank">
                <div class="card-body cartaDocumento">
                    <strong>
                        {{ $documento['titulo'] }}
                    </strong>
                </div>
            </a>
        </div>
        @endforeach
    </div>
      
    {{-- Documentos COCODI --}}
    @php
        $documentosCOCODI = [
            ['titulo' => 'Acuerdo de la Secretaría de la Función Pública, por el que emite las Disposiciones y el Manual Administrativo de Aplicación Estatal en materia de Control Interno para el Estado de Puebla', 'documento' => 'pdfs/COSIG/COCODI/Acuerdo_CI_22.05.2020.pdf'],
            ]
    @endphp
    <div class="imgContainer">
        <img class="img-fluid" src="{{ asset('/imagenes/COSIG/COCODI.png') }}" alt="logo COCODI">
    </div>
    <div class="documentContainer extraSpace">
        @foreach ($documentosCOCODI as $documento)
        <div class="card">
            <a href="{{ asset($documento['documento']) }}" style="text-decoration: none; height: 100%;" target="_blank">
                <div class="card-body cartaDocumento">
                    <strong>
                        {{ $documento['titulo'] }}
                    </strong>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    
    {{-- Documentos sustentabilidad --}}
    <div class="imgContainer">
        <img class="img-fluid" src="{{ asset('imagenes/COSIG/sustentabilidadPlaceholder.png') }}" alt="Norma Mexicana NMX-R-025-SCFI-2015">
    </div>
    <div class="documentContainer extraSpace">
        <div class="card">
            <a href="#" style="text-decoration: none; height: 100%; width: 100%;" target="_blank">
                <div class="card-body cartaDocumento">
                    <strong>
                        Programa
                    </strong>
                </div>
            </a>
        </div>
    </div>

    {{-- Documentos UnIS --}}
    <div class="imgContainer">
        <img class="img-fluid" src="{{ asset('imagenes/COSIG/unisPlaceholder.png') }}" alt="Norma Mexicana NMX-R-025-SCFI-2015">
    </div>
    <div class="documentContainer extraSpace">
        <div class="card">
            <a href="#" style="text-decoration: none; height: 100%; width: 100%;" target="_blank">
                <div class="card-body cartaDocumento">
                    <strong>
                        Plan Institucional
                    </strong>
                </div>
            </a>
        </div>
    </div>
    
@endsection