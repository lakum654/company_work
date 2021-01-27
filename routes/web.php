<?php

use Illuminate\Support\Facades\Route;

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

Route::get('one','OneController@index');
Route::get('one/create','OneController@create');
Route::post('one/store','OneController@store');

Route::get('two','TwoController@index');
Route::get('two/create','TwoController@create');
Route::post('two/store','TwoController@store');
