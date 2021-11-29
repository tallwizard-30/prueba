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
    return view('auth/login');
});






Auth::routes();

Route::get('/gestor', 'HomeController@index')->name('gestor');
Route::get('/inicio' , 'InicioController@index');
//Route::get('/registrar' , 'municipiosController@index');
Route::get('/gestor' , 'ProyectosController@index');
Route::get('/registrar' , 'municipiosController@index');
Route::post('/registrar' , 'municipiosController@stores');
Route::get('editar/{id}', 'inicioController@index');
Route::get('editar/{id}', 'inicioController@show');
Route::patch('editar/{id}', 'inicioController@update');
Route::delete('/eliminar/{id}','ProyectosController@destroy');



//
