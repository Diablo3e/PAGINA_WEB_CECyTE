<?php

use App\Http\Controllers\FormularioController;
use Illuminate\Support\Facades\Route;
use App\Models\Modalidad;
use App\Models\Nivel;
use App\Models\Plantel;
use App\Models\Carrera;

// Ruta para la página principal (index.blade.php)
Route::get('/', function () {
    $items = [
        ['name' => 'Inicio', 'url' => url('/')],
        ['name' => 'Admisión', 'url' => url('/admission')],
        ['name' => 'Carreras', 'url' => url('/carreras')],
        ['name' => 'Contacto', 'url' => url('/contact')],
    ];

    // Obtener los datos de la base de datos
    $modalidades = Modalidad::all();
    $niveles = Nivel::all();
    $planteles = Plantel::all();
    $carreras = Carrera::all();

    return view('index', compact('items', 'modalidades', 'niveles', 'planteles', 'carreras'));
});

// Ruta para la página de bienvenida
Route::get('/welcome', function () {
    return view('welcome');
});

// ✅ Ruta para mostrar el formulario con datos dinámicos (Usando el controlador)
Route::get('/formulario', [FormularioController::class, 'mostrarFormulario'])->name('formulario.mostrar');
Route::post('/formulario/enviar', [FormularioController::class, 'enviarFormulario'])->name('formulario.enviar');

// ✅ Ruta para obtener datos en formato JSON (opcional para AJAX)
Route::get('/api/formulario-datos', function () {
    return response()->json([
        'modalidades' => \DB::table('modalidades')->get(),
        'niveles' => \DB::table('niveles')->get(),
        'planteles' => \DB::table('planteles')->get(),
        'carreras' => \DB::table('carreras')->get(),
    ]);
});

// ✅ Otras rutas
Route::get('/mapa', function () {
    return view('components.mapa_carrusel');
});

Route::get('/carreras', function () {
    return view('components.pestanas_carrera');
});
Route::get('/convenios', function () {
    return view('Convenios', ['noFondo' => true]);
})->name('convenios');
Route::get('/Admision', function () {
    return view('Admision', ['noFondo' => true]);
})->name('Admision');
Route::get('/Planteles', function () {
    return view('Planteles', ['noFondo' => true]);
})->name('Planteles');
Route::get('/Carerras', function () {
    return view('Carreras', ['noFondo' => true]);
})->name('Carreras');
// Ruta para obtener los planteles por nivel
Route::get('/planteles/{nivel_id}', [FormularioController::class, 'getPlantelesByNivel']);

// Ruta para obtener las carreras por plantel
Route::get('/carreras/{plantel_id}', [FormularioController::class, 'getCarrerasByPlantel']);
