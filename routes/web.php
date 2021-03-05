<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/siswa/create', 'siswa.create')->name('siswa_create');

Route::prefix('siswa')
    ->middleware(['auth'])
    ->group(function() {
        Route::get('/', 'SiswaController@index')->name('siswa.index');
        Route::get('/create', 'SiswaController@create')->name('siswa.create');
        Route::post('/create/store', 'SiswaController@store')->name('siswa.store');
        Route::get('/{id}/edit', 'SiswaController@edit');
});