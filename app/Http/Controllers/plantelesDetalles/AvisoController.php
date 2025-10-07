<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\Aviso;
use App\Http\Controllers\Controller;

class AvisoController extends Controller
{
    public function getAvisosPorPlantel($plantelId): array{
        return Aviso::where('plantel_id',$plantelId)
        ->select('fecha', 'cuerpo')
        ->get()
        ->toArray();
    }
}
