<nav class="navbar navbar-expand-xxl navbar-cecyte" 
    style="background: url('{{ asset('imagenes/Barra-de-navegacion/barra-de-navegacion-1.png') }}') no-repeat center center; background-size: cover;">
    <div class="container-fluid px-4">

        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('imagenes/Barra-de-navegacion/icon-Logotipo-CECyTEP.svg') }}" alt="CECyTE Logo">
        </a>
        <!-- Hamburguesa -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menú -->
        <div class="collapse navbar-collapse navbar-nav-scroll justify-content-end px-5" id="navbarNav">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item"><a class="d-flex flex-nowrap nav-link active" href="{{ url('/') }}">Inicio
                        <img src="{{ asset('imagenes/Barra-de-navegacion/icon-flecha.svg') }}" alt="Flecha hacia abajo" class="icono-flecha">
                    </a></li>

                {{-- Dropdown --}}
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" id="ofertaDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Nosotros
                        <img src="{{ asset('imagenes/Barra-de-navegacion/icon-flecha.svg') }}" alt="Flecha hacia abajo" class="icono-flecha">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="ofertaDropdown">
                        <li><a class="dropdown-item" href="{{ route('quienes_somos') }}">¿Quiénes somos?</a></li>
                        <li><a class="dropdown-item" href="{{ route('linea_tiempo') }}">Historia</a></li>
                    </ul>
                    
                    {{-- <a class="d-flex flex-nowrap nav-link" href="{{ route('linea_tiempo') }}">Nosotros
                        <img src="{{ asset('imagenes/Barra-de-navegacion/icon-flecha.svg') }}" alt="Flecha hacia abajo" class="icono-flecha">
                    </a> --}}
                </li>

                <li class="nav-item"><a class="d-flex flex-nowrap nav-link" href="{{ route('Admision') }}">Admisión
                        <img src="{{ asset('imagenes/Barra-de-navegacion/icon-flecha.svg') }}" alt="Flecha hacia abajo" class="icono-flecha">
                    </a></li>

                {{-- Dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ofertaDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Oferta Educativa
                        <img src="{{ asset('imagenes/Barra-de-navegacion/icon-flecha.svg') }}" alt="Flecha hacia abajo" class="icono-flecha">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="ofertaDropdown">
                        <li><a class="dropdown-item" href="{{ route('Produccion-de-alimentos') }}">Produccion de
                                alimentos</a></li>
                        <li><a class="dropdown-item" href="{{ route('Produccion-industrial') }}">Produccion de
                                alimentos</a></li>

                        <li><a class="dropdown-item" href="{{ route('Programacion') }}">Programación</a></li>
                        <li><a class="dropdown-item" href="{{ route('Fuentes_Alternas') }}">Fuentes Alternas de
                                Energía</a></li>
                        <li><a class="dropdown-item" href="{{ route('Mantenimiento_Automotriz') }}">Mantenimiento
                                Automotriz</a></li>
                        <li><a class="dropdown-item" href="{{ route('Mantenimento_Industrial') }}">Mantenimiento
                                Industrial</a></li>
                        <li><a class="dropdown-item" href="{{ route('Electronica') }}">Electrónica</a></li>
                        <li><a class="dropdown-item" href="{{ route('Mantenimiento-combustion') }}">Motores de
                                Combustión</a></li>
                        <li><a class="dropdown-item" href="{{ route('Proceso-de-gestion') }}">Proceso de Gestión</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('Hoteleria') }}">Hotelería</a></li>
                        <li><a class="dropdown-item" href="#">Semiconductores</a></li>
                        <li><a class="dropdown-item" href="#">Inteligencia Artificial</a></li>
                        <li><a class="dropdown-item" href="#">Electromovilidad</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ofertaDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Vinculación
                        <img src="{{ asset('imagenes/Barra-de-navegacion/icon-flecha.svg') }}" alt="Flecha hacia abajo" class="icono-flecha">

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="ofertaDropdown">
                        <li><a class="dropdown-item" href="{{ route('convenios') }}">Convenios</a></li>
                        <li><a class="dropdown-item" href="{{ route('bolsa') }}">Bolsa de Trabajo</a></li>
                    </ul>
                </li>
                {{-- El boton de planteles dirige a la seccion de planteles en la pagina principal --}}
                <li class="nav-item"><a class="d-flex flex-nowrap nav-link" href="{{ url('/') }}#planteles-list">Planteles
                        <img src="{{ asset('imagenes/Barra-de-navegacion/icon-flecha.svg') }}" alt="Flecha hacia abajo" class="icono-flecha">
                    </a></li>
                <li class="nav-item">
                    <a class="nav-link informes" href="#" onclick="mostrarFormulario()">
                        <img src=" {{asset('imagenes/Barra-de-navegacion/icon-Informacion.svg')}}" alt="Informes" class="icono-informes">
                    </a>
                </li>


            </ul>

            {{-- Búsqueda --}}
            <form action="{{route('busqueda')}}" method="post" class="search-container">
                @csrf
                <input name="searchInput" type="text" placeholder="" class="search-input" required autocomplete="off">
                <button class="search-button" type="submit">
                    <img src="{{ asset(path: 'imagenes/Barra-de-navegacion/icon-Lupa.svg') }}" alt="Buscar" width="28" height="28">
                </button>
            </form>

        </div>
    </div>
</nav>
@if (config('veda.filtro_gris') == true && config('veda.mensaje_veda') != null)
    <div class="mensajeAviso">
        <strong style="font-size: 1.5rem;">{{ config('veda.mensaje_veda') }}</strong>
    </div>
@endif