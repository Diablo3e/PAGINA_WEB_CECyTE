<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\aviso;
use App\Http\Controllers\Controller;

class AvisoController extends Controller
{
    public function getAvisosPorPlantel($plantelId): array{
        return aviso::where('plantel_id',$plantelId)
        ->select('fecha', 'cuerpo')
        ->get()
        ->toArray();
    }
}
