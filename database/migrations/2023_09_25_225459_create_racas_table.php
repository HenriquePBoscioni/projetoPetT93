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
        Schema::create('racas', function (Blueprint $table) {
            $table->increments('id_raca');
            $table->string('raca', 45);
            $table->timestamps();
            $table->softDeletes();
        });
            // RACAS DE CACHORROS
        App\Models\Racas::create([
            'id_raca' => 1,
            'raca' => 'Pastor-Alemao'
        ]);
        App\Models\Racas::create([
            'id_raca' => 2,
            'raca' => 'Rottweiler'
        ]);
        App\Models\Racas::create([
            'id_raca' => 3,
            'raca' => 'Golden'
        ]);
        App\Models\Racas::create([
            'id_raca' => 4,
            'raca' => 'Vira-Lata'
        ]);

        //RACAS DE GATO
        App\Models\Racas::create([
            'id_raca' => 5,
            'raca' => 'Gato Persa'
        ]);
        App\Models\Racas::create([
            'id_raca' => 6,
            'raca' => 'Gato Europeu'
        ]);
        App\Models\Racas::create([
            'id_raca' => 7,
            'raca' => 'Gato Siamês'
        ]);

        App\Models\Racas::create([
            'id_raca' => 8,
            'raca' => 'Munchkin'
        ]);

        //RACAS DE AVES
        App\Models\Racas::create([
            'id_raca' => 9,
            'raca' => 'Papagaio'
        ]);
        App\Models\Racas::create([
            'id_raca' => 10,
            'raca' => 'Periquito'
        ]);
        \app\Models\Racas::create([
            'id_raca' => 11,
            'raca' => 'Canario'
        ]);
        App\Models\Racas::create([
            'id_raca' => 12,
            'raca' => 'Calopsita'
        ]);

        //RACAS DE REPTEIS

        App\Models\Racas::create([
            'id_raca' => 13,
            'raca' => 'Tartaruga'
        ]);
        App\Models\Racas::create([
            'id_raca' => 14,
            'raca' => 'Camaleao'
        ]);

        App\Models\Racas::create([
            'id_raca' => 15,
            'raca' => 'Tegu Argentino'
        ]);
        App\Models\Racas::create([
            'id_raca' => 16,
            'raca' => 'Python-Real'
        ]);

        //RACAS DE ROEDORES

        App\Models\Racas::create([
            'id_raca' => 17,
            'raca' => 'Porquinho-da-Índia'
        ]);
        App\Models\Racas::create([
            'id_raca' => 18,
            'raca' => 'Rato-De-Estimacão(Fancy Rat)'
        ]);
        App\Models\Racas::create([
            'id_raca' => 19,
            'raca' => 'Hamster Sirio(Golden)'
        ]);
        App\Models\Racas::create([
            'id_raca' => 20,
            'raca' => 'Hamster Anão Russo'
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
