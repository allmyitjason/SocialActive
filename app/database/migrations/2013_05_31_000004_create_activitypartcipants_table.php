<?php

use Illuminate\Database\Migrations\Migration;

class CreateActivitypartcipantsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('activitypartcipants', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('activity_id')->nullable()->default(NULL);
            $table->integer('user_id')->nullable()->default(NULL);
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('activitypartcipants');
    }
}