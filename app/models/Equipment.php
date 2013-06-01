<?php

Class Equipment extends Eloquent
{
	protected $guarded = [];
    protected $table='equipment';

    public function activitytypes()
    {
        return $this->belongsToMany('ActivitiesTypeEquipment');
    }
}