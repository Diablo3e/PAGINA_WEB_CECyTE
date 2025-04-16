<!-- resources/views/components/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container-fluid">
        <!-- Logo o nombre -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('imagenes/LOGO.png') }}" alt="CECyTE Logo" width="50" height="50">
        </a>
        <!-- Botón de hamburguesa para pantallas pequeñas -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menú de navegación -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Admision') }}">Admisión</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Oferta Educativa
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('Carreras') }}">Programación</a></li>
                        <li><a class="dropdown-item" href="{{ route('Fuentes_Alternas') }}">Fuentes Alternas de Energia</a></li>
                        <li><a class="dropdown-item" href="{{ route('Mantenemiento_Automotriz') }}">Mantenemiento Automotriz</a></li>
                        <li><a class="dropdown-item" href="{{ route('Mantenimento_Industrial') }}">Mantenemiento Industrial</a></li>
                        <li><a class="dropdown-item" href="{{ route('Electronica') }}">Electronica</a></li>
                        <li><a class="dropdown-item" href="{{ route('Mantenimientomotoresdecombustion') }}">Mantenimiento de Motores de Combustion</a></li>
                        <li><a class="dropdown-item" href="#">Proceso de Gestión</a></li>
                        
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Vinculación</a>
                </li>
                <li class="nav-item">
                <li><a class="nav-link" href="{{ route('linea_tiempo') }}">Nosotros</a></li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('convenios') }}">Convenios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Planteles') }}">Planteles</a>
                </li>

            </ul>

            <!-- Barra de búsqueda -->
            <div class="d-flex ms-auto">
                <button class="btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#search-bar" aria-expanded="false" aria-controls="search-bar" title="Buscar">
                    <img src="{{asset('imagenes/lupa-icon.png') }}" alt="Buscar" width="30" height="30">
                </button>
                <div class="collapse" id="search-bar">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Ir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
