@extends('layouts.carrera')

@section('page-title', 'Programación')
@section('carrera-title', 'Programación')

@section('archivo-programa-estudios', asset('pdfs/programas-estudios/programacion.pdf'))

@section('descripcion-carrera')
  <p>La carrera de Técnico en programación ofrece las competencias profesionales que permiten al estudiante realizar actividades dirigidas a: analizar, diseñar, desarrollar, instalar y mantener software de aplicación tomando como base los requerimientos del usuario.</p> 
@endsection

@section('descripcion-perfil-ingreso')
    <p>Los aspirantes a ingresar a nuestros planteles, deberán haber concluido su educación media básica y contar con cumplir los requisitos contemplados en las normas específicas de servicios escolares; además de contar con las siguientes habilidades:</p>
    <ul>
        <li>Resuelve problemas mediante el uso de operaciones y procesos aritméticos, geométricos y algebraicos</li>
        <li>Interactúa en diferentes contextos utilizando el lenguaje oral y escrito</li>
        <li>Maneja hábitos de estudio y técnicas de aprendizaje</li>
        <li>Aplica las tecnologías de la información y comunicación</li>
        <li>Observa reglas de convivencia para la vida en la sociedad</li>
    </ul>
@endsection

@section('descripcion-perfil-egreso')
    <p>La formación que ofrece la carrera de Técnico en Procesos de Gestión Administrativa permite al egresado, a través de la articulación de saberes de diversos campos, realizar actividades dirigidas a su inserción al campo laboral.</p>
@endsection

@section('competencias-egreso')
    <ul>
        <li>Auxilia en el registro y análisis de procesos, contables de una organización</li>
        <li>Auxilia en el área de costos de una organización</li>  
        <li>Asiste en el proceso de ventas de una organización</li>  
        <li>Apoya en la cadena productiva de una organización</li>  
    </ul>
@endsection

@section('descripcion-escenarios', 'La carrera permite desempeñarse en diversos entornos laborales, tanto en el sector público como privado.')