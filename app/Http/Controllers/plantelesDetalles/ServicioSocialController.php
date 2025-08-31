<?php

namespace App\Http\Controllers\plantelesDetalles;

use Illuminate\Http\Request;
use App\Models\servicioSocial;
use App\Http\Controllers\Controller;

class ServicioSocialController extends Controller
{
    public function getServicioSocialPorPlantel($plantelId):array {
        return servicioSocial::where('plantel_id',$plantelId)
        ->select('institucion', 'descripcion', 'correo', 'telefono', 'direccion')
        ->get()
        ->toArray();
    }
}
