@extends('layouts.app')

@section('title', 'Mantenimiento industrial')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_carreras.css') }}">
@endpush

@section('content')
<header>
    <h1>'Mantenimiento industrial'</h1>
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
            <p>La carrera de Técnico en mantenimiento industrial ofrece las competencias profesionales que permiten al estudiante realizar actividades dirigidas a realizar mantenimiento a instalaciones eléctricas, fabricar pequeñas estructuras metálicas, realiza actividades de ajuste de banco utilizando herramientas básicas, interpretar planos de piezas mecánicas, utilizar máquinas herramientas convencionales y de control numérico para reparación y fabricación de piezas, manejar máquinas de soldar de arco eléctrico y oxicorte, manipular sistemas de control y automatización, sistemas de neumática e hidráulica, mantiene equipos de refrigeración y aire acondicionado e implementara los programas de administración del mantenimiento en los sistemas.</p>
        </div>

        <div id="perfil-ingreso" class="tab-pane">
            <h2>Perfil de Ingreso</h2>
            <p>Los aspirantes a ingresar a nuestros planteles, deberán haber concluido su educación media básica y contar con cumplir los requisitos contemplados en las normas específicas de servicios escolares; además de contar con las siguientes habilidades:</p>
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
            <p>
            La formación que ofrece la carrera de Técnico en mantenimiento industrial permite al egresado, a través de la articulación de saberes de diversos campos, realizar actividades dirigidas a la Industria, sectores de producción y servicios, en el mantenimiento y reparación a diferentes equipos, máquinas e instalaciones.</p>
            <p>Durante el proceso de formación de los cinco módulos, el estudiante desarrollará o reforzará las siguientes competencias profesionales:</p>
            <ul>
                <li>Repara instalaciones eléctricas</li>
                <li>Suelda materiales ferrosos y no ferrosos</li>
                <li>Fabrica piezas métalicas</li>
                <li>Mantiene equipos hidráulicos, neumáticos y automatización</li>
                <li>Mantiene equipos de refrigeración y aire acondicionado</li>
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
              Repara instalaciones eléctricas</td>
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
              Suelda materiales ferrosos y no ferrosos</td>
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
              Fabrica piezas metálicas</td>
              <td></td>
            </tr>
            <tr>
              <td>5°</td>
              <td>Cálculo Integral</td>
              <td>Inglés V</td>
              <td>Física II</td>
              <td>Ciencia, Tecnología, Sociedad y Valores</td>
              <td>Módulo IV
              Mantiene equipos hidráulicos, neumáticos y automatización</td>
              <td></td>
            </tr>
            <tr>
              <td>6°</td>
              <td>Probabilidad y Estadística</td>
              <td>Temas de Filosofía</td>
              <td>Asignatura propedéutica*</td>
              <td>Asignatura propedéutica*</td>
              <td>Módulo V
              Mantiene equipos de refrigeración y aire acondicionado</td>
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