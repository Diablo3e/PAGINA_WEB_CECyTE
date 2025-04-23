

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
// Función para generar indicadores del carrusel
function generarIndicadores(cantidad, containerClass, targetId) {
    const indicatorsContainer = document.querySelector(containerClass);
    if (indicatorsContainer) {
        indicatorsContainer.innerHTML = '';

        for (let i = 0; i < cantidad; i++) {
            const button = document.createElement('button');
            button.type = 'button';
            button.dataset.bsTarget = targetId;
            button.dataset.bsSlideTo = i;
            button.ariaLabel = `Slide ${i + 1}`;
            if (i === 0) {
                button.className = 'active';
                button.ariaCurrent = 'true';
            }
            indicatorsContainer.appendChild(button);
        }
    }
}

// Función para cargar los avisos del plantel
function cargarAvisos(plantelId) {
    const listaAvisos = document.getElementById('lista-avisos');
    const sinAvisos = document.getElementById('sin-avisos');

    listaAvisos.innerHTML = '';
    sinAvisos.style.display = 'none';

    const plantelData = datosAlumnos[plantelId];
    if (!plantelData?.avisos?.length) {
        sinAvisos.style.display = 'block';
        return;
    }

    plantelData.avisos.forEach(aviso => {
        const avisoElement = document.createElement('a');
        avisoElement.href = '#';
        avisoElement.className = `list-group-item list-group-item-action ${aviso.importante ? 'list-group-item-warning' : ''}`;
        avisoElement.innerHTML = `
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">${aviso.titulo}</h5>
                <small>${aviso.fecha}</small>
            </div>
            <p class="mb-1">${aviso.contenido}</p>
        `;
        listaAvisos.appendChild(avisoElement);
    });
}

// Función para cargar los eventos del calendario
function cargarEventos(plantelId) {
    const eventosContainer = document.getElementById('eventos-calendario');
    eventosContainer.innerHTML = '';

    const plantelData = datosAlumnos[plantelId];
    if (!plantelData?.eventos?.length) {
        eventosContainer.innerHTML = `
            <div class="alert alert-info">
                No hay eventos programados próximamente
            </div>
        `;
        return;
    }

    const eventosList = document.createElement('div');
    eventosList.className = 'list-group';

    plantelData.eventos.forEach(evento => {
        const eventoElement = document.createElement('a');
        eventoElement.href = '#';
        eventoElement.className = 'list-group-item list-group-item-action';
        eventoElement.innerHTML = `
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">${evento.titulo}</h5>
                <small>${evento.fecha}</small>
            </div>
            <p class="mb-1">${evento.descripcion}</p>
        `;
        eventosList.appendChild(eventoElement);
    });

    eventosContainer.appendChild(eventosList);
}

// Función para cargar la galería de imágenes
function cargarGaleria(plantelId) {
    const galeriaInner = document.getElementById('galeria-inner');
    const galeriaIndicators = document.getElementById('galeria-indicators');
    const galeriaTitulo = document.getElementById('galeria-titulo');
    const galeriaDescripcion = document.getElementById('galeria-descripcion');

    galeriaInner.innerHTML = '';
    galeriaIndicators.innerHTML = '';

    const galeriaData = datosAlumnos[plantelId]?.galeria;
    if (!galeriaData?.imagenes?.length) {
        galeriaInner.innerHTML = `
            <div class="carousel-item active">
                <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                    <div class="text-center">
                        <i class="fas fa-camera fa-3x mb-3 text-muted"></i>
                        <p class="text-muted">No hay imágenes disponibles</p>
                    </div>
                </div>
            </div>
        `;
        galeriaTitulo.textContent = "Galería no disponible";
        galeriaDescripcion.textContent = "";
        return;
    }

    galeriaTitulo.textContent = galeriaData.titulo || "Galería Estudiantil";
    galeriaDescripcion.textContent = galeriaData.descripcion || "";

    galeriaData.imagenes.forEach((imagen, index) => {
        const indicator = document.createElement('button');
        indicator.type = 'button';
        indicator.dataset.bsTarget = '#galeria-alumnos-carousel';
        indicator.dataset.bsSlideTo = index;
        indicator.ariaLabel = `Slide ${index + 1}`;
        if (index === 0) {
            indicator.className = 'active';
            indicator.ariaCurrent = 'true';
        }
        galeriaIndicators.appendChild(indicator);

        const item = document.createElement('div');
        item.className = `carousel-item ${index === 0 ? 'active' : ''}`;
        item.innerHTML = `
            <img src="${imagen.url}" class="d-block w-100" alt="${imagen.descripcion}" style="max-height: 400px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                <p>${imagen.descripcion}</p>
            </div>
        `;
        galeriaInner.appendChild(item);
    });

    new bootstrap.Carousel(document.getElementById('galeria-alumnos-carousel'));
}

