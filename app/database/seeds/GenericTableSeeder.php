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

        DB::table('suburbs')->insert([
            ['name' => 'Adelaide', 'postcode' => '5000', 'state' => 'SA'],
            ['name' => 'Blackwood', 'postcode' => '5051', 'state' => 'SA'],
            ['name' => 'Aberfoyle Park', 'postcode' => '5159', 'state' => 'SA'],
            ['name' => 'Alawoona', 'postcode' => '5311', 'state' => 'SA'],
            ['name' => 'Angle Park', 'postcode' => '5010', 'state' => 'SA']

        ]);

        DB::table('activities')->insert([
            ['user_id' => 1, 'activityType_id' => 1, 'minSkillLevel_id' => 2, 'maxSkillLevel_id' => 5, 'gender_id' => 3, 'venue_id' => 1, 'minParticipants' => 4, 'maxParticipants' => 7, 'minAge' => 5, 'maxAge' => 90, 'activityDate' => '2013-06-01', 'activityDurationMins' => 60]
        ]);
       


        
    }

}