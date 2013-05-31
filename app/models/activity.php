<?php

// Model:'Activity' - Database Table: 'activities'

Class Activity extends Eloquent
{

    protected $table='activities';

    public function activitiesequipment()
    {
        return belongsToMany('Activitiesequipment');
    }
    public function activitiesfees()
    {
        return $this->hasOne('Activitiesfee');
    }

    public function activitydiscussions()
    {
        return belongsToMany('Activitydiscussion');
    }
    public function activitypartcipants()
    {
        return belongsToMany('Activitypartcipant');
    }
    public function useractivityratings()
    {
        return belongsToMany('Useractivityrating');
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