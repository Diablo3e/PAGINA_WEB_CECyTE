<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\ServicioSocial;
use App\Http\Controllers\Controller;

class ServicioSocialController extends Controller
{
    public function getServicioSocialPorPlantel($plantelId):array {
        return ServicioSocial::where('plantel_id',$plantelId)
        ->select('institucion', 'descripcion', 'correo', 'telefono', 'direccion')
        ->get()
        ->toArray();
    }
}
