<?php

use Illuminate\Database\Seeder;

// Models
use App\Post;
use App\User;

use Faker\Generator as Faker;

// Slug support
use Illuminate\Support\Str;

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
            // Title for slug
            $title = $faker->text(50);
            $newPost = new Post();

            $newPost->user_id = $users->random()->id;
            $newPost->title = $title;
            $newPost->body = $faker->text(30);
            // Slug using the title
            $newPost->slug = Str::slug($title, "-");

            $newPost->save();
        }
    }
}
