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
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('racas');
    }
};
