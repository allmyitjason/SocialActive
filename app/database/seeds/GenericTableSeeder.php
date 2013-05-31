<?php

class GenericTableSeeder extends Seeder {

    public function run()
    {

        $users = array(

        );

        // Uncomment the below to run the seeder
        DB::table('users')->insert([
        	['firstname' => 'Jason', 'surname' => 'Smith', 'email' => 'jason@allmyit.com.au', 'password' => Hash::make('123')]
        ]);


        DB::table('activitytypes')->insert([
        	['type' => 'Cricket', 'description' => 'Indoor Cricket'],
        	['type' => 'Tennis', 'description' => ''],
        	['type' => 'Fishing', 'description' => 'Jetty'],
        ]);
    }

}