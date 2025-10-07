<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Instalaciones;

class InstalacionesController extends Controller
{
    public function getInstalacionesPorPlantel($plantelId):array {
        return Instalaciones::where('plantel_id',$plantelId)
        ->select('imagen')
        ->get()
        ->toArray();
    }
}
