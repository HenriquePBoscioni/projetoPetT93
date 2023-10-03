<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Portes extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'portes';
    protected $primaryKey = 'id_portes';
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at'
    ];

    protected $fillable = [
        'id_portes',
        'porte'
    ];

    public function Pets():BelongsTo{
        return $this->belongsTo(Pets::class, 'id_portes', 'id_portes');
    }
}
