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
Route::get('/', 'HelloController@home');
Route::get('/about', 'HelloController@about');

Route::get('/service', 'ServiceController@index');
Route::post('/service', 'ServiceController@store');

// Route::view('/about', 'about'); 
// Route::view('/services', 'services');

Route::get('/customers', 'CustomerController@index');
Route::get('/customers/create', 'CustomerController@create');
Route::post('/customers', 'CustomerController@store');
