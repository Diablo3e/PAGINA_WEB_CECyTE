<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\comunicado;
use App\Http\Controllers\Controller;

class ComunicadoController extends Controller
{
    public function getComunicadosPorPlantel($plantelId):array {
        return comunicado::where('plantel_id',$plantelId)
        ->select('titulo', 'pdf')
        ->get()
        ->toArray();
    }
}
