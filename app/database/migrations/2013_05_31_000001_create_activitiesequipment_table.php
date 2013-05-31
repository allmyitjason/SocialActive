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
            $table->integer('activity_id')->nullable()->default(NULL);
            $table->integer('equipment_id')->nullable()->default(NULL);
            $table->integer('reqEachUser')->nullable()->default(NULL);
            $table->integer('reqQuantity')->nullable()->default(NULL);
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