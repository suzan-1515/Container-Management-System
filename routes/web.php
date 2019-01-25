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

Auth::routes();

Route::get('/active-directory-login', 'HomeController@adlogin');

Route::get('/home', 'HomeController@index');

Route::get('ships','ShipController@index');
Route::get('ships/create','ShipController@create');
Route::post('ships','ShipController@store');
Route::get('ships/{ship}/edit','ShipController@edit');
Route::put('ships/{ship}','ShipController@update');
Route::get('ships/{ship}/delete','ShipController@destroy');

Route::get('schedules','ScheduleController@index');
Route::get('schedules/create','ScheduleController@create');
Route::post('schedules','ScheduleController@store');
Route::get('schedules/{schedule}/edit','ScheduleController@edit');
Route::put('schedules/{schedule}','ScheduleController@update');
Route::get('schedules/{schedule}/delete','ScheduleController@destroy');

Route::get('users','UserController@index');
Route::get('users/create','UserController@create');
Route::post('users','UserController@store');
Route::get('users/{user}/edit','UserController@edit');
Route::put('users/{user}','UserController@update');
Route::get('users/{user}/delete','UserController@destroy');

Route::get('customers','CustomerController@index');
Route::get('customers/create','CustomerController@create');
Route::post('customers','CustomerController@store');
Route::get('customers/{customer}/edit','CustomerController@edit');
Route::put('customers/{customer}','CustomerController@update');
Route::get('customers/{customer}/delete','CustomerController@destroy');

Route::get('settings','SettingController@index');
Route::post('settings/updatepass','SettingController@updatepass');

Route::get('bookings','BookingController@index');
Route::get('bookings/create','BookingController@create');
Route::get('bookings/create/{schedule}','BookingController@showform');
Route::post('bookings/create/{schedule}','BookingController@store');
Route::get('bookings/{booking}','BookingController@show');
Route::get('bookings/{booking}/edit','BookingController@edit');
Route::put('bookings/{booking}','BookingController@update');
Route::get('bookings/{booking}/delete','BookingController@destroy');


