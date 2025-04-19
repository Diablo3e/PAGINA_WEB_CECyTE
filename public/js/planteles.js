const planteles = {
    plantel1: {
        tipo: "cecyte",
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
        tipo: "cecyte",
        nombre: "Plantel Chignahuapan",
        imagenes: [
            "/imagenes/Chignahuapan/Chigna13.jpg",
            "/imagenes/Chignahuapan/Chigna9.jpg",
            "/imagenes/Chignahuapan/PANO_1.jpg",
        ],
        direccion: "Calle Norte #456, Colonia Industrial, Ciudad de México, C.P. 07800",
        directores: [
            {
                nombre: "María Flora Castillo Vega",
                cargo: "Control Escolar",
                foto: "/imagenes/Chignahuapan/Maria_Flora.jpg",
            }
        ],
        carreras: [
            { nombre: "Medicina", duracion: "6 años", modalidad: "Presencial" },
            { nombre: "Enfermería", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Psicología", duracion: "4 años", modalidad: "Mixta" }
        ]
    },
    plantel3: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Ameluca",
        imagenes: [
            "/imagenes/EMSaD Ameluca/ENTRADA PRINCIPAL AMELUCA0.jpg",
            "/imagenes/EMSaD Ameluca/entrada2 ameluca.jpg",
        ],
        direccion: "Calzada del Sur #789, Colonia Jardines, Ciudad de México, C.P. 14000",
        directores: [
            {
                nombre: "",
                cargo: "Responsable del Centro",
                foto: "/imagenes/EMSaD Ameluca/Responsable.jpg",
            },
            {
                nombre: "",
                cargo: "Auxiliar del Responsable",
                foto: "/imagenes/EMSaD Ameluca/Auxiliar.jpg",
            },
        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
    plantel4: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Boca del Monte",
        imagenes: [
            "/imagenes/EMSaD Boca del monte/EMSaD Boca del Monte [_Edificio_].jpg",
            "/imagenes/EMSaD Boca del monte/EMSaD Boca del Monte [Edificio].jpg",
            "/imagenes/EMSaD Boca del monte/EMSaD Boca del Monte [Edificio_].jpg",
        ],
        direccion: "Calzada del Sur #789, Colonia Jardines, Ciudad de México, C.P. 14000",
        directores: [
            {
                nombre: "Edith Rólon Villa",
                cargo: "Responsable del Centro",
                foto: "/imagenes/EMSaD Boca del monte/Personal Administrativo/Responsable.jpg",
            },
            {
                nombre: "Andres Gil Gonzalez",
                cargo: "Auxiliar del Responsable",
                foto: "/imagenes/EMSaD Boca del monte/Personal Administrativo/Auxiliar.jpg",
            },
            {
                nombre: "Rosalino Atilano Pantelon",
                cargo: "Oficial de Servicio",
                foto: "/imagenes/EMSaD Boca del monte/Personal Administrativo/Oficial de Servicio.jpg",
            },
            {
                nombre: "Emma Marcela Gonzalez Castro",
                cargo: "Orientadora Educativa",
                foto: "/imagenes/EMSaD Boca del monte/Personal Administrativo/Orientadora Educativa.jpg",
            },
        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
    plantel5: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Buena Vista",
        imagenes: [
            "/imagenes/EMSaD_BUENA_VISTA/FOTOS PLANTEL/20220907_092254.jpg",
            "/imagenes/EMSaD_BUENA_VISTA/FOTOS PLANTEL/20220907_092457.jpg",
            "/imagenes/EMSaD_BUENA_VISTA/FOTOS PLANTEL/20220907_092628.jpg",
        ],
        direccion: "Calzada del Sur #789, Colonia Jardines, Ciudad de México, C.P. 14000",
        directores: [
            {
                nombre: "Adonis Carrera Martinez",
                cargo: "Responsable del Centro",
                foto: "/imagenes/EMSaD_BUENA_VISTA/PERSONAL_ADMINISTRATIVO/RESPONSABLE_del_centro.jpeg",
            },
            {
                nombre: "Citlali Dayana Sosa Durand",
                cargo: "Secretaria de Director",
                foto: "/imagenes/EMSaD_BUENA_VISTA/PERSONAL_ADMINISTRATIVO/SECRETARIA_DE_DIRECTOR.jpeg",
            },
            {
                nombre: "Atenas Carrera Martinez",
                cargo: "Control Escolar",
                foto: "/imagenes/EMSaD_BUENA_VISTA/PERSONAL_ADMINISTRATIVO/CONTROL_ESCOLAR.jpeg",
            },
        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
    plantel6: {
        tipo: "emsad",
        nombre: "Plantel EMSaD La Pahua",
        imagenes: [
            "/imagenes/EMSaD LA PAHUA/FOTOS 365/Plantel_LaPahua.jpeg",
           "/imagenes/EMSaD LA PAHUA/FOTOS 365/Aulas_LAPahua.jpeg",
            "/imagenes/EMSaD LA PAHUA/FOTOS 365/AulaA_LaPahua.jpeg",
        ],
        direccion: "Calzada del Sur #789, Colonia Jardines, Ciudad de México, C.P. 14000",
        directores: [
            {
                nombre: "Ana Aurelia Vargas Aparicio",
                cargo: "",
                foto: "/imagenes/EMSaD LA PAHUA/PERSONAL ADMINISTRATIVO/Ana Aurelia Vargas Aparicio.jpg",
            },
            {
                nombre: "Apolinas Geronimo Pérez",
                cargo: "",
                foto: "/imagenes/EMSaD LA PAHUA/PERSONAL ADMINISTRATIVO/Apolinar Geronimo Pérez.jpg",
            },
            {
                nombre: "Fidencia Tolentino Peralta",
                cargo: "",
                foto: "/imagenes/EMSaD LA PAHUA/PERSONAL ADMINISTRATIVO/Fidencia Tolentino Peralta.jpg",
            },
        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
    plantel7: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Mexcaltochintla",
        imagenes: [
            "/imagenes/EMSaD MEXCALTOCHINTLA/ENTRADA/ENTRADA (3).jpg",
            "/imagenes/EMSaD MEXCALTOCHINTLA/ENTRADA/ENTRADA (4).jpg",
            "/imagenes/EMSaD MEXCALTOCHINTLA/ENTRADA/ENTRADA (5).jpg",
        ],
        direccion: "Calzada del Sur #789, Colonia Jardines, Ciudad de México, C.P. 14000",
        directores: [
            {
                nombre: "",
                cargo: "Auxiliar del Responsable",
                foto:  "/imagenes/EMSaD MEXCALTOCHINTLA/FotoDel personal/5514 Auxiliardel Responsable.jpg",
            },
            {
                nombre: "",
                cargo: "Responsable del Centro",
                foto: "/imagenes/EMSaD MEXCALTOCHINTLA/FotoDel personal/7037 Responsable de centro.jpg",
            },

        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
    plantel8: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Naranjastitla",
        imagenes: [
            "/imagenes/EMSaD NARANJASTITLA/EMSaDNaranjastitla(Techumbre) 1.jpg",
            "/imagenes/EMSaD NARANJASTITLA/EMSaDNaranjastitla(Techumbre) 2.jpg",
            "/imagenes/EMSaD NARANJASTITLA/EMSaDNaranjastitla(Techumbre) 3.jpg",
            "/imagenes/EMSaD NARANJASTITLA/EMSADNARANJASTITLAPLANTEL2.MP4",
        ],
        direccion: "Calzada del Sur #789, Colonia Jardines, Ciudad de México, C.P. 14000",
        directores: [
            {
                nombre: "Malleli Cardoso Castro",
                cargo: "Directora del Plantel",
                foto:  "/imagenes/EMSaD NARANJASTITLA/FotoS DE PERSONAL/Direc. Malleli Cardoso Castro.jpg",
            },
            {
                nombre: "Emeterio Montalvo Montavo",
                cargo: "Auxiliar del Responsable",
                foto: "/imagenes/EMSaD NARANJASTITLA/FotoS DE PERSONAL/Admin. Emeterio Montalvo Montavo.jpg",
            },

        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
    plantel9: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Santa Elena",
        imagenes: [
            "/imagenes/EMSaD Santa Elena/Entrada a Centro_Santa Elena.jpg",
            "/imagenes/EMSaD Santa Elena/Espacio de usos multiples_Santa elena.jpg",
            "/imagenes/EMSaD Santa Elena/Salon de clases A_Santa Elena.jpg",
        ],
        direccion: "Calzada del Sur #789, Colonia Jardines, Ciudad de México, C.P. 14000",
        directores: [
            {
                nombre: "",
                cargo: "Director del Plantel",
                foto:  "/imagenes/EMSaD Santa Elena/Responsable del centro_Santa Elena.PNG",
            },

        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
    plantel10: {
        tipo: "cecyte",
        nombre: "Plantel Guadalupe Victoria",
        imagenes: [
            "/imagenes/Guadalupe Victoria/GuadalupeVictori1.jpeg",
           "/imagenes/Guadalupe Victoria/GuadalupeVictoria2.jpeg",
            "/imagenes/Guadalupe Victoria/GuadalupeVictoria3.jpeg",
        ],
        direccion: "Calzada del Sur #789, Colonia Jardines, Ciudad de México, C.P. 14000",
        directores: [
            {
                nombre: "israel Ortiz Morales",
                cargo: "Director del Plantel",
                foto:  "/imagenes/Guadalupe Victoria/directivos/3141 Israel Ortiz Morales.jpg",
            },
            {
                nombre: "María Concepción Meneses Castro",
                cargo: "Directora del Plantel",
                foto:  "/imagenes/Guadalupe Victoria/directivos/3154 Maria Concepcion Meneses Castro.jpg",
            },

        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
    plantel11: {
        tipo: "cecyte",
        nombre: "Plantel Guadalupe Victoria",
        imagenes: [
            "/imagenes/Huejotzingo/DSC01542.jpg",
            "/imagenes/Huejotzingo/ENTRADA.jpeg",
            "/imagenes/Huejotzingo/ENTRADA1.jpeg",,
        ],
        direccion: "Calzada del Sur #789, Colonia Jardines, Ciudad de México, C.P. 14000",
        directores: [
            {
                nombre: "Sonia Abigail Espinoza Robles",
                cargo: "Directora del Plantel",
                foto:  "/imagenes/Huejotzingo/1000-Sonia Abigail Espinoza Robles.jpg",
            },
            {
                nombre: "Jonathan Luis Barrón Bracho",
                cargo: "Directora del Plantel",
                foto:  "/imagenes/Huejotzingo/1193-Jonathan Luis Barrón Bracho.JPG",
            },
            {
                nombre: "Magaly Amaro Amaro",
                cargo: "Directora del Plantel",
                foto:  "/imagenes/Huejotzingo/1551-Magaly Amaro Amaro.jpg",
            },

        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
};

// Función para generar indicadores del carrusel
function generarIndicadores(cantidad) {
    const indicatorsContainer = document.querySelector('.carousel-indicators');
    if (!indicatorsContainer) {
        console.error('No se encontró el contenedor de indicadores del carrusel');
        return;
    }

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

// Función para mostrar los detalles de un plantel
function mostrarPlantel(idPlantel) {
    const plantel = planteles[idPlantel];
    if (!plantel) {
        console.error('Plantel no encontrado:', idPlantel);
        return;
    }

    // Verificar que todos los elementos requeridos existan
    const elementosRequeridos = [
        'plantel-nombre',
        'plantel-direccion',
        'carousel-inner',
        'directores-container',
        'cuerpo-tabla-carreras',
        'planteles-list',
        'plantel-detail'
    ];

    for (const id of elementosRequeridos) {
        if (!document.getElementById(id)) {
            console.error(`Elemento con ID "${id}" no encontrado en el DOM`);
            return;
        }
    }

    // Actualizar elementos del DOM
    document.getElementById('plantel-nombre').textContent = plantel.nombre;
    document.getElementById('plantel-direccion').textContent = plantel.direccion;

    // Configurar carrusel
    generarIndicadores(plantel.imagenes.length);
    const carouselInner = document.getElementById('carousel-inner');
    carouselInner.innerHTML = plantel.imagenes.map((img, i) => `
        <div class="carousel-item ${i === 0 ? 'active' : ''}">
            <img src="${img}" class="d-block w-100" alt="Imagen ${i + 1}" onerror="this.src='/imagenes/placeholder.jpg'">
        </div>
    `).join('');

    // Configurar directores
    const directoresContainer = document.getElementById('directores-container');
    directoresContainer.innerHTML = plantel.directores.map(director => `
        <div class="col-md-4 mb-4">
            <div class="director-card h-100">
                <img src="${director.foto}" class="card-img-top" alt="${director.nombre}" onerror="this.src='/imagenes/placeholder.jpg'">
                <div class="card-body text-center">
                    <h5 class="card-title">${director.nombre || 'No disponible'}</h5>
                    ${director.cargo ? `<p class="card-text text-muted">${director.cargo}</p>` : ''}
                </div>
            </div>
        </div>
    `).join('');

    // Configurar carreras
    const cuerpoTabla = document.getElementById('cuerpo-tabla-carreras');
    cuerpoTabla.innerHTML = plantel.carreras.map(carrera => `
        <tr>
            <td>${carrera.nombre}</td>
            <td>${carrera.duracion}</td>
            <td>${carrera.modalidad}</td>
        </tr>
    `).join('');

    // Mostrar sección de detalle
    document.getElementById('planteles-list').style.display = 'none';
    document.getElementById('plantel-detail').style.display = 'block';
    window.scrollTo(0, 0);

    // Inicializar carrusel
    const carousel = new bootstrap.Carousel(document.getElementById('plantel-carousel'));
}

// Inicialización al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    // Asignar eventos a las tarjetas
    document.querySelectorAll('.plantel-card').forEach(card => {
        card.addEventListener('click', function() {
            const id = this.getAttribute('onclick').match(/'([^']+)'/)[1];
            mostrarPlantel(id);
        });
    });

    // Inicializar pestañas de Bootstrap
    const tabElms = document.querySelectorAll('button[data-bs-toggle="tab"]');
    tabElms.forEach(tabEl => {
        tabEl.addEventListener('shown.bs.tab', function(event) {
            // Puedes agregar lógica adicional al cambiar pestañas si es necesario
        });
    });
});
