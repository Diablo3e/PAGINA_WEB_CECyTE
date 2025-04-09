@extends('layouts.app')

@section('title', 'Admision')

@push('styles')
    <link href="{{ asset('css/styles_admision.css') }}" rel="stylesheet">
@endpush


@section('body-class', 'no-background')

@section('content')
    <main class="admision-container">
        <section class="section">
            <img src="https://cecytepuebla.edu.mx/wp-content/uploads/2025/02/Infografia.png" alt="Infografía del proceso de admisión">
        </section>

        <section class="section">
            <div class="two-columns">
                <div>
                    <img src="https://cecytepuebla.edu.mx/wp-content/uploads/elementor/thumbs/IMG_3003.jpeg-scaled-qp6jd5xgpdkvh8r5cajqz9lftm9awf5v1dcfkqhib8.jpg" alt="Estudiantes de CECyTE">
                </div>
                <div class="feature-box">
                    <h3>Servicio Social</h3>
                    <p>El objetivo del servicio social es cumplir con el reglamento interno del CECyTE, además de la normativa mexicana. Contamos con 20 convenios de colaboración.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="two-columns">
                <div class="feature-box">
                    <h3>Emprendedurismo</h3>
                    <p>Durante el ciclo escolar, los estudiantes desarrollan proyectos emprendedores que son presentados al final del semestre.</p>
                </div>
                <div>
                    <img src="https://cecytepuebla.edu.mx/wp-content/uploads/elementor/thumbs/IMG_3139.jpeg-scaled-qp6jfdtquam8w3j3dr31d7fmbdbi2oz1ocspd971mc.jpg" alt="Proyectos estudiantiles">
                </div>
            </div>
        </section>

        <section class="section">
            <h2>BECAS BENITO JUÁREZ</h2>
            <p>"La educación es fundamental para la felicidad social..."<br>- Benito Juárez</p>
            
            <div class="two-columns">
                <div class="feature-box">
                    <h3>Bienestar para las Familias</h3>
                    <a href="https://www.gob.mx/becasbenitojuarez/articulos/beca-bienestar-para-las-familias-de-educacion-basica" class="btn-admision" target="_blank">Más información</a>
                </div>
                <div class="feature-box">
                    <h3>Educación Media Superior</h3>
                    <a href="https://www.gob.mx/becasbenitojuarez/articulos/beca-benito-juarez-para-jovenes-de-educacion-media-superior-216589" class="btn-admision" target="_blank">Más información</a>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 20px;">
                <a href="https://www.gob.mx/becasbenitojuarez" class="btn-admision" target="_blank">Programa de Becas</a>
            </div>
        </section>
    </main>
@endsection
