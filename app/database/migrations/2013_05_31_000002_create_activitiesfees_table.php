<?php

use Illuminate\Database\Migrations\Migration;

class CreateActivitiesfeesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('activitiesfees', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('activity_id')->nullable()->default(NULL);
            $table->float('fee')->nullable()->default(NULL);
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('activitiesfees');
    }
}