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
    protected $primaryKey = 'id_porte';
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at'
    ];

    protected $fillable = [
        'id_porte',
        'porte'
    ];

    public function pets():BelongsTo{
        return $this->belongsTo(Pets::class, 'id_porte', 'id_porte');
    }
}
