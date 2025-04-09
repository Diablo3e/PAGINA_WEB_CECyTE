<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;
    protected $table = 'formulario_carreras'; // 🔹 Asegura que Laravel use la tabla correcta

    protected $fillable = [
        'nombre_completo',
        'celular',
        'correo',
        'modalidad',
        'nivel',
        'plantel',
        'carrera',
    ];
}
