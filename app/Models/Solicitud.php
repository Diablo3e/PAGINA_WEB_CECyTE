<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $table = 'solicitudes';

    protected $fillable = [
        'nivel_id',
        'plantel_id',
        'carrera_id',
        'nombre_completo',
        'celular',
        'correo',
    ];
}

