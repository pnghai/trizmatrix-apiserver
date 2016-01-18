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

Route::group(['middleware' => ['api'], 'prefix' => 'v1', 'namespace' => 'Api\V1'], function () {
	Route::resource('principles', 'PrincipleJsonApiController', ['only' => ['index', 'show']]);
	Route::resource('parameters', 'ParameterJsonApiController', ['only' => ['index', 'show']]);
    Route::resource('solutions', 'SolutionJsonApiController', ['only' => ['index', 'show']]);
    Route::get('/improvements/{improvedId}/preservations/{preservedId}/solutions', [
        'as' => 'improvements.preservations.solutions',
        'uses' => 'SolutionJsonApiController@getSolutionsByParams']);
});