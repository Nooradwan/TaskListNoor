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

/*Route::get('/', function () {
    return view('child');
});
*/
Route::get('/', 'TaskController@index');

Route::post('store','TaskController@store');

Route::delete('delete/{id}','TaskController@destroy');

Route::post('edit/{id}','TaskController@edit');

Route::post('edit/update/{id}','TaskController@update');