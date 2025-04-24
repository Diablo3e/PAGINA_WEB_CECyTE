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

    // Método para la nueva página informativa
    public function paginaInformativa()
    {
        return view('pagina_informativa');
    }
}

