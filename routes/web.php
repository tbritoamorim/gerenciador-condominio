<?php
Route::group(['middleware' => ['auth'], 'namespace' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('condominos/index', 'CondominosController@index')->name('admin.condominos');
    Route::post('condominos/index', 'CondominosController@search')->name('admin.condominos.search');
    Route::post('condominos/create', 'CondominosController@create')->name('admin.condominos.create');
    Route::get('dependentes', 'DependentesController@index')->name('admin.dependentes');
    Route::post('dependentes/index', 'DependentesController@search')->name('admin.dependentes.search');
    Route::get('visitantes', 'VisitantesController@index')->name('admin.visitantes');
    Route::post('visitantes/index', 'VisitantesController@search')->name('admin.visitantes.search');
    Route::get('reserva', 'ReservaController@index')->name('admin.reserva');
    Route::post('reserva/index', 'ReservaController@search')->name('admin.reserva.search');
});
Route::get('/', 'SiteController@index');

Auth::routes();


