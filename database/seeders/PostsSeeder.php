<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 3; $i++) {
            DB::table('posts')->insert([
                'post_name' => fake()->name(),
                'slug' => fake()->slug(),
                'user_id' => fake()->randomElement(DB::table('users')->pluck('id')),
                'content'=>fake()->sentence(),
                'topic_id'=>fake()->randomElement(DB::table('topics')->pluck('id')),
                 
            ]);
        }
    }
}
