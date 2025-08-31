<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\horario;
use App\Http\Controllers\Controller;

class HorarioController extends Controller
{
    public function getHorarioPorPlantel($plantelId):array {
        return horario::where('plantel_id',$plantelId)
        ->select('grupo', 'pdf')
        ->get()
        ->toArray();
    }
}
