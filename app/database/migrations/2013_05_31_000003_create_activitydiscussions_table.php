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
            $table->integer('activity_id')->nullable()->default(NULL);
            $table->integer('user_id')->nullable()->default(NULL);
            $table->text('discussionText')->nullable()->default(NULL);
            $table->('postDate')->nullable()->default(NULL);
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