<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ofertasEmpleo extends Model
{
    protected $table = 'ofertas_empleo'; 

    protected $fillable = [
        'plantel_id',
        'empleador',
        'imagen'
    ];

    //Claves foraneas
    public function plantel(){
        return $this->belongsTo(Plantel::class, 'plantel_id');
    }

    //Borrar archivos junto con los registros
    protected static function booted(){
        static::deleting(function ($oferta){
            if($oferta->imagen && Storage::disk('public')->exists($oferta->imagen)){
                Storage::disk('public')->delete($oferta->imagen);
            }
        });
    }
}
