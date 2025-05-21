// Función para configurar el carrusel
function setupCarousel(images, carouselId, indicatorsClass) {
    const carouselInner = document.querySelector(`${carouselId} .carousel-inner`);
    const indicators = document.querySelector(indicatorsClass);

    carouselInner.innerHTML = '';
    indicators.innerHTML = '';

    images.forEach((img, index) => {
        const item = document.createElement('div');
        item.className = `carousel-item ${index === 0 ? 'active' : ''}`;
        item.innerHTML = `<img src="${img}" class="d-block w-100" alt="Imagen ${index + 1}">`;
        carouselInner.appendChild(item);

        const indicator = document.createElement('button');
        indicator.type = 'button';
        indicator.dataset.bsTarget = carouselId;
        indicator.dataset.bsSlideTo = index;
        indicator.className = index === 0 ? 'active' : '';
        indicator.setAttribute('aria-label', `Slide ${index + 1}`);
        indicators.appendChild(indicator);
    });

    new bootstrap.Carousel(document.querySelector(carouselId));
}

// Función para actualizar la información de contacto
function updateContactInfo(direccion) {
    document.getElementById('plantel-direccion').innerHTML = `
        ${direccion.calle || ''}, ${direccion.colonia || ''}<br>
        ${direccion.municipio}, ${direccion.estado}<br>
        C.P. ${direccion.cp || 'N/A'}
    `;
    document.getElementById('plantel-telefono').textContent = direccion.telefono || 'No disponible';
    document.getElementById('plantel-email').textContent = direccion.email || 'No disponible';
    document.getElementById('plantel-horario').textContent = direccion.horario || 'No disponible';
}

// Función para renderizar los directores
function renderDirectores(directores) {
    const container = document.getElementById('directores-container');
    container.innerHTML = directores.map(d => `
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    ${d.foto ? `<img src="${d.foto}" class="rounded-circle mb-3" width="100" height="100" alt="${d.nombre}">` : ''}
                    <h5 class="card-title">${d.nombre || 'Nombre no disponible'}</h5>
                    <p class="card-text text-muted">${d.cargo || ''}</p>
                </div>
            </div>
        </div>
    `).join('');
}

// Función para renderizar las carreras
function renderCarreras(carreras) {
    const tbody = document.getElementById('cuerpo-tabla-carreras');
    tbody.innerHTML = carreras.map(c => `
        <tr>
            <td>${c.nombre}</td>
            <td>${c.duracion}</td>
            <td>${c.modalidad}</td>
        </tr>
    `).join('');
}

// Función para configurar el mapa
function setupMap(lat, lon, containerId, linkId) {
    if (!lat || !lon) return;

    const container = document.getElementById(containerId);
    container.innerHTML = `
        <iframe
            width="100%"
            height="400"
            src="https://www.openstreetmap.org/export/embed.html?bbox=${lon-0.01}%2C${lat-0.01}%2C${lon+0.01}%2C${lat+0.01}&amp;layer=mapnik&amp;marker=${lat},${lon}"
            style="border: 1px solid #ccc; border-radius: 8px;"
        ></iframe>
        <small>
            <a href="https://www.openstreetmap.org/?mlat=${lat}&amp;mlon=${lon}#map=15/${lat}/${lon}"
               target="_blank"
               id="${linkId}"
            >
                Ver mapa más grande
            </a>
        </small>
    `;
}

// Funciones para la sección de alumnos
function cargarAvisos(plantelId) {
    const avisos = datosAlumnos[plantelId]?.avisos || [];
    const listaAvisos = document.getElementById('lista-avisos');
    const sinAvisos = document.getElementById('sin-avisos');

    listaAvisos.innerHTML = '';
    sinAvisos.style.display = avisos.length ? 'none' : 'block';

    avisos.forEach(aviso => {
        const elemento = document.createElement('a');
        elemento.className = `list-group-item list-group-item-action ${aviso.importante ? 'list-group-item-warning' : ''}`;
        elemento.innerHTML = `
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">${aviso.titulo}</h5>
                <small>${aviso.fecha}</small>
            </div>
            <p class="mb-1">${aviso.contenido}</p>
        `;
        listaAvisos.appendChild(elemento);
    });
}

