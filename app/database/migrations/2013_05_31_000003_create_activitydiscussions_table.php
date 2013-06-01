<?php

use Illuminate\Database\Migrations\Migration;

class CreateActivitydiscussionsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('activitydiscussions', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('activity_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('discussionText');
            $table->datetime('postDate');
            $table->timestamps();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('activitydiscussions');
    }
}