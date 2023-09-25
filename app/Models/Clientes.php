<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientes extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Clientes';
    protected $primaryKey = 'id_cliente';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'nascimento'
    ];

    protected $fillabel = [
        'id_cliente',
        'id_sexo',
        'nome',
        'nascimento',
        'renda'
    ];

    protected $cast = [
        'nascimento' => 'date',
        'renda' => 'decimal:2'
    ];
}
