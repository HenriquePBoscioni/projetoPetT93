<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pets extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pets';
    protected $primaryKey = 'id_pet';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable =
    [
        // 'nome',
        'idade',
        'pet',
        'id_porte',
        'id_cor',
        'id_genero',
        'id_raca',
        'descricao'
    ];

    public function portes()
    {
       return $this->belongsTo(Portes::class, 'id_porte', 'id_porte');
    }

    public function cores()
    {
        return $this->belongsTo(Cores::class, 'id_cor', 'id_cor');
    }

    public function generosPets()
    {
        return $this->belongsTo(GenerosPets::class, 'id_genero', 'id_genero');
    }

    public function racas()
    {
        return $this->belongsTo(Racas::class, 'id_raca', 'id_raca');
    }

    // public function historicoPets()
    // {
    //     return $this->belongsTo(HistoricoPets::class, 'id_pet', 'id_pet');
    // }


}
