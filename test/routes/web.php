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

Route::get('/berat', 'BeratController@index')->name('indexBerat');
Route::match(['get', 'post'], '/berat/add', 'BeratController@add')->name('tambahBerat');
Route::match(['get', 'post'], '/berat/edit/{id}', 'BeratController@edit')->name('ubahBerat');
Route::match(['post', 'delete'], '/berat/delete/{id}', 'BeratController@delete')->name('deleteBerat');