<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\RouteCompiler;

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

Route::get('/a', function () {
    return view('a');
});


Route::get('/siswa', 'siswabaruController@siswa')->name('siswa');
Route::get('/destroy/{id}', 'siswabaruController@destroy')->name('destroy');
Route::get('/edit/{id}', 'siswabaruController@edit')->name('edit');
Route::post('/update/{id}', 'siswabaruController@update')->name('update');
Route::get('/go', 'siswabaruController@go')->name('go');
Route::post('/create', 'siswabaruController@create')->name('create');


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/exp', function () {
    return view('experience');
});

Route::get('/port', function () {
    return view('portofolio');
});