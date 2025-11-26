<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'CECyTE')</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/styles_menu_accesibilidad.css')}}">
    <!-- Estilos personalizados -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style_formulario.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles_barra_navegacion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles_barra_redes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chatbot.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles_pie_pagina.css') }}" rel="stylesheet">
   <!--pagina estandar y convenio-->
    <link rel="stylesheet" href="{{ asset('css/styles_estandar.css')}}">
    <!-- Funcion para poder usar las rutas de web.php en JavaScript -->
     @routes
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Espacio para estilos adicionales -->
    @stack('styles')
</head>
<body class="@yield('body-class')">
    {{-- Componentes con posicion fixes --}}
    @include('components.menu_accesibilidad')
    @include('components.chatbot')
    @include('components.barra_redes')
    <div id="containerParaFiltro" style="overflow-x: hidden">
        <div class="background-box"></div>
        <div class="background-box d-none d-sm-block"></div>
    
        <!-- Componentes de la página -->
        @include('components.navbar')
    
        <!-- Contenido principal con ajuste para barra de navegación fija -->
        <main class="main-content">
            <div class="row inicio-container">
            <section>
                <div>
                    @include('components.formulario')
                </div>
            </section>
        </div>
            @yield('content')
        </main>
    
        <!-- Footer -->
        @include('components.footer')
    
        <!-- Scripts generales -->
        <script src="{{ asset('js/formulario.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>
        <script src="{{ asset('js/chatbot.js') }}"></script>
        <script src="{{ asset('js/menu_accesibilidad.js') }}"></script>
        <!-- Scripts específicos para planteles -->
        @stack('scripts')
    </div>
</body>
</html>
