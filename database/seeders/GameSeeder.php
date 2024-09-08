<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::factory()->create([
            'name' => 'League of Legends',
            'description' => 'Superbad',
            'genre' => 'MOBA',
        ]);

        Game::factory()->create([
            'name' => 'Valorant',
            'description' => 'Superbad',
            'genre' => 'FPS',
        ]);

        Game::factory()->create([
            'name' => 'TFK',
            'description' => 'Superbad',
            'genre' => 'MOBA',
        ]);
    }
}
