<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\ExtensionEducativa;
use App\Http\Controllers\Controller;

class ExtensionEducativaController extends Controller
{
    public function getExtensionEducativaPorPlantel($plantelId):array{
        return ExtensionEducativa::where('plantel_id',$plantelId)
        ->select('nombre','documento')
        ->get()
        ->toArray();
    }
}
