<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clientes>
 */
class ClientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_sexo' => fake()->numberBetween(1,3),
            'cliente' => fake()->name(),
            'nascimento' => fake()->dateTimeBetween('-90 years','-20 years'),
            'renda' => fake()->numberBetween(1,99999),
            'descricao' => fake()->text()
        ];
    }
}
