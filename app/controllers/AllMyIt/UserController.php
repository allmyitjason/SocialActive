<?php namespace AllMyIt;

use \View, \Input, \Validator, \Redirect;
use AllMyIt\Model\User;

class UserController extends BaseController {

    public function __construct(User $user)
    {
        parent::__construct($user);   
    }

    // Overwrite store and update methods based on extra things we need to do for a user

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($input = null)
    {
        //validation needs to be performed here
        $input = array_except(Input::all(), ['password_confirmation', 'codeception_added_auto_submit']);
        return parent::store($input);
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