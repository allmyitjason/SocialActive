<?php

use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('venues', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('address', 255);
            $table->decimal('longitude', 9, 6);
            $table->decimal('latitude', 9, 6);
            $table->integer('suburb_id')->unsigned();
            $table->string('phone', 45);
            $table->string('contactName', 45);
            $table->integer('verified');
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
        Schema::drop('venues');
    }
}