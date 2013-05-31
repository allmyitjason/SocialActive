<?php

use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('activities', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
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
            $table->integer('activityDurationMins');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('activities');
    }
}