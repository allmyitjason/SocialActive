<?php

Class Activity extends Eloquent
{
    protected $guarded = [];
    public static $rules = [
        'activityType_id' => 'required',
        'minSkillLevel_id' => 'required|min:1|max:5',
        'maxSkillLevel_id' => 'required|min:1|max:5',
        'gender_id' => 'required',
        'venue_id' => 'required',
        'minParticipants' => 'required',
        'maxParticipants' => 'required',
        'minAge' => 'required',
        'maxAge' => 'required',
        'activityDate' => 'required|date'

    ];

    /*$table->integer('user_id')->unsigned();
            $table->integer('activityType_id')->unsigned();
            $table->integer('minSkillLevel_id')->nullable()->unsigned();
            $table->integer('maxSkillLevel_id')->nullable()->unsigned();
            $table->integer('gender_id')->nullable()->unsigned();
            $table->integer('venue_id')->unsigned();
            $table->integer('minParticipants')->nullable();
            $table->integer('maxParticipants')->nullable();
            $table->integer('minAge')->nullable();
            $table->integer('maxAge')->nullable();
            $table->datetime('activityDate');
            $table->integer('activityDurationMins');*/

    protected $table='activities';

    public function equipment()
    {
        return $this->belongsToMany('ActivityEquipment');
    }

    public function activitytypes()
    {
        return $this->hasMany('Activitytype');
    }

    public function userskilllevels()
    {
        return $this->hasMany('Userskilllevel');
    }

    public function venues()
    {
        return $this->hasMany('Venue');
    }

    public function host()
    {
        return $this->belongsTo('User', 'user_id');
    }

    public function type()
    {
        return $this->belongsTo('ActivityType', 'activityType_id');
    }

    public function minSkillLevel()
    {
        return $this->belongsTo('Skilllevel', 'minSkillLevel_id');
    }

    public function maxSkillLevel()
    {
        return $this->belongsTo('Skilllevel', 'maxSkillLevel_id');
    }

    public function gender()
    {
        return $this->belongsTo('Gender', 'gender_id');
    }

    public function venue()
    {
        return $this->belongsTo('Venue', 'venue_id');
    }

    public function participants()
    {
        return $this->belongsToMany('User', 'activitypartcipants', 'activity_id', 'user_id');
    }

}