<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

//?

// 444444444444444444444444444

//?


use App\Models\Movie;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Quote::truncate();
        User::truncate();


        $movie = Movie::factory()->create();

        Quote::factory(10)->create([
            'movie_id' => $movie->id
        ]);


        User::create([
            'name' => 'girogi',
            'email' => 'giorgi777@example.com',
            'password' => Hash::make('blablablaaaa'),
        ]);
    }
}