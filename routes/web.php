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




////////////////////////////////////////////////Web////////////////////////////////////////////////////////////////

// Inicio
Route::get('/', 'WebController@index')->name('home');

//Sobre Sparen
Route::get('/sparen/sobre-sparen/editar', 'AboutController@edit')->name('sobre.edit');
Route::put('/sparen/sobre-sparen/editar/{id}', 'AboutController@update')->name('sobre.update');


//Servicios
Route::get('/sparen/servicios/editar', 'ServiceController@edit')->name('servicio.edit');
Route::put('/sparen/servicios/editar/{id}', 'ServiceController@update')->name('servicio.update');

//Informes
Route::get('/sparen/informes', 'ReportController@index')->name('informe.index');
Route::get('/sparen/informes/registrar', 'ReportController@create')->name('informe.create');
Route::post('/sparen/informes', 'ReportController@store')->name('informe.store');
Route::get('/sparen/informes/editar', 'ReportController@edit')->name('informe.edit');
Route::put('/sparen/informes/editar/{slug}', 'ReportController@update')->name('informe.update');


//Contacto
Route::get('/sparen/contacto', 'ContactController@create')->name('contacto.index');
Route::post('/sparen/contacto', 'ContactController@store')->name('contacto.store');


//bitacora
Route::get('/sparen/bitacora-usuarios', 'WebController@binnacle')->name('bitacora.index');

//Usuario
Route::get('/sparen/usuario', 'UserController@index')->name('usuario.index');
Route::get('/sparen/usuario/registrar', 'UserController@create')->name('usuario.create');
Route::post('/sparen/usuarios', 'UserController@store')->name('usuario.store');
Route::get('/sparen/usuario/editar', 'UserController@editar')->name('usuario.editar');
Route::put('/sparen/usuario/editar/{slug}', 'UserController@update')->name('usuario.update');
Route::put('/sparen/usuario/activar/{slug}', 'UserController@activate')->name('usuario.activate');
Route::put('/sparen/usuario/desactivar/{slug}', 'UserController@deactivate')->name('usuario.deactivate');
Route::get('/sparen/perfil', 'UserController@profile')->name('usuario.profile');
Auth::routes();

//Consultorías
Route::get('/sparen/consultorias/editar', 'ConsultancyController@edit')->name('consultoria.edit');
Route::put('/sparen/consultorias/editar/{id}', 'ConsultancyController@update')->name('consultoria.update');


//Objetivos
Route::get('/sparen/obetivos/editar', 'ObjectiveController@edit')->name('objetivo.edit');
Route::put('/sparen/obetivos/editar/{id}', 'ObjectiveController@update')->name('objetivo.update');

//Banner
Route::get('/sparen/banner/editar', 'BannerController@edit')->name('banner.edit');
Route::put('/sparen/banner/editar/{id}', 'BannerController@update')->name('banner.update');


