@extends('layouts.app')

@section('title', 'Servicios de hoteleria')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_carreras.css') }}">
@endpush

@section('content')
<header>
    <h1>'Servicios de hoteleria'</h1>
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
            <p>La carrera de Técnico en Servicios de Hotelería, ofrece las competencias profesionales que permiten al egresado realizar actividades basadas en las necesidades detectadas en el ramo de la hotelería, la cual genera una gran derrama económica. La modalidad del turismo representa el 9% del PIB y es considerado la tercera fuente de divisas más importante, según datos de la cámara de comercio de México, en el documento “cifras del turismo”, nuestro país es generador de más de 7.5 millones de empleos y por supuesto empresas que participan, la mayoría de ellas Pymes.</p>
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
            <p>La formación que ofrece la carrera de Técnico en Servicios de Hotelería permite al egresado, a través de la articulación de saberes de diversos campos,realizar actividades dirigidas a satisfacer la demanda en la prestación de servicios de hotelería correspondiente.</p>
            <p>Durante el proceso de formación de los cinco módulos, el estudiante desarrollará o reforzará las siguientes competencias profesionales:</p>
            <ul>
                <li>Orienta al cliente con la información de los servicios turísticos.</li>
                <li>Atiende al huésped en el área de división cuartos.</li>
                <li>Prepara alimentos y bebidas aplicando técnicas básicas.</li>
                <li>Brinda el servicio de alimentos y bebidas en centros de hospedaje.</li>
                <li>Asiste en la organización y realización de eventos de negocios, sociales y culturales.</li>
            </ul>
            <p>Y las competencias de empleabilidad y productividad:</p>
            <ul>
                <li>Planeación y organización.</li>
                <li>Orientación a la mejora continua.</li>
                <li>Atención al cliente.</li>
                <li>Relaciones interpersonales.</li>
                <li>Ética profesional.</li>
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
              Orienta al cliente con la información de los servicios turísticos</td>
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
              Atiende al huésped en el área de división cuartos.</td>
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
              Prepara alimentos y bebidas aplicando técnicas básicas.</td>
              <td></td>
            </tr>
            <tr>
              <td>5°</td>
              <td>Cálculo Integral</td>
              <td>Inglés V</td>
              <td>Física II</td>
              <td>Ciencia, Tecnología, Sociedad y Valores</td>
              <td>Módulo IV
              Brinda el servicio de alimentos y bebidas en centros de hospedaje</td>
              <td></td>
            </tr>
            <tr>
              <td>6°</td>
              <td>Probabilidad y Estadística</td>
              <td>Temas de Filosofía</td>
              <td>Asignatura propedéutica*</td>
              <td>Asignatura propedéutica*</td>
              <td>Módulo V
              Asiste en la organización y realización de eventos de negocios, sociales y culturales.</td>
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