<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $Faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $newPost = new Post();
            $newPost->title = $Faker->sentence(3);
            $newPost->author = $Faker->name();
            $newPost->category = $Faker->word();
            $newPost->content = $Faker->paragraph(12);
            $newPost->save();
        }
    }
}
