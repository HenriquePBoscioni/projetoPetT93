<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'status';
    protected $primaryKey = 'id_status';
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at'
    ];

    protected $fillable = [
        'id_status',
        'status'
    ];

    public function Adocoes():BelongsTo{
        return $this->belongsTo(Adocoes::class, 'id_status', 'id_status');
    }

}
