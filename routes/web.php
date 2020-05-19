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




//////////////////////////////////////////////////Web////////////////////////////////////////////////////////////////

// Inicio
Route::get('/', 'WebController@index')->name('home');

//Sobre Sparen
Route::get('/sparen/sobre-sparen', 'AboutController@index')->name('sobre.index');


//Servicios
Route::get('/sparen/servicios', 'ServiceController@index')->name('servicio.index');

//Informes
Route::get('/sparen/informes', 'ReportController@index')->name('informe.index');
Route::get('/sparen/informes/registrar', 'ReportController@create')->name('informe.create');

//Contacto
Route::get('/sparen/contacto', 'ContactController@index')->name('contacto.index');

//bitacora
Route::get('/sparen/bitacora-usuarios', 'BinnacleController@index')->name('bitacora.index');

//Usuario
Route::get('/sparen/usuario', 'UserController@index')->name('usuario.index');
Route::get('/sparen/usuario/registrar', 'UserController@create')->name('usuario.create');
Route::post('/sparen//usuarios', 'UserController@store')->name('usuario.store');