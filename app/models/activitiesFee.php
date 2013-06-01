<?php

Class ActivitiesFee extends Eloquent
{
	protected $guarded = [];
    protected $table='activitiesfees';

    public function activities()
    {
        return $this->hasMany('Activity');
    }

}