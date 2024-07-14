<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/saludo', [SaludoController::class, 'saludes']);

Route::resource('/cursos', CursoController::class);

Route::resource('/docentes', ProfesorController::class);


