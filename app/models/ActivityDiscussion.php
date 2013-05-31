<?php

Class ActivityDiscussion extends Eloquent
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