<?php

use Illuminate\Database\Seeder;

// Models
use App\User;
use App\InfoUser;

// Faker
use Faker\Generator as Faker;

class InfoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Assign info table data to every user
        $users = User::all();

        foreach ($users as $user) {
            $newInfo = new InfoUser();

            $newInfo->phone = $faker->phoneNumber();
            $newInfo->address = $faker->streetAddress();
            $newInfo->avatar = $faker->imageUrl(640, 480);

            // foreign key connected to the user id
            $newInfo->user_id = $user->id;

            $newInfo->save();
        }
    }
}
