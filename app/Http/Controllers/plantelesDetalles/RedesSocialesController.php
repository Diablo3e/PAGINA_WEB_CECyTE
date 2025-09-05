<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\RedesSociales;
use App\Http\Controllers\Controller;

class RedesSocialesController extends Controller
{
    public function getRedesSocialesPorPlantel($plantelId):array {
        return RedesSociales::where('plantel_id',$plantelId)
        ->select('nombre', 'link')
        ->get()
        ->toArray();
    }
}
