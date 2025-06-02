<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CECyTE')</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Estilos personalizados -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style_formulario.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles_barra_navegacion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles_barra_redes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chatbot.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles_pie_pagina.css') }}" rel="stylesheet">
   <!--pagina estandar y convenio-->
    <link rel="stylesheet" href="{{ asset('css/styles_convenios.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_estandar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles_directorio.css')}}">

    <!-- Espacio para estilos adicionales -->
    @stack('styles')
</head>
<body class="@yield('body-class')">

    <div class="background-box"></div>
    <div class="background-box d-none d-sm-block"></div>

    <!-- Componentes de la página -->
    @include('components.navbar')
    @include('components.barra_redes')
    @include('components.chatbot')

    <!-- Contenido principal con ajuste para barra de navegación fija -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Scripts generales -->
    <script src="{{ asset('js/formulario.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/chatbot.js') }}"></script>
    <script src="{{ asset('js/main_formulario.js') }}"></script>

    <!-- Scripts específicos para planteles -->
    @stack('scripts')

</body>
</html>
