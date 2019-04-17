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

Route::get('/', 'HomeController@start')->name('start');



Auth::routes();

Route::name( 'template.' )->group( function () {

	Route::middleware( 'auth' )->group( function () {

		Route::get('/template', 'HomeController@index')->name('template');

	} );

} );

