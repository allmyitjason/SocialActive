<?php

Class ActivityEquipment extends Eloquent
{

    protected $table='activity_activity_equipment';

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