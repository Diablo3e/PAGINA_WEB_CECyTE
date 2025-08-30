<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class servicioSocial extends Model
{
    protected $table = 'servicio_social';
    protected $fillable = [
        'plantel_id',
        'institucion',
        'descripcion',
        'correo',
        'telefono',
        'direccion',
    ];

    //Claves foraneas
    public function plantel()
    {
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }
}
