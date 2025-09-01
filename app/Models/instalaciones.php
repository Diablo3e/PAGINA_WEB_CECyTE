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

    //Borrar archivos junto con los registros
    protected static function booted(){
        static::deleting(function ($imgInstalacion){
            if($imgInstalacion->imagen && Storage::disk('public')->exists($imgInstalacion->imagen)){
                Storage::disk('public')->delete($imgInstalacion->imagen);
            }
        });
    }
}
