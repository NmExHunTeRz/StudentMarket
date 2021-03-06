<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Deniz',
            'last_name' => 'Aygun',
            'email' => 'da332@kent.ac.uk',
            'password' => bcrypt('deniz123'),
            'api_token' => str_random(60),
            'date_of_birth' => Carbon::createFromDate(1996, 05, 27),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'first_name' => 'Sam',
            'last_name' => 'Wood',
            'email' => 'sw517@kent.ac.uk',
            'password' => bcrypt('sam123'),
            'api_token' => str_random(60),
            'date_of_birth' => Carbon::createFromDate(1994, 04, 18),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'first_name' => 'Richard',
            'last_name' => 'Bassey-Dight',
            'email' => 'rd339@kent.ac.uk',
            'password' => bcrypt('richard123'),
            'api_token' => str_random(60),
            'date_of_birth' => Carbon::createFromDate(1995, 8, 9),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'first_name' => 'TestUser',
            'last_name' => 'Test',
            'email' => 'testUser@kent.ac.uk',
            'password' => bcrypt('test123'),
            'api_token' => str_random(60),
            'date_of_birth' => Carbon::createFromDate(1995, 8, 9),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
