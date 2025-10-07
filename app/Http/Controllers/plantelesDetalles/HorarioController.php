<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\Horario;
use App\Http\Controllers\Controller;

class HorarioController extends Controller
{
    public function getHorarioPorPlantel($plantelId):array {
        return Horario::where('plantel_id',$plantelId)
        ->select('grupo', 'pdf')
        ->get()
        ->toArray();
    }
}
