<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('jurusan', 'JurusanController');
Route::resource('guru', 'GuruController');
Route::resource('rayon', 'RayonController');
Route::resource('mapel', 'MapelController');
Route::resource('siswa', 'SiswaController');
Route::resource('absen', 'AbsenController');
Route::resource('upd', 'UpdController');
