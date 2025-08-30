<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class seguimientoEgresados extends Model
{
    protected $fillable = [
        'plantel_id',
        'nombre',
        'carrera',
        'testimonio',
    ];

    //Claves foraneas
    public function plantel()
    {
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }
}
