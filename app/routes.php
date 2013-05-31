<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'index', function()
{
	return View::make('home.index');
}]);




// Authentication
Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@getLogin']);
Route::post('/login', ['uses' => 'AuthController@postLogin']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout']);

// Password Reset
Route::get('/password/remind', ['as' => 'passwordreset', 'uses' => 'AuthController@getPasswordRemind']);
Route::post('/password/remind', ['uses' => 'AuthController@postPasswordRemind']);
Route::get('/password/reset/{token}', ['as' => 'passwordremind', 'uses' => 'AuthController@getPasswordReset']);
Route::post('/password/reset/{token}', ['uses' => 'AuthController@postPasswordReset']);

//Registeration
Route::get('/register', ['as' => 'register', 'uses' => 'UserController@getRegister']);
Route::post('/register', ['uses' => 'UserController@store']);

// Auth protected routes
Route::group(array('before' => 'auth'), function()
{

	Route::get('/dashboard', function()
	{
		return View::make('template.base');
	});
});