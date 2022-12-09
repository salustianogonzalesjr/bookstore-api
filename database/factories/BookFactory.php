<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => ucfirst(fake()->word()),
            'author' => fake()->name(),
            'description' => fake()->text(),
            'price' => fake()->randomDigit,
            'image' => fake()->imageUrl,
        ];
    }
}

