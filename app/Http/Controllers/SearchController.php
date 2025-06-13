<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function searchCarreras($query){
        $resultCarreras = DB::table('carreras')
            ->where('nombre','like','%'. $query .'%')
            ->select('nombre')
            ->get();
        
        return response()->json($resultCarreras);
    }

    public function searchPlanteles($query){
        
    }

}