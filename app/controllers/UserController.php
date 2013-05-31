<?php

class UserController extends \AllMyIt\UserController 
{
    public function __construct(\AllMyIt\Model\User $user)
    {
        parent::__construct($user);
    }

    public function getRegister()
    {
    	return \View::make('users.register');
    }

}