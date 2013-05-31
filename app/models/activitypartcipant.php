<?php

// Model:'Activitypartcipant' - Database Table: 'activitypartcipants'

Class Activitypartcipant extends Eloquent
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