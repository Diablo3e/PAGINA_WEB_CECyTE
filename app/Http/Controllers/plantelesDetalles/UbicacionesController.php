<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ubicaciones;

class UbicacionesController extends Controller
{
    public function getUbicacionesPorPlantel($plantelId):array {
        return Ubicaciones::where('plantel_id',$plantelId)
        ->select('nombre', 'link')
        ->get()
        ->toArray();
    }
}
