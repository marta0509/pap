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

Route::get('/clientes','App\Http\Controllers\ClientesController@index')->name('clientes.index');

Route::get('/clientes/create','App\Http\Controllers\ClientesController@create')->name('clientes.create');

Route::post('/clientes','App\Http\Controllers\ClientesController@store')->name('clientes.store');

Route::get('/clientes/{id}/edit','App\Http\Controllers\ClientesController@edit')->name('clientes.edit');

Route::patch('/clientes','App\Http\Controllers\ClientesController@update')->name('clientes.update');

Route::get('/clientes/{id}/delete','App\Http\Controllers\ClientesController@delete')->name('clientes.delete');

Route::delete('/equipamentos','App\Http\Controllers\ClientesController@destroy')->name('equipamentos.destroy');

/*****perfil dos funcionarios-----admin *****/

Route::get('/perfil','App\Http\Controllers\PerfilController@index')->name('perfil')->middleware('auth');

/*****Equipamentos*****/

Route::get('/equipamentos','App\Http\Controllers\EquipamentosController@index')->name('equipamentos');

Route::get('/equipamentos/create','App\Http\Controllers\EquipamentosController@create')->name('equipamentos.create');

Route::post('/equipamentos','App\Http\Controllers\EquipamentosController@store')->name('equipamentos.store');

Route::get('/equipamentos/{id}/edit','App\Http\Controllers\EquipamentosController@edit')->name('equipamentos.edit');

Route::patch('/equipamentos','App\Http\Controllers\EquipamentosController@update')->name('equipamentos.update');

Route::get('/equipamentos/{id}/delete','App\Http\Controllers\EquipamentosController@delete')->name('equipamentos.delete');

Route::delete('/equipamentos','App\Http\Controllers\EquipamentosController@destroy')->name('equipamentos.destroy');

/*****Reparações*****/

Route::get('/reparacoes','App\Http\Controllers\ReparacoesController@index')->name('reparacoes');

Route::get('/reparacoes/create','App\Http\Controllers\ReparacoesController@create')->name('reparacoes.create');

Route::post('/reparacoes','App\Http\Controllers\ReparacoesController@store')->name('reparacoes.store');

Route::get('/reparacoes/{id}/edit','App\Http\Controllers\ReparacoesController@edit')->name('reparacoes.edit');

Route::patch('/reparacoes','App\Http\Controllers\ReparacoesController@update')->name('reparacoes.update');

Route::get('/reparacoes/{id}/delete','App\Http\Controllers\ReparacoesController@delete')->name('equipamentos.delete');

Route::delete('/reparacoes','App\Http\Controllers\EquipamentosController@destroy')->name('reparacoes.destroy');

/*****Fornecedores*****/

Route::get('/fornecedores','App\Http\Controllers\FornecedoresController@index')->name('fornecedores');