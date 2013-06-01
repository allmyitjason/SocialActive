<?php

Class Venuefee extends Eloquent
{
	protected $guarded = [];
    protected $table='venuefees';

    public function venues()
    {
        return $this->hasMany('Venue');
    }

}