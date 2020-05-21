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
Route::put('/sparen/sobre-sparen/{id}', 'AboutController@update')->name('sobre.update');
Route::put('/sparen/about-sparen/{id}', 'AboutController@updateEnglish')->name('about.update');
Route::get('/#sobre', 'WebController@index')->name('home.sobre');



//Servicios
Route::get('/sparen/servicios/editar', 'ServiceController@edit')->name('servicio.edit');
Route::put('/sparen/servicios/edit/{id}', 'ServiceController@update')->name('servicio.update');
Route::put('/sparen/services/{id}', 'ServiceController@updateEnglish')->name('service.update');

//Informes
Route::get('/sparen/informes', 'ReportController@index')->name('informe.index');
Route::get('/sparen/informes/registrar', 'ReportController@create')->name('informe.create');
Route::post('/sparen/informes', 'ReportController@store')->name('informe.store');
Route::post('/sparen/reports/{id}', 'ReportController@storeEnglish')->name('report.store');
Route::get('/sparen/informes/editar', 'ReportController@edit')->name('informe.edit');
Route::put('/sparen/informes/editar/{slug}', 'ReportController@update')->name('informe.update');


//Contacto
Route::get('/sparen/contacto', 'ContactController@create')->name('contacto.index');
Route::post('/sparen/contacto', 'ContactController@store')->name('contacto.store');


//bitacora
Route::get('/sparen/bitacora-usuarios', 'BinnacleController@index')->name('bitacora.index');

//Usuario
Route::get('/sparen/usuario', 'UserController@index')->name('usuario.index');
Route::get('/sparen/usuario/registrar', 'UserController@create')->name('usuario.create');
Route::post('/sparen/usuarios', 'UserController@store')->name('usuario.store');
Route::get('/sparen/usuario/{slug}/editar', 'UserController@edit')->name('usuario.edit');
Route::put('/sparen/usuario/{slug}', 'UserController@update')->name('usuario.update');
Route::put('/sparen/usuario/activar/{slug}', 'UserController@activate')->name('usuario.activate');
Route::put('/sparen/usuario/desactivar/{slug}', 'UserController@deactivate')->name('usuario.deactivate');
Route::get('/sparen/perfil', 'UserController@profile')->name('usuario.profile');
Auth::routes();

//Consultorías
Route::get('/sparen/consultorias/editar', 'ConsultancyController@edit')->name('consultoria.edit');
Route::put('/sparen/consultorias/editar/{id}', 'ConsultancyController@update')->name('consultoria.update');
Route::put('/sparen/consultancies/{id}', 'ConsultancyController@updateEnglish')->name('consultancy.update');


//Objetivos
Route::get('/sparen/objetivos/editar', 'ObjectiveController@edit')->name('objetivo.edit');
Route::put('/sparen/objetivos/editar/{id}', 'ObjectiveController@update')->name('objetivo.update');
Route::put('/sparen/obectives/{id}', 'ObjectiveController@updateEnglish')->name('objective.update');

//Banner
Route::get('/sparen/banner/editar', 'BannerController@edit')->name('banner.edit');
Route::put('/sparen/banner/editar/{id}', 'BannerController@update')->name('banner.update');
Route::put('/sparen/banners/{id}', 'BannerController@updateEnglish')->name('banners.update');


