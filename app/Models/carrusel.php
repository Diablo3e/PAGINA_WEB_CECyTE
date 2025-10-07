<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Carrusel extends Model
{
    protected $fillable = [
        'plantel_id',
        'imagenes',
    ];

    //Clave foranea
    public function plantel(){
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }

    protected static function booted(){
        
        //Borrar imagenes junto con registros
        static::deleting(function ($imagen){
            if($imagen->imagenes && Storage::disk('public')->exists($imagen->imagenes)){
                Storage::disk('public')->delete($imagen->imagenes);
            }
        });

        // Borrar el anterior archivo si se edita el registro
        static::updating(function ($imagen) {
            if ($imagen->isDirty('imagenes')) {
                $originalImage = $imagen->getOriginal('imagenes');

                if ($originalImage && Storage::disk('public')->exists($originalImage)) {
                    Storage::disk('public')->delete($originalImage);
                }
            }
        });
    }
}
