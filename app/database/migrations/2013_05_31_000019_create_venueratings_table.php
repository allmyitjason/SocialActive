<?php

use Illuminate\Database\Migrations\Migration;

class CreateVenueratingsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('venueratings', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('venue_id')->nullable()->default(NULL);
            $table->integer('rating')->nullable()->default(NULL);
            $table->string('comment', 255)->nullable()->default(NULL);
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('venueratings');
    }
}