<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid(),
            'book-name' => $this->faker->sentence(3),
            'author-name' => $this->faker->name(),
            'publications-name' => $this->faker->company(),
            'user_id' => User::factory(), // Ensure a user is created for the book
        ];
    }
}
