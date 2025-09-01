import { slugify } from "./slug.js";

// Función para cargar el encabezado del plantel
function cargarEncabezadoPlantel(plantel) {
    // Configurar título
    document.getElementById('plantel-nombre').textContent = "Plantel " + plantel.encabezado[0].nombre || 'PLANTEL CECyTE';

    // Configurar lema
    const lemaElement = document.getElementById('plantel-lema');
    if (plantel.lema) {
        lemaElement.textContent = plantel.lema;
    } else {
        lemaElement.style.display = 'none';
    }

    // Configurar descripción
    const descripcionElement = document.getElementById('plantel-descripcion');
    if (plantel.encabezado[0].descripcion) {
        descripcionElement.innerHTML = plantel.encabezado[0].descripcion;
    } else {
        descripcionElement.innerHTML = '<em>Información general no disponible</em>';
    }

    // Configurar badge de tipo
    const badgeElement = document.getElementById('plantel-tipo-badge');
    badgeElement.textContent = plantel.encabezado[0].tipo === 'cecyte' ? 'CECyTE' : 'EMSaD';
    badgeElement.className = `badge fs-6 ${plantel.encabezado[0].tipo === 'cecyte' ? 'bg-primary' : 'bg-success'}`;
}

function renderInstalaciones(imagenes) {

    const container = document.getElementById('instalaciones-content');
    container.innerHTML = "";
    if (!container) return;
    imagenes.forEach(imagenPath => {
        fetch(route('publicStorage.get', imagenPath))
            .then(imagen => {
                const img = imagen.url;
                container.innerHTML += `
                        <img class="img-fluid" src="${img}" alt="imagen instalaciones" >
                        `
            });
    });
}

function renderPersonal(plantel) {
    const container = document.getElementById('personal-content').querySelector('.card-flex');
    container.innerHTML = '';

    if (plantel.personal.length !== 0) {
        plantel.personal.forEach(persona => {
            fetch(route('publicStorage.get', persona.foto))
                .then(imagenPersonal => {
                    container.innerHTML += `
                    <div class="card no-hover" style="width: 20%; min-height: fit-content; padding-top: 5%; padding-bottom: 5%;">
                        <div class="card-body">
                            <img src="${imagenPersonal.url}" alt="encargado" style="border-radius: 50%; max-width: 70%;">
                            <h5 class="card-title">${persona.puesto}</h5>
                        </div>
                    </div>
                    `;
                })
                .catch(e => {
                    console.error('Error en obtener foto de personal: ' + e);
                })
        });
    } else {
        ocultarSeccion(container, ".section-card");
    }
}

function renderComunicados(plantel) {
    const container = document.getElementById('comunicados-content');
    container.innerHTML = '';

    if (plantel.comunicados.length !== 0) {
        plantel.comunicados.forEach(comunicado => {
            fetch(route('publicStorage.get', comunicado.pdf))
                .then(archivoPdf => {
                    container.innerHTML += `
                    <div class="card no-hover" style="min-width: 20%; min-height: fit-content">
                        <div class="card-body">
                            <h5 class="card-title">${comunicado.titulo}</h5>
                            <a href="${archivoPdf.url}" class="card-link" target="_blank">Ver comunicado</a>
                        </div>
                    </div>
                    `;
                })
                .catch(e => {
                    console.error('Error en obtener pdf: ' + e);
                })
        });
    } else {
        ocultarSeccion(container, ".section-card");
    }

}

// Función para configurar el carrusel de imágenes
//TODO: modificar esto para desaparecer si no hay nada
function setupCarousel(images, carouselId) {
    const carousel = document.getElementById(carouselId);
    const carouselInner = carousel.querySelector('.carousel-inner');
    const indicators = carousel.querySelector('.carousel-indicators');
    carouselInner.innerHTML = '';
    indicators.innerHTML = '';

    if (images.length !== 0) {
        images.forEach((img, index) => {
            const imgUrl = route('publicStorage.get', img);
            const item = document.createElement('div');
            item.className = `carousel-item ${index === 0 ? 'active' : ''}`;
            item.innerHTML = `
                <img src="${imgUrl}" class="carousel-img d-block w-100" alt="Imagen del plantel"
                     style="height: 400px; object-fit: cover;">
            `;
            carouselInner.appendChild(item);

            const indicator = document.createElement('button');
            indicator.type = 'button';
            indicator.dataset.bsTarget = carouselId;
            indicator.dataset.bsSlideTo = index;
            indicator.className = index === 0 ? 'active' : '';
            indicator.setAttribute('aria-label', `Slide ${index + 1}`);
            indicators.appendChild(indicator);
        });
    } else {
        ocultarSeccion(carousel, ".section-card");
    }
}

