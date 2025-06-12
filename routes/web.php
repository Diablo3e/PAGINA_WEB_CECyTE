<?php
use App\Http\Controllers\PlantelesController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
use App\Models\Plantel;
use App\Models\Carrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use function PHPUnit\Framework\isNull;

//Rutas EML
Route::get('/testing', function() {
    return view('testing');
});


Route::post('/search', function(Request $request){
    $request->validate([
        'searchInput' => 'required'
    ]);
    $query = $request->input("searchInput");
    $url = route('search.carreras', ['query' => $query]); 
    $resultados = Http::get($url);
    $resultados = $resultados->json();
    return view('search', compact('resultados'));
})->name("busqueda");

Route::get('/search/{query}', [SearchController::class, 'searchCarreras'])->name('search.carreras');

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
Route::get('/api/planteles', function() {
    return response()->json(Plantel::select('id', 'nombre')->get());
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




Route::get('/planteles/detalle/{id}', [PlantelesController::class, 'detalle'])->name('planteles.detalle');

Route::get('/planteles', function () {
    $planteles = Plantel::all()->keyBy('id'); // Todos los planteles
    $emsad_planteles = $planteles->where('tipo', 'emsad');
    $cecyte_planteles = $planteles->where('tipo', 'cecyte');

    return view('components.mapa-Planteles', [
        'noFondo' => true,
        'planteles' => $planteles,
        'emsad_planteles' => $emsad_planteles,
        'cecyte_planteles' => $cecyte_planteles
    ]);
})->name('planteles.index');

// ✅ RUTAS DE CARRERAS DE LA PAGINA PRINCIPAL
Route::get('/Produccion-de-alimentos', function () {
    return view('Produccion-de-alimentos', ['noFondo' => true]);
})->name('Produccion-de-alimentos');
Route::get('/Electronica', function () {
    return view('Electronica', ['noFondo' => true]);
})->name('Electronica');
//Tecnologias de la informacion y comunicacion
Route::get('/Fuentes_Alternas', function () {
    return view('Fuentes_Alternas', ['noFondo' => true]);
})->name('Fuentes_Alternas');
Route::get('/Hoteleria', function () {
    return view('Hoteleria', ['noFondo' => true]);
})->name('Hoteleria');
Route::get('/Produccion-industrial', function () {
    return view('Produccion-industrial', ['noFondo' => true]);
})->name('Produccion-industrial');
//Inteligencia artificial
Route::get('/Programacion', function () {
    return view('Programacion', ['noFondo' => true]);
})->name('Programacion');
Route::get('/Mantenimiento_Automotriz', function () {
    return view('Mantenimiento_Automotriz', ['noFondo' => true]);
})->name('Mantenimiento_Automotriz');
//Mecatronica
Route::get('/Proceso-de-Gestión', function () {
    return view('Proceso-de-Gestión', ['noFondo' => true]);
})->name('Proceso-de-Gestión');
Route::get('/Mantenimento_Industrial', function () {
    return view('Mantenimento_Industrial', ['noFondo' => true]);
})->name('Mantenimento_Industrial');

//No aparece en pagina de inicio
Route::get('/Mantenimientomotoresdecombustion', function () {
    return view('Mantenimientomotoresdecombustion', ['noFondo' => true]);
})->name('Mantenimientomotoresdecombustion');



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


Route::get('/formulario-datos', [FormularioController::class, 'getFormularioDatos']);
Route::get('/planteles/{id}/carreras', [FormularioController::class, 'obtenerCarreras']);

