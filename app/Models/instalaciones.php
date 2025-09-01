<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class instalaciones extends Model
{
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
        static::deleting(function ($imgInstalacion){
            if($imgInstalacion->imagen && Storage::disk('public')->exists($imgInstalacion->imagen)){
                Storage::disk('public')->delete($imgInstalacion->imagen);
            }
        });

        // Borrar el anterior archivo si se edita el registro
        static::updating(function ($imgInstalacion) {
            if ($imgInstalacion->isDirty('imagen')) {
                $originalImage = $imgInstalacion->getOriginal('imagen');

                if ($originalImage && Storage::disk('public')->exists($originalImage)) {
                    Storage::disk('public')->delete($originalImage);
                }
            }
        });
    }
}
