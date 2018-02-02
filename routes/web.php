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

Route::get('/hello', 'TestController@hello');


Route::get('/login', 'UserController@login');


Route::get('/register', 'UserController@register');

Route::get('/reservation/create', 'ReservationController@create');

Route::get('/table/create', 'TableController@create');
Route::get('/table', 'TableController@index');

Route::get('/food/create', 'FoodController@create');
Route::get('/food', 'FoodController@index');
