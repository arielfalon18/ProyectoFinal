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

Route::get('/', 'HomeController@getHome');


Route::get('inicio', 'inicio@getIndex');

Route::get('registrarse', 'Auth\LoginController@showLoginform')->middleware('guest');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('crear', 'Auth\LoginController@create');


Route::post('nuevoR', 'Auth\ConsultasController@nuevoR');