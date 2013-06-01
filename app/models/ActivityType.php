<?php

Class ActivityType extends Eloquent
{
    protected $table='activitytypes';

    public function activities()
    {
        return $this->hasOne('Activity');
    }

    public function userskilllevels()
    {
        return $this->hasOne('Userskilllevel');
    }

}