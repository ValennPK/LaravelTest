<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\auth\RegisteredUserController;
use App\Http\Middleware\Authenticate;

Route::view('/','welcome')->name('home');
Route::view('/contact','contact')->name('contact');

Route::resource('blog', PostController::class,[
    'names'=>'posts',
    'parameters'=>['blog'=>'post']
]);

Route::view('/about','about')->name('about');

Route::get('/login', function(){
    return 'Login page';
})->name('login');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class,'store'])->name('register');