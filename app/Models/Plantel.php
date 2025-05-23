<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plantel extends Model
{
    // Indicar explícitamente el nombre de la tabla
    protected $table = 'planteles';

    public function carreras()
    {
        return $this->belongsToMany(Carrera::class, 'plantel_carrera');
    }
}
