<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('siswa', 'SiswaController');
    Route::resource('guru', 'GuruController');
    Route::resource('absen', 'AbsenController');
    Route::resource('upd', 'UpdController');
    Route::resource('user', 'UserController');
    Route::resource('jurusan', 'JurusanController');
    Route::resource('rayon', 'RayonController');
    Route::resource('mapel', 'MapelController');
    Route::resource('detail', 'DetailController');
});

Route::middleware(['auth', 'ceklevel:admin'])->group(function () {
    // Gak tau boleh akses apa aja
});

Route::middleware(['auth', 'ceklevel:guru'])->group(function () {
    // Gak tau boleh akses apa aja
});
