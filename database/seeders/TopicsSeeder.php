<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 3; $i++) {
            DB::table('topics')->insert([
                'topic_name' => fake()->name(),
                'slug' => fake()->slug(),
                 
            ]);
        }
    }
}
