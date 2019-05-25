<?php
Route::group(['middleware' => ['auth'], 'namespace' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('condominos', 'CondominosController@index')->name('admin.condominos');
    Route::get('dependentes', 'DependentesController@index')->name('admin.dependentes');
    Route::get('visitantes', 'VisitantesController@index')->name('admin.visitantes');
    Route::get('reserva', 'ReservaController@index')->name('admin.reserva');
});
Route::get('/', 'SiteController@index');

Auth::routes();


