

const planteles = {
    plantel1: {
        tipo: "cecyte",
        nombre: "Plantel Cholula",
        imagenes: [
            "/imagenes/Plantel_Cholula/CholulaPlantel.jpg",
            "/imagenes/Plantel_Cholula/CholulaPlantel2.jpg",
            "/imagenes/Plantel_Cholula/CholulaPlantel3.jpg",
        ],
        direccion: {
            calle: "Av. Guerrero 409",
            colonia: "Santa Barbara Almoloya",
            municipio: "San Andrés Cholula",
            estado: "Puebla",
            cp: "72750",
            telefono: "(222) 289 0441",
            email: "cholula.cecytepuebla.edu.mx",
            horario: "Lunes a Viernes de 7:00 a 16:30 hrs",
            latitud: 19.100685740077587,
            longitud: -98.30183163237301,

        },
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
        nombre: "Plantel EMsaD Ameluca",
        imagenes: [
            "/imagenes/EMSaD Ameluca/ENTRADA PRINCIPAL AMELUCA0.jpg",
            "/imagenes/EMSaD Ameluca/entrada2 ameluca.jpg",
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
        nombre: "Plantel Huejotzingo",
        imagenes: [
            "/imagenes/Huejotzingo/DSC01542.jpg",
            "/imagenes/Huejotzingo/ENTRADA.jpeg",
            "/imagenes/Huejotzingo/ENTRADA1.jpeg",,
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
    plantel12: {
        tipo: "cecyte",
        nombre: "Plantel Magdalena",
        imagenes: [
            "/imagenes/Magdalena/Plantel/Actual/plantel.jpg",
            "/imagenes/Magdalena/Plantel/Actual/plante1.jpg",
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
        directores: [
            {
                nombre: "Roberto Antonio Velzaquez Tlaseca",
                cargo: "Director del Plantel",
                foto:  "/imagenes/Magdalena/Directivos/01-Director.jpg",
            },
            {
                nombre: "Gerardo Ivan Lozano Santos",
                cargo: "Subdirector del Plantel",
                foto:  "/imagenes/Magdalena/Directivos/02-Subditector.jpg",
            },
            {
                nombre: "Maria del Carmen Ramirez Maldonado",
                cargo: "Administrativa del Plantel",
                foto:  "/imagenes/Magdalena/Directivos/05-Administrativa.jpg",
            },

        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
    plantel13: {
        tipo: "cecyte",
        nombre: "Plantel Tecamachalco",
        imagenes: [
            "/imagenes/Magdalena/Plantel/Actual/plantel.jpg",
            "/imagenes/Magdalena/Plantel/Actual/plante1.jpg",
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
        directores: [
            {
                nombre: "Roberto Antonio Velzaquez Tlaseca",
                cargo: "Director del Plantel",
                foto:  "/imagenes/Magdalena/Directivos/01-Director.jpg",
            },
            {
                nombre: "Gerardo Ivan Lozano Santos",
                cargo: "Subdirector del Plantel",
                foto:  "/imagenes/Magdalena/Directivos/02-Subditector.jpg",
            },
            {
                nombre: "Maria del Carmen Ramirez Maldonado",
                cargo: "Administrativa del Plantel",
                foto:  "/imagenes/Magdalena/Directivos/05-Administrativa.jpg",
            },

        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
    plantel14: {
        tipo: "cecyte",
        nombre: "Plantel Tehuitzingo",
        imagenes: [
            "/imagenes/TEHUITZINGO/Entrada_Pricipal_Plantel.png",
            "/imagenes/TEHUITZINGO/Explanada_Edficio1.png",
            "/imagenes/TEHUITZINGO/Explanada_Edficio2.png",
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
        directores: [
            {
                nombre: "",
                cargo: "Director del Plantel",
                foto:  "/imagenes/TEHUITZINGO/1_20240822_181844_0000.png",
            },
            {
                nombre: "",
                cargo: "",
                foto:  "/imagenes/TEHUITZINGO/2_20240822_181844_0001.png",
            },
            {
                nombre: "Ruben Flores Sanchez",
                cargo: "Subdirector del Plantel",
                foto:  "/imagenes/TEHUITZINGO/Sub director Ruben Flores Sanchez.png",
            },

        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
    plantel16: {
        tipo: "emsad",
        nombre: "Plantel Tlaolantongo",
        imagenes: [
            "/imagenes/Tlaolantongo/TLAOLANTONGO1.JPG",
            "/imagenes/Tlaolantongo/TLAOLANTONGO2.JPG",
            "/imagenes/Tlaolantongo/TLAOLANTONGO5.JPG",
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
        directores: [
            {
                nombre: "ING. Noe Dionicio Sanchez",
                cargo: "Director del Plantel",
                foto:  "/imagenes/Tlaolantongo/Responsable.jpg",
            },
            {
                nombre: "Juana Lopez Reyes",
                cargo: "Auxiliar del Plantel",
                foto:  "/imagenes/Tlaolantongo/Auxiliar.jpg",
            },

        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
    plantel15: {
        tipo: "cecyte",
        nombre: "Plantel Tlacotepec",
        imagenes: [
            "/imagenes/Tlacotepec/PLANTEL/IMG_1679.JPG",
            "/imagenes/Tlacotepec/PLANTEL/IMG_1699.JPG",
            "/imagenes/Tlacotepec/PLANTEL/IMG_1682.JPG",
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
        directores: [
            {
                nombre: "Gualberto Ramírez Arenas",
                cargo: "Director del Plantel",
                foto:  "/imagenes/Tlacotepec/PERSONAL DIRECTIVO/1155.JPG",
            },

        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
    plantel17: {
        tipo: "cecyte",
        nombre: "Plantel Venustiano Carranza",
        imagenes: [
            "/imagenes/VENUSTIANO CARRANZA/imag1.jpeg",
            "/imagenes/VENUSTIANO CARRANZA/imag2.jpeg",
            "/imagenes/VENUSTIANO CARRANZA/imag3.jpeg",
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
        directores: [
            {
                nombre: "Cesar Pala Ramirez",
                cargo: "Director del Plantel",
                foto:  "/imagenes/VENUSTIANO CARRANZA/Director.jpg",
            },
            {
                nombre: "Floralia Vite Hernandez",
                cargo: "Coordinadora Academica",
                foto:  "/imagenes/VENUSTIANO CARRANZA/Coordinadora Academica.jpg",
            },

        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },
    plantel18: {
        tipo: "cecyte",
        nombre: "Plantel Xicotepec",
        imagenes: [
            "/imagenes/XICOTEPEC/Plantel Xicotepec/Plantel Xicotepec1.jpg",
            "/imagenes/XICOTEPEC/Plantel Xicotepec/Plantel Xicotepec2.jpg",
            "/imagenes/XICOTEPEC/Plantel Xicotepec/Plantel Xicotepec5.jpg",
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
        directores: [
            {
                nombre: "Pedro Enrique Trejo",
                cargo: "Director del Plantel",
                foto: "/imagenes/XICOTEPEC/Directivos Xicotepec/Director.jpeg",

            },
            {
                nombre: "Antonio Marquez",
                cargo: "Control Escolar",
                foto:  "/imagenes/XICOTEPEC/Directivos Xicotepec/Ctrl_Escolar.jpeg",
            },
            {
                nombre: "Oscar Garcia",
                cargo: "Academico del Plantel",
                foto:  "/imagenes/XICOTEPEC/Directivos Xicotepec/Academico.jpeg",
            },


        ],
        carreras: [
            { nombre: "Derecho", duracion: "4 años", modalidad: "Presencial" },
            { nombre: "Arquitectura", duracion: "5 años", modalidad: "Presencial" },
            { nombre: "Contaduría Pública", duracion: "4 años", modalidad: "En línea" }
        ]
    },

};
// Datos de ejemplo para avisos y calendario (puedes reemplazarlos con datos reales)
const datosAlumnos = {
    plantel1: {
        avisos: [
            {
                titulo: "Inicio de Semestre",
                contenido: "El semestre inicia el 15 de agosto. Revisen sus horarios.",
                fecha: "10/08/2023",
                importante: true
            },
            {
                titulo: "Taller de Orientación",
                contenido: "Taller de orientación vocacional el próximo viernes a las 10:00 am en el auditorio.",
                fecha: "05/08/2023",
                importante: false
            }
        ],
        eventos: [
            {
                titulo: "Exámenes Parciales",
                fecha: "25/09/2023 - 29/09/2023",
                descripcion: "Primera ronda de exámenes parciales"
            },
            {
                titulo: "Día del Estudiante",
                fecha: "23/05/2023",
                descripcion: "Celebración del día del estudiante con actividades culturales"
            }
        ],
        galeria: {
            titulo: "Actividades Estudiantiles 2023",
            descripcion: "Momentos destacados de nuestros estudiantes",
            imagenes: [
                {
                    url: "/imagenes/Plantel_Cholula/CholulaLaboratorioComputo (1).JPG",
                    descripcion: "Feria de ciencias 2023"
                },
                {
                    url: "/imagenes/Plantel_Cholula/CholulaLaboratorioComputo (3).JPG",
                    descripcion: "Equipo de robótica ganador"
                },
                {
                    url: "/imagenes/galeria/plantel1/evento3.jpg",
                    descripcion: "Ceremonia de graduación"
                }
            ]
        }
    },
    plantel2: {
        avisos: [
            {
                titulo: "Cambio de Aula",
                contenido: "Las clases de Medicina se moverán al aula 205 a partir de mañana.",
                fecha: "12/08/2023",
                importante: true
            }
        ],
        eventos: [
            {
                titulo: "Simposio de Salud",
                fecha: "15/10/2023",
                descripcion: "Participación de expertos en el área médica"
            }
        ]
    },
    galeria: {
        titulo: "Actividades Estudiantiles 2023",
        descripcion: "Momentos destacados de nuestros estudiantes",
        imagenes: [
            {
                url: "/imagenes/galeria/plantel1/evento1.jpg",
                descripcion: "Feria de ciencias 2023"
            },
            {
                url: "/imagenes/galeria/plantel1/evento2.jpg",
                descripcion: "Equipo de robótica ganador"
            },
            {
                url: "/imagenes/galeria/plantel1/evento3.jpg",
                descripcion: "Ceremonia de graduación"
            }
        ]
    },
    plantel3: {
        avisos: [
            {
                titulo: "Cambio de Aula",
                contenido: "Las clases de Medicina se moverán al aula 205 a partir de mañana.",
                fecha: "12/08/2023",
                importante: true
            }
        ],
        eventos: [
            {
                titulo: "Simposio de Salud",
                fecha: "15/10/2023",
                descripcion: "Participación de expertos en el área médica"
            }
        ]
    },
    galeria: {
        titulo: "Actividades Estudiantiles 2023",
        descripcion: "Momentos destacados de nuestros estudiantes",
        imagenes: [
            {
                url: "/imagenes/galeria/plantel1/evento1.jpg",
                descripcion: "Feria de ciencias 2023"
            },
            {
                url: "/imagenes/galeria/plantel1/evento2.jpg",
                descripcion: "Equipo de robótica ganador"
            },
            {
                url: "/imagenes/galeria/plantel1/evento3.jpg",
                descripcion: "Ceremonia de graduación"
            }
        ]
    },
    plantel4: {
        avisos: [
            {
                titulo: "Cambio de Aula",
                contenido: "Las clases de Medicina se moverán al aula 205 a partir de mañana.",
                fecha: "12/08/2023",
                importante: true
            }
        ],
        eventos: [
            {
                titulo: "Simposio de Salud",
                fecha: "15/10/2023",
                descripcion: "Participación de expertos en el área médica"
            }
        ]
    },
    galeria: {
        titulo: "Actividades Estudiantiles 2023",
        descripcion: "Momentos destacados de nuestros estudiantes",
        imagenes: [
            {
                url: "/imagenes/galeria/plantel1/evento1.jpg",
                descripcion: "Feria de ciencias 2023"
            },
            {
                url: "/imagenes/galeria/plantel1/evento2.jpg",
                descripcion: "Equipo de robótica ganador"
            },
            {
                url: "/imagenes/galeria/plantel1/evento3.jpg",
                descripcion: "Ceremonia de graduación"
            }
        ]
    },
    plantel5: {
        avisos: [
            {
                titulo: "Cambio de Aula",
                contenido: "Las clases de Medicina se moverán al aula 205 a partir de mañana.",
                fecha: "12/08/2023",
                importante: true
            }
        ],
        eventos: [
            {
                titulo: "Simposio de Salud",
                fecha: "15/10/2023",
                descripcion: "Participación de expertos en el área médica"
            }
        ]
    },
    galeria: {
        titulo: "Actividades Estudiantiles 2023",
        descripcion: "Momentos destacados de nuestros estudiantes",
        imagenes: [
            {
                url: "/imagenes/galeria/plantel1/evento1.jpg",
                descripcion: "Feria de ciencias 2023"
            },
            {
                url: "/imagenes/galeria/plantel1/evento2.jpg",
                descripcion: "Equipo de robótica ganador"
            },
            {
                url: "/imagenes/galeria/plantel1/evento3.jpg",
                descripcion: "Ceremonia de graduación"
            }
        ]
    },
    plantel6: {
        avisos: [
            {
                titulo: "Cambio de Aula",
                contenido: "Las clases de Medicina se moverán al aula 205 a partir de mañana.",
                fecha: "12/08/2023",
                importante: true
            }
        ],
        eventos: [
            {
                titulo: "Simposio de Salud",
                fecha: "15/10/2023",
                descripcion: "Participación de expertos en el área médica"
            }
        ]
    },
    galeria: {
        titulo: "Actividades Estudiantiles 2023",
        descripcion: "Momentos destacados de nuestros estudiantes",
        imagenes: [
            {
                url: "/imagenes/galeria/plantel1/evento1.jpg",
                descripcion: "Feria de ciencias 2023"
            },
            {
                url: "/imagenes/galeria/plantel1/evento2.jpg",
                descripcion: "Equipo de robótica ganador"
            },
            {
                url: "/imagenes/galeria/plantel1/evento3.jpg",
                descripcion: "Ceremonia de graduación"
            }
        ]
    },
    plantel7: {
        avisos: [
            {
                titulo: "Cambio de Aula",
                contenido: "Las clases de Medicina se moverán al aula 205 a partir de mañana.",
                fecha: "12/08/2023",
                importante: true
            }
        ],
        eventos: [
            {
                titulo: "Simposio de Salud",
                fecha: "15/10/2023",
                descripcion: "Participación de expertos en el área médica"
            }
        ]
    },
    galeria: {
        titulo: "Actividades Estudiantiles 2023",
        descripcion: "Momentos destacados de nuestros estudiantes",
        imagenes: [
            {
                url: "/imagenes/galeria/plantel1/evento1.jpg",
                descripcion: "Feria de ciencias 2023"
            },
            {
                url: "/imagenes/galeria/plantel1/evento2.jpg",
                descripcion: "Equipo de robótica ganador"
            },
            {
                url: "/imagenes/galeria/plantel1/evento3.jpg",
                descripcion: "Ceremonia de graduación"
            }
        ]
    },
    plantel8: {
        avisos: [
            {
                titulo: "Cambio de Aula",
                contenido: "Las clases de Medicina se moverán al aula 205 a partir de mañana.",
                fecha: "12/08/2023",
                importante: true
            }
        ],
        eventos: [
            {
                titulo: "Simposio de Salud",
                fecha: "15/10/2023",
                descripcion: "Participación de expertos en el área médica"
            }
        ]
    },
    galeria: {
        titulo: "Actividades Estudiantiles 2023",
        descripcion: "Momentos destacados de nuestros estudiantes",
        imagenes: [
            {
                url: "/imagenes/galeria/plantel1/evento1.jpg",
                descripcion: "Feria de ciencias 2023"
            },
            {
                url: "/imagenes/galeria/plantel1/evento2.jpg",
                descripcion: "Equipo de robótica ganador"
            },
            {
                url: "/imagenes/galeria/plantel1/evento3.jpg",
                descripcion: "Ceremonia de graduación"
            }
        ]
    },
    plantel9: {
        avisos: [
            {
                titulo: "Cambio de Aula",
                contenido: "Las clases de Medicina se moverán al aula 205 a partir de mañana.",
                fecha: "12/08/2023",
                importante: true
            }
        ],
        eventos: [
            {
                titulo: "Simposio de Salud",
                fecha: "15/10/2023",
                descripcion: "Participación de expertos en el área médica"
            }
        ]
    },
    galeria: {
        titulo: "Actividades Estudiantiles 2023",
        descripcion: "Momentos destacados de nuestros estudiantes",
        imagenes: [
            {
                url: "/imagenes/galeria/plantel1/evento1.jpg",
                descripcion: "Feria de ciencias 2023"
            },
            {
                url: "/imagenes/galeria/plantel1/evento2.jpg",
                descripcion: "Equipo de robótica ganador"
            },
            {
                url: "/imagenes/galeria/plantel1/evento3.jpg",
                descripcion: "Ceremonia de graduación"
            }
        ]
    },
    plantel10: {
        avisos: [
            {
                titulo: "Cambio de Aula",
                contenido: "Las clases de Medicina se moverán al aula 205 a partir de mañana.",
                fecha: "12/08/2023",
                importante: true
            }
        ],
        eventos: [
            {
                titulo: "Simposio de Salud",
                fecha: "15/10/2023",
                descripcion: "Participación de expertos en el área médica"
            }
        ]
    },
    galeria: {
        titulo: "Actividades Estudiantiles 2023",
        descripcion: "Momentos destacados de nuestros estudiantes",
        imagenes: [
            {
                url: "/imagenes/galeria/plantel1/evento1.jpg",
                descripcion: "Feria de ciencias 2023"
            },
            {
                url: "/imagenes/galeria/plantel1/evento2.jpg",
                descripcion: "Equipo de robótica ganador"
            },
            {
                url: "/imagenes/galeria/plantel1/evento3.jpg",
                descripcion: "Ceremonia de graduación"
            }
        ]
    },
    plantel11: {
        avisos: [
            {
                titulo: "Cambio de Aula",
                contenido: "Las clases de Medicina se moverán al aula 205 a partir de mañana.",
                fecha: "12/08/2023",
                importante: true
            }
        ],
        eventos: [
            {
                titulo: "Simposio de Salud",
                fecha: "15/10/2023",
                descripcion: "Participación de expertos en el área médica"
            }
        ]
    },
    galeria: {
        titulo: "Actividades Estudiantiles 2023",
        descripcion: "Momentos destacados de nuestros estudiantes",
        imagenes: [
            {
                url: "/imagenes/galeria/plantel1/evento1.jpg",
                descripcion: "Feria de ciencias 2023"
            },
            {
                url: "/imagenes/galeria/plantel1/evento2.jpg",
                descripcion: "Equipo de robótica ganador"
            },
            {
                url: "/imagenes/galeria/plantel1/evento3.jpg",
                descripcion: "Ceremonia de graduación"
            }
        ]
    }
    // Puedes agregar datos para los demás planteles de la misma manera
};

// Variables globales
let plantelSeleccionado = null;
const highlightColors = [
    {bg: 'rgba(220, 53, 69, 0.3)', border: '#dc3545'},
    {bg: 'rgba(13, 110, 253, 0.3)', border: '#0d6efd'},
    {bg: 'rgba(25, 135, 84, 0.3)', border: '#198754'}
];
let currentColorIndex = 0;

// ======================
// FUNCIONES PRINCIPALES
// ======================

function handlePlantelSelection(plantelId, fromMap = false) {
    const plantel = planteles[plantelId];
    if (!plantel) return;

    // Remover selección previa
    document.querySelectorAll('.plantel-list-item').forEach(item => {
        item.classList.remove('active');
    });

    // Resaltar elemento seleccionado
    const selectedItem = document.querySelector(`.plantel-list-item[data-plantel="${plantelId}"]`);
    if (selectedItem) {
        selectedItem.classList.add('active');
        selectedItem.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    mostrarPlantel(plantelId);

    if (!fromMap) {
        const area = document.querySelector(`.plantel-area[data-plantel="${plantelId}"]`);
        if (area) {
            resaltarAreaPlantel(area);
            const coords = area.getAttribute('coords').split(',');
            scrollToMapPosition(parseInt(coords[0]), parseInt(coords[1]));
        }
    }
}

function mostrarPlantel(idPlantel) {
    const plantel = planteles[idPlantel];
    if (!plantel) return;

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
    cargarAvisos(idPlantel);
    cargarEventos(idPlantel);
    cargarGaleria(idPlantel);

    // Mostrar vista de detalle
    toggleViews(false);
}
// ======================
// FUNCIONES DE INICIALIZACIÓN
// ======================

function initPlantelesList() {
    const listaCECyTE = document.getElementById('lista-cecyte');
    const listaEMSaD = document.getElementById('lista-emsad');

    // Limpiar listas
    listaCECyTE.innerHTML = '';
    listaEMSaD.innerHTML = '';

    // Ordenar planteles por nombre
    const sortedPlanteles = Object.entries(planteles).sort((a, b) =>
        a[1].nombre.localeCompare(b[1].nombre)
    );

    sortedPlanteles.forEach(([id, plantel]) => {
        const listItem = `
            <div class="list-group-item plantel-list-item" data-plantel="${id}">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 text-truncate">${plantel.nombre}</h5>
                    <span class="badge ${plantel.tipo === 'cecyte' ? 'bg-primary' : 'bg-success'}">
                        ${plantel.tipo.toUpperCase()}
                    </span>
                </div>
            </div>
        `;

        if (plantel.tipo === 'cecyte') {
            listaCECyTE.insertAdjacentHTML('beforeend', listItem);
        } else {
            listaEMSaD.insertAdjacentHTML('beforeend', listItem);
        }
    });

    // Agregar event listeners
    document.querySelectorAll('.plantel-list-item').forEach(item => {
        item.addEventListener('click', () =>
            handlePlantelSelection(item.dataset.plantel)
        );
    });
}
// ======================
// FUNCIONES AUXILIARES
// ======================

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

function toggleViews(showList = true) {
    document.getElementById('planteles-list').style.display = showList ? 'block' : 'none';
    document.getElementById('plantel-detail').style.display = showList ? 'none' : 'block';
    window.scrollTo(0, 0);
}

// ======================
// FUNCIONES DE ALUMNOS
// ======================

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

// ======================
// FUNCIONES DEL MAPA
// ======================

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

function resaltarAreaPlantel(area) {
    const highlight = document.getElementById('plantelHighlight');
    const [x, y, radius] = area.getAttribute('coords').split(',').map(Number);
    const color = highlightColors[currentColorIndex];

    highlight.style.cssText = `
        width: ${radius * 2}px;
        height: ${radius * 2}px;
        left: ${x - radius}px;
        top: ${y - radius}px;
        background-color: ${color.bg};
        border: 2px solid ${color.border};
        display: block;
        border-radius: 50%;
        position: absolute;
        pointer-events: none;
        transition: all 0.3s ease;
    `;
}

function scrollToMapPosition(x, y) {
    const container = document.querySelector('.map-scroll-container');
    container.scrollTo({
        left: x - container.clientWidth / 2,
        top: y - container.clientHeight / 2,
        behavior: 'smooth'
    });
}

// ======================
// INICIALIZACIÓN
// ======================

function initMapInteraction() {
    // Event listeners
    document.querySelectorAll('.plantel-list-item').forEach(item => {
        item.addEventListener('click', () =>
            handlePlantelSelection(item.dataset.plantel)
        );
    });

    document.getElementById('mobilePlantelSelector').addEventListener('change', function() {
        if (this.value) handlePlantelSelection(this.value);
    });

    document.querySelectorAll('area.plantel-area').forEach(area => {
        area.addEventListener('click', (e) => {
            e.preventDefault();
            handlePlantelSelection(area.dataset.plantel, true);
        });
    });

    // Centrar mapa
    const mapImage = document.getElementById('mapImage');
    if (mapImage.complete) centerMap();
    else mapImage.addEventListener('load', centerMap);
}

function centerMap() {
    const container = document.querySelector('.map-scroll-container');
    const mapImage = document.getElementById('mapImage');
    container.scrollLeft = (mapImage.width - container.clientWidth) / 2;
    container.scrollTop = (mapImage.height - container.clientHeight) / 2;
}

function volverALista() {
    toggleViews(true);
    document.getElementById('mobilePlantelSelector').value = '';
    document.getElementById('plantelHighlight').style.display = 'none';
}

// Inicializar al cargar la página
document.addEventListener('DOMContentLoaded', () => {
    initPlantelesList(); // Nueva función de inicialización
    initMapInteraction();

    // Selector móvil
    document.getElementById('mobilePlantelSelector').addEventListener('change', function() {
        if (this.value) handlePlantelSelection(this.value);
    });

    // Tooltips de Bootstrap
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
