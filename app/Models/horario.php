<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Horario extends Model
{
    protected $fillable = [
        'plantel_id',
        'carrera',
        'grupo',
        'documento',
    ];
    
    //Claves foraneas
    public function plantel(){
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }

    protected static function booted(){
        
        //Borrar archivos junto con los registros
        static::deleting(function ($archivo){
            if($archivo->documento && Storage::disk('public')->exists($archivo->documento)){
                Storage::disk('public')->delete($archivo->documento);
            }
        });

        // Borrar el anterior archivo si se edita el registro
        static::updating(function ($archivo) {
            if ($archivo->isDirty('documento')) {
                $originalImage = $archivo->getOriginal('documento');

                if ($originalImage && Storage::disk('public')->exists($originalImage)) {
                    Storage::disk('public')->delete($originalImage);
                }
            }
        });
    }
}
