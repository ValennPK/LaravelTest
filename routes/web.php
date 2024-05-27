<?php

use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::view('/','welcome');
Route::view('/contacto','contact');
Route::view('/blog','blog');
Route::view('/about','about');