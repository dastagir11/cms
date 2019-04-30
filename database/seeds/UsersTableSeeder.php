<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the user table
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // generate 3 user/author
        DB::table('users')->insert([
        	
        	[
        	'name' => "John Doe",
        	'email' => "john@test.com",
        	'password' => bcrypt('secret')
        	],
        	[
        	'name' => "Lona Doe",
        	'email' => "lona@test.com",
        	'password' => bcrypt('secret')
        	],
        	[
        	'name' => "Max Doe",
        	'email' => "max@test.com",
        	'password' => bcrypt('secret')
        	]
    ]);
    }
}
