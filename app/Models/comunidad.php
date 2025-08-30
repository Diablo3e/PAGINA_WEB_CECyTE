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

    //Borrar archivos junto con los registros
    protected static function booted(){
        static::deleting(function ($entrada){
            if($entrada->imagen && Storage::disk('public')->exists($entrada->imagen)){
                Storage::disk('public')->delete($entrada->imagen);
            }
        });
    }
}
