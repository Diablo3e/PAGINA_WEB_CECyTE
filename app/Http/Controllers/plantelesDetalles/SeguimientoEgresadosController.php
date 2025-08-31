<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\seguimientoEgresados;
use App\Http\Controllers\Controller;

class SeguimientoEgresadosController extends Controller
{
    public function getSeguimientoEgresadosPorPlantel($plantelId):array {
        return seguimientoEgresados::where('plantel_id',$plantelId)
        ->select('nombre', 'carrera', 'testimonio')
        ->get()
        ->toArray();
    }
}
