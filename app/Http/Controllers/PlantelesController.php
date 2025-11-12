<?php

namespace App\Http\Controllers;

use App\Models\Plantel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

//Controladores de las secciones de planteles detalles
use App\Http\Controllers\plantelesDetalles\AvisoController;
use App\Http\Controllers\plantelesDetalles\CarruselController;
use App\Http\Controllers\plantelesDetalles\ComunicadoController;
use App\Http\Controllers\plantelesDetalles\ComunidadController;
use App\Http\Controllers\plantelesDetalles\EncabezadoController;
use App\Http\Controllers\plantelesDetalles\ExtensionEducativaController;
use App\Http\Controllers\plantelesDetalles\HorarioController;
use App\Http\Controllers\plantelesDetalles\InstalacionesController;
use App\Http\Controllers\plantelesDetalles\OfertasEmpleoController;
use App\Http\Controllers\plantelesDetalles\PersonalController;
use App\Http\Controllers\plantelesDetalles\PracticasProfesionalesController;
use App\Http\Controllers\plantelesDetalles\RedesSocialesController;
use App\Http\Controllers\plantelesDetalles\SeguimientoEgresadosController;
use App\Http\Controllers\plantelesDetalles\ServicioSocialController;
use App\Http\Controllers\plantelesDetalles\SistemaDualController;
use App\Http\Controllers\plantelesDetalles\UbicacionesController;
use App\Http\Controllers\plantelesDetalles\CroquisController;
use App\Models\extensionEducativa;

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

        return view('planteles_detalle');
    }

     public function carrerasDePlantel($id)
    {
        $carreras = DB::table('plantel_carrera')
            ->join('carreras', 'plantel_carrera.carrera_id', '=', 'carreras.id')
            ->where('plantel_carrera.plantel_id', $id)
            ->where('activa',1)
            ->select('carreras.id', 'carreras.nombre')
            ->get();

        return response()->json($carreras);
    }

    private function getPlantelesData()
    {
        return [
            'plantel1' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Cholula",
            ],
            'plantel2' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Chignahuapan",
            ],
            'plantel3' => [
                'tipo' => "emsad",
                'nombre' => "Plantel EMSaD Ameluca",
            ],
            'plantel4' => [
                'tipo' => "emsad",
                'nombre' => "Plantel EMSaD Boca del Monte",
            ],
            'plantel5' => [
                'tipo' => "emsad",
                'nombre' => "Plantel EMSaD Buena Vista",
            ],
            'plantel6' => [
                'tipo' => "emsad",
                'nombre' => "Plantel EMSaD La Pahua",
            ],
            'plantel7' => [
                'tipo' => "emsad",
                'nombre' => "Plantel EMSaD Mexcaltochintla",
            ],
            'plantel8' => [
                'tipo' => "emsad",
                'nombre' => "Plantel EMSaD Naranjastitla",
            ],
            'plantel9' => [
                'tipo' => "emsad",
                'nombre' => "Plantel EMSaD Santa Elena",
            ],
            'plantel10' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Guadalupe Victoria",
            ],
            'plantel11' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Huejotzingo",
            ],
            'plantel12' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Magdalena",
            ],
            'plantel13' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Tecamachalco",
            ],
            'plantel14' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Tehuitzingo",

            ],
            'plantel15' => [
                'tipo' => "emsad",
                'nombre' => "Plantel Tlaolantongo",
            ],
            'plantel16' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Tlacotepec",
            ],
            'plantel17' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Venustiano Carranza",
            ],
            'plantel18' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Xicotepec",
            ],
            'plantel19' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Cuautempan",
            ]
        ];
    }

    public function getImagenesGaleria($plantel, $tipoDeGaleria){
        $plantel = Str::slug($plantel);
        $tipoDeGaleria = Str::slug($tipoDeGaleria);
        $path = 'imagenes/'. $plantel . '/' . $tipoDeGaleria;
        if (File::exists($path) || File::isDirectory($path)){
            $imagenes = collect(File::files($path))->map(function($imagen) use ($path){
                return asset( $path . '/' . $imagen->getFilename());
            });
            return response()->json($imagenes);
        }else{
            return response()->json([]);
        }
    }

    public function getDetallesPlanteles($plantelId){
        //Controladores
        $encabezados = new EncabezadoController();
        $instalaciones = new InstalacionesController();
        $carrusel = new CarruselController();
        $ubicaciones = new UbicacionesController();
        $croquis = new CroquisController();
        $personal = new PersonalController();
        $comunicados = new ComunicadoController();
        $comunidad = new ComunidadController();
        $ofertasEmpleo = new OfertasEmpleoController();
        $servicioSocial = new ServicioSocialController();
        $practicasProfesionales = new PracticasProfesionalesController();
        $redesSociales = new RedesSocialesController();
        $seguimientoEgresados = new SeguimientoEgresadosController();
        $sistemaDual = new SistemaDualController();
        $extensionEducativa = new ExtensionEducativaController();
        $avisos = new AvisoController();
        $horarios = new HorarioController();

        $data = [
            'encabezado' => $encabezados->getEncabezadoPorPlantel($plantelId),
            'imagenes' => collect($carrusel->getImagenesCarruselPorPlantel($plantelId))->pluck('imagenes')->all(),
            'instalaciones' => collect($instalaciones->getInstalacionesPorPlantel($plantelId))->pluck('imagen')->all(),
            'mapas' => [
                'ubicaciones' => $ubicaciones->getUbicacionesPorPlantel($plantelId),
                'croquis' => $croquis->getCroquisPorPlantel($plantelId),
            ],
            'personal' => $personal->getPersonalPorPlantel($plantelId),
            'comunicados' =>$comunicados->getComunicadosPorPlantel($plantelId),
            'comunidad' => collect($comunidad->getComunidadPorPlantel($plantelId))->pluck('imagen')->all(),
            'vinculacion' => [
                'ofertasDeEmpleo' => $ofertasEmpleo->getOfertasEmpleoPorPlantel($plantelId),
                'servicioSocial' => $servicioSocial->getServicioSocialPorPlantel($plantelId),
                'practicasProfesionales' => $practicasProfesionales->getPracticasProfesionalesPorPlantel($plantelId),
                'redesSociales' => $redesSociales->getRedesSocialesPorPlantel($plantelId),
                'seguimientoEgresados' => $seguimientoEgresados->getSeguimientoEgresadosPorPlantel($plantelId),
                'sistemaDual' => $sistemaDual->getSistemaDualPorPlantel($plantelId),
            ],
            'extEducativa' => $extensionEducativa->getExtensionEducativaPorPlantel($plantelId),
            'controlEscolar' => [
                'avisos' => $avisos->getAvisosPorPlantel($plantelId),
                'horarios' => $horarios->getHorarioPorPlantel($plantelId)
            ],
        ];

        $arrayFinal = array_merge($data);

        return response()->json($arrayFinal);
    }
}