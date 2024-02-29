<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\NovoController;
use App\Http\Controllers\NomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// match, any
// resource
// Route::get('/sobrenos', [Controller::class, 'teste']);

// Route::get('/sobrenos', [Controller::class, 'teste']);
// Route::get('/sucesso', [Controller::class, 'testesucesso']);

// Route::get('/user/{id}', [Controller::class, 'usuario']);
Route::get('/user/{id?}', [Controller::class, 'usuario']);

Route::prefix('dashboard')
    ->middleware('auth')
    ->controller(Controller::class)
    ->group(function(){
        Route::get('/sobrenos', 'teste');
        Route::get('/sucesso/', 'testesucesso')
            ->name('sucesso');
    });



Route::get('/teste', TesteController::class);

Route::get('/dados', [TodoController::class, 'dados']);

Route::get('/relacionamento',[TodoController::class, 'pegarRelacionamento']);

Route::resource('/fotos', NovoController::class);
Route::fallback([Controller::class, 'pagina404']);


Route::get('/pesquisa',[Controller::class, 'pesquisa']);
Route::post('/pesquisa', [NomeController::class, 'pesquisa']);
