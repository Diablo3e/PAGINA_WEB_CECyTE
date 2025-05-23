<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Plantel;
use App\Models\Carrera;

class FormularioController extends Controller
{
    public function mostrarFormulario()
    {
        // Obtener los datos de la base de datos
        $planteles = DB::table('planteles')->get();
        $carreras = DB::table('carreras')->get();

        // Pasar los datos a la vista
        return view('index', compact(  'planteles', 'carreras'));
    }

public function enviarFormulario(Request $request)
{
    // Validar datos con los nombres que envía el formulario
    $request->validate([
        'plantel_id' => 'required|exists:planteles,id',
        'carrera_id' => 'required|exists:carreras,id',
        'nombre_completo' => 'required|string|max:255',
        'celular' => 'required|string|max:20',
        'correo' => 'required|email|max:255',
    ]);

    try {
        // Guardar datos en la base de datos (tabla solicitudes o formularios)
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

    public function getPlantelesByNivel($nivel_id)
{
    // Filtrar planteles que pertenezcan a ese nivel y sean Bachillerato Técnico
    $planteles = DB::table('planteles')
        ->where('nivel_id', $nivel_id)
        ->get();

    return response()->json($planteles);
}


public function getCarrerasByPlantel($plantel_id)
{
    $plantel = \App\Models\Plantel::with('carreras')->find($plantel_id);

    if (!$plantel) {
        return response()->json([], 404); // Plantel no encontrado
    }

    // Retorna las carreras asociadas al plantel en formato JSON
    return response()->json($plantel->carreras);
}


}
