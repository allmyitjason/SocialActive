<?php

// Model:'Skilllevel' - Database Table: 'skilllevels'

Class Skilllevel extends Eloquent
{
	protected $guarded = [];
    protected $table='skilllevels';

    public function userskilllevels()
    {
        return $this->hasOne('Userskilllevel');
    }

}