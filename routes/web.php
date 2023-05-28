<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Eventos;
use App\Http\Controllers\Desayunos;
use App\Http\Controllers\Alquiler;

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
    return view('welcome');
});

Route::get('/alquiler',[Alquiler::class, 'alquiler']);
Route::get('/desayunos',[Desayunos::class, 'desayunos']);
Route::get('/eventos',[Eventos::class, 'eventos']);
Route::get('/salon',[Eventos::class, 'salon']);
Route::get('/contacto',[Eventos::class, 'contacto']);
Route::get('/catalogo',[Eventos::class, 'catalogo']);
/*
Route::get('/eventos', function () {
    return view('eventos');
});

Route::get('/alquiler', function () {
    return view('alquiler');
});
Route::get('/desayunos', function () {
    return view('desauynos');
});
*/
