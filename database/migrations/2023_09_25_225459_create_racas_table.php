<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Raças', function (Blueprint $table) {
            $table->increments('id_raça');
            $table->string('raça', 45);
            $table->string('InfoRaça', 45);
            $table->timestamps();
            $table->softDeletes();
        });
            // RAÇAS DE CACHORROS
        \app\molds\Racas::create([
            'id_Raca' => 1,
            'Raca' => 'Pastor-Alemao'
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 2,
            'Raca' => 'Rottweiler'
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 3,
            'Raca' => 'Golden'
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 4,
            'Raca' => 'Vira-Lata'
        ]);

        //RAÇAS DE GATO
        \app\molds\Racas::create([
            'id_Raca' => 5,
            'Raca' => 'Gato Persa'
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 6,
            'Raca' => 'Gato Europeu'
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 7,
            'Raca' => 'Gato Siamês'
        ]);

        \app\molds\Racas::create([
            'id_Raca' => 8,
            'Raca' => 'Munchkin'
        ]);

        //RAÇAS DE AVES
        \app\molds\Racas::create([
            'id_Raca' => 9,
            'Raca' => 'Papagaio'
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 10,
            'Raca' => 'Periquito'
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 11,
            'Raca' => 'Canario'
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 12,
            'Raca' => 'Calopsita'
        ]);

        //RAÇAS DE REPETIEIS

        \app\molds\Racas::create([
            'id_Raca' => 13,
            'Raca' => 'Tartaruga'
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 14,
            'Raca' => 'Camaleao'
        ]);

        \app\molds\Racas::create([
            'id_Raca' => 15,
            'Raca' => 'Tegu Argentino'
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 16,
            'Raca' => 'Python-Real'
        ]);

        //RAÇAS DE ROEDORES

        \app\molds\Racas::create([
            'id_Raca' => 17,
            'Raca' => 'Porquinho-da-Índia'
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 18,
            'Raca' => 'Rato-De-Estimação(Fancy Rat)'
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 19,
            'Raca' => 'Hamster Sirio(Golden)'
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 20,
            'Raca' => 'Hamster Anão Russo'
        ]);






















    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('racas');
    }
};
