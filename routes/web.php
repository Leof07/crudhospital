<?php

use App\Http\Controllers\Doctor;
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
    return view('welcome');
});

Route::controller(Doctor::class)->group(function(){
    Route::get('doctores', 'index')->name('doctores.index');
    Route::get('/',"index");
    Route::get('/doctores/crear','create')->name('doctores.crear');
    Route::post('/doctores/store','store')->name('doctores.store');
    Route::get('/doctores/editar/{id}','editarFormulario')->name('doctores.editar');
    Route::put('/doctores/storeEdit/{id}','storeEdit')->name('doctores.storeEdit');
    Route::get('/doctores/eliminar/{id}','destroy')->name('doctores.eliminar');
});
