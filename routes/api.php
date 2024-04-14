<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/v1/get-user', function() {

    return json_encode(
        ['nome'=>'thais', 'idade'=>20]
    );
});



// Route::get('/teste', TesteController::class);

// Route::get('/dados', [TodoController::class, 'dados']);

// Route::get('/relacionamento',[TodoController::class, 'pegarRelacionamento']);

// Route::resource('/fotos', NovoController::class);
// Route::fallback([Controller::class, 'pagina404']);


// Route::get('/pesquisa', [Controller::class, 'pesquisa']);
// Route::post('/pesquisa', [NomeController::class, 'pesquisa']);

// Route::post('/inserir', [TodoController::class, 'inserir'])->name('inserir');
