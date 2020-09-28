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
Auth::routes();

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

Route::get('/miperfil', function () {
    return view('perfil');
})->name('perfil');

Route::put('/update/{id}',[App\Http\Controllers\UserController::class, 'updateUser']);
//Route::patch('/update',[App\Http\Controllers\UserController::class, 'updateUser'])->name('register.update');
