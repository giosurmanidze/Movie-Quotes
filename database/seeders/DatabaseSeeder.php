<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Quote::truncate();

        $movie = Movie::factory()->create();

        Quote::factory(5)->create();

        User::create([
            'name' => 'girogi',
            'email' => 'giorgi777@example.com',
            'password' => bcrypt('blablablaaaa'),
        ]);
    }
}
