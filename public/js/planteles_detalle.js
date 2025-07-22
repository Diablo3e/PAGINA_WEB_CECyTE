const planteles = {
    plantel1: {
        tipo: "cecyte",
        nombre: "PLANTEL CECyTE CHOLULA",
        lema: "FORMACIÓN QUE TRANSFORMA",
        descripcion: "En CECyTE Cholula impulsamos el talento de nuestra comunidad estudiantil con educación de calidad, carreras técnicas innovadoras y un fuerte compromiso con el desarrollo personal y profesional. Aquí, cada estudiante construye su futuro con herramientas reales para el mundo actual. <strong>¡Sé parte de una generación que deja huella!</strong>",
        imagenes: [
            "/imagenes/Plantel_Cholula/CholulaPlantel.JPG",
            "/imagenes/Plantel_Cholula/CholulaTransformacionPlasticos (1).JPG",
            "/imagenes/Plantel_Cholula/CholulaLaboratorioComputo (1).JPG",
            "/imagenes/Plantel_Cholula/CholulaLaboratorioUsosMultiples (3).JPG",
        ],
        instalaciones: {
            descripcion: "En CECyTE Cholula contamos con infraestructura de vanguardia para educación tecnológica.",
            imagenes: [
                {
                    url: "/imagenes/Plantel_Cholula/placeholder.png",
                    titulo: "Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
                    area: "Ejemplo"
                },
                {
                    url: "/imagenes/Plantel_Cholula/placeholder.png",
                    titulo: "Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
                    area: "Ejemplo2"
                },
                // ... más imágenes específicas para Cholula
            ]
        },
        comunidad: {
            descripcion: "Nuestra comunidad educativa se compone de estudiantes, docentes y personal comprometido con la excelencia académica.",
            galeria: [
                {
                    url: "/imagenes/Plantel_Cholula/placeholder.png",
                    titulo: "Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
                    //NO SE USA O NO HAZ VISTO EN QUE SE USA
                    fecha: "2024-03-15"
                },
                // ... más imágenes de comunidad
            ],
            testimonios: [
                {
                    nombre: "María González",
                    cargo: "Estudiante de Electrónica",
                    texto: "El ambiente en el plantel es muy bueno para aprender y desarrollarse profesionalmente.",
                    foto: "/imagenes/Plantel_Cholula/Testimonio1.jpg"
                }
            ]
        },
        horarios: {
            semestre: "B",
            cicloEscolar: "2024-2025",
            grupos: {
                "TRAP 2A": "/archivos/horarios/TRAP_2A.pdf",
                "TRAP 2B": "/archivos/horarios/TRAP_2B.pdf",
                "TRAP 2C": "/archivos/horarios/TRAP_2C.pdf",
                "PROG 4A": "/archivos/horarios/PROG_4A.pdf",
                "PROG 4B": "/archivos/horarios/PROG_4B.pdf",
                "PROG 4C": "/archivos/horarios/PROG_4C.pdf"
            }
        },
    },
    plantel2: {
        tipo: "cecyte",
        nombre: "Plantel Chignahuapan",
        imagenes: [
            "/imagenes/Chignahuapan/chigna1.jpg",
            "/imagenes/Chignahuapan/Chigna6.jpg",
            "/imagenes/Chignahuapan/Chigna11.jpg",
            "/imagenes/Chignahuapan/Chigna14.jpg",
        ],
        direccion: {
            calle: "Privada de Manuel Avila Camacho",
            colonia: "Teoconchila",
            municipio: "Chignahuapan",
            estado: "Puebla",
            cp: "73300",
            telefono: "797 971 1991",
            email: "",
            horario: "Lunes a Viernes de 7:00 a 15:30 hrs",
            latitud: 19.852045858102084,
            longitud: -98.03431692189822
        },
    },
    plantel3: {
        tipo: "emsad",
        nombre: "Plantel EMsaD Ameluca",
        imagenes: [
            "/imagenes/EMSaD Ameluca/ENTRADA PRINCIPAL AMELUCA0 edit.jpg",
            "/imagenes/EMSaD Ameluca/aula4 ameluca.jpg",
            "/imagenes/EMSaD Ameluca/biblioteca ameluca edit.jpg",
        ],
        direccion: {
            calle: "16 de Septiembre 3",
            colonia: "Colonia Centro",
            municipio: "Ameluca",
            estado: "Puebla",
            cp: "73029",
            telefono: "55 5454 1559",
            email: "",
            horario: "Lunes a Viernes de 8:00 a 16:00 hrs",
            latitud: 20.563568214226102,
            longitud: -97.8328442900193
        },
    },
    plantel4: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Boca del Monte",
        imagenes: [
            "/imagenes/EMSaD Boca del monte/EMSaD Boca del Monte [Edificio].jpg",
            "/imagenes/EMSaD Boca del monte/EMSaD Boca del Monte [Lab.Comp.1].jpg",
            "/imagenes/EMSaD Boca del monte/EMSaD Boca del Monte [Lab.Usos Multiples.2].jpg",
        ],
        direccion: {
            calle: "",
            colonia: "",
            municipio: "Boca del monte",
            estado: "Puebla",
            cp: "75916",
            telefono: "236 111 7775",
            email: "cecytepuebla.edu.mx",
            horario: "Lunes a Viernes de 8:00 a 16:00 hrs",
            latitud: 18.420917808427905,
            longitud: -97.06980982370949
        },
    },
    plantel5: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Buena Vista",
        imagenes: [
            "/imagenes/EMSaD_BUENA_VISTA/FOTOS PLANTEL/20220907_092254.jpg",
            "/imagenes/EMSaD_BUENA_VISTA/FOTOS PLANTEL/20220907_092457.jpg",
            "/imagenes/EMSaD_BUENA_VISTA/FOTOS PLANTEL/20220907_092628.jpg",
        ],
        direccion: {
            calle: "Av. Principal #123",
            colonia: "Colonia Centro",
            municipio: "San Andrés Cholula",
            estado: "Puebla",
            cp: "72810",
            telefono: "238 249 2787",
            email: "emsadbuenavista@cecytepuebla.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 15:00 hrs",
            latitud:23.307801553331412,
            longitud: -103.36590377115472
        },
    },
    plantel6: {
        tipo: "emsad",
        nombre: "Plantel EMSaD La Pahua",
        imagenes: [
            "/imagenes/EMSaD LA PAHUA/FOTOS 365/Plantel_LaPahua.jpeg",
            "/imagenes/EMSaD LA PAHUA/FOTOS 365/Aulas_LAPahua.jpeg",
            "/imagenes/EMSaD LA PAHUA/FOTOS 365/AulaA_LaPahua.jpeg",
        ],
        direccion: {
            calle: "Av. 20 de Noviembre",
            colonia: "",
            municipio: "La pahua",
            estado: "Puebla",
            cp: "73008",
            telefono: "(222) 123 4567",
            email: "cecytepuebla.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 15:00 hrs",
            latitud:20.61139985261418,
            longitud: -97.85333130923871
        },
    },
    plantel7: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Mexcaltochintla",
        imagenes: [
            "/imagenes/EMSAD MEXCALTOCHINTLA/ENTRADA/ENTRADA (4).jpg",
            "/imagenes/EMSAD MEXCALTOCHINTLA/AULA 1/AULA 1 (2).jpg",
            "/imagenes/EMSAD MEXCALTOCHINTLA/LABORATORIO DE CÓMPUTO/LABORATORIO DE CÓMPUTO (2).jpg",
            "/imagenes/EMSAD MEXCALTOCHINTLA/LABORATORIO UM/LABORATORIO USOS M (1).jpg",
        ],
        direccion: {
            calle: "",
            colonia: "",
            municipio: "Mexcaltochintla",
            estado: "Puebla",
            cp: "75916",
            telefono: "(222) 123 4567",
            email: "contacto@cholula.cecyte.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 15:00 hrs",
            latitud:18.421244385262213,
            longitud:-97.04543036306796
        },
    },
    plantel8: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Naranjastitla",
        imagenes: [
            "/imagenes/EMSAD NARANJASTITLA/EMSaDNaranjastitla(Techumbre) 3.jpg",
            "/imagenes/EMSAD NARANJASTITLA/EMSaDNaranjastitlaLabCómputo4 edit.jpg",
            "/imagenes/EMSAD NARANJASTITLA/EMSADNARANJASTITLAPLANTEL 1.jpg",
        ],
        direccion: {
            calle: "",
            colonia: "Naranjastitla de victoria",
            municipio: "tlacotepec de porfitio diaz",
            estado: "Puebla",
            cp: "",
            telefono: "238 104 7266",
            email: "contacto@cholula.cecyte.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 15:00 hrs",
            latitud:18.35814870458713,
            longitud:-96.78387390354918
        },
    },
    plantel9: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Santa Elena",
        imagenes: [
            "/imagenes/EMSaD Santa Elena/Entrada a Centro_Santa Elena.jpg",
            "/imagenes/EMSaD Santa Elena/Salon de clases A_Santa Elena.jpg",
            "/imagenes/EMSaD Santa Elena/Lab_de_computo_Santa Elena.jpg",
        ],
        direccion: {
            calle: "Av. Principal #123",
            colonia: "Colonia Centro",
            municipio: "Tenepanigia",
            estado: "Puebla",
            cp: "73611",
            telefono: "233 103 9887",
            email: "contacto@cholula.cecyte.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 15:00 hrs",
            latitud:19.96964970272612,
            longitud:-97.77138690167436
        },
    },
    plantel10: {
        tipo: "cecyte",
        nombre: "Plantel Guadalupe Victoria",
        imagenes: [
            "/imagenes/Guadalupe Victoria/GuadalupeVictoria2.jpeg",
            "/imagenes/Guadalupe Victoria/GuadalupeVictoriacomedores.jpeg",
            "/imagenes/Guadalupe Victoria/GuadalupeVictorialaboratoriodeusosmultiples.jpeg",
            "/imagenes/Guadalupe Victoria/GuadalupeVictorialaboratoriodeusosmultiples2.jpeg",
        ],
        direccion: {
            calle: "Av. Principal #123",
            colonia: "Colonia Centro",
            municipio: "Guadalupe Victoria",
            estado: "Puebla",
            cp: "75045",
            telefono: "233 121 1402",
            email: "contacto@cholula.cecyte.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 15:00 hrs",
            latitud:19.301169465939225,
            longitud:-97.3658274035342
        },
    },
    plantel11: {
        tipo: "cecyte",
        nombre: "Plantel Huejotzingo",
        imagenes: [
            "/imagenes/Huejotzingo/ENTRADA.jpeg",
            "/imagenes/Huejotzingo/SALONES.jpeg",
            "/imagenes/Huejotzingo/WhatsApp Image 2024-08-08 at 1.50.15 PM (1).jpeg",
            "/imagenes/Huejotzingo/LABORATORIO DE COMPUTO.jpeg",
        ],
        direccion: {
            calle: "Blvd. Huejotzingo Aeropuerto 2152",
            colonia: "Cuarto Barrio",
            municipio: "Huejotzingo",
            estado: "Puebla",
            cp: "74160",
            telefono: "55 4742 2801",
            email: "contacto@cholula.cecyte.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 15:00 hrs",
            latitud:19.176172818543616,
            longitud:-98.38995186120725
        },
    },
    plantel12: {
        tipo: "cecyte",
        nombre: "Plantel Magdalena",
        imagenes: [
            "/imagenes/Magdalena/Plantel/Actual/IMG_20240807_090142141.jpg",
            "/imagenes/Magdalena/Plantel/Actual/IMG_20240807_091750126_HDR.jpg",
            "/imagenes/Magdalena/Plantel/Actual/IMG_20240807_092302127.jpg",
            "/imagenes/Magdalena/Plantel/Actual/IMG_20240807_112211794.jpg",
        ],
        direccion: {
            calle: "De la Juarez",
            colonia: "La Magdalena Tetela Morelos",
            municipio: "La Magdalena Tetela Morelos",
            estado: "Puebla",
            cp: "75118",
            telefono: "223 275 5989",
            email: "contacto@cholula.cecyte.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 15:00 hrs",
            latitud:19.04220230830243,
            longitud: -97.94638553237395
        },
    },
    plantel13: {
        tipo: "cecyte",
        nombre: "Plantel Tecamachalco",
        imagenes: [
            "/imagenes/TECAMACHALCO/EXPLANADA PRINCIPAL1 - PLANTEL TECAMACHALCO.jpg",
            "/imagenes/TECAMACHALCO/LABORATORIO DE USOS ULTIPLES_1 - PLANTEL TECAMACHALCO.jpg",
            "/imagenes/TECAMACHALCO/TALLER DE PRIN_2 - PLANTEL TECAMACHALCO.jpg",
            "/imagenes/TECAMACHALCO/TALLER DE PROGRAMACIÓN 2_3- PLANTEL TECAMACHALCO.jpg",
        ],
        direccion: {
            calle: "KM. Calle 8 Ote 1",
            colonia: "Centro",
            municipio: "San Mateo Tlaixpan",
            estado: "Puebla",
            cp: "72810",
            telefono: "249 422 2637",
            email: "contacto@cholula.cecyte.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 15:00 hrs",
            latitud:18.90222038597174,
            longitud:-97.74182151703407
        },
    },
    plantel14: {
        tipo: "cecyte",
        nombre: "Plantel Tehuitzingo",
        imagenes: [
            "/imagenes/TEHUITZINGO/Entrada_Pricipal_Plantel.png",
            "/imagenes/TEHUITZINGO/Explanada_Edficio1 y 2_Plantel_2.png",
            "/imagenes/TEHUITZINGO/Taller_MAIN.png",
            "/imagenes/TEHUITZINGO/Sala_Computo_B.png",
            "/imagenes/TEHUITZINGO/Laboratorio_Usos_Multiples_2.png",
        ],
        direccion: {
            calle: "Lazaro Cardenas Primera Seccion",
            colonia: "Colonia Centro",
            municipio: "Tehuitzingo",
            estado: "Puebla",
            cp: "74800",
            telefono: "275 432 6026",
            email: "contacto@cholula.cecyte.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 15:00 hrs",
            latitud:18.33681249536735,
            longitud:-98.2841749262863
        },
    },
    plantel15: {
        tipo: "cecyte",
        nombre: "Plantel Tlacotepec",
        imagenes: [
            "/imagenes/Tlacotepec/PLANTEL/IMG_1679.JPG",
            "/imagenes/Tlacotepec/PLANTEL/IMG_1681.JPG",
            "/imagenes/Tlacotepec/PLANTEL/IMG_1711.JPG",
        ],
        direccion: {
            calle: "Av. Hidalgo",
            colonia: "",
            municipio: "Tlacotepec",
            estado: "Morelos",
            cp: "62895",
            telefono: "(222) 123 4567",
            email: "contacto@cholula.cecyte.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 15:00 hrs",
            latitud:18.857791647835953,
            longitud:-98.76778905216558
        },
    },
    plantel16: {
        tipo: "emsad",
        nombre: "Plantel Tlaolantongo",
        imagenes: [
            "/imagenes/Tlaolantongo/EMSAD_Tlaolantongo.jpg",
            "/imagenes/Tlaolantongo/Aula1_Tlaolantongo.jpg",
            "/imagenes/Tlaolantongo/sala de computoTlaolantongo.jpg",
            "/imagenes/Tlaolantongo/Lab_Usos_Multiples.jpg",
        ],
        direccion: {
            calle: "Piv. Guadalupe Victoria",
            colonia: "Colonia Centro",
            municipio: "San Pedro Tlaolantongo",
            estado: "Puebla",
            cp: "73271",
            telefono: "(222) 123 4567",
            email: "contacto@cholula.cecyte.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 15:00 hrs",
            latitud:20.229396085707762,
            longitud:-97.80535457468302
        },
    },
    plantel17: {
        tipo: "cecyte",
        nombre: "Plantel Venustiano Carranza",
        imagenes: [
            "/imagenes/VENUSTIANO CARRANZA/WhatsApp Image 2024-08-20 at 08.07.30.jpeg",
            "/imagenes/VENUSTIANO CARRANZA/WhatsApp Image 2024-08-20 at 08.09.25 (1).jpeg",
            "/imagenes/VENUSTIANO CARRANZA/WhatsApp Image 2024-08-20 at 08.08.15.jpeg",
        ],
        direccion: {
            calle: "Calle Flores Magon",
            colonia: "Col. Las Granjas",
            municipio: "Venustiano Carranza",
            estado: "Puebla",
            cp: "73040",
            telefono: "746 881 0768",
            email: "contacto@cholula.cecyte.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 15:00 hrs",
            latitud:20.51117087012702,
            longitud:-97.66794403439089
        },
    },
    plantel18: {
        tipo: "cecyte",
        nombre: "Plantel Xicotepec",
        imagenes: [
            "/imagenes/XICOTEPEC/Plantel Xicotepec/Plantel Xicotepec2.jpg",
            "/imagenes/XICOTEPEC/Plantel Xicotepec/LaboratorioXicotepec.jpeg",
            "/imagenes/XICOTEPEC/Plantel Xicotepec/ComputoXicotepec1.jpeg",
            "/imagenes/XICOTEPEC/Plantel Xicotepec/TallerXicotepec1.jpeg",
        ],
        direccion: {
            calle: "",
            colonia: "",
            municipio: "Xicotepec de Juarez",
            estado: "Puebla",
            cp: "73080",
            telefono: "764 101 0038",
            email: "contacto@cholula.cecyte.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 15:00 hrs",
            latitud:20.248852231066234,
            longitud:-97.95657137653139
        },
    },

};

