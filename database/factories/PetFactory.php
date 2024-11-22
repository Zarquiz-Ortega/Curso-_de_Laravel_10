<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'color'=>fake()->randomElement(['Cafe','Gris','Negro','Blanco','Manchado']),
            'age'=>fake()->numberBetween(1, 20),
            'address'=>fake()->paragraph(3)
        ];
    }
}
