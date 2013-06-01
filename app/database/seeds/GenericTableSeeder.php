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

        //Add default equipment links
        foreach (ActivityType::all() as $type) {
            switch($type->type) {
                case "Cricket":
                    $equipment = new Equipment(['equipName' => 'Bat', 'description' => 'Cricket Bat']);
                    $type->equipment()->save($equipment);

                    $equipment = new Equipment(['equipName' => 'Ball', 'description' => 'Cricket Ball']);
                    $type->equipment()->save($equipment);
                break;
            }
        }


        DB::table('skilllevels')->insert([
            ['levelNo' => 1, 'levelDescription' => 'Novice' ],
            ['levelNo' => 2, 'levelDescription' => 'Beginner' ],
            ['levelNo' => 3, 'levelDescription' => 'Ok' ],
            ['levelNo' => 4, 'levelDescription' => 'Good' ],
            ['levelNo' => 5, 'levelDescription' => 'Pro' ]

        ]);


        DB::table('genders')->insert([
            ['gender' => 'Male'],
            ['gender' => 'Female'],
            ['gender' => 'Mixed'] 
        ]);

        DB::table('venues')->insert([
            ['name' => 'Oval (North Tce)', 'address' => '123 Fake St']
        ]);
       


        
    }

}