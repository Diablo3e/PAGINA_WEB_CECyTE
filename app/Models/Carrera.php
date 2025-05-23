<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public function planteles()
    {
        return $this->belongsToMany(Plantel::class, 'plantel_carrera');
    }
}

