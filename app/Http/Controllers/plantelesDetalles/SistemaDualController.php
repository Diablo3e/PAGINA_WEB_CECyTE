<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\SistemaDual;
use App\Http\Controllers\Controller;

class SistemaDualController extends Controller
{
    public function getSistemaDualPorPlantel($plantelId):array{
        return SistemaDual::where('plantel_id',$plantelId)
        ->select('banner')
        ->get()
        ->toArray();
    }
}
