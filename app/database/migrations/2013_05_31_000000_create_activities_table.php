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
            $table->integer('user_id')->nullable()->default(NULL);
            $table->integer('activityType_id')->nullable()->default(NULL);
            $table->integer('minSkillLevel_id')->nullable()->default(NULL);
            $table->integer('maxSkillLevel_id')->nullable()->default(NULL);
            $table->integer('gender_id')->nullable()->default(NULL);
            $table->integer('venue_id')->nullable()->default(NULL);
            $table->integer('minParticipants')->nullable()->default(NULL);
            $table->integer('maxParticipants')->nullable()->default(NULL);
            $table->integer('minAge')->nullable()->default(NULL);
            $table->integer('maxAge')->nullable()->default(NULL);
            $table->('activityDate')->nullable()->default(NULL);
            $table->integer('activityDurationMins')->nullable()->default(NULL);
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