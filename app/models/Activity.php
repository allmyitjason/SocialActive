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
    public function activitiesfees()
    {
        return $this->hasOne('Activitiesfee');
    }

    public function activitydiscussions()
    {
        return $this->hasMany('Activitydiscussion');
    }
    public function activitypartcipants()
    {
        return $this->hasMany('Activitypartcipant');
    }
    public function useractivityratings()
    {
        return $this->hasMany('Useractivityrating');
    }
    public function users()
    {
        return $this->hasMany('User');
    }

    public function activitytypes()
    {
        return $this->hasMany('Activitytype');
    }

    public function userskilllevels()
    {
        return $this->hasMany('Userskilllevel');
    }

    public function genders()
    {
        return $this->hasMany('Gender');
    }

    public function venues()
    {
        return $this->hasMany('Venue');
    }

}