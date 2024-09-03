<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/guardar-formulario', function (Request $request) {
    //recibir datos
    //dd es para matar la app y arrojar un mensaje 
    dd($request->all());
    dd($request->all(), $request->nombre);


    //validar datos

    //guardar datos

    //redireccionar
});