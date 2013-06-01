<?php

use Illuminate\Database\Migrations\Migration;

class CreateSuburbsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('suburbs', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 100);
            $table->integer('postcode');
            $table->string('state', 3);
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
        Schema::drop('suburbs');
    }
}