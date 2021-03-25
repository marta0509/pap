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

/*****Contactos*****/

Route::get('/contactos','App\Http\Controllers\ContactosController@index')->name('contactos');

/*****Horario*****/

Route::get('/horario','App\Http\Controllers\HorarioController@index')->name('horario');

/*****Quem somos*****/

Route::get('/somos','App\Http\Controllers\SomosController@index')->name('somos');

/*****Clientes*****/

Route::get('/clientes','App\Http\Controllers\ClientesController@index')->name('clientes');

/*****perfil dos funcionarios-----admin *****/

Route::get('/perfil','App\Http\Controllers\PerfilController@index')->name('perfil')->middleware('auth');

/*****Equipamentos*****/

Route::get('/equipamentos','App\Http\Controllers\EquipamentosController@index')->name('equipamentos');

Route::get('/equipamentos/{id}/show','App\Http\Controllers\EquipamentosController@show')->name('equipamentos.show');