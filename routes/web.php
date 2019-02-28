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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'BlogController@index')->name('index') ;

Route::get('/create', 'BlogController@create')->name('create');
Route::post('/create', 'BlogController@store')->name('store');

Route::get('{id}/edit', 'BlogController@edit')->name('edit');
Route::post('{id}/edit', 'BlogController@update')->name('update');

Route::get('{id}/destroy', 'BlogController@destroy')->name('destroy');

Route::get('detail/{id}', 'BlogController@detail')->name('detail');