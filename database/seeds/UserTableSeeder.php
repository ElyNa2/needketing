<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'Madhu Sudhan Subedi',
                'email' => 'madhu@acd.edu.np',
                'username' => 'madhusudhan',
                'phone' => '9843360552',
                'description' => 'Hello I am Madhu Sudhan Subedi',
                'dob' => '1994-01-05',
                'country' => 'Nepal',
                'role_id' => 1,
                'tags_id' => 1,
                'password'=>bcrypt('password')
            ],
            [
                'name' => 'Alina Maharjan',
                'email' => 'alina@acd.edu.np',
                'username' => 'alinamaharjan',
                'phone' => '982183743',
                'description' => 'Hello I am Alina Maharjan Student of Academia International College',
                'dob' => '1994-02-05',
                'country' => 'Nepal',
                'role_id' => 1,
                'tags_id' => 1,
                'password'=>bcrypt('password')
            ],
            [
                'name' => 'Prabhat Subedi',
                'email' => 'prabhat@acd.edu.np',
                'username' => 'prabhatsubedi',
                'phone' => '9846789442',
                'description' => 'I am a wild researcher',
                'dob' => '1994-01-05',
                'country' => 'Nepal',
                'role_id' => 1,
                'tags_id' => 1,
                'password'=>bcrypt('password')
            ],
            [
                'name' => 'Satij Dangol',
                'email' => 'satij@acd.edu.np',
                'username' => 'satijdangol',
                'phone' => '9843360552',
                'description' => 'I am Satij, Student of Academia',
                'dob' => '1994-01-05',
                'country' => 'Nepal',
                'role_id' => 1,
                'tags_id' => 1,
                'password'=>bcrypt('password')
            ],
        ]);
    }
}
