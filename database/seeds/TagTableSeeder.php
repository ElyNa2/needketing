<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->truncate();

        DB::table('tags')->insert([
           [
               'tag_name' => 'Education',
               'published_at' => '2017-01-23'
           ],
           [
               'tag_name' => 'SecondHandCar',
               'published_at' => '2017-01-03'
           ],
           [
               'tag_name' => 'Mobile',
               'published_at' => '2017-03-12'
           ],
        ]);
    }
}
