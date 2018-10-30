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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tipo-documento', 'TipoDocumentoController@create');
Route::post('/tipo-documento', 'TipoDocumentoController@store');
Route::delete('/tipo-documento/{tipoDocumento}', 'TipoDocumentoController@destroy');
Route::patch('/tipo-documento/{tipoDocumento}', 'TipoDocumentoController@update');

Route::get('/tipo-processo', 'TipoProcessoController@create');
Route::post('/tipo-processo', 'TipoProcessoController@store');
Route::delete('/tipo-processo/{tipoProcesso}', 'TipoProcessoController@destroy');
Route::patch('/tipo-processo/{tipoProcesso}', 'TipoProcessoController@update');