// Función para cargar el encabezado del plantel
function cargarEncabezadoPlantel(plantel) {
    // Configurar título
    document.getElementById('plantel-nombre').textContent = plantel.nombre || 'PLANTEL CECyTE';

    // Configurar lema
    const lemaElement = document.getElementById('plantel-lema');
    if (plantel.lema) {
        lemaElement.textContent = plantel.lema;
    } else {
        lemaElement.style.display = 'none';
    }

    // Configurar descripción
    const descripcionElement = document.getElementById('plantel-descripcion');
    if (plantel.descripcion) {
        descripcionElement.innerHTML = plantel.descripcion;
    } else {
        descripcionElement.innerHTML = '<em>Información general no disponible</em>';
    }

    // Configurar badge de tipo
    const badgeElement = document.getElementById('plantel-tipo-badge');
    badgeElement.textContent = plantel.tipo === 'cecyte' ? 'CECyTE' : 'EMSaD';
    badgeElement.className = `badge fs-6 ${plantel.tipo === 'cecyte' ? 'bg-primary' : 'bg-success'}`;
}

// Función para renderizar imágenes con efectos hover
function renderImageGallery(images, containerId, galleryType) {
    const container = document.getElementById(containerId);
    if (!container || !images || images.length === 0) {
        container.innerHTML = '<p class="no-images-message">No hay imágenes disponibles</p>';
        return;
    }

    let html = `<div class="${galleryType}-grid">`;

    images.forEach((img, index) => {
        const imgUrl = route('imagenes.get', img.url);
        html += `
            <div class="image-wrapper">
                <img src="${imgUrl}" alt="${img.titulo || 'Imagen ' + (index + 1)}">
                <div class="image-caption">${img.titulo || ''}</div>
            </div>
        `;
    });

    html += '</div>';
    container.innerHTML = html;
}
function renderInstalaciones(instalacionesData, plantelNombre) {
    const container = document.getElementById('instalaciones-content');
    if (!container) return;

    // Plantilla base con manejo de datos faltantes
    let html = `
        <div class="instalaciones-header">
            <h2>NUESTRAS INSTALACIONES EN ${plantelNombre.toUpperCase()}</h2>
            <p>${instalacionesData.descripcion || 'Instalaciones del plantel'}</p>
        </div>
    `;

    // Lista de características
    if (instalacionesData.caracteristicas && instalacionesData.caracteristicas.length > 0) {
        instalacionesData.caracteristicas.forEach(caracteristica => {
            html += `<li>${caracteristica}</li>`;
        });
       }

    // Imágenes de la galería
    if (instalacionesData.imagenes && instalacionesData.imagenes.length > 0) {
        instalacionesData.imagenes.forEach(img => {
            const imgUrl = route ('imagenes.get', img.url);
            html += `
                <div class="imagen-instalacion" data-categoria="${img.area.toLowerCase()}">
                    <img src="${imgUrl}" alt="${img.titulo}">
                    <div class="info-imagen">
                        <p>${img.titulo}</p>
                        <span class="badge-categoria">${img.area}</span>
                    </div>
                </div>
            `;
        });
    } else {
        html += '<p class="mensaje-vacio">Cargando imágenes de las instalaciones...</p>';
    }

    html += `
            </div>
        </div>
    `;

    container.innerHTML = html;
}

