<?php

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\PaginaController;
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
Route::get('/admin/Pagina/Insertar', [PaginaController::class,'insertarGet'] );
Route::post('/admin/Pagina/Insertar', [PaginaController::class,'insertarPost'] );
Route::get('/contacto', [FrontEndController::class,'Contacto'] );
// http://localhost:8000/pagina/Pagina1
Route::get('/pagina/{nombreseo}', [FrontEndController::class,'Paginas'] );
// http://localhost:8000/cat
Route::get('/{nombreseo}', [FrontEndController::class,'Categorias'] );
Route::get('/{nombreseo}/{idpelicula}', [FrontEndController::class,'Peliculas'] );
