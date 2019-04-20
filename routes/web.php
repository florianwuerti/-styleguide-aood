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

Route::get( '/', 'HomeController@index' )->name( 'start' );

Route::get( 'logout', 'Auth\LoginController@logout' )->middleware( 'auth' );

Auth::routes();

Route::name( 'template.' )->group( function () {

	Route::middleware( 'auth' )->group( function () {

		Route::get( '{id}/dashboard', 'BrandController@index' )->name( 'user.backend' );

		Route::get( '/template', 'HomeController@index' )->name( 'template' );

	} );

} );

Route::name( 'brand.' )->group( function () {

	Route::middleware( 'auth' )->group( function () {

		Route::get( 'brand/348927/brandingname/guidelines', 'GuidelinesController@index' )->name( 'guidelines' );
		Route::get( 'brand/348927/brandingname/projects', 'ProjectsController@index' )->name( 'projects' );

	} );

} );