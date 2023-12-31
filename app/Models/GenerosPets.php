<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GenerosPets extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'generoPets';
    protected $primaryKey = 'id_genero';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'id_genero',
        'genero'
    ];

    public function Pets():BelongsTo{
        return $this->belongsTo(Pets::class, 'id_genero', 'id_genero');
    }
}
