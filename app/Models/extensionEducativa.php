<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ExtensionEducativa extends Model
{
    protected $table = 'extension_educativa'; 

    protected $fillable = [
        'plantel_id',
        'nombre',
        'documento',
    ];

    //Claves foraneas
    public function plantel(){
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }

    protected static function booted(){
        
        //Borrar archivos junto con los registros
        static::deleting(function ($extEdu){
            if($extEdu->imagen && Storage::disk('public')->exists($extEdu->imagen)){
                Storage::disk('public')->delete($extEdu->imagen);
            }
        });

        // Borrar el anterior archivo si se edita el registro
        static::updating(function ($extEdu) {
            if ($extEdu->isDirty('documento')) {
                $originalImage = $extEdu->getOriginal('documento');

                if ($originalImage && Storage::disk('public')->exists($originalImage)) {
                    Storage::disk('public')->delete($originalImage);
                }
            }
        });
    }
}
