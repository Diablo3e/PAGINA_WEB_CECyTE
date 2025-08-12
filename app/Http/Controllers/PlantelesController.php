<?php

namespace App\Http\Controllers;
use App\Models\Plantel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

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
                'tipo' => "cecyte",
                'nombre' => "Plantel Tlacotepec",
            ],
            'plantel16' => [
                'tipo' => "emsad",
                'nombre' => "Plantel Tlaolantongo",
            ],
            'plantel17' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Venustiano Carranza",
            ],
            'plantel18' => [
                'tipo' => "cecyte",
                'nombre' => "Plantel Xicotepec",
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
}