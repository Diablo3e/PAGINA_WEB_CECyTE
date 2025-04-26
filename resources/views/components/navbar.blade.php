<nav class="navbar navbar-expand-lg navbar-cecyte"
    style="background: url('{{ asset('imagenes/Barra-Navegacion.jpg') }}') no-repeat center center; background-size: cover;">
    <div class="container-fluid px-4">

        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('imagenes/LOGO.png') }}" alt="CECyTE Logo">
        </a>
        <!-- Hamburguesa -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menú -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Inicio</a></li>

                <li class="nav-item"><a class="nav-link" href="{{ route('linea_tiempo') }}">Nosotros</a></li>

                <li class="nav-item"><a class="nav-link" href="{{ route('Admision') }}">Admisión</a></li>

                {{-- Dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ofertaDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Oferta Educativa
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="ofertaDropdown">
                        <li><a class="dropdown-item" href="{{ route('Carreras') }}">Programación</a></li>
                        <li><a class="dropdown-item" href="{{ route('Fuentes_Alternas') }}">Fuentes Alternas de
                                Energía</a></li>
                        <li><a class="dropdown-item" href="{{ route('Mantenemiento_Automotriz') }}">Mantenimiento
                                Automotriz</a></li>
                        <li><a class="dropdown-item" href="{{ route('Mantenimento_Industrial') }}">Mantenimiento
                                Industrial</a></li>
                        <li><a class="dropdown-item" href="{{ route('Electronica') }}">Electrónica</a></li>
                        <li><a class="dropdown-item" href="{{ route('Mantenimientomotoresdecombustion') }}">Motores de
                                Combustión</a></li>
                        <li><a class="dropdown-item" href="{{ route('Proceso-de-Gestión') }}">Proceso de Gestión</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('Hoteleria') }}">Hotelería</a></li>
                        <li><a class="dropdown-item" href="#">Semiconductores</a></li>
                        <li><a class="dropdown-item" href="#">Inteligencia Artificial</a></li>
                        <li><a class="dropdown-item" href="#">Electromovilidad</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ofertaDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Vinculación
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="ofertaDropdown">
                        <li><a class="dropdown-item" href="{{ route('convenios') }}">Convenios</a></li>
                        <li><a class="dropdown-item" href="{{ route('bolsa') }}">Bolsa de Trabajo</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ route('Planteles') }}">Planteles</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('convenios') }}">Convenios</a></li>
                <li class="nav-item">
                    <a class="nav-link informes" href="#" onclick="mostrarFormulario()">Informes</a>
                </li>

            </ul>

            {{-- Búsqueda --}}
            <div class="search-container">
                <input type="text" placeholder="Buscar..." class="search-input">
                <button class="search-button">
                    <img src="{{ asset(path: 'imagenes/LUPA-BARRA.svg') }}" alt="Buscar" width="28" height="28">

                </button>
            </div>

        </div>
    </div>
</nav>