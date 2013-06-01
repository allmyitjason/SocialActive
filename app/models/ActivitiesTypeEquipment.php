<?php

Class ActivityTypeEquipment extends Eloquent
{

    protected $table='activity_type_equipment';

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