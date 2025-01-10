<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\AppUser;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');
        $gender = ['Male', 'Female'];
        $job = ['Fullstack Developer', 'Video Editor', 'Business Consultant', 'Makeup Artist', 'Mathematician'];
        $linkedin = "https://www.linkedin.com/in/";
        $img_path = ['person_1.jpg', 'person_2.jpg', 'person_3.jpg', 'person_4.jpg', 'person_5.jpg'];

        for( $i = 0; $i < 5; $i++ ) {
            AppUser::create([
                'name'=> $faker->name,
                'email'=> $faker->email,
                'password'=> $faker->password,
                'gender'=> $gender[$i%2],
                'phone'=> $faker->phoneNumber,
                'job'=> $job[$i],
                'linkedin_username'=> $linkedin . $faker->userName,
                'coin'=> 100,
                'img_path'=> $img_path[$i]
            ]);
            
        }

    }
}
