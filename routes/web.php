<?php
Route::group(['middleware' => ['auth'], 'namespace' => 'admin'], function () {
    Route::get('admin', 'AdminController@index')->name('admin.home');
});
Route::get('/', 'SiteController@index');

Auth::routes();


