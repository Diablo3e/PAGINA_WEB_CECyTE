<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\comunidad;
use App\Http\Controllers\Controller;

class ComunidadController extends Controller
{
    public function getComunidadPorPlantel($plantelId):array {
        return comunidad::where('plantel_id',$plantelId)
        ->select('imagen')
        ->get()
        ->toArray();;
    }
}
