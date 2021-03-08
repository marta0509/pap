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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contactos','App\Http\Controllers\ContactosController@index')->name('contactos');

Route::get('/horario','App\Http\Controllers\HorarioController@index')->name('horario');

Route::get('/somos','App\Http\Controllers\SomosController@index')->name('somos');
