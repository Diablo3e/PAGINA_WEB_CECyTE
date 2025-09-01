<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class horario extends Model
{
    protected $fillable = [
        'plantel_id',
        'grupo',
        'pdf',
    ];
    
    //Claves foraneas
    public function plantel(){
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }

    protected static function booted(){
        
        //Borrar archivos junto con los registros
        static::deleting(function ($documento){
            if($documento->pdf && Storage::disk('public')->exists($documento->pdf)){
                Storage::disk('public')->delete($documento->pdf);
            }
        });

        // Borrar el anterior archivo si se edita el registro
        static::updating(function ($documento) {
            if ($documento->isDirty('pdf')) {
                $originalImage = $documento->getOriginal('pdf');

                if ($originalImage && Storage::disk('public')->exists($originalImage)) {
                    Storage::disk('public')->delete($originalImage);
                }
            }
        });
    }
}
