<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('users', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('organisation_id')->nullable()->unsigned();
            $table->integer('suburb_id')->unsigned();
            $table->integer('gender_id')->unsigned();
            $table->string('firstName', 45);
            $table->string('surname', 100);
            $table->string('street', 255)->nullable();
            $table->string('email', 100);
            $table->string('password', 45);
            $table->date('dob')->nullable();
            $table->string('phone', 45)->nullable();
            $table->string('mobile', 45)->nullable();
            $table->string('facebookId', 45)->nullable();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('users');
    }
}