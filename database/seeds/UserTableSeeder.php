<?php

use Illuminate\Database\Seeder;

// Model
use App\User;

// Use faker
use Faker\Generator as Faker;

// Hash to create password
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = 10;

        for ($i = 0; $i < $users; $i++) {
            $newUser = new User();

            $newUser->name = $faker->name();
            $newUser->email = $faker->email();
            $newUser->password = Hash::make("mypassword");

            $newUser->save();
        }
    }
}
