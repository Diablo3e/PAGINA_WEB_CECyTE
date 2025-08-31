<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\encabezado;
use App\Http\Controllers\Controller;

class EncabezadoController extends Controller
{
    public function getEncabezadoPorPlantel($plantelId):array {
        return encabezado::where('plantel_id',$plantelId)
        ->select('nombre', 'tipo', 'descripcion')
        ->get()
        ->toArray();
    }
}
