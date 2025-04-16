@extends('layouts.app')

@section('title', 'Mantenimiento automotriz')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_carreras.css') }}">
@endpush

@section('content')
<header>
    <h1>Mantenimiento automotriz</h1>
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
            <p>La carrera de Técnico en mantenimiento automotriz ofrece las competencias profesionales que permiten al estudiante: prestar servicios en áreas de mantenimiento automotriz, capaces de proporcionar mantenimiento al automóvil moderno, que exige cada vez mayor y mejor preparación tanto en áreas mecánicas como en electrónica y electricidad. Asimismo podrá desarrollar competencias genéricas relacionadas principalmente con la participación en los procesos de comunicación en distintos contextos, la integración efectiva a los equipos de trabajo y la intervención consciente, desde su comunidad en particular, en el país y el mundo en general, todo con apego al cuidado del medio ambiente.</p>
        </div>

        <div id="perfil-ingreso" class="tab-pane">
            <h2>Perfil de Ingreso</h2>
            <p>Los aspirantes a ingresar a nuestros planteles, deberán haber concluido su educación media básica y cumplir con los requisitos contemplados en la normas específicas de Servicios Escolares; además de contar con la siguientes habilidades:</p>
            <ul>
                <li>Resuelve problemas mediante el uso de operaciones y procesos aritméticos, geométricos y algebraicos</li>
                <li>Interactúa en diferentes contextos utilizando el lenguaje oral y escrito</li>
                <li>Maneja hábitos de estudio y técnicas de aprendizaje</li>
                <li>Aplica las tecnologías de la información y comunicación</li>
                <li>Observa reglas de convivencia para la vida en la sociedad potencia</li>
            </ul>
        </div>

        <div id="perfil-egreso" class="tab-pane">
            <h2>Perfil de Egreso</h2>
            <p>a formación que ofrece la carrera de Técnico en Mantenimiento Automotriz permite al egresado, a través de la articulación de saberes de diversos campos, realizar actividades dirigidas a la empleabilidad y productividad en el área de mantenimiento automotriz.</p>
            <p>Durante el proceso de formación de los cinco módulos, el estudiante desarrollará o reforzará las siguientes competencias profesionales, correspondientes al Técnico en mantenimiento automotriz:</p>
            <ul>
                <li>Mantiene los sistemas eléctricos y electrónicos del automóvil</li>
                <li>Mantiene el motor de combustión interna</li>
                <li>Mantiene los sistemas de control electrónico del motor de combustión interna</li>
                <li>Mantiene el sistema de transmisión del automóvil</li>
                <li>Mantiene los sistemas de suspensión, dirección y frenos del automóvil</li>
            </ul>
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
              <td>Lectura, Expresión Oral y Escrita II</td>
              <td>Módulo I
              Mantiene los sistemas eléctricos y electrónicos del automóvil</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>3°</td>
              <td>Geometría Analítica</td>
              <td>Inglés III</td>
              <td>Biología</td>
              <td>Ética</td>
              <td>Módulo II
              Mantiene el motor de combustión interna</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>4°</td>
              <td>Cálculo Diferencial</td>
              <td>Inglés IV</td>
              <td>Física I</td>
              <td>Ecología</td>
              <td>Módulo III
              Mantiene los sistemas de control electrónico del motor de combustión interna</td>
              <td></td>
            </tr>
            <tr>
              <td>5°</td>
              <td>Cálculo Integral</td>
              <td>Inglés V</td>
              <td>Física II</td>
              <td>Ciencia, Tecnología, Sociedad y Valores</td>
              <td>Módulo IV
              Mantiene el sistema de transmisión del automóvil</td>
              <td></td>
            </tr>
            <tr>
              <td>6°</td>
              <td>Probabilidad y Estadística</td>
              <td>Temas de Filosofía</td>
              <td>Asignatura propedéutica*</td>
              <td>Asignatura propedéutica*</td>
              <td>Módulo V
              Mantiene los sistemas de suspensión, dirección y frenos del automóvil</td>
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