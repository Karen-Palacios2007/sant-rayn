<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegistroController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PerfilController;

Route::get('/', function () {
    return view('inicio');
});

// Registro de clientes
Route::post('/registro', [RegistroController::class, 'registrar'])
    ->middleware('throttle:5,1')
    ->name('registro.registrar');

// Mostrar formulario de registro
Route::get('/registro', function () {
    return view('auth.registro');
})->name('registro.form');

// Mostrar formulario de inicio de sesión
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Procesar inicio de sesión
Route::post('/login', [LoginController::class, 'ingresar'])
    ->middleware('throttle:5,1')
    ->name('login.ingresar');

// Cerrar sesión
Route::post('/logout', [LoginController::class, 'salir'])
    ->middleware('auth')
    ->name('logout');

// Mostrar página de cuenta del usuario
Route::get('/cuenta', function () {
    return view('auth.cuenta');
})->middleware('auth')->name('cuenta');

// Actualizar datos del perfil del usuario
Route::put('/cuenta', [PerfilController::class, 'actualizar'])
    ->middleware('auth')
    ->name('cuenta.actualizar');