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
            $table->string('venueName', 255)->nullable()->default(NULL);
            $table->string('address', 255)->nullable()->default(NULL);
            $table->decimal('longitude', 9, 6)->nullable()->default(NULL);
            $table->decimal('latitude', 9, 6)->nullable()->default(NULL);
            $table->integer('suburb_id')->nullable()->default(NULL);
            $table->string('phone', 45)->nullable()->default(NULL);
            $table->string('contactName', 45)->nullable()->default(NULL);
            $table->integer('verified')->nullable()->default(NULL);
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