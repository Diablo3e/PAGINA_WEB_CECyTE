<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\search;
use function PHPSTORM_META\map;

class SearchController extends Controller
{
    public function searchCarreras($query){
        $resultCarreras = DB::table('carreras')
            ->where('nombre','like','%'. $query .'%')
            ->select('nombre')
            ->get()
            ->map(function ($fila){
                //Normalizar nombre de tabla y quitar columna que no se utiliza
                $fila->resultado = $fila->nombre;
                unset($fila->nombre);
                //Construccion del url
                $strOriginal = $fila->resultado;
                //Eliminar caracteres con acentos y ñ
                $url = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $strOriginal);
                $url = strtolower($url);
                //Cambiar espacios por - y eliminar los ' resultantes de eliminar acentos
                $url = str_ireplace(" ", "-", $url);
                $url = str_ireplace("'", "", $url);
                $url = '/' . $url;
                $fila->url = $url;
                return $fila;
            });
        
        return $resultCarreras;
    }

    public function searchPlanteles($query){
        $resultPlanteles = DB::table('planteles')
        ->where('nombre','like','%'. $query .'%')
        ->select('id', 'nombre')
        ->get()
        ->map(function($fila){
            //Normalizar nombre de tabla y quitar columna que no se utiliza
            $fila->resultado = $fila->nombre;
            unset($fila->nombre);
            //Construccion del url
            $url = '/planteles/detalle/plantel' . $fila->id;
            unset($fila->id);
            $fila->url = $url;
            return $fila;
        });

        return $resultPlanteles;
    }

    public function searchAll($query){
    //La busqueda tiene como objetivo regresar un array donde cada entrada contenga los elementos "resultado" con el nombre de lo que se encontro y "url" con el url que se tiene que usar para que el elemento generado en search.blade.php redireccione a la pagina correcta. El como se generen estas 2 cosas son personalizadas en cada metodo de arriba, cada uno se dedica a hacer la busqueda en su tabla designada
        $resultCarreras = SearchController::searchCarreras($query);
        $resultPlanteles = SearchController::searchPlanteles($query);
        $resultados = $resultCarreras->merge($resultPlanteles);
        
        return view('search', compact('resultados'));

    }

}