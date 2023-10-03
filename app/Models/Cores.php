<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cores extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'cores';
    protected $primaryKey = 'id_cor';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'id_cor',
        'cor'
    ];

    public function Pets():BelongsTo{
        return $this->belongsTo(Pets::class, 'id_cor', 'id_cor');
    }
}
