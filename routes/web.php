<?php

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
    return view('index');
})->name('inicio');

Route::get('/somos', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/portafolio', function () {
    return view('portafolio');
})->name('portafolio');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
