<?php

use App\Http\Controllers\Faizan;
use App\Http\Controllers\Gallery_table;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [Faizan::class, 'home']);
Route::get('/portfolio', [Faizan::class, 'portfolio']);
Route::get('/about-us', [Faizan::class, 'about']);
Route::get('/services', [Faizan::class, 'services']);
Route::get('/digital-product', [Faizan::class, 'digital_product']);
Route::get('/blog', [Faizan::class, 'blog']);
Route::get('/contact-us', [Faizan::class, 'contact_us']);
Route::get('/terms-condition', [Faizan::class, 'terms']);
Route::get('/privacy-policy', [Faizan::class, 'policy']);
Route::get('/return-refund', [Faizan::class, 'refund']);
Route::get('/new', [Gallery_table::class, 'get_all']);