<?php

use Illuminate\Database\Seeder;

// Models
use App\Comment;
use App\Post;
use App\User;

use Faker\Generator as Faker;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $comments = 50;
        $users = User::all();
        $posts = Post::all();

        for ($i = 0; $i < $comments; $i++) {
            $newComment = new Comment();

            $newComment->user_id = $users->random()->id;
            $newComment->post_id = $posts->random()->id;
            $newComment->body = $faker->text(100);

            $newComment->save();
        }
    }
}
