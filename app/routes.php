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

Route::get('/', function()
{
	
	$facebook = new Facebook(
			array(
				'appId' => '169060389929087',
				'secret' => 'ec54365b698881ba8489683562bc0498',
			)
		);

               $user = $facebook->getUser();

               if ($user != 0) {

				  try {
				    // Proceed knowing you have a logged in user who's authenticated.
				    $user_profile = $facebook->api('/me');
				    print_r($user_profile);
				  } catch (FacebookApiException $e) {
				    var_dump($e);
				    $user = null;
				  }
				}
				//var_dump( $user_profile);
               var_dump($user);

    return View::make('hello')
    	->with('user', $user)
    	->with('facebook', $facebook);

});

Route::get('/logout', function() {


	$facebook = new Facebook(
			array(
				'appId' => '169060389929087',
				'secret' => 'ec54365b698881ba8489683562bc0498',
			)
		);
	
	$facebook->destroySession();
session_destroy();

return Redirect::to('/');
});


// Authentication
Route::get('/login', ['as' => 'login', 'uses' => 'AllMyIt\AuthController@getLogin']);
Route::post('/login', ['uses' => 'AllMyIt\AuthController@postLogin']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'AllMyIt\AuthController@getLogout']);

// Password Reset
Route::get('/password/remind', ['as' => 'passwordreset', 'uses' => 'AllMyIt\AuthController@getPasswordRemind']);
Route::post('/password/remind', ['uses' => 'AllMyIt\AuthController@postPasswordRemind']);
Route::get('/password/reset/{token}', ['as' => 'passwordremind', 'uses' => 'AllMyIt\AuthController@getPasswordReset']);
Route::post('/password/reset/{token}', ['uses' => 'AllMyIt\AuthController@postPasswordReset']);

// Auth protected routes
Route::group(array('before' => 'auth'), function()
{

	Route::get('/dashboard', ['as' => 'dashboard',function(){
		return View::make('dashboard');
	}]);

	
	Route::controller('calendar', 'Peracto\CalendarController');
	
});