<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HistoricoAdocoes extends Model
{

    use HasFactory, SoftDeletes;
    // gustavo s

    use HasFactory , SoftDeletes;

    protected $table = 'HistoricoAdocao';
    protected $primarykey = 'id_HistoricoAdocao';
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
        'dt_adocao',
        'dt_devolucao'


    ];
    protected $fillable = [
        'id_HistoricoAdocacao',
        'id_adocao',
        'historico',
        'dt_adocao',
        'dt_devolucao',

    ];


    /**
     * Get the user that owns the historico_adocao
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Adocoes(): BelongsTo
    {
        return $this->belongsTo(Adocoes::class, 'id_adocao', 'id_adocao');
    }

}
