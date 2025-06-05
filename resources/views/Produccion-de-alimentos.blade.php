@extends('layouts.app')

@section('title', 'Producción indstrial de alimentos')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_carreras.css') }}">
@endpush

@section('content')
<header>
    <h1>Producción industrial de alimentos</h1>
</header>

<div class="tabs">
    <ul class="tab-titles">
        <li class="active" onclick="openTab(event, 'datos-generales')">Datos generales</li>
        <li onclick="openTab(event, 'perfil-ingreso')">Perfil de Ingreso</li>      
        <li onclick="openTab(event, 'perfil-egreso')">Perfil de Egreso</li>
        <li onclick="openTab(event, 'mapa_curricular')">Mapa Curricular</li>
        <li onclick="openTab(event, 'escenarios')">Escenarios de Actuación</li>
    </ul>

    <div class="tab-content">
        <div id="datos-generales" class="tab-pane active">
            <h2>Datos generales de la carrera técnica</h2>
            <p>En el contexto (regional/nacional) la formación de Técnicos en Técnico en Producción Industrial de Alimentos es relevante porque las tendencias globalizadoras, actualmente exigen mayor competitividad y profesionalismo del recurso humano, como pieza clave en el desarrollo nacional. Los altos índices de desnutrición, la escasez de alimentos y la pobreza en aumento de los suelos, son problemas que alertan hacia la búsqueda de un mayor y mejor aprovechamiento de los recursos naturales. En México se produce gran diversidad de éstos y su optimización depende en gran medida de las alternativas conservación y procesamiento que ofrezca la industria alimentaria, a través de sus distintas aplicaciones tecnológicas.</p>
        </div>

        <div id="perfil-ingreso" class="tab-pane">
            <h2>Perfil de Ingreso</h2>
            <p>Los aspirantes a ingresar a nuestros planteles, deberán haber concluido su educación media básica y contar con cumplir los requisitos contemplados en las normas específicas de servicios escolares; además de contar con las siguientes habilidades:</p>
            <ul>
                <li>Resuelve problemas mediante el uso de operaciones y procesos aritméticos, geométricos y algebraicos</li>
                <li>Interactúa en diferentes contextos utilizando el lenguaje oral y escrito</li>
                <li>Maneja hábitos de estudio y técnicas de aprendizaje</li>
                <li>Aplica las tecnologías de la información y comunicación</li>
                <li>Observa reglas de convivencia para la vida en la sociedad</li>
            </ul>
        </div>

        <div id="perfil-egreso" class="tab-pane">
            <h2>Perfil de Egreso</h2>
            <p>La formación que ofrece la Carrera de Técnico en Producción Industrial de Alimentos permite al egresado,a través de la articulación de saberes de diversos campos, realizar actividades dirigidas a la realizar el acondicionamiento de las materias primas, las áreas de proceso, operación de equipo, maquinaria y herramientas de trabajo necesarias, entre otros, estableciendo relaciones entre ellos y su vida cotidiana para integrarse a la industria alimentaria en las diferentes plazas.</p>
            <p>Durante el proceso de formación de los cinco módulos, el estudiante desarrollará o reforzará las siguientes competencias profesionales:</p>
            <ul>
                <li>Realiza análisis físicos, químicos y microbiológicos a insumos, productos y áreas de proceso de acuerdo a la normativa vigente.</li>
                <li>Procesa alimentos lácteos y sus derivados con calidad e inocuidad.</li>
                <li>Procesa alimentos cárnicos con calidad e inocuidad</li>
                <li>Procesa alimentos a partir de frutas y hortalizas con calidad e inocuidad</li>
                <li>Procesa alimentos a partir de cereales y oleaginosas con calidad e inocuidad</li>
            </ul>
        </div>

<div id="mapa_curricular" class="tab-pane">
        <h2>Mapa Curricular</h2>


        <div id="escenarios" class="tab-pane">
            <h2>Escenarios de Actuación</h2>
            <p>La carrera permite desempeñarse en diversos entornos laborales, tanto en el sector público como privado.</p>
        </div>
    </div>
</div>

<script src="{{ asset('js/carreras.js') }}"></script>
@endsection