<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quote>
 */
class QuoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();

        $randomNumber = $faker->numberBetween(1, 1000);
        $imageUrl = "https://picsum.photos/800/600?random=" . $randomNumber;


        return [
            'movie_id' => Movie::factory(),
            'movie_img' =>  $imageUrl,
            'quote' => fake()->sentence()

        ];
    }
}
