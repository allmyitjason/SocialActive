<?php

Class ActivityType extends Eloquent
{
    protected $table='activitytypes';

    public function equipment()
    {
        return $this->belongsToMany('Equipment');
    }

    public function userskilllevels()
    {
        return $this->hasOne('Userskilllevel');
    }

}