<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');
        $job = ['Fullstack Developer', 'Video Editor', 'Business Consultant', 'Makeup Artist', 'Mathematician'];
        $j = 0;

        for( $i = 0; $i < 5; $i++){
            Post::create([
                'user_id' => $i+1,
                'content' => $faker->text(100),
                'topic' => $job[$i],
                'like' => 0
            ]);
        }

    }
}
