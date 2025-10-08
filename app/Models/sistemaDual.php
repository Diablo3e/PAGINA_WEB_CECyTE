<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SistemaDual extends Model
{
    protected $table = 'sistema_dual';

    protected $fillable = [
        'plantel_id',
        'nombre',
        'documento',
    ];

    //Claves foraneas
    public function plantel()
    {
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }

    protected static function booted(){
        
        //Borrar documento junto con registros
        static::deleting(function ($entrada){
            if($entrada->documento && Storage::disk('public')->exists($entrada->documento)){
                Storage::disk('public')->delete($entrada->documento);
            }
        });

        // Borrar el anterior archivo si se edita el registro
        static::updating(function ($entrada) {
            if ($entrada->isDirty('documento')) {
                $originalImage = $entrada->getOriginal('documento');

                if ($originalImage && Storage::disk('public')->exists($originalImage)) {
                    Storage::disk('public')->delete($originalImage);
                }
            }
        });
    }
}
