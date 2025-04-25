<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    // Método para la página principal (index.blade.php)
    public function index()
    {
        return view('index');
    }

    // Método para la pagina estandar del plantel//
    public function paginaInformativa()
    {
        return view('pagina_informativa');
    }
    //la del directorio//
    public function mostrarDirectorio()
    {
    return view('directorio'); // Este sería el nombre del Blade
    }
    //la de la bolsa//
    public function mostrarBolsa()
    {
    return view('bolsa'); // Este sería el nombre del Blade
    }
}