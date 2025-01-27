<?php

namespace Database\Seeders;
use App\Models\Post;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create()->each(function($user) 
        {
            Post::factory(3)->create(['user_id' => $user->id,  'title'=> fake()->sentence(), 'content' => fake()-> paragraph(10)]);
        });
    }
}
