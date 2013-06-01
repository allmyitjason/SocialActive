<?php

// Model:'Suburb' - Database Table: 'suburbs'

Class Suburb extends Eloquent
{

    protected $table='suburbs';

    public function organisations()
    {
        return $this->hasOne('Organisation');
    }

    public function users()
    {
        return $this->hasOne('User');
    }

    public function venues()
    {
        return $this->hasOne('Venue');
    }

}