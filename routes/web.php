<?php

use App\Http\Controllers\Faizan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [Faizan::class, 'home']);
Route::get('/portfolio', [Faizan::class, 'portfolio']);