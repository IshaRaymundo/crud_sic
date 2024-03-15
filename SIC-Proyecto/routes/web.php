<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\StudentRequest;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentReportControllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





// Route::get('/docentes', function () {
//     return view('docentes');
// })->name("profesores");


// Route::get('/docentes', function () {
//     return view('docentes');
// })->name("profesores");

// Route::get('/docentes/{codigo}', function ($codigo) {
//     return view('docentes') -> with("clave", $codigo);
// });

// Route::get('/estudiantes', function () {
//     return view('estudiantes');
// })->name("alumnos");

// Route::get('/dash', function () {
//     return view('dash');
//     });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/plantilla', function () {
    return view('plantilla');
})->middleware('auth');


Route::get('/formulario', function () {
    return view('formulario');
})->middleware('auth');
    


Route::resource('estudiantes',StudentController::class)->middleware('auth');



Route::get('/no', function () {
    return view('no');
})->name("no");


Route::get('reportes/{estudiantes}', [StudentReportControllers::class, 'show_cardex'])->name('reportes.imprimir');



