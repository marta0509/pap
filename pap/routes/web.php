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

Route::get('/perfil','App\Http\Controllers\PerfilController@index')->name('perfil')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*****Contactos*****/

Route::get('/contactos','App\Http\Controllers\ContactosController@index')->name('contactos');

/*****Horario*****/

Route::get('/horario','App\Http\Controllers\HorarioController@index')->name('horario');

/*****Quem somos*****/

Route::get('/somos','App\Http\Controllers\SomosController@index')->name('somos');

/*****Clientes*****/

Route::get('/clientes','App\Http\Controllers\ClientesController@index')->name('clientes.index');

Route::get('/clientes/{id}/show','App\Http\Controllers\ClientesController@show')->name('clientes.show');

Route::get('/clientes/create','App\Http\Controllers\ClientesController@create')->name('clientes.create');

Route::post('/clientes','App\Http\Controllers\ClientesController@store')->name('clientes.store');

Route::get('/clientes/{id}/edit','App\Http\Controllers\ClientesController@edit')->name('clientes.edit');

Route::patch('/clientes/{id}','App\Http\Controllers\ClientesController@update')->name('clientes.update');

Route::get('/clientes/{id}/delete','App\Http\Controllers\ClientesController@delete')->name('clientes.delete');

Route::delete('/clientes','App\Http\Controllers\ClientesController@destroy')->name('clientes.destroy');

/*****Equipamentos*****/

Route::get('/equipamentos','App\Http\Controllers\EquipamentosController@index')->name('equipamentos');

Route::get('/equipamentos/{id}/create','App\Http\Controllers\EquipamentosController@create')->name('equipamentos.create');

Route::post('/equipamentos/{id}','App\Http\Controllers\EquipamentosController@store')->name('equipamentos.store');

Route::get('/equipamentos/{id}/edit','App\Http\Controllers\EquipamentosController@edit')->name('equipamentos.edit');

Route::patch('/equipamentos','App\Http\Controllers\EquipamentosController@update')->name('equipamentos.update');


/*****Reparações*****/

Route::get('/reparacoes','App\Http\Controllers\ReparacoesController@index')->name('reparacoes');

Route::get('/reparacoes/{id}/show','App\Http\Controllers\ReparacoesController@show')->name('reparacoes.show');

Route::get('/reparacoes/{id}/create','App\Http\Controllers\ReparacoesController@create')->name('reparacoes.create');

Route::post('/reparacoes/{id}','App\Http\Controllers\ReparacoesController@store')->name('reparacoes.store');

Route::get('/reparacoes/{id}/edit','App\Http\Controllers\ReparacoesController@edit')->name('reparacoes.edit');

Route::patch('/reparacoes','App\Http\Controllers\ReparacoesController@update')->name('reparacoes.update');


/*****Fornecedores*****/

Route::get('/fornecedores','App\Http\Controllers\FornecedoresController@index')->name('fornecedores');

Route::get('/fornecedores/create','App\Http\Controllers\FornecedoresController@create')->name('fornecedores.create');

Route::post('/fornecedores','App\Http\Controllers\FornecedoresController@store')->name('fornecedores.store');

Route::get('/fornecedores/{id}/edit','App\Http\Controllers\FornecedoresController@edit')->name('fornecedores.edit');

Route::patch('/fornecedores','App\Http\Controllers\FornecedoresController@update')->name('fornecedores.update');

Route::get('/fornecedores/{id}/delete','App\Http\Controllers\FornecedoresController@delete')->name('fornecedores.delete');

Route::delete('/fornecedores','App\Http\Controllers\FornecedoresController@destroy')->name('fornecedores.destroy');

/*****Materiais*****/

Route::get('/materiais','App\Http\Controllers\MateriaisController@index')->name('materiais');

Route::get('/materiais/create','App\Http\Controllers\MateriaisController@create')->name('materiais.create');

Route::post('/materiais','App\Http\Controllers\MateriaisController@store')->name('materiais.store');

Route::get('/materiais/{id}/delete','App\Http\Controllers\MateriaisController@delete')->name('materiais.delete');

Route::delete('/materiais','App\Http\Controllers\MateriaisController@destroy')->name('materiais.destroy');