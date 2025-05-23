<?php

use App\Http\Controllers\FormularioController;
use Illuminate\Support\Facades\Route;
use App\Models\Plantel;
use App\Models\Carrera;
use App\Http\Controllers\InicioController;

// Ruta para la página principal (index.blade.php)
Route::get('/', function () {
    $items = [
        ['name' => 'Inicio', 'url' => url('/')],
        ['name' => 'Admisión', 'url' => url('/admission')],
        ['name' => 'Carreras', 'url' => url('/carreras')],
        ['name' => 'Contacto', 'url' => url('/contact')],
    ];

    // Obtener los datos de la base de datos
    $planteles = Plantel::all();
    $carreras = Carrera::all();

    return view('index', compact('items', 'planteles', 'carreras'));
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
        'planteles' => \App\Models\Plantel::all(['id', 'plantel_nombre as nombre']),
        'carreras' => \App\Models\Carrera::all(['id', 'nombre']),
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
    return view('components.mapa-Planteles', ['noFondo' => true]);
})->name('Planteles');


// ✅ RUTA DE CARRERAS
Route::get('/Produccion-industrial', function () {
    return view('Produccion-industrial', ['noFondo' => true]);
})->name('Produccion-industrial');
Route::get('/Produccion-de-alimentos', function () {
    return view('Produccion-de-alimentos', ['noFondo' => true]);
})->name('Produccion-de-alimentos');
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
// ✅ OTRAS RUTAS
Route::get('/Transparencia', function () {
    return view('Transparencia', ['noFondo' => true]);
})->name('Transparencia');
Route::get('/linea_tiempo', function () {
    return view('linea_tiempo', ['noFondo' => true]);
})->name('linea_tiempo');









Route::get('/carreras/{plantel_id}', [FormularioController::class, 'getCarrerasByPlantel']);
/*ruta del plantel estandar */
Route::get('/pagina-informativa', [InicioController::class, 'paginaInformativa'])->name('pagina.informativa');
/*ruta del directorio */
Route::get('/directorio', [InicioController::class, 'mostrarDirectorio'])->name('directorio');
/*Ruta de la bolsa de trabajo*/
Route::get('/bolsa', [InicioController::class, 'mostrarBolsa'])->name('bolsa');