// Función principal para mostrar los detalles del plantel
function mostrarPlantel(idPlantel) {
    const plantel = planteles[idPlantel];
    if (!plantel) {
        console.error('El plantel especificado no existe.');
        return;
    }

    // Actualizar información básica
    document.getElementById('plantel-nombre').textContent = plantel.nombre;
    document.getElementById('plantel-icon').className = plantel.tipo === 'cecyte' ? 'fas fa-school fa-5x' : 'fas fa-graduation-cap fa-5x';

    // Configurar carrusel de imágenes del plantel
    generarIndicadores(plantel.imagenes.length, '.carousel-indicators', '#plantel-carousel');
    document.getElementById('carousel-inner').innerHTML = plantel.imagenes.map((img, i) => `
        <div class="carousel-item ${i === 0 ? 'active' : ''}">
            <img src="${img}" class="d-block w-100" alt="Imagen ${i + 1}">
        </div>
    `).join('');

    // Actualizar información de contacto
    const dir = plantel.direccion;
    document.getElementById('plantel-direccion').innerHTML = `
        ${dir.calle}, ${dir.colonia}<br>
        ${dir.municipio}, ${dir.estado}<br>
        C.P. ${dir.cp}
    `;
    document.getElementById('plantel-telefono').textContent = dir.telefono;
    document.getElementById('plantel-email').textContent = dir.email;
    document.getElementById('plantel-horario').textContent = dir.horario;

    // Actualizar directores
    document.getElementById('directores-container').innerHTML = plantel.directores.map(d => `
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card director-card h-100">
                <div class="card-body text-center">
                    <img src="${d.foto}" class="rounded-circle mb-3" width="100" height="100" alt="${d.nombre}">
                    <h5 class="card-title">${d.nombre}</h5>
                    ${d.cargo ? `<p class="card-text text-muted">${d.cargo}</p>` : ''}
                </div>
            </div>
        </div>
    `).join('');

    // Actualizar carreras
    document.getElementById('cuerpo-tabla-carreras').innerHTML = plantel.carreras.map(c => `
        <tr>
            <td>${c.nombre}</td>
            <td>${c.duracion}</td>
            <td>${c.modalidad}</td>
        </tr>
    `).join('');

    // Cargar información para alumnos
    cargarAvisos(idPlantel);
    cargarEventos(idPlantel);
    cargarGaleria(idPlantel);

    // Mostrar vista de detalle
    document.getElementById('planteles-list').style.display = 'none';
    document.getElementById('plantel-detail').style.display = 'block';
    window.scrollTo(0, 0);

    // Inicializar carruseles
    new bootstrap.Carousel(document.getElementById('plantel-carousel'));

// Coordenadas aproximadas (deberías almacenarlas en tu objeto plantel)
const lat = plantel.direccion.latitud;
const lon = plantel.direccion.longitud; // Ejemplo para Puebla

const mapContainer = document.getElementById('map-container');
mapContainer.innerHTML = `
    <iframe
        width="100%"
        height="100%"
        frameborder="0"
        scrolling="no"
        marginheight="0"
        marginwidth="0"
        src="https://www.openstreetmap.org/export/embed.html?bbox=${lon-0.01}%2C${lat-0.01}%2C${lon+0.01}%2C${lat+0.01}&amp;layer=mapnik&amp;marker=${lat},${lon}"
        style="border: none;">
    </iframe>
    <br/>
    <small class="text-center d-block mt-2">
        <a href="https://www.openstreetmap.org/?mlat=${lat}&amp;mlon=${lon}#map=15/${lat}/${lon}" target="_blank">
            Ver mapa más grande
        </a>
    </small>
`;

}

// Función para volver a la lista de planteles
function volverALista() {
    document.getElementById('planteles-list').style.display = 'block';
    document.getElementById('plantel-detail').style.display = 'none';
    window.scrollTo(0, 0);
}
// Variables para control de colores
const highlightColors = [
    {bg: 'rgba(220, 53, 69, 0.3)', border: '#dc3545'}, // Rojo

];
let currentColorIndex = 0;

