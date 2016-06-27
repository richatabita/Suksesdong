<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'CrudController@index');
Route::get('/add', 'CrudController@create');

Route::post('/store', 'CrudController@store');

Route::get('/read/{id}', 'CrudController@show');
Route::get('/edit/{id}', 'CrudController@edit');
Route::post('/update/{id}', 'CrudController@update');
Route::get('/delete/{id}', 'CrudController@destroy');
Route::get('/faq/index','FaqController@index');
Route::post('/faq/store','FaqController@store');
Route::get('/faq/add','FaqController@create');
Route::get('/page/add','PagesController@create');
Route::post('/page/store','PagesController@store');
Route::get('/page/index','PagesController@index');
Route::get('/page/edit/{id}','PagesController@edit');
Route::post('/page/update/{id}','PagesController@update');
Route::get('/page/delete/{id}','PagesController@destroy');



