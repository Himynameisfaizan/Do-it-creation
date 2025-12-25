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
Route::get('/admin', [Faizan::class, 'admin']);
Route::get('/digital-product', [Faizan::class, 'digital_product']);
Route::get('/blog', [Faizan::class, 'blog']);
Route::get('/contact-us', [Faizan::class, 'contact_us']);
Route::get('/terms-condition', [Faizan::class, 'terms']);
Route::get('/privacy-policy', [Faizan::class, 'policy']);
Route::get('/return-refund', [Faizan::class, 'refund']);
Route::get('/new', [Faizan::class, 'new']);
Route::get('/all_image', [Gallery_table::class, 'get_all']);
Route::get('/add_new_image', [Gallery_table::class, 'add_new_image'])->name('gallery.add');
Route::post('/insert-image', [Gallery_table::class, 'insert_image'])->name('gallery.insert_image');
Route::get('/admin/category', [Gallery_table::class, 'category'])->name('gallery.category');