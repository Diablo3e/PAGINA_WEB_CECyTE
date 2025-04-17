<div class="tabs">
    <div class="tab active" onclick="showTab('admin-gestion')">Administración y Gestión</div>
    <div class="tab" onclick="showTab('Tecnologia')">Programación y Tecnologías</div>
    <div class="tab" onclick="showTab('Industria')">Industria y Mantenimiento</div>
    <div class="tab" onclick="showTab('hoteleria')">Hotelería y Servicios</div>
    <div class="indicator" id="indicator"></div>
</div>


<div id="admin-gestion" class="content active">
    <div class="program">
        <img src="{{ asset('imagenes/Proceso_Gestion_Administrativa.jpg') }}" alt="Procesos de Gestión Administrativa" class="program-img">
        <h3>Procesos de Gestión Administrativa</h3>
        <button onclick="location.href='{{ route('Carreras') }}'">Ver más</button>
        </div>
    <div class="program">
        <img src="{{ asset('imagenes/Produccion_Industrial.jpg') }}" alt="Producción Industrial" class="program-img">
        <h3>Producción Industrial</h3>
        <button onclick="location.href='{{ route('Carreras') }}'">Ver más</button>
        </div>
    <div class="program">
        <img src="{{ asset('imagenes/Produccion_Industrial_de_Alimentos.jpg') }}" alt="Producción Industrial de Alimentos" class="program-img">
        <h3>Producción Industrial de Alimentos</h3>
        <button onclick="location.href='{{ route('Carreras') }}'">Ver más</button>
    </div>
</div>

<div id="Tecnologia" class="content">
    <div class="program">
        <img src="{{ asset('imagenes/Programacion.jpg') }}" alt="Programación" class="program-img">
        <h3>Programación</h3>
        <button onclick="location.href='{{ route('Carreras') }}'">Ver más</button>
    </div>
    <div class="program">
        <img src="{{ asset('imagenes/Electronica.jpg') }}" alt="Electronica" class="program-img">
        <h3>Electronica</h3>
        <button onclick="location.href='{{ route('Electronica') }}'">Ver más</button>
    </div>
    <div class="program">
        <img src="{{ asset('imagenes/Mecatronica.jpg') }}" alt="Técnico en Mecatrónica" class="program-img">
        <h3>Técnico en Mecatrónica</h3>
        <button onclick="location.href='{{ route('Carreras') }}'">Ver más</button>
    </div>
</div>

<div id="Industria" class="content">
    <div class="program">
        <img src="{{ asset('imagenes/gestion-produccion-industrial.jpg') }}" alt="Mantenimiento Automotriz" class="program-img">
        <h3>Mantenimiento Automotriz</h3>
        <button onclick="showDetails('mantenimiento-automotriz')">Ver más</button>
    </div>
    <div class="program">
        <img src="{{ asset('imagenes/gestion-produccion-industrial.jpg') }}" alt="Mantenimiento Industrial" class="program-img">
        <h3>Mantenimiento Industrial</h3>
        <button onclick="showDetails('programacion')">Ver más</button>
    </div>
    <div class="program">
        <img src="{{ asset('imagenes/gestion-produccion-industrial.jpg') }}" alt="Transformación de Plásticos" class="program-img">
        <h3>Transformación de Plásticos</h3>
        <button onclick="location.href='{{ route('Carreras') }}'">Ver más</button>
    </div>
</div>

<div id="hoteleria" class="content">
    <div class="program">
        <img src="{{ asset('imagenes/Servicio_hoteleria.jpg') }}" alt="Hotelería y Servicios" class="program-img">
        <h3>Servicios de Hotelería</h3>
        <button onclick="location.href='{{ route('Carreras') }}'">Ver más</button>
    </div>
</div>

<div id="details" class="content">
    <h2 id="details-title"></h2>
    <p id="details-description"></p>
    <button onclick="goBack()">Regresar</button>
</div>
