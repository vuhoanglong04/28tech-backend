<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 3; $i++) {
            DB::table('users')->insert([
                'name' => fake()->name(),
                'email' => fake()->email(),
                'phone_number' => fake()->phoneNumber(),
                'password' => Hash::make("12345"),      
                'group_id' => fake()->randomElement(DB::table('groups')->pluck('id')),      
            ]);
        }
    }
}
