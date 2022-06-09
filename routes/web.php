<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|---------------s-----------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('/tienda',TiendaController::class);
Route::get('/','App\Http\Controllers\RelacionController@index');
