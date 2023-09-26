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
        Schema::create('historicoAdocoes', function (Blueprint $table) {
            $table->increments('id_HistoricoAdocao');
            $table->integer('id_adocao');
            $table->dateTime('dt');
            $table->text('historico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historicoAdocoes');
    }
};
