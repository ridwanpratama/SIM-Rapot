<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// CRUD
Route::resource('guru', 'GuruController');
Route::resource('rayon', 'RayonController');
