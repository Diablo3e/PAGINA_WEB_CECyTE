const planteles = {
    plantel1: {
        nombre: "Plantel Cholula",
        imagenes: [
            "{{ asset('imagenes/Plantel_Cholula/CholulaPlantel.jpg') }}",
            "{{ asset('imagenes/Plantel_Cholula/CholulaPlantel (2).jpg') }}",
            "{{ asset('imagenes/Plantel_Cholula/CholulaPlantel (3).jpg') }}",
        ],
        direccion: "Av. Principal #123, Colonia Centro, Ciudad de México, C.P. 06000",
        directores: [
            {
                nombre: "Gisela Munive González",
                cargo: "Director Académico",
                foto: "{{ asset('imagenes/Plantel_Cholula/1262-GISELA MUNIVE GONZALEZ.jpg') }}",
            },
            {
                nombre: "Mónica Ruiz Cuéllar",
                cargo: "Coordinadora de Laboratorios",
                foto: "{{ asset('imagenes/Plantel_Cholula/1280-MONICA RUIZ CUELLAR.jpg') }}",
            },
            {
                nombre: "María del Rocío Hernández García",
                cargo: "Directora Administrativa",
                foto: "{{ asset('imagenes/Plantel_Cholula/4105-MARIA DEL ROCIO HERNANDEZ GARCIA.jpg') }}",
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

function mostrarPlantel(idPlantel) {
    const plantel = planteles[idPlantel];
    document.getElementById('plantel-nombre').textContent = plantel.nombre;

    // Generar indicadores antes de insertar imágenes
    generarIndicadores(plantel.imagenes.length);

    // Carrusel de imágenes
    const carouselInner = document.getElementById('carousel-inner');
    carouselInner.innerHTML = plantel.imagenes.map((imagen, index) => `
        <div class="carousel-item ${index === 0 ? 'active' : ''}">
            <img src="${imagen}" class="d-block w-100" alt="Imagen ${index + 1}">
        </div>
    `).join('');

    // Dirección
    document.getElementById('plantel-direccion').textContent = plantel.direccion;

    // Directores
    const directoresContainer = document.getElementById('directores-container');
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

    // Tabla de carreras (reemplaza el mapa de carreras)
    const cuerpoTablaCarreras = document.getElementById('cuerpo-tabla-carreras');
    cuerpoTablaCarreras.innerHTML = plantel.carreras.map(carrera => `
        <tr>
            <td>${carrera.nombre}</td>
            <td>${carrera.duracion}</td>
            <td>${carrera.modalidad}</td>
        </tr>
    `).join('');

    // Cambiar vista
    document.getElementById('planteles-list').style.display = 'none';
    document.getElementById('plantel-detail').style.display = 'block';
    window.scrollTo(0, 0);

    // Inicializar carrusel
    new bootstrap.Carousel(document.getElementById('plantel-carousel'));
}

function volverALista() {
    document.getElementById('planteles-list').style.display = 'block';
    document.getElementById('plantel-detail').style.display = 'none';
    window.scrollTo(0, 0);
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
