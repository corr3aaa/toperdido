<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\ToPerdidoController;
use App\Http\Controllers\CadastroController;

Route::get('/', [ToPerdidoController::class, 'index'])->name('index');
Route::get('/login', [ToPerdidoController::class, 'login'])->name('login');
Route::post('/teste', [ToPerdidoController::class, 'doideira'])->name('teste');
Route::post('/local', [ToPerdidoController::class, 'buscaLocal'])->name('local');
Route::get('/local/{cidade?}', [ToPerdidoController::class, 'locais'])->name('locais');
Route::get('/mapa', function(){
    return view('mapa');
})->name('mapa');
/** 
 * {param} => parametro obrigatorio
 * {param?} => parametro opcional
 * 
 * 
*/