<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $faker_GE = Faker::create('ka_GE');
        return [
            'title_ka' => $faker_GE ->realText(15),
            'title_en' => fake()->sentence(3),
        ];
    }
}
