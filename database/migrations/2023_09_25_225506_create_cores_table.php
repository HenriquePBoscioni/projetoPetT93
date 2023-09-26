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
        Schema::create('cores', function (Blueprint $table) {
            $table->increments('id_cor');
            $table->string('cor', 100);
            $table->timestamps();
            $table->softDeletes();
        });
        App\Models\Cores::create([
            'id_cor' => 1,
            'cor' => 'Preto'
        ]);
        App\Models\Cores::create([
            'id_cor' => 2,
            'cor' => 'Branco'
        ]);
        App\Models\Cores::create([
            'id_cor' => 3,
            'cor' => 'Marrom'
        ]);
        App\Models\Cores::create([
            'id_cor' => 4,
            'cor' => 'Cinza'
        ]);



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cores');
    }
};
