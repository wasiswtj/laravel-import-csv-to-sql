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

Route::get('/', 'DataController@index');
Route::post('/data', 'DataController@store');
Route::get('/create', 'DataController@create');
Route::get('/delete/id/{id}', 'DataController@delete');
Route::get('/import', 'DataController@import');


