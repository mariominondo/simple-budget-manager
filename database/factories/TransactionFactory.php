<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => fake()->numberBetween(0, 10000),
            'type' => fake()->randomElement(['income', 'expense']),
            'description' => fake()->text(50),
            'category_id' => null,
            'date' => fake()->date(),
        ];
    }
}
