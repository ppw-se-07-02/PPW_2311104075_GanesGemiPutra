<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert-data', [MahasiswaController::class, 'insert']);
Route::get('/select-data', [MahasiswaController::class, 'select']);
Route::get('/delete-data/{id}', [MahasiswaController::class, 'delete']);
