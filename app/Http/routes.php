<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {

	Route::get('/', function () {
	    return view('welcome');
	});

	Route::get('portfolio', function() {
		return view ('portfolio');
	});

	Route::get('resume', function() {
		return view ('resume');
	});

	Route::get('contact', 'ContactController@create');
	Route::post('contact', 'ContactController@store');    // Add your routes here
});