<?php

use Illuminate\Database\Migrations\Migration;

class CreateActivityTypeEquipmentTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('activity_type_equipment', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('activity_type_id')->unsigned();
            $table->integer('equipment_id')->unsigned();
            $table->integer('reqEachUser')->nullable();
            $table->integer('reqQuantity')->nullable();
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
        Schema::drop('activity_type_equipment');
    }
}