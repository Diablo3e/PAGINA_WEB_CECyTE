<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class carrusel extends Model
{
    protected $fillable = [
        'plantel_id',
        'imagenes',
        'nombre',
    ];

    //Clave foranea
    public function plantel(){
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }

    //Borrar imagenes junto con registros
    protected static function booted(){
        static::deleting(function ($imagen){
            if($imagen->imagenes && Storage::disk('public')->exists($imagen->imagenes)){
                Storage::disk('public')->delete($imagen->imagenes);
            }
        });
    }
}
