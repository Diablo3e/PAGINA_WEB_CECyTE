<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class personal extends Model
{
    protected $table = 'personal'; 

    protected $fillable = [
        'plantel_id',
        'foto',
        'puesto',
    ];

    //Claves foraneas
    public function plantel(){
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }

    //Borrar archivos junto con los registros
    protected static function booted(){
        static::deleting(function ($imagen){
            if($imagen->foto && Storage::disk('public')->exists($imagen->foto)){
                Storage::disk('public')->delete($imagen->foto);
            }
        });
    }
}
