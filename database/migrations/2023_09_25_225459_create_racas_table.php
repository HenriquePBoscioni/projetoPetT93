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
        Schema::create('Racas', function (Blueprint $table) {
            $table->increments('id_raca');
            $table->string('raca', 45);
            $table->timestamps();
            $table->softDeletes();
        });

        \app\molds\Racas::create([
            'id_Raca' => 1,
            'Raca' => PastorAlemao
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 2,
            'Raca' => Rottweiler
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 3,
            'Raca' => Golden
        ]);
        \app\molds\Racas::create([
            'id_Raca' => 4,
            'Raca' => PitBull
        ]);

        \app\molds\Racas::create([
            'id_Raca' => 5,
            'Raca' => GatoPersa
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
