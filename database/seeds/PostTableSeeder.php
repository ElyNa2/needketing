<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();

        DB::table('posts')->insert([
            [
                'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Curabitur imperdiet, lectus vel cursus condimentum, libero turpis hendrerit risus,
                            nec fringilla orci nisl in urna. Pellentesque',
                'image' => 'http://localhost:8000/assets/images/posts/radio-158399_640.png',
                'location' => 'Kathmandu, Nepal',
                'user_id' => 1,
                'published_at' => '2017-03-01'
            ],
            [
                'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Curabitur imperdiet, lectus vel cursus condimentum, libero turpis hendrerit risus,
                            nec fringilla orci nisl in urna. Pellentesque',
                'image' => 'http://localhost:8000/assets/images/posts/dragon-head-tatoo_91-6564.jpg',
                'location' => 'Bhaktapur, Nepal',
                'user_id' => 2,
                'published_at' => '2017-01-01'
            ],
            [
                'content'=>'Nam condimentum rhoncus condimentum. Proin cursus 
                            porttitor mattis. Curabitur tortor neque, 
                            aliquet in fringilla in, viverra id augue. Integer interdum ',
                'image' => 'http://localhost:8000/assets/images/posts/laptop-158399_640.png',
                'location' => 'Lalitpur, Nepal',
                'user_id' => 3,
                'published_at' => '2017-02-01'
            ],
        ]);
    }
}
