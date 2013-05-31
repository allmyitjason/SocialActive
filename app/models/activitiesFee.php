<?php

Class ActivitiesFee extends Eloquent
{

    protected $table='activitiesfees';

    public function activities()
    {
        return $this->hasMany('Activity');
    }

}