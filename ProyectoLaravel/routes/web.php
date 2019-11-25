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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/botines/{brand}', 'ProductController@show');

Route::get('/botines/{brand}/{id}', 'ProductController@show2');

Route::post('/cartadd', 'CartController@store');

Route::get('/cart', 'CartController@index');

Route::post('/cartdelete', 'CartController@update');

Route::post('/cartclose', 'CartController@cartClose');

// Route::get('/home', 'HomeController@index')->name('home');
