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

Route::get('/show/{id}', [
	'as' => 'show', 'car' => 'CarController@showCarAction'
]);

Route::get('/insert', [
	'as' => 'insert', 'car' => 'CarController@insertCarAction'
]);

Route::get('/update/{id}', [
	'as' => 'update', 'car' => 'CarController@updateCarAction'
]);

Route::get('/delete/{id}', [
    'as' => 'delete', 'car' => 'CarController@deleteCarAction'
]);
