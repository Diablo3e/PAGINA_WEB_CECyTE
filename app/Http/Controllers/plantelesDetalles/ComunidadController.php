<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\Comunidad;
use App\Http\Controllers\Controller;

class ComunidadController extends Controller
{
    public function getComunidadPorPlantel($plantelId):array {
        return Comunidad::where('plantel_id',$plantelId)
        ->select('imagen')
        ->get()
        ->toArray();;
    }
}
