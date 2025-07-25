<?php
use App\Http\Controllers\PlantelesController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use App\Models\Plantel;
use App\Models\Carrera;
use Illuminate\Http\Request;



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
    
    //Hasta el momento 01/07/2025 items y carreras no se usan para nada, no se borro por si acaso
    return view('index', compact('items', 'planteles', 'carreras'));
});

// Ruta para la página de bienvenida
Route::get('/welcome', function () {
    return view('welcome');
});

// ✅ Ruta para mostrar el formulario con datos dinámicos (Usando el controlador)
Route::get('/formulario', [FormularioController::class, 'mostrarFormulario'])->name('formulario.mostrar');
Route::post('/formulario/enviar', [FormularioController::class, 'enviarFormulario'])->name('formulario.enviar');
Route::post('/formulario/enviar/email', [FormularioController::class, 'enviarEmail'])->name('formulario.enviar.email');

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

//Ruta para la barra de busqueda
Route::post('/search', function(Request $request){
    $request->validate([
        'searchInput' => 'required|min:1|not_regex:/[^\w\s]+\s*(?=\w*)/'
    ]);
    
    $query = trim($request->input("searchInput"));
    
    if ($query !== '') {
        return redirect()->route('search.all', ['query' => $query]);
    } else {
        return redirect()->back()->withErrors(['searchInput' => 'Please enter a search term.']);
    }
})->name("busqueda");

Route::get('/search/{query}', [SearchController::class, 'searchAll'])->name('search.all');


//Planteles
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
//❗❗❗PARA QUE FUNCIONE LA BUSQUEDA LA URL TIENE QUE CONCIDIR CON EL NOMBRE DE LA CARRERA EN LA BASE DE DATOS, TODOS LOS CARACTERES EN MINUSCULAS Y EXCLUYENDO CARACTERES QUE NO EXISTAN EN INGLES (ñ y acentos) ADEMAS DE REMPLAZAR ESPACIOS POR "-" EN LUGAR DE "_"❗❗❗
Route::get('/produccion-industrial-de-alimentos', function () {
    return view('Produccion-de-alimentos', ['noFondo' => true]);
})->name('Produccion-de-alimentos');
Route::get('/electronica', function () {
    return view('Electronica', ['noFondo' => true]);
})->name('Electronica');
//Tecnologias de la informacion y comunicacion
Route::get('/fuentes-alternas-de-energia', function () {
    return view('Fuentes_Alternas', ['noFondo' => true]);
})->name('Fuentes_Alternas');
Route::get('/servicios-de-hoteleria', function () {
    return view('Hoteleria', ['noFondo' => true]);
})->name('Hoteleria');
Route::get('/produccion-industrial', function () {
    return view('Produccion-industrial', ['noFondo' => true]);
})->name('Produccion-industrial');
//Inteligencia artificial
Route::get('/programacion', function () {
    return view('Programacion', ['noFondo' => true]);
})->name('Programacion');
Route::get('/mantenimiento-automotriz', function () {
    return view('Mantenimiento_Automotriz', ['noFondo' => true]);
})->name('Mantenimiento_Automotriz');
//Mecatronica
Route::get('/procesos-de-gestion-administrativa', function () {
    return view('Proceso-de-Gestión', ['noFondo' => true]);
})->name('Proceso-de-Gestión');
Route::get('/mantenimiento-industrial', function () {
    return view('Mantenimento_Industrial', ['noFondo' => true]);
})->name('Mantenimento_Industrial');

//No aparece en pagina de inicio
Route::get('/Mantenimientomotoresdecombustion', function () {
    return view('Mantenimientomotoresdecombustion', ['noFondo' => true]);
})->name('Mantenimientomotoresdecombustion');



// ✅ OTRAS RUTAS
Route::get('/Transparencia', function () {
    $PDFS = new PdfController;
    $infoPresupuesto = $PDFS->getSubDirectories('transparencia','informe presupuestal');
    $infoFinanciera = $PDFS->getSubDirectories('transparencia', 'informacion financiera');
    $desempeno = $PDFS->getSubDirectories('transparencia', 'desempeno');
    $progPresupuesto = $PDFS->getSubDirectories('transparencia', 'programas presupuestarios');
    $ayudaSubsidios = $PDFS->getSubDirectories('transparencia', 'ayuda subsidios');
    $inventarios = $PDFS->getSubDirectories('transparencia', 'inventarios');
    
    return view('Transparencia', compact('infoPresupuesto', 'infoFinanciera', 'desempeno', 'progPresupuesto', 'ayudaSubsidios', 'inventarios'));
})->name('Transparencia');
//Obtener PDFs para transparencia
Route::post('/Transparencia/pdf/{folder}/{Directorio}/{subDir}', [PdfController::class, 'getArchivos'])->name('obtener.pdf');

Route::get('/linea_tiempo', function () {
    return view('linea_tiempo', ['noFondo' => true]);
})->name('linea_tiempo');



//Uso de imagenes en JS
Route::get('/imagen/{imgPath}', function($imgPath) {
    return asset($imgPath);
})->name('imagenes.get');





Route::get('/carreras/{plantel_id}', [FormularioController::class, 'getCarrerasByPlantel'])->name('carreras.por.plantel');
/*ruta del plantel estandar */
Route::get('/pagina-informativa', [InicioController::class, 'paginaInformativa'])->name('pagina.informativa');
/*ruta del directorio */
Route::get('/directorio', [InicioController::class, 'mostrarDirectorio'])->name('directorio');
/*Ruta de la bolsa de trabajo*/
Route::get('/bolsa', function () {
    return view('bolsa');
})->name('bolsa');
    
    

    Route::get('/formulario-datos', [FormularioController::class, 'getFormularioDatos']);
Route::get('/planteles/{id}/carreras', [FormularioController::class, 'obtenerCarreras'])->name('planteles.carreras');