// Cargar carreras ofrecidas en el plantel
function renderCarreras(id) {
    const carrerasList = document.getElementById("carreras-list");
    fetch(route('planteles.carreras', id))
        .then(res => res.json())
        .then(data => {
            carrerasList.innerHTML = '';
            if (data.length !== 0) {
                data.forEach(carrera => {
                    let carreraLink = slugify(carrera.nombre);
                    carreraLink = window.location.origin + "/" + carreraLink;
                    carrerasList.innerHTML += `
                    <a href="${carreraLink}" style="text-decoration: none;">
                        <div class="card">
                            <div class="card-body">
                                ${carrera.nombre}
                            </div>
                        </div>
                    </a>
                    `;
                });
            } else {
                carrerasList.innerHTML += `
                    <div class="card">
                        <div class="card-body">
                            Bachillerato General
                        </div>
                    </div>
                `;
            }
        })
        .catch((e) => {
            console.error(e);
            carrerasList.innerHTML = '<p value="">Error al cargar carreras</p>';
        });
}

function renderVinculacion(plantel) {
    let hayContenido = false;
    //Ofertas Laborales
    const containerOfertasLab = document.getElementById('ofertaLaboral').querySelector('.card-flex');
    //Limpiar el HTML
    containerOfertasLab.innerHTML = '';
    //Randerizar informacion
    if (plantel.vinculacion.ofertasDeEmpleo.length !== 0) {
        plantel.vinculacion.ofertasDeEmpleo.forEach(oferta => {
            fetch(route('publicStorage.get', oferta.imagen))
                .then(imagen => {
                    containerOfertasLab.innerHTML +=
                        `
                    <div class="card no-hover" style="min-width: 20%; min-height: fit-content">
                        <div class="card-body">
                            <h5 class="card-title">${oferta.empleador}</h5>
                            <img class="img-fluid" src="${imagen.url}" style="max-height: 38vh;" alt="Poster oferta">
                        </div>
                    </div>
                    `;
                });
        });
        hayContenido = true;
    } else {
        ocultarSeccion(containerOfertasLab, ".accordion");
    }

    //Servicio social
    const containerServicio = document.getElementById('servicioSocial').querySelector('.card-flex');
    //Limpiar HTML
    containerServicio.innerHTML = '';
    //Randerizar informacion
    if (plantel.vinculacion.servicioSocial.length !== 0) {
        plantel.vinculacion.servicioSocial.forEach(opcion => {
            containerServicio.innerHTML += `
            <div class="card no-hover" style="max-width: 50%; min-height: fit-content">
                <div class="card-body">
                    <h5 class="card-title">${opcion.nombreInstitucion}</h5>
                    <p>${opcion.descripcion}</p>
                    <p><strong>Correo: </strong> ${opcion.correo}</p>
                    <p><strong>Telefono: </strong> ${opcion.telefono}</p>
                    <p><strong>Direección:</strong> ${opcion.direccion}</p>
                </div>
            </div>
            `;
        });
        hayContenido = true;
    } else {
        ocultarSeccion(containerServicio, ".accordion");
    }

    // Practicas profesionales
    const containerPracticas = document.getElementById('practicasProfesionales').querySelector('.card-flex');
    //Limpiar HTML
    containerPracticas.innerHTML = '';
    //Randerizar informacion
    if (plantel.vinculacion.practicasProfesionales.length !== 0) {
        plantel.vinculacion.practicasProfesionales.forEach(opcion => {
            containerPracticas.innerHTML += `
            <div class="card no-hover" style="max-width: 50%; min-height: fit-content">
                <div class="card-body">
                    <h5 class="card-title">${opcion.nombreInstitucion}</h5>
                    <p>${opcion.descripcion}</p>
                    <p><strong>Correo: </strong> ${opcion.correo}</p>
                    <p><strong>Telefono: </strong> ${opcion.telefono}</p>
                    <p><strong>Direección:</strong> ${opcion.direccion}</p>
                </div>
            </div>
            `;
        });
        hayContenido = true;
    } else {
        ocultarSeccion(containerPracticas, ".accordion");
    }

    // redes sociales
    const containerRedes = document.getElementById('redesSociales').querySelector('.card-flex');
    //Limpiar HTML
    containerRedes.innerHTML = '';
    //Randerizar informacion
    if (plantel.vinculacion.redesSociales.length !== 0) {
        plantel.vinculacion.redesSociales.forEach(red => {
            containerRedes.innerHTML += `
            <a href="${red.link}" style="text-decoration: none;" target="_blank">
               <div class="card" style="min-width: 10vw; min-height: fit-content">
                    <div class="card-body">
                        <h5 class="card-title">${red.nombre}</h5>
                    </div>
                </div>
            </a>
            `;
        });
        hayContenido = true;
    } else {
        ocultarSeccion(containerRedes, ".accordion");
    }

    // seguimiento de egresados
    const containerEgresados = document.getElementById('segEgresados').querySelector('.card-flex');
    //Limpiar HTML
    containerEgresados.innerHTML = '';
    //Randerizar informacion
    if (plantel.vinculacion.seguimientoEgresados.length !== 0) {
        plantel.vinculacion.seguimientoEgresados.forEach(egresado => {
            containerEgresados.innerHTML += `
               <div class="card no-hover" style="max-width: 33%; min-height: fit-content">
                    <div class="card-body">
                        <h5 class="card-title">${egresado.nombreEgresado}</h5>
                        <h6 class="card-subtitle">${egresado.carrera}</h6>
                        <p class="card-text">${egresado.testimonio}</p>
                    </div>
                </div> 
            `;
        });
        hayContenido = true;
    } else {
        ocultarSeccion(containerEgresados, ".accordion");
    }

    // sistema dual
    const containerSistDial = document.getElementById('sistDual').querySelector('.card-flex');
    //Limpiar HTML
    containerSistDial.innerHTML = '';
    //Randerizar informacion
    if (plantel.vinculacion.sistemaDual.length !== 0) {
        plantel.vinculacion.sistemaDual.forEach(banner => {
            fetch(route('publicStorage.get', banner))
                .then(banner => {
                    containerSistDial.innerHTML += `
                       <img src="${banner.url}" alt="Banner" style="width: 100%; margin-bottom: 1rem;">
                    `;
                });
        });
        hayContenido = true;
    } else {
        ocultarSeccion(containerSistDial, ".accordion");
    }

    if (!hayContenido) ocultarSeccion(document.getElementById("vinculacion-content"), ".section-card");
}

