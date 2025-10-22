@extends('layouts/app')
@section('title', 'Quienes somos')
@push('styles')
    <link href="{{ asset('css/style_quienesSomos.css') }}" rel="stylesheet">
@endpush


@section('content')
    <div class="img_background">
        <h1> <b>¿Quiénes somos?</b></h1>
    </div>
    <div class="intro_text">
        <div class="intro_text">
            <p>
                A partir de 1991, la Secretaria de Educación Pública puso a disposición de los gobiernos estatales el nuevo modelo determinado “Colegios de Estudios Científicos y Tecnológicos” (CECyTES).
                Estos colegios nacen como organismos públicos descentralizados de los estados, con personalidad jurídica y patrimonio propios, vinculados con los sectores social productivo de cada uno de los estados, ofrece Educación Media Superior en 2 modalidades, Bachillerato Tecnológico (CECyTE) y Bachillerato General (EMSaD).
            </p>

            <p>
                <b>El Colegio de Estudios Científicos y Tecnológicos del Estado de Puebla</b> nace en 1996 siendo el Plantel Tehuitzingo el primero, posteriormente abriendo el plantel Chignahuapan en el mismo año, así como Magdalena, hasta llegar a ofrecer 12 carreras.
            </p>

            <p>
                Contamos con 9 planteles CECyTE (1 extensión CECyTE Tlacotepec) y 8 Centros de <b>Educación Media Superior a Distancia (EMSaD)</b>.
            </p>
        </div>
    </div>
    <div class="btn-left">
        <a class="btn btn-lg btn-color" href="{{ route('linea_tiempo') }}" role="button">Historia</a>
    </div>
    <div class="valores_title">
        <h1><b>NUESTROS VALORES</b></h1>
    </div>
    <div class="valores_body">
        <p>
            <b>COMPROMETIDOS</b> con la excelencia y calidad en <b>educación media superior,</b> para brindar lo último en tecnología y ciencia a sus estudiantes; <b>INNOVANDO</b> día a día para romper los paradigmas y así encontrar soluciones efectivas a los problemas cotidianos con los que se enfrenta el mundo.
        </p>
        <p>
            Propiciamos que las y los estudiantes se sientan en <b>CONFIANZA</b> para que su <b>CREATIVIDAD</b> no tenga límites, ayudándoles a hacer realidad sus proyectos a través de alianzas estratégicas con diversos organismos empresariales y de la Sociedad Civil.
        </p>
        <p>
            Buscamos la <b>EMPATÍA</b> con el entorno, ya que CECyTE Puebla fomenta una visión <b>INTEGRAL </b>en donde las y los estudiantes, padres de familia y el entorno se vean beneficiados con sus proyectos.
        </p>
    </div>
    <img class="img-fluid" src="{{ asset('imagenes/Quienes_somos/MAPA-con-ubicaciones-2024_Mesa-de-trabajo-1-2048x1075.jpg') }}" alt="información planteles" style="width: 100%; padding:30px ;">
    <div class="valores_table">
    <div class="valor_item">
        <h2><b>MISIÓN</b></h2>
        <p>
            Proporcionar educación media superior propedéutica y tecnológica de calidad con cobertura y pertinencia social, mediante el desarrollo de habilidades y competencias en nuestros estudiantes, con una visión humanística-científica, conscientes de la protección y cuidado del medio ambiente, que les permita su inserción a la educación superior o al ámbito laboral; contribuyendo al desarrollo socioeconómico en el entorno regional y global.
        </p>
    </div>

    <div class="valor_item">
        <h2><b>VISIÓN</b></h2>
        <p>
            Ser la institución educativa líder acreditada y certificada de la educación media superior y en la formación de jóvenes competentes y emprendedores, que responda a las necesidades de los diferentes sectores de manera pertinente, contribuyendo al desarrollo socioeconómico de la región mediante la capacitación y el impulso de los proyectos sustentables.
        </p>
    </div>

    <div class="valor_item">
        <h2><b>PROPÓSITO</b></h2>
        <p>
            Generar capital intelectual para la solución creativa de problemas en el sector industrial y de servicios.
        </p>
    </div>
</div>


@endsection