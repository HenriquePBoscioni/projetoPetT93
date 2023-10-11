<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pets>
 */
class PetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pet' => fake()->name(),
            'nome' => fake()->name(),
            'idade' => fake()->numberBetween(1,50),
            'id_raca' => fake()->numberBetween(1,6),
            'descricao' => fake()->text()
        ];
    }
}
