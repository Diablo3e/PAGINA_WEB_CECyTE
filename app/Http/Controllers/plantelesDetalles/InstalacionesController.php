<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\instalaciones;

class InstalacionesController extends Controller
{
    public function getInstalacionesPorPlantel($plantelId):array {
        return instalaciones::where('plantel_id',$plantelId)
        ->select('imagen')
        ->get()
        ->toArray();
    }
}
