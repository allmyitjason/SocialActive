<?php

use Illuminate\Database\Migrations\Migration;

class CreateActivitytypesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('activitytypes', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->string('type', 100)->nullable()->default(NULL);
            $table->text('description')->nullable()->default(NULL);
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('activitytypes');
    }
}