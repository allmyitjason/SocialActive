<?php

Class ActivityType extends Eloquent
{
	protected $guarded = [];
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