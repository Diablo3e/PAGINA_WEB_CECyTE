<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Encabezado extends Model
{
     protected $fillable = [
        'plantel_id',
        'nombre',
        'tipo',
        'descripcion',
    ];

    public function plantel(){
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }
}
