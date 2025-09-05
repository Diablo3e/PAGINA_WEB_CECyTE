<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\Carrusel;
use App\Http\Controllers\Controller;

class CarruselController extends Controller
{
    public function getImagenesCarruselPorPlantel($plantelId):array {
        return Carrusel::where('plantel_id',$plantelId)
        ->select('imagenes')
        ->get()
        ->toArray();
    }
}