// Inicialización del mapa
function initMapInteraction() {
    const mapImage = document.getElementById('mapImage');
    const highlightDiv = document.getElementById('plantelHighlight');

    // Configurar controles
    document.getElementById('zoomIn').addEventListener('click', () => adjustZoom(0.1));
    document.getElementById('zoomOut').addEventListener('click', () => adjustZoom(-0.1));
    document.getElementById('resetZoom').addEventListener('click', resetZoom);
    document.getElementById('changeColor').addEventListener('click', changeHighlightColor);

    // Configurar áreas del mapa
    document.querySelectorAll('area.plantel-area').forEach(area => {
        area.addEventListener('mouseenter', function() {
            const [x, y, radius] = this.coords.split(',').map(Number);
            highlightDiv.style.display = 'block';
            highlightDiv.style.width = `${radius * 2}px`;
            highlightDiv.style.height = `${radius * 2}px`;
            highlightDiv.style.left = `${x}px`;
            highlightDiv.style.top = `${y}px`;

            // Tooltip
            const tooltip = document.createElement('div');
            tooltip.className = 'plantel-tooltip';
            tooltip.textContent = this.alt;
            highlightDiv.innerHTML = '';
            highlightDiv.appendChild(tooltip);
        });

        area.addEventListener('mouseleave', () => {
            highlightDiv.style.display = 'none';
        });

        area.addEventListener('click', function(e) {
            e.preventDefault();
            const plantelId = this.getAttribute('data-plantel');
            if (plantelId && planteles[plantelId]) {
                mostrarPlantel(plantelId);
            }
        });
    });

    // Configurar selector móvil
    const mobileSelector = document.getElementById('mobilePlantelSelector');
    if (mobileSelector) {
        mobileSelector.addEventListener('change', function() {
            if (this.value) {
                mostrarPlantel(this.value);
                this.value = '';
            }
        });
    }

    // Centrar el mapa al cargar
    if (mapImage.complete) {
        centerMap();
    } else {
        mapImage.addEventListener('load', centerMap);
    }
}

// Funciones de zoom
function adjustZoom(amount) {
    const mapImage = document.getElementById('mapImage');
    const currentScale = parseFloat(mapImage.style.transform.replace('scale(', '').replace(')', '')) || 1;
    const newScale = Math.min(Math.max(currentScale + amount, 0.5), 3);

    mapImage.style.transform = `scale(${newScale})`;
    updateMapAreas(newScale);
}

function resetZoom() {
    const mapImage = document.getElementById('mapImage');
    mapImage.style.transform = 'scale(1)';
    updateMapAreas(1);
}

function updateMapAreas(scale) {
    document.querySelectorAll('area.plantel-area').forEach(area => {
        const originalCoords = area.dataset.originalCoords || area.coords;
        area.dataset.originalCoords = originalCoords;

        const scaledCoords = originalCoords.split(',').map(coord => {
            return Math.round(parseInt(coord) * scale);
        }).join(',');

        area.coords = scaledCoords;
    });
}

// Función para centrar el mapa
function centerMap() {
    const container = document.querySelector('.map-scroll-container');
    const mapImage = document.getElementById('mapImage');

    setTimeout(() => {
        container.scrollLeft = (mapImage.width - container.clientWidth) / 2;
        container.scrollTop = (mapImage.height - container.clientHeight) / 2;
    }, 100);
}

// Función para cambiar colores
function changeHighlightColor() {
    currentColorIndex = (currentColorIndex + 1) % highlightColors.length;
    const color = highlightColors[currentColorIndex];
    const highlightDiv = document.getElementById('plantelHighlight');

    highlightDiv.style.backgroundColor = color.bg;
    highlightDiv.style.borderColor = color.border;

    // Actualizar tooltip si existe
    const tooltip = highlightDiv.querySelector('.plantel-tooltip');
    if (tooltip) {
        tooltip.style.backgroundColor = color.border;
    }
}


// Inicialización cuando el DOM esté cargado
document.addEventListener('DOMContentLoaded', function() {
    initMapInteraction();

    // Asignar eventos a las tarjetas de planteles (si las mantienes)
    document.querySelectorAll('.plantel-card').forEach(card => {
        card.addEventListener('click', function() {
            const id = this.getAttribute('onclick').match(/'([^']+)'/)[1];
            mostrarPlantel(id);
        });
    });

    // Inicializar tooltips de Bootstrap si los usas
    if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }
});
