const planteles = {
    plantel1: {
        nombre: "Plantel Cholula",
        imagenes: [
            "/imagenes/Plantel_Cholula/CholulaPlantel.jpg",
            "/imagenes/Plantel_Cholula/CholulaPlantel2.jpg",
            "/imagenes/Plantel_Cholula/CholulaPlantel3.jpg",
        ],
        direccion: "Av. Principal #123, Colonia Centro, Ciudad de México, C.P. 06000",
        directores: [
            {
                nombre: "Gisela Munive González",
                cargo: "Director Académico",
                foto: "/imagenes/Plantel_Cholula/1262-GISELA-MUNIVE-GONZALEZ.jpg",
            },
            {
                nombre: "Mónica Ruiz Cuéllar",
                cargo: "Coordinadora de Laboratorios",
                foto: "/imagenes/Plantel_Cholula/1280-MONICA-RUIZ-CUELLAR.jpg",
            },
            {
                nombre: "María del Rocío Hernández García",
                cargo: "Directora Administrativa",
                foto: "/imagenes/Plantel_Cholula/4105-MARIA-DEL-ROCIO-HERNANDEZ-GARCIA.jpg",
            }
        ],
        carreras: [
            { nombre: "Ingeniería en Sistemas Computacionales", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Administración de Empresas", duracion: "3 años", modalidad: "Presencial" },
            { nombre: "Diseño Gráfico", duracion: "3 años", modalidad: "Presencial" }
        ]
    },
    plantel2: {
        nombre: "Plantel Norte",
        imagenes: [
            "{{ asset('imagenes/Plantel_Norte/NortePlantel1.jpg') }}",
            "{{ asset('imagenes/Plantel_Norte/NortePlantel2.jpg') }}"
        ],
        direccion: "Calle Norte #456, Colonia Industrial, Ciudad de México, C.P. 07800",
        directores: [
            {
                nombre: "Mtro. Roberto Sánchez",
                cargo: "Director General",
                foto: "{{ asset('imagenes/directores/director1.jpg') }}"
            },
            {
                nombre: "Dra. Ana Martínez",
                cargo: "Directora de Investigación",
                foto: "{{ asset('imagenes/directores/directora1.jpg') }}"
            },
            {
                nombre: "Lic. Jorge Ramírez",
                cargo: "Director de Servicios Escolares",
                foto: "{{ asset('imagenes/directores/director2.jpg') }}"
            }
        ],
        carreras: [
            { nombre: "Medicina", duracion: "6 años", modalidad: "Presencial" },
            { nombre: "Enfermería", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Psicología", duracion: "4 años", modalidad: "Mixta" }
        ]
    },
    plantel3: {
        nombre: "Plantel Sur",
        imagenes: [
            "{{ asset('imagenes/Plantel_Sur/SurPlantel1.jpg') }}",
            "{{ asset('imagenes/Plantel_Sur/SurPlantel2.jpg') }}",
            "{{ asset('imagenes/Plantel_Sur/SurPlantel3.jpg') }}"
        ],
        direccion: "Calzada del Sur #789, Colonia Jardines, Ciudad de México, C.P. 14000",
        directores: [
            {
                nombre: "Dra. Laura Fernández",
                cargo: "Directora General",
                foto: "{{ asset('imagenes/directores/directora2.jpg') }}"
            },
            {
                nombre: "Ing. Pedro Gómez",
                cargo: "Director de Infraestructura",
                foto: "{{ asset('imagenes/directores/director3.jpg') }}"
            },
            {
                nombre: "Lic. Sofía Castro",
                cargo: "Directora de Planeación",
                foto: "{{ asset('imagenes/directores/directora3.jpg') }}"
            }
        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    }
};

// Generar indicadores dinámicamente
function generarIndicadores(cantidad) {
    const indicatorsContainer = document.querySelector('.carousel-indicators');
    indicatorsContainer.innerHTML = '';

    for (let i = 0; i < cantidad; i++) {
        const button = document.createElement('button');
        button.type = 'button';
        button.dataset.bsTarget = '#plantel-carousel';
        button.dataset.bsSlideTo = i;
        button.ariaLabel = `Slide ${i + 1}`;
        if (i === 0) {
            button.className = 'active';
            button.ariaCurrent = 'true';
        }
        indicatorsContainer.appendChild(button);
    }
}
// Generar indicadores dinámicamente
function generarIndicadores(cantidad) {
    const indicatorsContainer = document.querySelector('.carousel-indicators');
    if (indicatorsContainer) {
        indicatorsContainer.innerHTML = ''; // Limpia los indicadores existentes

        for (let i = 0; i < cantidad; i++) {
            const button = document.createElement('button');
            button.type = 'button';
            button.dataset.bsTarget = '#plantel-carousel';
            button.dataset.bsSlideTo = i;
            button.ariaLabel = `Slide ${i + 1}`;
            if (i === 0) {
                button.className = 'active';
                button.ariaCurrent = 'true';
            }
            indicatorsContainer.appendChild(button);
        }
    } else {
        console.error("El contenedor de indicadores no existe en el DOM.");
    }
}

function mostrarPlantel(idPlantel) {
    const plantel = planteles[idPlantel];
    if (!plantel) {
        console.error('El plantel especificado no existe.');
        return;
    }

    // Actualizar el nombre del plantel
    const nombreElement = document.getElementById('plantel-nombre');
    if (nombreElement) {
        nombreElement.textContent = plantel.nombre;
    } else {
        console.error("El elemento 'plantel-nombre' no está disponible.");
    }

    // Generar indicadores del carrusel
    generarIndicadores(plantel.imagenes.length);

    // Actualizar el carrusel de imágenes
    const carouselInner = document.getElementById('carousel-inner');
    if (carouselInner) {
        carouselInner.innerHTML = plantel.imagenes.map((imagen, index) => `
            <div class="carousel-item ${index === 0 ? 'active' : ''}">
                <img src="${imagen}" class="d-block w-100" alt="Imagen ${index + 1}">
            </div>
        `).join('');
    } else {
        console.error("El elemento 'carousel-inner' no existe en el DOM.");
    }

    // Actualizar la dirección
    const direccionElement = document.getElementById('plantel-direccion');
    if (direccionElement) {
        direccionElement.textContent = plantel.direccion;
    } else {
        console.error("El elemento 'plantel-direccion' no está disponible.");
    }

    // Actualizar directores
    const directoresContainer = document.getElementById('directores-container');
    if (directoresContainer) {
        directoresContainer.innerHTML = plantel.directores.map(director => `
            <div class="col-md-4 mb-4">
                <div class="director-card h-100">
                    <img src="${director.foto}" class="card-img-top" alt="${director.nombre}">
                    <div class="card-body text-center">
                        <h5 class="card-title">${director.nombre}</h5>
                        ${director.cargo ? `<p class="card-text text-muted">${director.cargo}</p>` : ''}
                    </div>
                </div>
            </div>
        `).join('');
    } else {
        console.error("El contenedor de directores no existe en el DOM.");
    }

    // Actualizar carreras
    const cuerpoTablaCarreras = document.getElementById('cuerpo-tabla-carreras');
    if (cuerpoTablaCarreras) {
        cuerpoTablaCarreras.innerHTML = plantel.carreras.map(carrera => `
            <tr>
                <td>${carrera.nombre}</td>
                <td>${carrera.duracion}</td>
                <td>${carrera.modalidad}</td>
            </tr>
        `).join('');
    } else {
        console.error("El cuerpo de la tabla de carreras no existe en el DOM.");
    }

    // Mostrar la sección de detalles del plantel y ocultar la lista
    const plantelesList = document.getElementById('planteles-list');
    const plantelDetail = document.getElementById('plantel-detail');
    if (plantelesList && plantelDetail) {
        plantelesList.style.display = 'none';
        plantelDetail.style.display = 'block';
        window.scrollTo(0, 0); // Desplaza la página al inicio
    }

    // Inicializar carrusel (siempre verifica que el carrusel exista antes)
    const plantelCarousel = document.getElementById('plantel-carousel');
    if (plantelCarousel) {
        new bootstrap.Carousel(plantelCarousel);
    } else {
        console.error("El carrusel del plantel no existe en el DOM.");
    }
}

function volverALista() {
    const plantelesList = document.getElementById('planteles-list');
    const plantelDetail = document.getElementById('plantel-detail');
    if (plantelesList && plantelDetail) {
        plantelesList.style.display = 'block';
        plantelDetail.style.display = 'none';
        window.scrollTo(0, 0);
    } else {
        console.error("No se pudo alternar entre la lista y el detalle del plantel.");
    }
}

document.addEventListener('DOMContentLoaded', function () {
    // Asignar eventos a las tarjetas de planteles
    document.querySelectorAll('.plantel-card').forEach(card => {
        card.addEventListener('click', function () {
            const id = this.getAttribute('onclick').match(/'([^']+)'/)[1];
            mostrarPlantel(id);
        });
    });
});

