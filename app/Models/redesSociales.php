<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RedesSociales extends Model
{
    protected $fillable = [
        'plantel_id',
        'nombre',
        'link',
    ];

    //Claves foraneas
    public function plantel()
    {
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }
}