function cargarEventos(plantelId) {
    const eventos = datosAlumnos[plantelId]?.eventos || [];
    const eventosContainer = document.getElementById('eventos-calendario');

    eventosContainer.innerHTML = eventos.length ? '' : `
        <div class="alert alert-info">
            No hay eventos programados
        </div>
    `;

    eventos.forEach(evento => {
        const elemento = document.createElement('div');
        elemento.className = 'list-group-item';
        elemento.innerHTML = `
            <h5>${evento.titulo}</h5>
            <p>${evento.descripcion}</p>
            <small>${evento.fecha}</small>
        `;
        eventosContainer.appendChild(elemento);
    });
}

function cargarGaleria(plantelId) {
    const galeriaData = datosAlumnos[plantelId]?.galeria;
    const galeriaInner = document.getElementById('galeria-inner');
    const galeriaIndicators = document.getElementById('galeria-indicators');

    galeriaInner.innerHTML = '';
    galeriaIndicators.innerHTML = '';

    if (!galeriaData?.imagenes?.length) {
        galeriaInner.innerHTML = `
            <div class="carousel-item active">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <p class="text-muted">No hay imágenes disponibles</p>
                </div>
            </div>
        `;
        return;
    }

    galeriaData.imagenes.forEach((imagen, index) => {
        const item = document.createElement('div');
        item.className = `carousel-item ${index === 0 ? 'active' : ''}`;
        item.innerHTML = `
            <img src="${imagen.url}" class="d-block w-100" alt="${imagen.descripcion}" style="height: 400px; object-fit: cover;">
            <div class="carousel-caption bg-dark bg-opacity-50">
                <p>${imagen.descripcion}</p>
            </div>
        `;
        galeriaInner.appendChild(item);

        const indicator = document.createElement('button');
        indicator.type = 'button';
        indicator.dataset.bsTarget = '#galeria-alumnos-carousel';
        indicator.dataset.bsSlideTo = index;
        indicator.className = index === 0 ? 'active' : '';
        indicator.setAttribute('aria-label', `Slide ${index + 1}`);
        galeriaIndicators.appendChild(indicator);
    });

    new bootstrap.Carousel(document.getElementById('galeria-alumnos-carousel'));
}

// Función principal para cargar el detalle del plantel
function cargarDetallePlantel() {
    // Obtener el ID del plantel de la URL
    const pathParts = window.location.pathname.split('/');
    const plantelId = pathParts[pathParts.length - 1];

    const plantel = planteles[plantelId];
    if (!plantel) {
        // Si no existe el plantel, redirigir a la lista
        window.location.href = '/planteles';
        return;
    }

    // Actualizar información básica
    const { nombre, tipo, imagenes, direccion, directores, carreras } = plantel;
    document.getElementById('plantel-nombre').textContent = nombre;
    document.getElementById('plantel-tipo-badge-detail').textContent = tipo === 'cecyte' ? 'CECyTE' : 'EMSaD';
    document.getElementById('plantel-tipo-badge-detail').className = tipo === 'cecyte' ? 'badge bg-primary' : 'badge bg-success';

    // Configurar componentes
    setupCarousel(imagenes, '#plantel-carousel', '.carousel-indicators');
    updateContactInfo(direccion);
    renderDirectores(directores);
    renderCarreras(carreras);
    setupMap(direccion.latitud, direccion.longitud, 'map-container', 'map-link');

    // Cargar sección de alumnos
    cargarAvisos(plantelId);
    cargarEventos(plantelId);
    cargarGaleria(plantelId);
}

// Función para inicializar la página de detalle
function initDetallePage() {
    cargarDetallePlantel();

    // Configurar el botón de volver
    document.querySelector('.volver-btn').addEventListener('click', () => {
        window.history.back();
    });

    // Inicializar tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl);
    });
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', initDetallePage);
