<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class comunicado extends Model
{
    protected $fillable = [
        'plantel_id',
        'titulo',
        'pdf',
    ];

    //Claves foraneas
    public function plantel(){
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }

    //Borrar archivos junto con los registros
    protected static function booted(){
        static::deleting(function ($documento){
            if($documento->pdf && Storage::disk('public')->exists($documento->pdf)){
                Storage::disk('public')->delete($documento->pdf);
            }
        });
    }
}
