<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorBD;

//rutas individuales pera el controlador 

Route::get('/', [controladorVistas::class, 'showWelcome']);

Route::get('Home', [controladorVistas::class, 'showHome'])->name('jom');

//Route::get('Registrar', [controladorVistas::class, 'showIngresar'])->name('apodoRegister');

//Route::get('Recuerdo', [controladorVistas::class, 'showRecuerdos'])->name('rec');

//Rutas para envio Post

//Route::post('GuardarRecuerdo', [controladorVistas::class, 'procesarRecuerdo'])->name('saveMemory');

//rutas individuales pera el controlador de a BD

                   // create
Route::get('recuerdo/create', [controladorBD::class, 'create'])->name('recuerdo.create');

                    //store
Route::post('Recuerdo', [controladorBD::class, 'store'])->name('recuerdo.store');

                    // index
Route::get('recuerdo', [controladorBD::class, 'index'])->name('recuerdo.index');

                   // edit
Route::get('recuerdo/{id}/edit', [controladorBD::class, 'edit'])->name('recuerdo.edit');

                   // update
Route::put('recuerdo/{id}', [controladorBD::class, 'update'])->name('recuerdo.update');

                   // show
Route::get('recuerdo/{id}/show', [controladorBD::class, 'show'])->name('recuerdo.show');

                   // destroy
Route::delete('recuerdo/{id}', [controladorBD::class, 'destroy'])->name('recuerdo.destroy');


//rutas agrupadas pera el controlador

/*
Route::controller(controladorVistas::class)->group(
    function(){
        Route::get('/', 'showWelcome');
        Route::get('/Home', 'showHome');
        Route::get('/Registrar', 'showIngresar')->name('apodoRegister');
        Route::get('/Recuerdo', 'showRecuerdos');
    }
);
*/



/*
Route::get('/', function () {
    return view('welcome');
});

Route:: view ('/', 'welcome');

Route:: view ('/Home', 'home');

Route:: view ('/Plantilla', 'plantilla');

Route::get('/Registrar', function () {
    return view('registrar');
})->name('apodoRegister');

Route::get('/Recuerdo', function () {
    return view('recuerdo');
});

*/

