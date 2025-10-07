<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SistemaDual extends Model
{
    protected $table = 'sistema_dual';

    protected $fillable = [
        'plantel_id',
        'banner',
    ];

    //Claves foraneas
    public function plantel()
    {
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }

    protected static function booted(){
        
        //Borrar banner junto con registros
        static::deleting(function ($entrada){
            if($entrada->banner && Storage::disk('public')->exists($entrada->banner)){
                Storage::disk('public')->delete($entrada->banner);
            }
        });

        // Borrar el anterior archivo si se edita el registro
        static::updating(function ($entrada) {
            if ($entrada->isDirty('banner')) {
                $originalImage = $entrada->getOriginal('banner');

                if ($originalImage && Storage::disk('public')->exists($originalImage)) {
                    Storage::disk('public')->delete($originalImage);
                }
            }
        });
    }
}
