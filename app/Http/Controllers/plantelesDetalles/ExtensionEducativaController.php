<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\extensionEducativa;
use App\Http\Controllers\Controller;

class ExtensionEducativaController extends Controller
{
    public function getExtensionEducativaPorPlantel($plantelId):array{
        return extensionEducativa::where('plantel_id',$plantelId)
        ->select('imagen')
        ->get()
        ->toArray();
    }
}
