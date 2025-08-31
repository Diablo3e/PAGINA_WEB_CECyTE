<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\redesSociales;
use App\Http\Controllers\Controller;

class RedesSocialesController extends Controller
{
    public function getRedesSocialesPorPlantel($plantelId):array {
        return redesSociales::where('plantel_id',$plantelId)
        ->select('nombre', 'link')
        ->get()
        ->toArray();
    }
}
