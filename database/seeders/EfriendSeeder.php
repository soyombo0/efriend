<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class EfriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Emma Roberts',
            'description' => 'Loves playing video games',
            'price' => 10,
            'email' => 'exampl1@cc.com',
            'password' => 'exampl1@cc.com',
            'is_efriend' => 1,
        ]);


        User::factory()->create([
            'name' => 'Emma Roberts',
            'description' => 'Loves playing video games',
            'price' => 4,
            'email' => '3exampl1@cc.com',
            'password' => 'exampl1@cc.com',
            'is_efriend' => 1,
        ]);


        User::factory()->create([
            'name' => 'Emma Roberts',
            'description' => 'Loves playing video games',
            'price' => 6,
            'email' => '2exampl1@cc.com',
            'password' => 'exampl1@cc.com',
            'is_efriend' => 1,
        ]);
    }
}
