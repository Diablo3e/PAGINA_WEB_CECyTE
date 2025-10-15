<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Personal extends Model
{
    protected $table = 'personal'; 

    protected $fillable = [
        'plantel_id',
        'foto',
        'nombre',
        'puesto',
    ];

    //Claves foraneas
    public function plantel(){
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }

    protected static function booted(){
        
        //Borrar archivos junto con los registros
        static::deleting(function ($imagen){
            if($imagen->foto && Storage::disk('public')->exists($imagen->foto)){
                Storage::disk('public')->delete($imagen->foto);
            }
        });

        // Borrar el anterior archivo si se edita el registro
        static::updating(function ($imagen) {
            if ($imagen->isDirty('foto')) {
                $originalImage = $imagen->getOriginal('foto');

                if ($originalImage && Storage::disk('public')->exists($originalImage)) {
                    Storage::disk('public')->delete($originalImage);
                }
            }
        });
    }
}
