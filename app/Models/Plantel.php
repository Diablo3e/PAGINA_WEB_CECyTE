<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plantel extends Model
{
    protected $table = 'planteles';

    public function carreras()
    {
        return $this->belongsToMany(Carrera::class, 'plantel_carrera');
    }
}
