<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantelesController extends Controller
{
    public function index() {
        $planteles = Plantel::all(); // Obtener todos los planteles
        return view('components.mapa-Planteles', compact('planteles'));
    }

    public function detalle($id)
    {
        $planteles = $this->getPlantelesData();

        if (!array_key_exists($id, $planteles)) {
            abort(404);
        }

        return view('planteles_detalle', [
            'plantelId' => $id,
            'plantel' => $planteles[$id]
        ]);
    }

    private function getPlantelesData()
    {
        return [
            'plantel1' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Cholula",
                'imagenes' => [
                    "/imagenes/Plantel_Cholula/CholulaPlantel.jpg",
                    "/imagenes/Plantel_Cholula/CholulaPlantel2.jpg",
                    "/imagenes/Plantel_Cholula/CholulaPlantel3.jpg",
                ],
                'direccion' => [
                    'calle' => "Av. Guerrero 409",
                    'colonia' => "Santa Barbara Almoloya",
                    'municipio' => "San Andrés Cholula",
                    'estado' => "Puebla",
                    'cp' => "72750",
                    'telefono' => "(222) 289 0441",
                    'email' => "cholula.cecytepuebla.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 16:30 hrs",
                    'latitud' => 19.100685740077587,
                    'longitud' => -98.30183163237301,
                ],
                'directores' => [
                    [
                        'nombre' => "Gisela Munive González",
                        'cargo' => "Director Académico",
                        'foto' => "/imagenes/Plantel_Cholula/1262-GISELA-MUNIVE-GONZALEZ.jpg",
                    ],
                    [
                        'nombre' => "Mónica Ruiz Cuéllar",
                        'cargo' => "Coordinadora de Laboratorios",
                        'foto' => "/imagenes/Plantel_Cholula/1280-MONICA-RUIZ-CUELLAR.jpg",
                    ],
                    [
                        'nombre' => "María del Rocío Hernández García",
                        'cargo' => "Directora Administrativa",
                        'foto' => "/imagenes/Plantel_Cholula/4105-MARIA-DEL-ROCIO-HERNANDEZ-GARCIA.jpg",
                    ]
                ],
                'carreras' => [
                    [ 'nombre' => "Ingeniería en Sistemas Computacionales", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Administración de Empresas", 'duracion' => "3 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Diseño Gráfico", 'duracion' => "3 años", 'modalidad' => "Presencial" ]
                ]
            ],
            'plantel2' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Chignahuapan",
                'imagenes' => [
                    "/imagenes/Chignahuapan/Chigna13.jpg",
                    "/imagenes/Chignahuapan/Chigna9.jpg",
                    "/imagenes/Chignahuapan/PANO_1.jpg",
                ],
                'direccion' => [
                    'calle' => "Privada de Manuel Avila Camacho",
                    'colonia' => "Teoconchila",
                    'municipio' => "Chignahuapan",
                    'estado' => "Puebla",
                    'cp' => "73300",
                    'telefono' => "797 971 1991",
                    'email' => "",
                    'horario' => "Lunes a Viernes de 7:00 a 15:30 hrs",
                    'latitud' => 19.852045858102084,
                    'longitud' => -98.03431692189822
                ],
                'directores' => [
                    [
                        'nombre' => "María Flora Castillo Vega",
                        'cargo' => "Control Escolar",
                        'foto' => "/imagenes/Chignahuapan/Maria_Flora.jpg",
                    ]
                ],
                'carreras' => [
                    [ 'nombre' => "Medicina", 'duracion' => "6 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Enfermería", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Psicología", 'duracion' => "4 años", 'modalidad' => "Mixta" ]
                ]
            ],
            'plantel3' => [
                'tipo' => "emsad",
                'nombre' => "Plantel EMSaD Ameluca",
                'imagenes' => [
                    "/imagenes/EMSaD Ameluca/ENTRADA PRINCIPAL AMELUCA0.jpg",
                    "/imagenes/EMSaD Ameluca/entrada2 ameluca.jpg",
                ],
                'direccion' => [
                    'calle' => "16 de Septiembre 3",
                    'colonia' => "Colonia Centro",
                    'municipio' => "Ameluca",
                    'estado' => "Puebla",
                    'cp' => "73029",
                    'telefono' => "55 5454 1559",
                    'email' => "",
                    'horario' => "Lunes a Viernes de 8:00 a 16:00 hrs",
                    'latitud' => 20.563568214226102,
                    'longitud' => -97.8328442900193
                ],
                'directores' => [
                    [
                        'nombre' => "",
                        'cargo' => "Responsable del Centro",
                        'foto' => "/imagenes/EMSaD Ameluca/Responsable.jpg",
                    ],
                    [
                        'nombre' => "",
                        'cargo' => "Auxiliar del Responsable",
                        'foto' => "/imagenes/EMSaD Ameluca/Auxiliar.jpg",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel4' => [
                'tipo' => "emsad",
                'nombre' => "Plantel EMSaD Boca del Monte",
                'imagenes' => [
                    "/imagenes/EMSaD Boca del monte/EMSaD Boca del Monte [_Edificio_].jpg",
                    "/imagenes/EMSaD Boca del monte/EMSaD Boca del Monte [Edificio].jpg",
                    "/imagenes/EMSaD Boca del monte/EMSaD Boca del Monte [Edificio_].jpg",
                ],
                'direccion' => [
                    'calle' => "",
                    'colonia' => "",
                    'municipio' => "Boca del monte",
                    'estado' => "Puebla",
                    'cp' => "75916",
                    'telefono' => "236 111 7775",
                    'email' => "cecytepuebla.edu.mx",
                    'horario' => "Lunes a Viernes de 8:00 a 16:00 hrs",
                    'latitud' => 18.420917808427905,
                    'longitud' => -97.06980982370949
                ],
                'directores' => [
                    [
                        'nombre' => "Edith Rólon Villa",
                        'cargo' => "Responsable del Centro",
                        'foto' => "/imagenes/EMSaD Boca del monte/Personal Administrativo/Responsable.jpg",
                    ],
                    [
                        'nombre' => "Andres Gil Gonzalez",
                        'cargo' => "Auxiliar del Responsable",
                        'foto' => "/imagenes/EMSaD Boca del monte/Personal Administrativo/Auxiliar.jpg",
                    ],
                    [
                        'nombre' => "Rosalino Atilano Pantelon",
                        'cargo' => "Oficial de Servicio",
                        'foto' => "/imagenes/EMSaD Boca del monte/Personal Administrativo/Oficial de Servicio.jpg",
                    ],
                    [
                        'nombre' => "Emma Marcela Gonzalez Castro",
                        'cargo' => "Orientadora Educativa",
                        'foto' => "/imagenes/EMSaD Boca del monte/Personal Administrativo/Orientadora Educativa.jpg",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel5' => [
                'tipo' => "emsad",
                'nombre' => "Plantel EMSaD Buena Vista",
                'imagenes' => [
                    "/imagenes/EMSaD_BUENA_VISTA/FOTOS PLANTEL/20220907_092254.jpg",
                    "/imagenes/EMSaD_BUENA_VISTA/FOTOS PLANTEL/20220907_092457.jpg",
                    "/imagenes/EMSaD_BUENA_VISTA/FOTOS PLANTEL/20220907_092628.jpg",
                ],
                'direccion' => [
                    'calle' => "Av. Principal #123",
                    'colonia' => "Colonia Centro",
                    'municipio' => "San Andrés Cholula",
                    'estado' => "Puebla",
                    'cp' => "72810",
                    'telefono' => "238 249 2787",
                    'email' => "emsadbuenavista@cecytepuebla.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 15:00 hrs",
                    'latitud' => 23.307801553331412,
                    'longitud' => -103.36590377115472
                ],
                'directores' => [
                    [
                        'nombre' => "Adonis Carrera Martinez",
                        'cargo' => "Responsable del Centro",
                        'foto' => "/imagenes/EMSaD_BUENA_VISTA/PERSONAL_ADMINISTRATIVO/RESPONSABLE_del_centro.jpeg",
                    ],
                    [
                        'nombre' => "Citlali Dayana Sosa Durand",
                        'cargo' => "Secretaria de Director",
                        'foto' => "/imagenes/EMSaD_BUENA_VISTA/PERSONAL_ADMINISTRATIVO/SECRETARIA_DE_DIRECTOR.jpeg",
                    ],
                    [
                        'nombre' => "Atenas Carrera Martinez",
                        'cargo' => "Control Escolar",
                        'foto' => "/imagenes/EMSaD_BUENA_VISTA/PERSONAL_ADMINISTRATIVO/CONTROL_ESCOLAR.jpeg",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel6' => [
                'tipo' => "emsad",
                'nombre' => "Plantel EMSaD La Pahua",
                'imagenes' => [
                    "/imagenes/EMSaD LA PAHUA/FOTOS 365/Plantel_LaPahua.jpeg",
                    "/imagenes/EMSaD LA PAHUA/FOTOS 365/Aulas_LAPahua.jpeg",
                    "/imagenes/EMSaD LA PAHUA/FOTOS 365/AulaA_LaPahua.jpeg",
                ],
                'direccion' => [
                    'calle' => "Av. 20 de Noviembre",
                    'colonia' => "",
                    'municipio' => "La pahua",
                    'estado' => "Puebla",
                    'cp' => "73008",
                    'telefono' => "(222) 123 4567",
                    'email' => "cecytepuebla.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 15:00 hrs",
                    'latitud' => 20.61139985261418,
                    'longitud' => -97.85333130923871
                ],
                'directores' => [
                    [
                        'nombre' => "Ana Aurelia Vargas Aparicio",
                        'cargo' => "",
                        'foto' => "/imagenes/EMSaD LA PAHUA/PERSONAL ADMINISTRATIVO/Ana Aurelia Vargas Aparicio.jpg",
                    ],
                    [
                        'nombre' => "Apolinas Geronimo Pérez",
                        'cargo' => "",
                        'foto' => "/imagenes/EMSaD LA PAHUA/PERSONAL ADMINISTRATIVO/Apolinar Geronimo Pérez.jpg",
                    ],
                    [
                        'nombre' => "Fidencia Tolentino Peralta",
                        'cargo' => "",
                        'foto' => "/imagenes/EMSaD LA PAHUA/PERSONAL ADMINISTRATIVO/Fidencia Tolentino Peralta.jpg",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel7' => [
                'tipo' => "emsad",
                'nombre' => "Plantel EMSaD Mexcaltochintla",
                'imagenes' => [
                    "/imagenes/EMSaD MEXCALTOCHINTLA/ENTRADA/ENTRADA (3).jpg",
                    "/imagenes/EMSaD MEXCALTOCHINTLA/ENTRADA/ENTRADA (4).jpg",
                    "/imagenes/EMSaD MEXCALTOCHINTLA/ENTRADA/ENTRADA (5).jpg",
                ],
                'direccion' => [
                    'calle' => "",
                    'colonia' => "",
                    'municipio' => "Mexcaltochintla",
                    'estado' => "Puebla",
                    'cp' => "75916",
                    'telefono' => "(222) 123 4567",
                    'email' => "contacto@cholula.cecyte.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 15:00 hrs",
                    'latitud' => 18.421244385262213,
                    'longitud' => -97.04543036306796
                ],
                'directores' => [
                    [
                        'nombre' => "",
                        'cargo' => "Auxiliar del Responsable",
                        'foto' => "/imagenes/EMSaD MEXCALTOCHINTLA/FotoDel personal/5514 Auxiliardel Responsable.jpg",
                    ],
                    [
                        'nombre' => "",
                        'cargo' => "Responsable del Centro",
                        'foto' => "/imagenes/EMSaD MEXCALTOCHINTLA/FotoDel personal/7037 Responsable de centro.jpg",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel8' => [
                'tipo' => "emsad",
                'nombre' => "Plantel EMSaD Naranjastitla",
                'imagenes' => [
                    "/imagenes/EMSaD NARANJASTITLA/EMSaDNaranjastitla(Techumbre) 1.jpg",
                    "/imagenes/EMSaD NARANJASTITLA/EMSaDNaranjastitla(Techumbre) 2.jpg",
                    "/imagenes/EMSaD NARANJASTITLA/EMSaDNaranjastitla(Techumbre) 3.jpg",
                ],
                'direccion' => [
                    'calle' => "",
                    'colonia' => "Naranjastitla de victoria",
                    'municipio' => "tlacotepec de porfitio diaz",
                    'estado' => "Puebla",
                    'cp' => "",
                    'telefono' => "238 104 7266",
                    'email' => "contacto@cholula.cecyte.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 15:00 hrs",
                    'latitud' => 18.35814870458713,
                    'longitud' => -96.78387390354918
                ],
                'directores' => [
                    [
                        'nombre' => "Malleli Cardoso Castro",
                        'cargo' => "Directora del Plantel",
                        'foto' => "/imagenes/EMSaD NARANJASTITLA/FotoS DE PERSONAL/Direc. Malleli Cardoso Castro.jpg",
                    ],
                    [
                        'nombre' => "Emeterio Montalvo Montavo",
                        'cargo' => "Auxiliar del Responsable",
                        'foto' => "/imagenes/EMSaD NARANJASTITLA/FotoS DE PERSONAL/Admin. Emeterio Montalvo Montavo.jpg",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel9' => [
                'tipo' => "emsad",
                'nombre' => "Plantel EMSaD Santa Elena",
                'imagenes' => [
                    "/imagenes/EMSaD Santa Elena/Entrada a Centro_Santa Elena.jpg",
                    "/imagenes/EMSaD Santa Elena/Espacio de usos multiples_Santa elena.jpg",
                    "/imagenes/EMSaD Santa Elena/Salon de clases A_Santa Elena.jpg",
                ],
                'direccion' => [
                    'calle' => "Av. Principal #123",
                    'colonia' => "Colonia Centro",
                    'municipio' => "Tenepanigia",
                    'estado' => "Puebla",
                    'cp' => "73611",
                    'telefono' => "233 103 9887",
                    'email' => "contacto@cholula.cecyte.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 15:00 hrs",
                    'latitud' => 19.96964970272612,
                    'longitud' => -97.77138690167436
                ],
                'directores' => [
                    [
                        'nombre' => "",
                        'cargo' => "Director del Plantel",
                        'foto' => "/imagenes/EMSaD Santa Elena/Responsable del centro_Santa Elena.PNG",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel10' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Guadalupe Victoria",
                'imagenes' => [
                    "/imagenes/Guadalupe Victoria/GuadalupeVictori1.jpeg",
                    "/imagenes/Guadalupe Victoria/GuadalupeVictoria2.jpeg",
                    "/imagenes/Guadalupe Victoria/GuadalupeVictoria3.jpeg",
                ],
                'direccion' => [
                    'calle' => "Av. Principal #123",
                    'colonia' => "Colonia Centro",
                    'municipio' => "Guadalupe Victoria",
                    'estado' => "Puebla",
                    'cp' => "75045",
                    'telefono' => "233 121 1402",
                    'email' => "contacto@cholula.cecyte.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 15:00 hrs",
                    'latitud' => 19.301169465939225,
                    'longitud' => -97.3658274035342
                ],
                'directores' => [
                    [
                        'nombre' => "Israel Ortiz Morales",
                        'cargo' => "Director del Plantel",
                        'foto' => "/imagenes/Guadalupe Victoria/directivos/3141 Israel Ortiz Morales.jpg",
                    ],
                    [
                        'nombre' => "María Concepción Meneses Castro",
                        'cargo' => "Directora del Plantel",
                        'foto' => "/imagenes/Guadalupe Victoria/directivos/3154 Maria Concepcion Meneses Castro.jpg",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel11' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Huejotzingo",
                'imagenes' => [
                    "/imagenes/Huejotzingo/DSC01542.jpg",
                    "/imagenes/Huejotzingo/ENTRADA.jpeg",
                    "/imagenes/Huejotzingo/ENTRADA1.jpeg",
                ],
                'direccion' => [
                    'calle' => "Blvd. Huejotzingo Aeropuerto 2152",
                    'colonia' => "Cuarto Barrio",
                    'municipio' => "Huejotzingo",
                    'estado' => "Puebla",
                    'cp' => "74160",
                    'telefono' => "55 4742 2801",
                    'email' => "contacto@cholula.cecyte.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 15:00 hrs",
                    'latitud' => 19.176172818543616,
                    'longitud' => -98.38995186120725
                ],
                'directores' => [
                    [
                        'nombre' => "Sonia Abigail Espinoza Robles",
                        'cargo' => "Directora del Plantel",
                        'foto' => "/imagenes/Huejotzingo/1000-Sonia Abigail Espinoza Robles.jpg",
                    ],
                    [
                        'nombre' => "Jonathan Luis Barrón Bracho",
                        'cargo' => "Subdirector del Plantel",
                        'foto' => "/imagenes/Huejotzingo/1193-Jonathan Luis Barrón Bracho.JPG",
                    ],
                    [
                        'nombre' => "Magaly Amaro Amaro",
                        'cargo' => "Coordinadora Académica",
                        'foto' => "/imagenes/Huejotzingo/1551-Magaly Amaro Amaro.jpg",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel12' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Magdalena",
                'imagenes' => [
                    "/imagenes/Magdalena/Plantel/Actual/plantel.jpg",
                    "/imagenes/Magdalena/Plantel/Actual/plante1.jpg",
                ],
                'direccion' => [
                    'calle' => "De la Juarez",
                    'colonia' => "La Magdalena Tetela Morelos",
                    'municipio' => "La Magdalena Tetela Morelos",
                    'estado' => "Puebla",
                    'cp' => "75118",
                    'telefono' => "223 275 5989",
                    'email' => "contacto@cholula.cecyte.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 15:00 hrs",
                    'latitud' => 19.04220230830243,
                    'longitud' => -97.94638553237395
                ],
                'directores' => [
                    [
                        'nombre' => "Roberto Antonio Velzaquez Tlaseca",
                        'cargo' => "Director del Plantel",
                        'foto' => "/imagenes/Magdalena/Directivos/01-Director.jpg",
                    ],
                    [
                        'nombre' => "Gerardo Ivan Lozano Santos",
                        'cargo' => "Subdirector del Plantel",
                        'foto' => "/imagenes/Magdalena/Directivos/02-Subditector.jpg",
                    ],
                    [
                        'nombre' => "Maria del Carmen Ramirez Maldonado",
                        'cargo' => "Administrativa del Plantel",
                        'foto' => "/imagenes/Magdalena/Directivos/05-Administrativa.jpg",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel13' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Tecamachalco",
                'imagenes' => [
                    "/imagenes/Magdalena/Plantel/Actual/plantel.jpg",
                    "/imagenes/Magdalena/Plantel/Actual/plante1.jpg",
                ],
                'direccion' => [
                    'calle' => "KM. Calle 8 Ote 1",
                    'colonia' => "Centro",
                    'municipio' => "San Mateo Tlaixpan",
                    'estado' => "Puebla",
                    'cp' => "72810",
                    'telefono' => "249 422 2637",
                    'email' => "contacto@cholula.cecyte.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 15:00 hrs",
                    'latitud' => 18.90222038597174,
                    'longitud' => -97.74182151703407
                ],
                'directores' => [
                    [
                        'nombre' => "Roberto Antonio Velzaquez Tlaseca",
                        'cargo' => "Director del Plantel",
                        'foto' => "/imagenes/Magdalena/Directivos/01-Director.jpg",
                    ],
                    [
                        'nombre' => "Gerardo Ivan Lozano Santos",
                        'cargo' => "Subdirector del Plantel",
                        'foto' => "/imagenes/Magdalena/Directivos/02-Subditector.jpg",
                    ],
                    [
                        'nombre' => "Maria del Carmen Ramirez Maldonado",
                        'cargo' => "Administrativa del Plantel",
                        'foto' => "/imagenes/Magdalena/Directivos/05-Administrativa.jpg",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel14' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Tehuitzingo",
                'imagenes' => [
                    "/imagenes/TEHUITZINGO/Entrada_Pricipal_Plantel.png",
                    "/imagenes/TEHUITZINGO/Explanada_Edficio1.png",
                    "/imagenes/TEHUITZINGO/Explanada_Edficio2.png",
                ],
                'direccion' => [
                    'calle' => "Lazaro Cardenas Primera Seccion",
                    'colonia' => "Colonia Centro",
                    'municipio' => "Tehuitzingo",
                    'estado' => "Puebla",
                    'cp' => "74800",
                    'telefono' => "275 432 6026",
                    'email' => "contacto@cholula.cecyte.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 15:00 hrs",
                    'latitud' => 18.33681249536735,
                    'longitud' => -98.2841749262863
                ],
                'directores' => [
                    [
                        'nombre' => "",
                        'cargo' => "Director del Plantel",
                        'foto' => "/imagenes/TEHUITZINGO/1_20240822_181844_0000.png",
                    ],
                    [
                        'nombre' => "",
                        'cargo' => "Subdirector del Plantel",
                        'foto' => "/imagenes/TEHUITZINGO/2_20240822_181844_0001.png",
                    ],
                    [
                        'nombre' => "Ruben Flores Sanchez",
                        'cargo' => "Coordinador Académico",
                        'foto' => "/imagenes/TEHUITZINGO/Sub director Ruben Flores Sanchez.png",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel15' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Tlacotepec",
                'imagenes' => [
                    "/imagenes/Tlacotepec/PLANTEL/IMG_1679.JPG",
                    "/imagenes/Tlacotepec/PLANTEL/IMG_1699.JPG",
                    "/imagenes/Tlacotepec/PLANTEL/IMG_1682.JPG",
                ],
                'direccion' => [
                    'calle' => "Av. Hidalgo",
                    'colonia' => "",
                    'municipio' => "Tlacotepec",
                    'estado' => "Morelos",
                    'cp' => "62895",
                    'telefono' => "(222) 123 4567",
                    'email' => "contacto@cholula.cecyte.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 15:00 hrs",
                    'latitud' => 18.857791647835953,
                    'longitud' => -98.76778905216558
                ],
                'directores' => [
                    [
                        'nombre' => "Gualberto Ramírez Arenas",
                        'cargo' => "Director del Plantel",
                        'foto' => "/imagenes/Tlacotepec/PERSONAL DIRECTIVO/1155.JPG",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel16' => [
                'tipo' => "emsad",
                'nombre' => "Plantel Tlaolantongo",
                'imagenes' => [
                    "/imagenes/Tlaolantongo/TLAOLANTONGO1.JPG",
                    "/imagenes/Tlaolantongo/TLAOLANTONGO2.JPG",
                    "/imagenes/Tlaolantongo/TLAOLANTONGO5.JPG",
                ],
                'direccion' => [
                    'calle' => "Piv. Guadalupe Victoria",
                    'colonia' => "Colonia Centro",
                    'municipio' => "San Pedro Tlaolantongo",
                    'estado' => "Puebla",
                    'cp' => "73271",
                    'telefono' => "(222) 123 4567",
                    'email' => "contacto@cholula.cecyte.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 15:00 hrs",
                    'latitud' => 20.229396085707762,
                    'longitud' => -97.80535457468302
                ],
                'directores' => [
                    [
                        'nombre' => "ING. Noe Dionicio Sanchez",
                        'cargo' => "Director del Plantel",
                        'foto' => "/imagenes/Tlaolantongo/Responsable.jpg",
                    ],
                    [
                        'nombre' => "Juana Lopez Reyes",
                        'cargo' => "Auxiliar del Plantel",
                        'foto' => "/imagenes/Tlaolantongo/Auxiliar.jpg",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel17' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Venustiano Carranza",
                'imagenes' => [
                    "/imagenes/VENUSTIANO CARRANZA/imag1.jpeg",
                    "/imagenes/VENUSTIANO CARRANZA/imag2.jpeg",
                    "/imagenes/VENUSTIANO CARRANZA/imag3.jpeg",
                ],
                'direccion' => [
                    'calle' => "Calle Flores Magon",
                    'colonia' => "Col. Las Granjas",
                    'municipio' => "Venustiano Carranza",
                    'estado' => "Puebla",
                    'cp' => "73040",
                    'telefono' => "746 881 0768",
                    'email' => "contacto@cholula.cecyte.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 15:00 hrs",
                    'latitud' => 20.51117087012702,
                    'longitud' => -97.66794403439089
                ],
                'directores' => [
                    [
                        'nombre' => "Cesar Pala Ramirez",
                        'cargo' => "Director del Plantel",
                        'foto' => "/imagenes/VENUSTIANO CARRANZA/Director.jpg",
                    ],
                    [
                        'nombre' => "Floralia Vite Hernandez",
                        'cargo' => "Coordinadora Academica",
                        'foto' => "/imagenes/VENUSTIANO CARRANZA/Coordinadora Academica.jpg",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ],
            'plantel18' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Xicotepec",
                'imagenes' => [
                    "/imagenes/XICOTEPEC/Plantel Xicotepec/Plantel Xicotepec1.jpg",
                    "/imagenes/XICOTEPEC/Plantel Xicotepec/Plantel Xicotepec2.jpg",
                    "/imagenes/XICOTEPEC/Plantel Xicotepec/Plantel Xicotepec5.jpg",
                ],
                'direccion' => [
                    'calle' => "",
                    'colonia' => "",
                    'municipio' => "Xicotepec de Juarez",
                    'estado' => "Puebla",
                    'cp' => "73080",
                    'telefono' => "764 101 0038",
                    'email' => "contacto@cholula.cecyte.edu.mx",
                    'horario' => "Lunes a Viernes de 7:00 a 15:00 hrs",
                    'latitud' => 20.248852231066234,
                    'longitud' => -97.95657137653139
                ],
                'directores' => [
                    [
                        'nombre' => "Pedro Enrique Trejo",
                        'cargo' => "Director del Plantel",
                        'foto' => "/imagenes/XICOTEPEC/Directivos Xicotepec/Director.jpeg",
                    ],
                    [
                        'nombre' => "Antonio Marquez",
                        'cargo' => "Control Escolar",
                        'foto' => "/imagenes/XICOTEPEC/Directivos Xicotepec/Ctrl_Escolar.jpeg",
                    ],
                    [
                        'nombre' => "Oscar Garcia",
                        'cargo' => "Academico del Plantel",
                        'foto' => "/imagenes/XICOTEPEC/Directivos Xicotepec/Academico.jpeg",
                    ],
                ],
                'carreras' => [
                    [ 'nombre' => "Derecho", 'duracion' => "4 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Arquitectura", 'duracion' => "5 años", 'modalidad' => "Presencial" ],
                    [ 'nombre' => "Contaduría Pública", 'duracion' => "4 años", 'modalidad' => "En línea" ]
                ]
            ]
        ];
    }
}
