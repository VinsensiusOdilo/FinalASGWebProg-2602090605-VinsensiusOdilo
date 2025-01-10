<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Notification as Notif;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');
        $j = 0;

        for($i = 0; $i < 25; $i++){

            if($i%5 == 0){
                $j++;
            }

            Notif::create([
                'user_id' => $j,
                'content' => $faker->text(50)
            ]);
        }
    }
}
