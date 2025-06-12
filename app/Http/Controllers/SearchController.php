<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Carrera;


class SearchController extends Controller
{
    public function searchCarreras($query){
        $resultCarreras = DB::table('carreras')
            ->where('nombre','like','%'. $query .'%')
            ->select('nombre')
            ->get();
        
        return response()->json($resultCarreras);
    }


}