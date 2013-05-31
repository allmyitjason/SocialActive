<?php 

class AuthController extends SportBaseController {

	public $restful = true;

	protected $facebook;

	public function __construct()
	{
		$this->facebook = new \Facebook(
			array(
				'appId' => '169060389929087',
				'secret' => 'ec54365b698881ba8489683562bc0498',
			)
		);
	}

	public function getLogin()
	{
		/**
		 * Detect if user is logging in with facebook
		 * If so then login the user locally
		 */
		$facebookId = $this->facebook->getUser();

		if ($facebookId) {
			//User is logged in with facebook

			//Check if we have a local record for this user
			//if we do then log them in localy and redirect to dashboard
			//otherwise we will send them to the registration form

			$localUser = \User::where('facebookId', '=', $facebookId)->first(['id']);

			if ($localUser) {
				Auth::loginUsingId($localUser->id);
				return Redirect::to('/dashboard');
			}

			//We don't have a local record for this user, send them to the registration form
			return Redirect::to('/register')
				->with('facebookId', $facebookId);

			try {
				// Proceed knowing you have a logged in user who's authenticated.
					$user_profile = $facebook->api('/me');
				    print_r($user_profile);
				} catch (FacebookApiException $e) {
				    var_dump($e);
				    $user = null;
				}
		}

		//Return normal login form
		return View::make('auth.login')
			->with('facebookLogin', $this->facebook->getLoginUrl());
	}

	public function postLogin()
	{
		$input = Input::only('email', 'password');

		if(Auth::attempt($input, true))
		{
			return Redirect::intended('trials');
		}

		return Redirect::route('login')->with('error','Incorrect username or password');
	}

	public function getLogout()
	{
		//Remove facebook session if their is one
		$this->facebook->destroySession();

		Auth::logout();
		return Redirect::route('login');
	}

	public function getPasswordRemind()
	{
		return View::make('auth.password.remind');
	}

	public function postPasswordRemind()
	{
		$input = Input::only('email');
		return Password::remind($input)->with('message','Password reminder sent');
	}

	public function getPasswordReset($token)
	{
		return View::make('auth.password.reset')->with('token', $token);
	}

	public function postPasswordReset($token)
	{
		$credentials = Input::only('email');

		return Password::reset($credentials, function($user, $password)
		{
			$user->password = $password;
			$user->save();

			return Redirect::to('/login');
		});
	}

}