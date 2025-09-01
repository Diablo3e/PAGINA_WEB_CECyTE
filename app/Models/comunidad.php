<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class comunidad extends Model
{
    protected $table = 'comunidad'; 

    protected $fillable = [
        'plantel_id',
        'imagen',
    ];

    //Claves foraneas
    public function plantel(){
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }

    protected static function booted(){
        
        //Borrar archivos junto con los registros
        static::deleting(function ($entrada){
            if($entrada->imagen && Storage::disk('public')->exists($entrada->imagen)){
                Storage::disk('public')->delete($entrada->imagen);
            }
        });

        // Borrar el anterior archivo si se edita el registro
        static::updating(function ($entrada) {
            if ($entrada->isDirty('imagen')) {
                $originalImage = $entrada->getOriginal('imagen');

                if ($originalImage && Storage::disk('public')->exists($originalImage)) {
                    Storage::disk('public')->delete($originalImage);
                }
            }
        });
    }
}
