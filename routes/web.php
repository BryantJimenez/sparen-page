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

////////////////////////////////////////////////Web///////////////////////////////////////////////////////
Auth::routes();

Route::group(['middleware' => ['lang']], function () {
	// Inicio
	Route::get('/{lang?}', 'WebController@index')->name('home');

	//Sobre Sparen
	Route::get('/{lang?}/sparen/sobre-sparen/editar', 'AboutController@edit')->name('sobre.edit');
	Route::put('/{lang?}/sparen/sobre-sparen/{id}', 'AboutController@update')->name('sobre.update');
	Route::get('/{lang?}/#sobre', 'WebController@index')->name('home.sobre');

	//Servicios
	Route::get('/{lang?}/sparen/servicios/editar', 'ServiceController@edit')->name('servicio.edit');
	Route::put('/{lang?}/sparen/servicios/edit/{id}', 'ServiceController@update')->name('servicio.update');

	//Informes
	Route::get('/{lang?}/sparen/informes', 'ReportController@index')->name('informe.index');
	Route::get('/{lang?}/sparen/informes/registrar', 'ReportController@create')->name('informe.create');
	Route::post('/{lang?}/sparen/informes', 'ReportController@store')->name('informe.store');
	Route::get('/{lang?}/sparen/informes/editar', 'ReportController@edit')->name('informe.edit');
	Route::put('/{lang?}/sparen/informes/editar/{slug}', 'ReportController@update')->name('informe.update');

	//Contacto
	Route::get('/{lang?}/sparen/contacto', 'ContactController@create')->name('contacto.index');
	Route::post('/{lang?}/sparen/contacto', 'ContactController@store')->name('contacto.store');

	//bitacora
	Route::get('/{lang?}/sparen/bitacora-usuarios', 'BinnacleController@index')->name('bitacora.index');

	//Usuario
	Route::get('/{lang?}/sparen/usuario', 'UserController@index')->name('usuario.index');
	Route::get('/{lang?}/sparen/usuario/registrar', 'UserController@create')->name('usuario.create');
	Route::post('/{lang?}/sparen/usuarios', 'UserController@store')->name('usuario.store');
	Route::get('/{lang?}/sparen/usuario/{slug}/editar', 'UserController@edit')->name('usuario.edit');
	Route::put('/{lang?}/sparen/usuario/{slug}', 'UserController@update')->name('usuario.update');
	Route::put('/{lang?}/sparen/usuario/activar/{slug}', 'UserController@activate')->name('usuario.activate');
	Route::put('/{lang?}/sparen/usuario/desactivar/{slug}', 'UserController@deactivate')->name('usuario.deactivate');
	Route::get('/{lang?}/sparen/perfil', 'UserController@profile')->name('usuario.profile');

	//Consultorías
	Route::get('/{lang?}/sparen/consultorias/editar', 'ConsultancyController@edit')->name('consultoria.edit');
	Route::put('/{lang?}/sparen/consultorias/editar/{id}', 'ConsultancyController@update')->name('consultoria.update');

	//Objetivos
	Route::get('/{lang?}/sparen/objetivos/editar', 'ObjectiveController@edit')->name('objetivo.edit');
	Route::put('/{lang?}/sparen/objetivos/editar/{id}', 'ObjectiveController@update')->name('objetivo.update');

	//Banner
	Route::get('/{lang?}/sparen/banner/editar', 'BannerController@edit')->name('banner.edit');
	Route::put('/{lang?}/sparen/banner/editar/{id}', 'BannerController@update')->name('banner.update');
});