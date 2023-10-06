<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Clientes::factory(50)->create();
        \App\Models\Pets::factory(50)->create();
        \App\Models\Contatos::factory(50)->create();
        \App\Models\HistoricoAdocoes::factory(50)->create();
        \App\Models\HistoricoClientes::factory(50)->create();
        \App\Models\HistoricoPets::factory(50)->create();
        \App\Models\Adocoes::factory(50)->create();





        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
