<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\OfertasEmpleo;
use App\Http\Controllers\Controller;

class OfertasEmpleoController extends Controller
{
    public function getOfertasEmpleoPorPlantel($plantelId):array {
        return OfertasEmpleo::where('plantel_id',$plantelId)
        ->select('empleador', 'imagen')
        ->get()
        ->toArray();
    }
}
