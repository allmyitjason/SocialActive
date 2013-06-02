<?php

Class Venue extends Eloquent
{
    protected $guarded = [];
    protected $table='venues';

    public function activities()
    {
        return $this->hasOne('Activity');
    }

    public function venuefees()
    {
        return $this->hasOne('Venuefee');
    }

    public function venueratings()
    {
        return $this->hasOne('Venuerating');
    }

    public function suburbs()
    {
        return $this->hasMany('Suburb');
    }

    public function type()
    {
        return $this->belongsToMany('ActivityType');
    }

}