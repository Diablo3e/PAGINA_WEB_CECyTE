<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\PracticasProfesionales;
use App\Http\Controllers\Controller;

class PracticasProfesionalesController extends Controller
{
    public function getPracticasProfesionalesPorPlantel($plantelId):array {
        return PracticasProfesionales::where('plantel_id',$plantelId)
        ->select('institucion', 'descripcion', 'correo', 'telefono', 'direccion')
        ->get()
        ->toArray();
    }
}
