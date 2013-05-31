<?php

use Illuminate\Database\Migrations\Migration;

class CreateActivitiesequipmentTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('activities_equipment', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('activity_id')->unsigned();
            $table->integer('equipment_id')->unsigned();
            $table->integer('reqEachUser')->nullable();
            $table->integer('reqQuantity')->nullable();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('activities_equipment');
    }
}