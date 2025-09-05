<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\SeguimientoEgresados;
use App\Http\Controllers\Controller;

class SeguimientoEgresadosController extends Controller
{
    public function getSeguimientoEgresadosPorPlantel($plantelId):array {
        return SeguimientoEgresados::where('plantel_id',$plantelId)
        ->select('nombre', 'carrera', 'testimonio')
        ->get()
        ->toArray();
    }
}
