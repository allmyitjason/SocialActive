<?php

// Model:'Gender' - Database Table: 'genders'

Class Gender extends Eloquent
{

    protected $table='genders';

    public function activities()
    {
        return $this->hasOne('Activity');
    }

    public function users()
    {
        return $this->hasOne('User');
    }

}