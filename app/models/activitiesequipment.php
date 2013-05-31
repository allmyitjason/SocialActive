<?php

// Model:'ActivitiesEquipment' - Database Table: 'activities_equipment'

Class ActivitiesEquipment extends Eloquent
{

    protected $table='activities_equipment';

    public function usersactivitiesequipment()
    {
        return $this->hasOne('Usersactivitiesequipment');
    }

    public function activities()
    {
        return $this->hasMany('Activity');
    }

    public function equipment()
    {
        return $this->hasMany('Equipment');
    }

}