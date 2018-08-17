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

Route::get('/',                   ['uses' => 'GameController@index', 'as' => 'index']);
Route::get('/count',                   ['uses' => 'GameController@count', 'as' => 'count']);
Route::get('/clear',                   ['uses' => 'GameController@clear', 'as' => 'clear']);
Route::get('/first',                   ['uses' => 'GameController@first', 'as' => 'first']);
Route::get('/start',                   ['uses' => 'GameController@start', 'as' => 'start']);


