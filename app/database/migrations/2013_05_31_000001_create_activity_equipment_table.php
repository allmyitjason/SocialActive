<?php

use Illuminate\Database\Migrations\Migration;

class CreateActivityEquipmentTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('activity_equipment', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('activity_id')->unsigned();
            $table->integer('equipment_id')->unsigned();
            $table->integer('reqEachUser')->default(0);
            $table->integer('reqQuantity')->default(0);
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