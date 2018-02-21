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

Route::get('/user', 'UserController@index');
Route::get('/user/delete/{user}', 'UserController@delete');
Route::get('/user/{user}', 'UserController@show');

Route::get('/reservation/create', 'ReservationController@create')->middleware('auth');
Route::get('/reservation/next', 'ReservationController@next')->middleware('auth');
Route::post('/reservation/receipt', 'ReservationController@receipt')->middleware('auth');
Route::get('/reservation/', 'ReservationController@index')->middleware('auth');
Route::get('/reservation/edit/{reservation}', 'ReservationController@edit')->middleware('auth');
Route::post('/reservation/edit/{reservation}', 'ReservationController@save')->middleware('auth');
Route::get('/reservation/delete/{reservation}', 'ReservationController@delete')->middleware('auth');
Route::get('/reservation/{reservation}', 'ReservationController@show')->middleware('auth');

Route::get('/table/create', 'TableController@create')->middleware('auth');
Route::post('/table/create', 'TableController@store')->middleware('auth');
Route::get('/table', 'TableController@index')->middleware('auth');
Route::get('/table/edit/{table}', 'TableController@edit')->middleware('auth');
Route::post('/table/edit/{table}', 'TableController@save')->middleware('auth');
Route::get('/table/delete/{table}', 'TableController@delete')->middleware('auth');

Route::get('/tabletype', 'TableTypeController@index')->middleware('auth');
Route::get('/tabletype/create', 'TableTypeController@create')->middleware('auth');
Route::post('/tabletype/create', 'TableTypeController@store')->middleware('auth');
Route::get('/tabletype/edit/{table_type}', 'TableTypeController@edit')->middleware('auth');
Route::post('/tabletype/edit/{table_type}', 'TableTypeController@save')->middleware('auth');
Route::get('/tabletype/delete/{table_type}', 'TableTypeController@delete')->middleware('auth');


Route::get('/food', 'FoodController@index')->middleware('auth');
Route::get('/food/create', 'FoodController@create')->middleware('auth');
Route::post('/food/create', 'FoodController@store')->middleware('auth');
Route::get('/food/edit/{food}', 'FoodController@edit')->middleware('auth');
Route::post('/food/edit/{food}', 'FoodController@save')->middleware('auth');
Route::get('/food/delete/{food}', 'FoodController@delete')->middleware('auth');
Route::get('/food', 'FoodController@index')->middleware('auth');

Route::get('/menutype', 'MenuTypeController@index')->middleware('auth');
Route::get('/menutype/create', 'MenuTypeController@create')->middleware('auth');
Route::post('/menutype/create', 'MenuTypeController@store')->middleware('auth');
Route::get('/menutype/edit/{menu_type}', 'MenuTypeController@edit')->middleware('auth');
Route::post('/menutype/edit/{menu_type}', 'MenuTypeController@save')->middleware('auth');
Route::get('/menutype/delete/{menu_type}', 'MenuTypeController@delete')->middleware('auth');


Route::get('/member', 'MemberController@index')->middleware('auth');
Route::get('/member/create', 'MemberController@create')->middleware('auth');
Route::post('/member/create', 'MemberController@store')->middleware('auth');
Route::get('/member/edit/{member}', 'MemberController@edit')->middleware('auth');
Route::post('/member/edit/{member}', 'MemberController@save')->middleware('auth');
Route::get('/member/delete/{member}', 'MemberController@delete')->middleware('auth');


Route::get('/report/reservation','ReportController@reservation')->middleware('auth');
Route::get('/report/takehome','ReportController@takehome')->middleware('auth');
Route::get('/report/member','ReportController@member')->middleware('auth');