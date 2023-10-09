<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Porte extends Model
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
}
