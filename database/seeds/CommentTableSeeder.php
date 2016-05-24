<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->truncate();

        DB::table('comments')->insert([
            [
                'content' => 'This is your perfect choice',
                'image' => '',
                'post_id' => '1',
                'user_id' => '2',
                'published_at' => '2016-02-01',
            ],
            [
                'content' => 'Do not Show me again',
                'image' => '',
                'post_id' => '2',
                'user_id' => '2',
                'published_at' => '2016-02-12',
            ],
            [
                'content' => 'okey I will try again',
                'image' => '',
                'post_id' => '3',
                'user_id' => '1',
                'published_at' => '2016-01-05',
            ],
            [
                'content' => 'Problem here',
                'image' => '',
                'post_id' => '3',
                'user_id' => '2',
                'published_at' => '2016-01-05',
            ]
        ]);
    }
}
