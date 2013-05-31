<?php

// Model:'Activitiesfee' - Database Table: 'activitiesfees'

Class Activitiesfee extends Eloquent
{

    protected $table='activitiesfees';

    public function activities()
    {
        return $this->hasMany('Activity');
    }

}