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
        'estudiantes',
        'docentes',
        'administrativos',

    ];

    public function plantel(){
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }
}
