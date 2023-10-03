<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especies extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'especie';
    protected $primaryKey ='id_especie';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'id_especie',
        'especie'
    ];

    public function Pets():BelongsTo {
        return $this->belongsTo(Pets::class,'id_especie','is_especie');
    }

}