function renderExtEducativa(plantel) {

    const extensionContainer = document.getElementById('extension-content');
    //Limpiar HTML
    extensionContainer.innerHTML = '';

    if (plantel.extEducativa.length !== 0) {
        plantel.extEducativa.forEach(banner => {
            fetch(route('publicStorage.get', banner))
                .then(banner => {
                    extensionContainer.innerHTML += `
                        <img src="${banner.url}" alt="Banner" style="width: 100%; margin-bottom: 1rem;">
                    `;
                });
        });
    } else {
        ocultarSeccion(extensionContainer, ".section-card");
    }
}

function renderControlEscolar(plantel) {
    let hayContenido = false;

    // Avisos
    const containerAvisos = document.getElementById('avisos').querySelector('.card-flex');
    //Limpiar HTML
    containerAvisos.innerHTML = '';
    //Randerizar informacion
    if (plantel.controlEscolar.avisos.length !== 0) {
        plantel.controlEscolar.avisos.forEach(aviso => {
            containerAvisos.innerHTML += `
            <div class="card no-hover" style="max-width: 50%; min-height: fit-content">
                <div class="card-body">
                    <h5 class="card-title"><strong>Fecha: </strong> ${aviso.fecha}</h5>
                    <p class="card-text">${aviso.cuerpo}</p>
                </div>
            </div>
            `;
        });
        hayContenido = true;
    } else {
        ocultarSeccion(containerAvisos, ".accordion");
    }

    // Horarios
    const containerHorarios = document.getElementById('horarios').querySelector('.card-flex');
    //Limpiar HTML
    containerHorarios.innerHTML = '';
    //Randerizar informacion
    if (plantel.controlEscolar.horarios.length !== 0) {
        plantel.controlEscolar.horarios.forEach(horario => {
            fetch(route('publicStorage.get', horario.pdf))
                .then(horarioPdf => {
                    containerHorarios.innerHTML += `
                    <div class="card no-hover" style="min-width: 20%; min-height: fit-content">
                        <div class="card-body">
                            <h5 class="card-title">${horario.grupo}</h5>
                            <a href="${horarioPdf.url}" class="card-link" target="_blank">Ver horario</a>
                        </div>
                    </div>
                    `;
                });
        });
        hayContenido = true;
    } else {
        ocultarSeccion(containerHorarios, ".accordion");
    }

    if (!hayContenido) ocultarSeccion(document.getElementById("ctrl-escolar-content"), ".section-card");
}

function ocultarSeccion(container, claseSeccion) {
    const seccion = container.closest(claseSeccion);
    seccion.remove();
}

// Función principal para cargar el detalle del plantel
async function cargarDetallePlantel() {
    const pathParts = window.location.pathname.split('/');
    const plantelId = pathParts[pathParts.length - 1];
    const Id = parseInt(plantelId.replace('plantel', ''));
    const response = await fetch(route('plantelData.get', { plantelId: Id }), {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    });

    const plantel = await response.json();

    if (!plantel) {
        window.location.href = '/planteles';
        return;
    }

    // Configurar carrusel inicial
    setupCarousel(plantel.imagenes, 'plantel-carousel');

    // Cargar encabezado
    cargarEncabezadoPlantel(plantel);

    // Renderizar galeria instalaciones
    renderInstalaciones(plantel.instalaciones);

    // Randerizar personal
    renderPersonal(plantel);

    //Renderizar comunicados
    renderComunicados(plantel);

    //Renderizar carrusel de comunidad
    setupCarousel(plantel.comunidad, 'comunidad-carousel');

    //Cargar carreras / oferta educativa
    const numPlantel = plantelId.replace("plantel", "");
    renderCarreras(numPlantel);

    //Cargar apartados de vinculacion
    renderVinculacion(plantel);

    //Cargar banners de Ext. Educativa
    renderExtEducativa(plantel);

    //Cargar Control escolar
    renderControlEscolar(plantel);

    // Configurar "En construcción" si aplica
    if (plantel.enConstruccion) {
        document.getElementById('en-construccion').classList.remove('d-none');
    }
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('.plantel-header')) {
        cargarDetallePlantel();
    }
});

// Hacer los datos accesibles globalmente
window.planteles = planteles;
