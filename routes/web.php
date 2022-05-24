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

Route::get('abtest', 'ABTestDataController@index');
Route::get('tvseries', 'TVSeriesController@index');
Route::get('asciigenerator', 'AsciiController@index');
Route::get('primenumbers', 'PrimeNumberController@index');
Route::post('primenumbersrange', 'PrimeNumberController@primeNumbersRange');
