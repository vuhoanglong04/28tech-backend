<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            'course_name' => fake()->name(),
            'price' => fake()->randomDigit(),
            'category_id'=>fake()->randomElement(DB::table('categories')->pluck('id')),
            'description' => fake()->sentence(),
            'overview'=>fake()->sentence(),
            'slug'=>fake()->slug(),
            'image'=>fake()->image(),
            'background'=>fake()->image(),
            'number_of_sessions'=>fake()->randomDigit()

        ]);
    }
}
