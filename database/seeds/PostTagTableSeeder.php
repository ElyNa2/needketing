<?php

use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts_tags')->truncate();
        
        DB::table('posts_tags')->insert([
           [
              'post_id' => 1,
              'tag_id' => 1,
           ],
           [
              'post_id' => 1,
              'tag_id' => 2,
           ],
           [
              'post_id' => 2,
              'tag_id' => 1,
           ],
        ]);
    }
}
