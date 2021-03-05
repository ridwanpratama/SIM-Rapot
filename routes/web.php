<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('mapel','MapelController');
Route::resource('siswa','SiswaController');

Auth::routes();
