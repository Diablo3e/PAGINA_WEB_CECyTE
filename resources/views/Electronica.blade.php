@extends('layouts.app')

@section('title', 'Electrónica')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_carreras.css') }}">
@endpush

@section('content')
<header>
    <h1>Electrónica</h1>
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
            <p>En el contexto (regional / nacional) la formación de Técnicos en Electrónica es relevante porque contribuye en la capacitación ysuperación profesional de los estudiantes y les permite tener mejores expectativas de vida al poder insertarse en un sector laboral que hoyen día necesita de personal con competencias profesionales y actitudinales en el área de electrónica. Asimismo podrá desarrollar competencias genéricas relacionadas principalmente con la participación en los procesos de comunicación en distintos contextos, la integración efectiva a los equipos de trabajo y la intervención consciente, desde su comunidad en particular, en el país y el mundo en general, todo con apego al cuidado del medio ambiente.</p>
        </div>

        <div id="perfil-ingreso" class="tab-pane">
            <h2>Perfil de Ingreso</h2>
            <p>La formación que ofrece la carrera de Técnico en Electrónica permite al egresado, a través de la articulación de saberes de diversos campos, realizar actividades dirigidas al:</p>
            <ul>
                <li>Mantenimiento de sistemas eléctricos y electrónicos</li>
                <li>Mantenimiento de circuitos electrónicos de control</li>
                <li>Mantenimiento de sistemas electrónicos de aplicación industrial</li>
                <li>Mantenimiento de sistemas electrónicos con microcontroladores</li>
                <li>Mantenimiento de sistemas electrónicos automatizados</li>
            </ul>
        </div>

        <div id="perfil-egreso" class="tab-pane">
            <h2>Perfil de Egreso</h2>
            <p>La formación que ofrece la carrera de Técnico en Electrónica permite al egresado, a través de la articulación de saberes de diversos campos, realizar actividades dirigidas al:</p>
            <ul>
                <li>Mantenimiento de sistemas eléctricos y electrónicos</li>
                <li>Mantenimiento de circuitos electrónicos de control</li>
                <li>Mantenimiento de sistemas electrónicos de aplicación industrial</li>
                <li>Mantenimiento de sistemas electrónicos con microcontroladores</li>
                <li>Mantenimiento de sistemas electrónicos automatizados</li>
            </ul>
            <p>Durante el proceso de formación de los cinco módulos, el estudiante desarrollará o reforzará las siguientes competencias profesionales:</p>
            <ul>
                <li>Utiliza equipo, herramienta y componentes en circuitos eléctricos y electrónicos</li>
                <li>Arma circuitos empleados en sistemas eléctricos, electrónicos.</li>
                <li>Comprueba el funcionamiento de sistemas electrónicos</li>
                <li>Implementa circuitos electrónicos para el desarrollo de aplicaciones</li>
                <li>Utiliza equipo, herramienta y componentes empleados en sistemas con microcontrolador, plataformas modulares y PLC.</li>
                <li>Elabora programas para microcontroladores.</li>
                <li>Implementa sistemas electrónicos con microcontrolador, plataformas modulares y PLC.</li>
                <li>Comprueba sistemas electrónicos en sistemas de seguridad y automatización de edificios</li>
                <li>Repara fallas en el funcionamiento de sistemas electrónicos en seguridad y automatización de edificios</li>
                <li>Programa aplicaciones para sistemas automatizados.</li>
                <li>Arma y comprueba aplicaciones con sistemas automatizados.</li>
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
              Mantiene sistemas eléctricos y electrónicos</td>
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
              Mantiene circuitos electrónicos de control</td>
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
              Mantiene sistemas electrónicos de aplicación industrial</td>
              <td></td>
            </tr>
            <tr>
              <td>5°</td>
              <td>Cálculo Integral</td>
              <td>Inglés V</td>
              <td>Física II</td>
              <td>Ciencia, Tecnología, Sociedad y Valores</td>
              <td>Módulo IV
              Mantiene sistemas electrónicos con microcontroladores</td>
              <td></td>
            </tr>
            <tr>
              <td>6°</td>
              <td>Probabilidad y Estadística</td>
              <td>Temas de Filosofía</td>
              <td>Asignatura propedéutica*</td>
              <td>Asignatura propedéutica*</td>
              <td>Módulo V
              Mantiene sistemas electrónicos automatizados
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
