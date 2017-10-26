<?php



Route::get('user', 'UserController@index');

Route::post('user', 'UserController@create')->name('user');
Route::post('user/delete', 'UserController@delete');
Route::post('user/update', 'UserController@update');
Route::get('user/search', 'UserController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

