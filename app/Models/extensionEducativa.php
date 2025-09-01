<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class extensionEducativa extends Model
{
    protected $table = 'extension_educativa'; 

    protected $fillable = [
        'plantel_id',
        'imagen',
    ];

    //Claves foraneas
    public function plantel(){
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }

    //Borrar archivos junto con los registros
    protected static function booted(){
        static::deleting(function ($extEdu){
            if($extEdu->imagen && Storage::disk('public')->exists($extEdu->imagen)){
                Storage::disk('public')->delete($extEdu->imagen);
            }
        });
    }
}
