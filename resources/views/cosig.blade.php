@extends('layouts/app')
@section('title', 'COSIG')
<link href="{{ asset('css/style_cosig.css') }}" rel="stylesheet">


@section('content')
    <div class="imgContainer">
        <img class="img-fluid" src="{{ asset('/imagenes/COSIG/BannerWebCOSIG.jpg') }}" alt="logo COSIG">
    </div>
    <div class="imgContainer">
        <img class="img-fluid" src="{{ asset('imagenes/COSIG/normativa.png') }}" alt="Norma Mexicana NMX-R-025-SCFI-2015">
    </div>

    @php
        $documentos = [
            ['titulo' => 'Politíca', 'documento' => 'pdfs/COSIG/Política.PDF'],
            ['titulo' => 'Código de conducta', 'documento' => 'pdfs/COSIG/CodigoDeConductaV05.pdf'],
            ['titulo' => 'Declaración', 'documento' => 'pdfs/COSIG/Declaración 032.pdf'],
            ['titulo' => 'Código de Ética', 'documento' => 'pdfs/COSIG/codigo-de-etica.pdf'],
        ]
    @endphp
    <div class="documentContainer extraSpace">
        @foreach ($documentos as $documento)
            <a href="{{ asset($documento['documento']) }}" style="text-decoration: none;" target="_blank">
                <div class="card">
                    <div class="card-body cartaDocumento">
                        <strong>
                            {{ $documento['titulo'] }}
                        </strong>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <div class="imgContainer extraSpace">
        <img class="img-fluid" src="{{ asset('/imagenes/COSIG/CEPCI.png') }}" alt="logo CEPCI">
        <img class="img-fluid" src="{{ asset('/imagenes/COSIG/COCODI.png') }}" alt="logo COCODI">
    </div>
@endsection