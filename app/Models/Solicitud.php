<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $table = 'solicitudes';

    protected $fillable = [
        'plantel_id',
        'carrera_id',
        'nombre_completo',
        'celular',
        'correo',
    ];
public function plantel()
{
    return $this->belongsTo(Plantel::class, 'plantel_id');
}

public function carrera()
{
    return $this->belongsTo(Carrera::class, 'carrera_id');
}

}


