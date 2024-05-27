<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::view('/','welcome')->name('home');
Route::view('/contact','contact')->name('contact');
Route::get('/blog',[PostController::class, 'index'])->name('blog');
Route::view('/about','about')->name('about');