// Función para configurar el carrusel de imágenes
function setupCarousel(images, carouselId, indicatorsClass) {
    const carouselInner = document.querySelector(`${carouselId} .carousel-inner`);
    const indicators = document.querySelector(indicatorsClass);

    carouselInner.innerHTML = '';
    indicators.innerHTML = '';

    images.forEach((img, index) => {
        const imgUrl = route('imagenes.get', img);
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

    if (images.length > 0) {
        new bootstrap.Carousel(document.querySelector(carouselId));
    }
}

// Función para renderizar los horarios
function renderHorarios(horariosData) {
    const horariosContainer = document.getElementById('horarios-container');
    if (!horariosContainer || !horariosData) return;

    const grupos = Object.entries(horariosData.grupos);
    const mitad = Math.ceil(grupos.length / 2);

    let html = `
        <p class="text-center mb-3">CICLO ESCOLAR ${horariosData.cicloEscolar}</p>
        <div class="table-responsive">
            <table class="table table-borderless text-center">
                <tbody>
                    <tr>
                        ${grupos.slice(0, mitad).map(([grupo, archivo]) => `
                            <td>
                                <a href="${archivo}"
                                   class="btn btn-horario"
                                   target="_blank"
                                   download>
                                    ${grupo}
                                </a>
                            </td>
                        `).join('')}
                    </tr>
                    ${mitad < grupos.length ? `
                    <tr>
                        ${grupos.slice(mitad).map(([grupo, archivo]) => `
                            <td>
                                <a href="${archivo}"
                                   class="btn btn-horario"
                                   target="_blank"
                                   download>
                                    ${grupo}
                                </a>
                            </td>
                        `).join('')}
                    </tr>` : ''}
                </tbody>
            </table>
        </div>
    `;

    horariosContainer.innerHTML = html;
}

// Función principal para cargar el detalle del plantel
function cargarDetallePlantel() {
    const pathParts = window.location.pathname.split('/');
    const plantelId = pathParts[pathParts.length - 1];
    const plantel = planteles[plantelId];

    if (!plantel) {
        window.location.href = '/planteles';
        return;
    }

    // Cargar encabezado
    cargarEncabezadoPlantel(plantel);

    // Configurar secciones
    setupCarousel(plantel.imagenes, '#plantel-carousel', '.carousel-indicators');
    renderHorarios(plantel.horarios);

    // Renderizar secciones de imágenes con efectos hover
    if (plantel.instalaciones) {
        renderInstalaciones(plantel.instalaciones, plantel.nombre);
    } else {
        document.getElementById('instalaciones-content').innerHTML = `
            <div class="instalaciones-header">
                <h2>NUESTRAS INSTALACIONES</h2>
                <p>Información sobre las instalaciones no disponible actualmente.</p>
            </div>
        `;
    }

    if (plantel.comunidad.galeria) {
        renderImageGallery(plantel.comunidad.galeria, 'comunidad-content', 'comunidad');
    } else {
        document.getElementById('comunidad-content').innerHTML = '<p class="no-images-message">No hay imágenes disponibles de la comunidad</p>';
    }

    // Configurar "En construcción" si aplica
    if (plantel.enConstruccion) {
        document.getElementById('en-construccion').classList.remove('d-none');
    }
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.plantel-header')) {
        cargarDetallePlantel();
    }

    // Inicializar componentes de Bootstrap (acordeon)
    [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).forEach(el => {
        new bootstrap.Tooltip(el);
    });
});

// Hacer los datos accesibles globalmente
window.planteles = planteles;
