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

Route::get('/', function()
{
	return View::make('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

	Route::resource('principles', 'PrincipleController');
	Route::resource('parameters', 'ParameterController');
	Route::resource('solutions', 'SolutionController');

});

Route::group(['middleware' => ['api']], function () {
	Route::group(['namespace' => 'Api'], function() {
		Route::resource('principles', 'PrincipleJsonApiController');
	});
});