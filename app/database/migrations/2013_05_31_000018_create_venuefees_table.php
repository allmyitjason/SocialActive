<?php

use Illuminate\Database\Migrations\Migration;

class CreateVenuefeesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('venuefees', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('venue_id')->nullable()->default(NULL);
            $table->float('perUserFee')->nullable()->default(NULL);
            $table->float('totalFee')->nullable()->default(NULL);
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('venuefees');
    }
}