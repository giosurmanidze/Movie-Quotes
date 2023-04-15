<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

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
        $faker_GE = Faker::create('ka_GE');


        $quote = fake()->sentence(10);

        return [
            'movie_id' => Movie::factory(),
            'movie_img' =>  fake()->imageUrl(),
            'quote_en' => $quote,
            'quote_ka' => $faker_GE->realText(50),
        ];
    }
}
