<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/usuarios', 'UserController')->middleware('auth');

route::get('/usuario/listarPdf', 'UserController@listarPdf')->name('nombres_pdf');

Route::resource('/mision', 'misionController')->middleware('auth');

Route::resource('/politica', 'politica')->middleware('auth');

Route::resource('/valores', 'valores')->middleware('auth');

Route::resource('/plan', 'plan')->middleware('auth');

Route::resource('/organigrama', 'organigrama')->middleware('auth');

Route::resource('/unidades', 'unidades')->middleware('auth');

Route::resource('/cumple', 'cumple')->middleware('auth');

Route::resource('/directorio', 'directorio')->middleware('auth');

Route::resource('/biografias', 'biografias')->middleware('auth');

Route::resource('/infografias', 'infografias')->middleware('auth');

Route::resource('/copasst', 'copasst')->middleware('auth');

Route::resource('/Manualesoriginal', 'Manuales')->middleware('auth');

Route::resource('/novedades', 'NovedadesController')->middleware('auth');

Route::resource('/capacitaciones', 'CapacitacionesController')->middleware('auth');

Route::resource('/pqrs', 'PqrsController')->middleware('auth');


Route::resource('/procedimientos', 'procedimientos')->middleware('auth');

Route::resource('/formatos', 'formatos')->middleware('auth');

Route::resource('/registros', 'registros')->middleware('auth');

Route::resource('/inicio', 'inicioController')->middleware('auth');

Route::resource('/vacaciones', 'VacacionesController')->middleware('auth');


route::name('imprimir')->get('\imprimir-pdf', 'PDFController@imprimir');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
