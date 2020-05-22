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

Auth::routes();

Route::group(['middleware' => ['lang']], function () {
	// Inicio
	Route::get('/{lang?}', 'WebController@index')->name('home');

	//Sobre Sparen
	Route::get('/{lang?}/sobre-sparen/editar', 'AboutController@edit')->name('sobre.edit');
	Route::put('/{lang?}/sobre-sparen', 'AboutController@update')->name('sobre.update');

	//Servicios
	Route::get('/{lang?}/servicios/editar', 'ServiceController@edit')->name('servicio.edit');
	Route::put('/{lang?}/servicios/editar/{id}', 'ServiceController@update')->name('servicio.update');
	Route::put('/{lang?}/services/editar/{id}', 'ServiceController@updateEnglish')->name('service.update');

	//Informes
	Route::get('/{lang?}/informes', 'ReportController@index')->name('informe.index');
	Route::get('/{lang?}/informes/registrar', 'ReportController@create')->name('informe.create');
	Route::post('/{lang?}/informes', 'ReportController@store')->name('informe.store');
	Route::post('/{lang?}/reports', 'ReportController@storeEnglish')->name('report.store');
	Route::get('/{lang?}/informes/editar', 'ReportController@edit')->name('informe.edit');
	Route::put('/{lang?}/informes/editar/{slug}', 'ReportController@update')->name('informe.update');

	//Contacto
	Route::get('/{lang?}/contacto', 'ContactController@create')->name('contacto.index');
	Route::post('/{lang?}/contacto', 'ContactController@store')->name('contacto.store');

	//bitacora
	Route::get('/{lang?}/bitacora-usuarios', 'BinnacleController@index')->name('bitacora.index');

	//Usuario
	Route::get('/{lang?}/usuario', 'UserController@index')->name('usuario.index');
	Route::get('/{lang?}/usuario/registrar', 'UserController@create')->name('usuario.create');
	Route::post('/{lang?}/usuarios', 'UserController@store')->name('usuario.store');
	Route::get('/{lang?}/usuario/{slug}/editar', 'UserController@edit')->name('usuario.edit');
	Route::put('/{lang?}/usuario/{slug}', 'UserController@update')->name('usuario.update');
	Route::put('/{lang?}/usuario/{slug}/activar', 'UserController@activate')->name('usuario.activate');
	Route::put('/{lang?}/usuario/{slug}/desactivar', 'UserController@deactivate')->name('usuario.deactivate');
	Route::get('/{lang?}/perfil', 'UserController@profile')->name('usuario.profile');

	//Consultorías
	Route::get('/{lang?}/consultorias/editar', 'ConsultancyController@edit')->name('consultoria.edit');
	Route::put('/{lang?}/consultorias/editar/{id}', 'ConsultancyController@update')->name('consultoria.update');
	Route::put('/{lang?}/consultancies/editar/{id}', 'ConsultancyController@updateEnglish')->name('consultancy.update');

	//Objetivos
	Route::get('/{lang?}/objetivos/editar', 'ObjectiveController@edit')->name('objetivo.edit');
	Route::put('/{lang?}/objetivos/editar/{id}', 'ObjectiveController@update')->name('objetivo.update');
	Route::put('/{lang?}/objectives/editar/{id}', 'ObjectiveController@updateEnglish')->name('objective.update');

	//Banner
	Route::get('/{lang?}/banner/editar', 'BannerController@edit')->name('banner.edit');
	Route::put('/{lang?}/banner/editar', 'BannerController@update')->name('banner.update');
});