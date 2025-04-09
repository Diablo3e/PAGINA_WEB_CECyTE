<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormularioController extends Controller
{
    public function mostrarFormulario()
    {
        // Obtener los datos de la base de datos
        $modalidades = DB::table('modalidades')->select('id', 'nombre')->get();
        $niveles = DB::table('niveles')->get();
        $planteles = DB::table('planteles')->get();
        $carreras = DB::table('carreras')->get();

        // Pasar los datos a la vista
        return view('index', compact('modalidades', 'niveles', 'planteles', 'carreras'));
    }

    public function enviarFormulario(Request $request)
    {
        // Validar datos
        $request->validate([
            'modalidad' => 'required',
            'nivel' => 'required',
            'plantel' => 'required',
            'carrera' => 'required',
            'nombre_completo' => 'required',
            'celular' => 'required',
            'correo' => 'required|email',
        ]);

        try {
            // Guardar datos en la base de datos
            DB::table('formularios')->insert([
                'modalidad_id' => $request->modalidad,
                'nivel_id' => $request->nivel,
                'plantel_id' => $request->plantel,
                'carrera_id' => $request->carrera,
                'nombre_completo' => $request->nombre_completo,
                'celular' => $request->celular,
                'correo' => $request->correo,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            // Redireccionar con mensaje de éxito
            return redirect()->route('formulario.mostrar')->with('success', 'Formulario enviado correctamente.');
        } catch (\Exception $e) {
            // Capturar cualquier error y mostrar mensaje de error
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
    // Obtener todas las carreras que están relacionadas con el plantel seleccionado
    $carreras = DB::table('carreras')
        ->join('plantel_carrera', 'carreras.id', '=', 'plantel_carrera.carrera_id')
        ->where('plantel_carrera.plantel_id', $plantel_id)
        ->select('carreras.id', 'carreras.nombre')
        ->get();

    // Retornar las carreras como respuesta JSON
    return response()->json($carreras);
}

}
