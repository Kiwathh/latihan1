<?php

use App\Http\Controllers\LombaController;
use App\Models\Lomba;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/poster', 'lomba');
Route::post('/submit-lomba', [LombaController::class, 'submit']);