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
        Schema::create('especie', function (Blueprint $table) {
            $table->increments('id_especie');
            $table->string('especie',45);
            $table->timestamps();
            $table->softDeletes();

        });

        App\Models\Especies::create([
            'id_especie' => 1,
            'especie' => 'cachorro'

        ]);
        App\Models\Especies::create([
            'id_especie' => 2,
            'especie' => 'gato'

        ]);
        App\Models\Especies::create([
            'id_especie' => 3,
            'especie' => 'ave'

        ]);
        App\Models\Especies::create([
            'id_especie' => 4,
            'especie' => 'reptil'

        ]);
        App\Models\Especies::create([
            'id_especie' => 5,
            'especie' => 'roedores'

        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especie');
    }
};
