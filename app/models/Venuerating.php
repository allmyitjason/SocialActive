<?php

Class Venuerating extends Eloquent
{
	protected $guarded = [];
    protected $table='venueratings';

    public function venues()
    {
        return $this->hasMany('Venue');
    }

}