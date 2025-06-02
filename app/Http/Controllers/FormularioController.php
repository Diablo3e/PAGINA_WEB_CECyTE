<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Plantel;

class FormularioController extends Controller
{
    public function mostrarFormulario()
    {
        $planteles = DB::table('planteles')->get();

        return view('index', compact('planteles'));
    }

    public function enviarFormulario(Request $request)
    {
        $request->validate([
            'plantel_id' => 'required|exists:planteles,id',
            'carrera_id' => 'required|exists:carreras,id',
            'nombre_completo' => 'required|string|max:255',
            'celular' => 'required|string|max:20',
            'correo' => 'required|email|max:255',
        ]);

        try {
            DB::table('formularios')->insert([
                'plantel_id' => $request->plantel_id,
                'carrera_id' => $request->carrera_id,
                'nombre_completo' => $request->nombre_completo,
                'celular' => $request->celular,
                'correo' => $request->correo,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('formulario.mostrar')->with('success', 'Formulario enviado correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('formulario.mostrar')->with('error', 'Hubo un problema al guardar el formulario. Intenta de nuevo.');
        }
    }

    public function getCarrerasByPlantel($plantel_id)
    {
        $plantel = Plantel::with('carreras')->find($plantel_id);

        if (!$plantel) {
            return response()->json([], 404);
        }

        return response()->json($plantel->carreras);
    }
public function getFormularioDatos()
{
    return response()->json([
        'mensaje' => 'Datos cargados correctamente'
    ]);
}

public function obtenerCarreras($id)
{
    $carreras = DB::table('plantel_carrera')
        ->join('carreras', 'plantel_carrera.carrera_id', '=', 'carreras.id')
        ->where('plantel_carrera.plantel_id', $id)
        ->select('carreras.id', 'carreras.nombre')
        ->get();

    return response()->json($carreras);
}
}
