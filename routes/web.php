<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CuentaBancariaController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NotaController;

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
Auth::routes();

Route::middleware(['auth'])->group(function (){
    // AQUI VAN LAS RUTAS
    Route::get('/miperfil', [UserController::class, 'profile'])->name('perfil');

    Route::put('/update/{id}',[UserController::class, 'updateUser']);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('inicio');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/registrar-cuenta', [CuentaBancariaController::class, 'formRegistro'])->name('registrarCuenta');
Route::post('/registrar-cuenta', [CuentaBancariaController::class, 'saveRegistro'])->name('guardarCuenta');

Route::get('/vender-nota', [NotaController::class, 'venderNota'])->name('venderNota');

Route::post('/contacto', [MailController::class, 'contactMail'])->name('contacto');

Route::get('/registere',[UserController::class, 'getDatosGeo'])->name('provincia');

Route::get('/ciudad',[UserController::class, 'getCiudad'])->name('ciudad');

//Route::patch('/update',[App\Http\Controllers\UserController::class, 'updateUser'])->name('register.update');
