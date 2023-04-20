<?php

use App\Http\Controllers\MyController;
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

Route::get('/', [MyController::class, 'geraMenuPrincipal']);

Route::get('/insert', [MyController::class, 'geraFormulario']);

Route::post('/insert_data', [MyController::class, 'insereProduto']);

Route::get('/view', [MyController::class, 'geraApresentacaoDados']);
