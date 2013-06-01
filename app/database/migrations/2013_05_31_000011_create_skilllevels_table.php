<?php

use Illuminate\Database\Migrations\Migration;

class CreateSkilllevelsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('skilllevels', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('levelNo');
            $table->string('levelDescription', 255);
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
        Schema::drop('skilllevels');
    }
}