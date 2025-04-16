@extends('layouts.app')

@section('title', 'Fuentes alternas de energía')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_carreras.css') }}">
@endpush

@section('content')
<header>
    <h1>Fuentes alternas de energía</h1>
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
            <p>La carrera de Técnico en fuentes alternas de energía ofrece las competencias profesionales que permiten al estudiante realizar actividades dirigidas a instalar, operar y mantener sistemas de energía solar térmica, instalar, operar y mantener sistemas de energía solar fotovoltaica de baja potencia, instalar, operar y mantener sistemas de energía eólica de baja potencia, mejorar sistemas de energía solar térmica domestica, solar fotovoltaica y eólica de baja potencia y comercializar sistemas de energía solar térmica domestica, solar fotovoltaica y eólica de baja potencia.</p>
        </div>

        <div id="perfil-ingreso" class="tab-pane">
            <h2>Perfil de Ingreso</h2>
            <p>Durante el proceso de formación de los cinco módulos, el estudiante desarrollará o reforzará las siguientes competencias profesionales:</p>
            <ul>
                <li>Instala, opera y mantiene sistemas domésticos de energía solar térmica</li>
                <li>Instala, opera y mantiene sistemas de energía solar fotovoltaica de baja potencia</li>
                <li>Instala, opera y mantiene sistemas de energía eólica de baja potencia</li>
                <li>Mejora sistemas de energía solar térmica, solar fotovoltaica y eólica de baja potencia</li>
                <li>Comercializa sistemas de energía solar térmica, solar fotovoltaica y eólica de baja potencia</li>
            </ul>
        </div>

        <div id="perfil-egreso" class="tab-pane">
            <h2>Perfil de Egreso</h2>
            <p>La formación que ofrece la carrera de Técnico en Fuentes alternas de energía permite al egresado, a través de la articulación de saberes de diversos campos, realizar actividades dirigidas a la instalación, operación, mantenimiento, mejora y comercialización de sistemas domésticos de energía solar térmica y sistemas de energía solar fotovoltaica y eólica de baja potencia</p>
            <p>Durante el proceso de formación de los cinco módulos, el estudiante desarrollará o reforzará las siguientes competencias profesionales:</p>
            <ul>
                <li>Instala , opera y mantiene sistemas domésticos de energía solar térmica</li>
                <li>Instala, opera y mantiene sistemas de energía solar fotovoltaica de baja potencia</li>
                <li>Instala, opera y mantiene sistemas de energía eólica de baja potencia</li>
                <li>Mejora sistemas domésticos de energía solar térmica y sistemas de energía solar fotovoltaica y eólica de baja potencia</li>
                <li>Comercializa sistemas domésticos de energía solar térmica y sistemas de energía solar fotovoltaica y eólica de baja potencia</li>
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
              Instala, opera y mantiene sistemas domésticos de energía solar térmica</td>
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
              Instala, opera y mantiene sistemas de energía solar fotovoltaica de baja potencia</td>
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
              Instala, opera y mantiene sistemas de energía eólica de baja potencia</td>
              <td></td>
            </tr>
            <tr>
              <td>5°</td>
              <td>Cálculo Integral</td>
              <td>Inglés V</td>
              <td>Física II</td>
              <td>Ciencia, Tecnología, Sociedad y Valores</td>
              <td>Módulo IV
              Mejora sistemas domésticos de energía solar térmica y sistemas de energía solar fotovoltaica y eólica de baja potencia</td>
              <td></td>
            </tr>
            <tr>
              <td>6°</td>
              <td>Probabilidad y Estadística</td>
              <td>Temas de Filosofía</td>
              <td>Asignatura propedéutica*</td>
              <td>Asignatura propedéutica*</td>
              <td>Módulo V
              Comercializa sistemas domésticos de energía solar térmica y sistemas de energía solar fotovoltaica y eólica de baja potencia</td>
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