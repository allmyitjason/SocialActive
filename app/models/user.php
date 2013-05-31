<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	protected $guarded = array();

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	* Hash password when its sent to the model as plain text
	* @param string
	* @return null
	*/
	public function setPasswordAttribute($password)
	{
		$this->attributes['password'] = Hash::make($password);
	}

	public function activities()
    {
        return $this->hasOne('Activity');
    }

    public function activitydiscussions()
    {
        return $this->belongsToMany('Activitydiscussion');
    }
    public function activitypartcipants()
    {
        return $this->belongsToMany('Activitypartcipant');
    }
    public function userskilllevels()
    {
        return $this->hasOne('Userskilllevel');
    }

    public function useractivityratings()
    {
        return $this->belongsToMany('Useractivityrating');
    }
    public function usersactivitiesequipment()
    {
        return $this->hasOne('Usersactivitiesequipment');
    }

    public function usersfriends()
    {
        return $this->hasOne('Usersfriend');
    }

    public function organisations()
    {
        return $this->hasMany('Organisation');
    }

    public function suburbs()
    {
        return $this->hasMany('Suburb');
    }

    public function genders()
    {
        return $this->hasMany('Gender');
    }

}