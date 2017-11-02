<?php

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


Route::get('user', 'UserController@index');
Route::get('usertype', 'UsertypeController@index');
Route::get('program', 'ProgramController@index');
Route::get('school', 'SchoolController@index');
Route::get('tool', 'ToolController@index');

Route::post('user', 'UserController@create')->name('user');
Route::post('usertype', 'UsertypeController@create')->name('usertype');
Route::post('program', 'ProgramController@create')->name('program');
Route::post('school', 'SchoolController@create')->name('school');
Route::post('tool', 'ToolController@create')->name('tool');

Route::post('user/delete', 'UserController@delete');
Route::post('user/update', 'UserController@update');
Route::get('user/search', 'UserController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

