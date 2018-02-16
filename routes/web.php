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

Route::get('/', ['uses' => 'TaskController@index', 'as' => 'tasks']);

Route::get('/create', ['uses' => 'TaskController@create', 'as' => 'tasks.create']);

Route::post('/create', ['uses' => 'TaskController@store', 'as' => 'tasks.store']);

Route::get('/show/task/{id}', ['uses' => 'TaskController@show', 'as' => 'tasks.show']);

Route::get('/edit/task/{id}', ['uses' => 'TaskController@edit', 'as' => 'tasks.edit']);

Route::post('/edit/task/{id}', ['uses' => 'TaskController@update', 'as' => 'tasks.update']);

Route::get('/delete/task/{id}', ['uses' => 'TaskController@destroy', 'as' => 'tasks.delete']);


Route::get('/students', ['uses' => 'StudentController@index', 'as' => 'students']);


