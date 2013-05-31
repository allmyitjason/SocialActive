<?php

// Model:'Activitydiscussion' - Database Table: 'activitydiscussions'

Class Activitydiscussion extends Eloquent
{

    protected $table='activitydiscussions';

    public function activities()
    {
        return $this->hasMany('Activity');
    }

    public function users()
    {
        return $this->hasMany('User');
    }

}