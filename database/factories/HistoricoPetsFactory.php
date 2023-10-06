<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HistoricoPets>
 */
class HistoricoPetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_pet' => fake()->numberBetween(1,10),
            'historicoPet' => fake()->text(),
            'personalidade' => fake()->text(),
            'dt_adocao' => fake()->dateTimeBetween(now(),'+30 week'),
            'dt_devolucao' => fake()->dateTimeBetween('-1 year',now()),
        ];
    }
}
