<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\Personal;
use App\Http\Controllers\Controller;

class PersonalController extends Controller
{
    public function getPersonalPorPlantel($plantelId):array {
        return Personal::where('plantel_id',$plantelId)
        ->select('foto', 'puesto')
        ->get()
        ->toArray();
    }
}
