<?php

use App\Http\Controllers\Faizan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [Faizan::class, 'home']);
Route::get('/portfolio', [Faizan::class, 'portfolio']);
Route::get('/new', [Faizan::class, 'new']);
Route::get('/about-us', [Faizan::class, 'about']);
Route::get('/services', [Faizan::class, 'services']);
Route::get('/digital-product', [Faizan::class, 'digital_product']);
Route::get('/blog', [Faizan::class, 'blog']);
Route::get('/contact-us', [Faizan::class, 'contact_us']);