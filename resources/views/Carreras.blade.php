@extends('layouts.app')

@section('title', 'Programación')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_carreras.css') }}">
@endpush

@section('content')
<header>
    <h1>Programación</h1>
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
            <p>La carrera de Técnico en programación ofrece las competencias profesionales que permiten al estudiante realizar actividades dirigidas a: analizar, diseñar, desarrollar, instalar y mantener software de aplicación tomando como base los requerimientos del usuario.</p>
        </div>

        <div id="perfil-ingreso" class="tab-pane">
            <h2>Perfil de Ingreso</h2>
            <p>Los aspirantes deben haber concluido su educación media básica y contar con habilidades como:</p>
            <ul>
                <li>Resolver problemas mediante operaciones matemáticas</li>
                <li>Interactuar en diferentes contextos utilizando lenguaje oral y escrito</li>
                <li>Manejar hábitos de estudio</li>
                <li>Aplicar las tecnologías de la información y comunicación</li>
            </ul>
        </div>

        <div id="perfil-egreso" class="tab-pane">
            <h2>Perfil de Egreso</h2>
            <p>La formación que ofrece la carrera de Técnico en Procesos de Gestión Administrativa permite al egresado, a través de la articulación de saberes de diversos campos, realizar actividades dirigidas a su inserción al campo laboral.</p>
            <p aling="justify">
            "Durante el proceso de formación de la carrera de Técnico en Procesos de Gestión Administrativa, comprendida de cinco módulos, el estudiante desarrollará o reforzará las siguientes competencias profesionales: Auxilia en el registro y análisis de procesos, contables de una organización, Auxilia en el área de costos de una organización, Asiste en el proceso de ventas de una organización, Apoya en la cadena productiva de una organización, Asiste en la gerencia de una organización."
            </p>
          </div>

<div id="mapa_curricular" class="tab-pane">
        <h2>Mapa Curricular</h2>
        <table border="1" cellpadding="10" cellspacing="0">
          <thead>
            <tr>
              <th>Semestre</th>
              <th>Asignatura 1</th>
              <th>Asignatura 2</th>
              <th>Asignatura 3</th>
              <th>Asignatura 4</th>
              <th>Asignatura 5</th>
              <th>Asignatura 6</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1°</td>
              <td>Álgebra</td>
              <td>Inglés I</td>
              <td>Química I</td>
              <td>Tecnologías de la Información y Com.</td>
              <td>Lógica</td>
              <td>Lectura, Expresión Oral y Escrita I</td>
            </tr>
            <tr>
              <td>2°</td>
              <td>Geometría y Trigonometría</td>
              <td>Inglés II</td>
              <td>Química II</td>
              <td>Módulo I
                Desarrolla software de aplicación con programación estructurada</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>3°</td>
              <td>Geometría Analítica</td>
              <td>Inglés III</td>
              <td>Ética</td>
              <td>Módulo II
                Aplica metodologías de desarrollo de software con herramientas de programación visual</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>4°</td>
              <td>Cálculo Diferencial</td>
              <td>Inglés IVI</td>
              <td>Física I</td>
              <td>Ecología</td>
              <td>Módulo III
                Desarrolla aplicaciones Web</td>
              <td></td>
            </tr>
            <tr>
              <td>5°</td>
              <td>Cálculo Integral</td>
              <td>Inglés V</td>
              <td>Física II</td>
              <td>Ciencia, Tecnología, Sociedad y Valores</td>
              <td>Módulo IV
                Desarrolla software de aplicación Web con almacenamiento persistente de datos</td>
              <td></td>
            </tr>
            <tr>
              <td>6°</td>
              <td>Probabilidad y Estadística</td>
              <td>Temas de Filosofía</td>
              <td>IAsignatura propedéutica*</td>
              /*borrar o dejar I*/
              <td>Asignatura propedéutica*</td>
              <td>Módulo V
                Desarrolla aplicaciones para dispositivos móviles
                </td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>


        <div id="escenarios" class="tab-pane">
            <h2>Escenarios de Actuación</h2>
            <p>La carrera permite desempeñarse en diversos entornos laborales, tanto en el sector público como privado.</p>
        </div>
    </div>
</div>

<script src="{{ asset('js/carreras.js') }}"></script>
@endsection
