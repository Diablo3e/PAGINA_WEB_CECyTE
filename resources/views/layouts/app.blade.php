<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CECyTE')</title> <!-- Permite que cada vista defina su propio título -->

    <!-- Agregar Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style_formulario.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles_barra_navegacion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles_barra_redes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chatbot.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles_pie_pagina.css') }}" rel="stylesheet">

    <!-- Espacio para agregar estilos adicionales desde las vistas -->
    @stack('styles')

</head>
<body class="@yield('body-class')">
    
    <div class="background-box"></div> <!-- Solo visible en pantallas grandes -->
    <div class="background-box d-none d-sm-block"></div> <!-- Solo visible en pantallas pequeñas -->

    <!-- Componentes de la página -->
    @include('components.navbar')
    @include('components.barra_redes')
    @include('components.chatbot')

    <!-- Contenido principal de la vista -->
    <main class="container">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Scripts generales -->
    <script src="{{ asset('js/formulario.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/chatbot.js') }}"></script>


    <!-- Espacio para agregar scripts adicionales desde las vistas -->
    @stack('scripts')

</body>
</html>
