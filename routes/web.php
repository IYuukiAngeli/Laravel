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
Route::get('hei', 'HeiController@index');

Route::post('user', 'UserController@create')->name('user');
Route::post('user/delete', 'UserController@delete');
Route::post('user/update', 'UserController@update');
Route::get('user/search', 'UserController@search');

Route::post('usertype', 'UsertypeController@create')->name('usertype');
Route::post('usertype/delete', 'UsertypeController@delete');
Route::post('usertype/update', 'UsertypeController@update');
Route::get('usertype/search', 'UsertypeController@search');

Route::post('school', 'SchoolController@store')->name('school');
Route::post('school/delete', 'SchoolController@delete');
Route::post('school/update', 'SchoolController@update');
Route::get('school/search', 'SchoolController@search');

Route::post('program', 'ProgramController@create')->name('program');
Route::post('program/delete', 'ProgramController@delete');
Route::post('program/update', 'ProgramController@update');
Route::get('program/search', 'ProgramController@search');

Route::post('tool', 'ToolController@create')->name('tool');
Route::post('tool/store', 'ToolController@store')->name('tool.store');
Route::post('tool/delete', 'ToolController@delete');
Route::post('tool/update', 'ToolController@update');
Route::get('tool/search', 'ToolController@search');


Route::post('hei', 'HeiController@create')->name('hei');
Route::post('hei/delete', 'HeiController@delete');
Route::post('hei/update', 'HeiController@update');
Route::get('hei/search', 'HeiController@search');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/upload', 'UploadController@index');
Route::get('/upload/show', 'UploadController@show');
Route::post('upload/store', 'UploadController@store')->name('upload.store');



