<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajesController;
use App\Http\Controllers\MedicoController;
use Illuminate\Support\Facades\Auth;

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
Route::view('/', 'Inicio')->name('Inicio');
Route::view('/acerca', 'acerca')->name('acerca');
Route::view('/contacto', 'contacto')->name('contacto');
Route::post('contacto', MensajesController::class);


Route::resource('medico', MedicoController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
