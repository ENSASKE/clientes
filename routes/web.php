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

Route::get('/', 'ClientesController@index');
Route::get('/formulario/{cliente_id?}', 'ClientesController@formulario')->name('formulario');
Route::get('/eliminar/{cliente_id}', 'ClientesController@eliminar')->name('eliminar');
Route::post('/guardar', 'ClientesController@guardar');

