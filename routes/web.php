<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ProfesorController;

Route::get('/', function () {
    return to_route('materium.index');
});

Route::resource('alumno', AlumnoController::class);
Route::resource('materium', MateriaController::class);
Route::resource('profesor', ProfesorController::class);