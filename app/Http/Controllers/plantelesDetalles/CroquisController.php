<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Croquis;

class CroquisController extends Controller
{
    public function getPersonalPorPlantel($plantelId):array {
        return Croquis::where('plantel_id',$plantelId)
        ->select('nombre', 'documento')
        ->get()
        ->toArray();
    }
}
