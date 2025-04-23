<?php

use App\Http\Controllers\FormularioController;
use Illuminate\Support\Facades\Route;
use App\Models\Modalidad;
use App\Models\Nivel;
use App\Models\Plantel;
use App\Models\Carrera;
use App\Http\Controllers\PlantelesController;

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

Route::get('/convenios-v2', function () {
    return view('conv2', ['noFondo' => true]);
})->name('convenios.v2');


Route::get('/Admision', function () {
    return view('Admision', ['noFondo' => true]);
})->name('Admision');
Route::get('/Planteles', function () {
    return view('Planteles', ['noFondo' => true]);
})->name('Planteles');
Route::get('/Carerras', function () {
    return view('Carreras', ['noFondo' => true]);
})->name('Carreras');
Route::get('/Fuentes_Alternas', function () {
    return view('Fuentes_Alternas', ['noFondo' => true]);
})->name('Fuentes_Alternas');
Route::get('/Mantenemiento_Automotriz', function () {
    return view('Mantenemiento_Automotriz', ['noFondo' => true]);
})->name('Mantenemiento_Automotriz');
Route::get('/Mantenimento_Industrial', function () {
    return view('Mantenimento_Industrial', ['noFondo' => true]);
})->name('Mantenimento_Industrial');
Route::get('/Electronica', function () {
    return view('Electronica', ['noFondo' => true]);
})->name('Electronica');
Route::get('/Mantenimientomotoresdecombustion', function () {
    return view('Mantenimientomotoresdecombustion', ['noFondo' => true]);
})->name('Mantenimientomotoresdecombustion');
Route::get('/Proceso-de-Gestión', function () {
    return view('Proceso-de-Gestión', ['noFondo' => true]);
})->name('Proceso-de-Gestión');
Route::get('/Hoteleria', function () {
    return view('Hoteleria', ['noFondo' => true]);
})->name('Hoteleria');
Route::get('/Transparencia', function () {
    return view('Transparencia', ['noFondo' => true]);
})->name('Transparencia');

Route::get('/linea_tiempo', function () {
    return view('linea_tiempo', ['noFondo' => true]);
})->name('linea_tiempo');

// Ruta para obtener los planteles por nivel
Route::get('/planteles', [PlantelController::class, 'index']);
// Ruta para obtener las carreras por plantel
Route::get('/carreras/{plantel_id}', [FormularioController::class, 'getCarrerasByPlantel']);



