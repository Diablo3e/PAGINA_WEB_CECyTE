@extends('layouts.app')

@section('title', 'Producción Indstrial')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_carreras.css') }}">
@endpush

@section('content')
<header>
    <h1>'Producción Industrial'</h1>
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
            <p>La carrera de Técnico en producción industrial ofrece las competencias profesionales que permiten al estudiante realizar actividades dirigidas a , verificar la seguridad e higiene en el ámbito laboral, auxiliar en la mejora de los procesos productivos, controlar inventarios de producción, Inspeccionar la calidad en la producción y elaborar proyectos de producción. Todas estas competencias posibilitan al egresado su incorporación al mundo laboral o desarrollar procesos productivos independientes, de acuerdo con sus intereses profesionales y necesidades de su entorno social.</p>
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
            <p>La formación que ofrece la carrera de Técnico en Procesos de Gestión Administrativa permite al egresado, a través de la articulación de saberes de diversos campos, realizar actividades dirigidas a su inserción al campo laboral.</p>
            <p>Durante el proceso de formación de los cinco módulos, el estudiante desarrollará o reforzará las siguientes competencias profesionales:</p>
            <ul>
                <li>Verifica la seguridad e higiene en el ámbito laboral.</li>
                <li>Controla inventarios de producción.</li>
                <li>Inspecciona la calidad en la producción.</li>
                <li>Elabora proyectos de producción.</li>
            </ul>
        </div>

<div id="mapa_curricular" class="tab-pane">
       


        <div id="escenarios" class="tab-pane">
            <h2>Escenarios de Actuación</h2>
            <p>La carrera permite desempeñarse en diversos entornos laborales, tanto en el sector público como privado.</p>
        </div>
    </div>
</div>

<script src="{{ asset('js/carreras.js') }}"></script>
@endsection