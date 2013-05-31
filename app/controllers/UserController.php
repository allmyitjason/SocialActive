<?php

class UserController extends SportBaseController 
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function getRegister()
    {
    	return View::make('users.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($input = null)
    {
        if (is_null($input)) {
             $input = array_except(Input::all(), ['password_confirmation', 'codeception_added_auto_submit']);
        }

        $obj = $this->repository->create($input);
        
        if ($obj->save())
        {
            //Login the user
            Auth::loginUsingId($obj->id);

            return Redirect::to('/dashboard');
        }

        return Redirect::route($this->routename.'.create')
            ->withInput()
            ->withErrors($obj->errors())
            ->with('message', 'There were validation errors.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, $input = null)
    {
        //validation needs to be performed here
        $input = array_except(Input::all(), ['password_confirmation', 'codeception_added_auto_submit']);

        if ($input['password'] === '') {
            unset($input['password']);
        }
        return parent::update($id, $input);
    }

}