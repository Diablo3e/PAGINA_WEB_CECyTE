<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\practicasProfesionales;
use App\Http\Controllers\Controller;

class PracticasProfesionalesController extends Controller
{
    public function getPracticasProfesionalesPorPlantel($plantelId):array {
        return practicasProfesionales::where('plantel_id',$plantelId)
        ->select('institucion', 'descripcion', 'correo', 'telefono', 'direccion')
        ->get()
        ->toArray();
    }
}
