<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\Encabezado;
use App\Http\Controllers\Controller;

class EncabezadoController extends Controller
{
    public function getEncabezadoPorPlantel($plantelId):array {
        return Encabezado::where('plantel_id',$plantelId)
        ->select('nombre', 'tipo', 'descripcion')
        ->get()
        ->toArray();
    }
}
