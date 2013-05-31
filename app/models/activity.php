<?php

Class Activity extends Eloquent
{

    protected $table='activities';

    public function activitiesequipment()
    {
        return $this->belongsToMany('Activitiesequipment');
    }
    public function activitiesfees()
    {
        return $this->hasOne('Activitiesfee');
    }

    public function activitydiscussions()
    {
        return $this->hasMany('Activitydiscussion');
    }
    public function activitypartcipants()
    {
        return $this->hasMany('Activitypartcipant');
    }
    public function useractivityratings()
    {
        return $this->hasMany('Useractivityrating');
    }
    public function users()
    {
        return $this->hasMany('User');
    }

    public function activitytypes()
    {
        return $this->hasMany('Activitytype');
    }

    public function userskilllevels()
    {
        return $this->hasMany('Userskilllevel');
    }

    public function genders()
    {
        return $this->hasMany('Gender');
    }

    public function venues()
    {
        return $this->hasMany('Venue');
    }

}