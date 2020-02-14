<?php


Route::get('/', 'MainController@index')->name('home');
Route::get('/admin', 'MainController@admin')->name('admin');

Route::get('/insert', 'MainController@insert');
Route::get('/update', 'MainController@update');
Route::get('/delete', 'MainController@delete');