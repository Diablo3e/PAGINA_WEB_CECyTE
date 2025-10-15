<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\planesEstudio;
use App\Http\Controllers\Controller;

class PlanesEstudioController extends Controller
{
    public function getPlanesEstudioPorPlantel($plantelId):array {
        return planesEstudio::where('plantel_id',$plantelId)
            ->select('carrera', 'documento')
            ->get()
            ->toArray();
    }
}
