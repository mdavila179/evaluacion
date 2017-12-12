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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('empresa', 'empresaController');

Route::resource('persona', 'personaController');

Route::post('cargar_datos_usuarios', 'personaController@cargar_datos_usuarios');

Route::resource('item', 'itemController');

Route::resource('encuesta', 'encuestaController');

Route::resource('cargo', 'cargoController');

Route::resource('departamento', 'departamentoController');

Route::get('editItemCargo', 'cargoController@editItemCargo');

Route::get('buscarpersona', 'personaController@buscar');

Route::get('buscar', 'encuestaController@buscar');

Route::resource('peso', 'pesoController');

Route::post('storeRelaciones', 'itemController@storeRelaciones');

Route::get('/download', 'personaController@download');

Route::resource('evaluacioncargo', 'evaluacioncargoController');

Route::resource('evaluador_evaluado', 'evaluador_evaluadoController');