<?php

use App\Http\Controllers\FuncionarioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/funcionario/login', [FuncionarioController::class, 'loginView']);

Route::get('/funcionario/ponto', [FuncionarioController::class, 'registroPontoView']);

Route::post('/funcionario/login', [FuncionarioController::class, 'login']);

Route::get('/funcionario/registro/{tipo}', [FuncionarioController::class, 'registro']);

Route::get('/funcionario/observacao', [FuncionarioController::class, 'observacao']);

Route::get('/funcionario/gestor', [FuncionarioController::class, 'gestor']);
