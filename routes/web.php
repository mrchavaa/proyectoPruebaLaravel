<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', [ContactoController::class, 'formularioContacto'] 

);

Route::post('/guardar-formulario', [ContactoController::class, 'guardarFormulario']

);

Route::get('/mensajes', [ContactoController::class, 'listado']

);