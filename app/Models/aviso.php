<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aviso extends Model
{
    protected $fillable = [
        'plantel_id',
        'fecha',
        'cuerpo',
    ];

    //Claves foraneas
    public function plantel()
    {
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }
}
