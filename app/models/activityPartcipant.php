<?php

Class ActivityPartcipant extends Eloquent
{

    protected $table='activitypartcipants';

    public function activities()
    {
        return $this->hasMany('Activity');
    }

    public function users()
    {
        return $this->hasMany('User');
    }

}