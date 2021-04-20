<?php

use App\Http\Controllers\FrontEndController;
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

Route::get('/', [FrontEndController::class,'Home'] );
Route::get('/contacto', [FrontEndController::class,'Contacto'] );
Route::get('/{nombreseo}', [FrontEndController::class,'Categorias'] );
Route::get('/{nombreseo}/{idpelicula}', [FrontEndController::class,'Peliculas'] );
