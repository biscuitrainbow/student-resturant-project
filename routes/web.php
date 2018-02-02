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

Route::get('/logout', 'UserController@logout');

Route::get('/login', 'UserController@login')->name('login');
Route::post('/login', 'UserController@authenticate');

Route::get('/register', 'UserController@register');
Route::post('/register', 'UserController@store');


Route::get('/reservation/create', 'ReservationController@create')->middleware('auth');

Route::get('/table/create', 'TableController@create')->middleware('auth');
Route::post('/table/create', 'TableController@store')->middleware('auth');
Route::get('/table', 'TableController@index')->middleware('auth');


Route::get('/food', 'FoodController@index')->middleware('auth');
Route::get('/food/create', 'FoodController@create')->middleware('auth');
Route::post('/food/create', 'FoodController@store')->middleware('auth');

Route::get('/food', 'FoodController@index')->middleware('auth');


Route::get('/member/create', 'MemberController@create')->middleware('auth');
Route::post('/member/create', 'MemberController@store')->middleware('auth');
Route::get('/member', 'MemberController@index')->middleware('auth');