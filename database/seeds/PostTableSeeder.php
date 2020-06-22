<?php

use Illuminate\Database\Seeder;

// Models
use App\Post;
use App\User;

use Faker\Generator as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = 50;
        $users = User::all();

        for ($i = 0; $i < $posts; $i++) {
            $newPost = new Post();

            $newPost->user_id = $users->random()->id;
            $newPost->title = $faker->text(50);
            $newPost->body = $faker->text(30);

            $newPost->save();
        }
    }
}
