<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class sistemaDual extends Model
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

    //Borrar banner junto con registros
    protected static function booted(){
        static::deleting(function ($entrada){
            if($entrada->banner && Storage::disk('public')->exists($entrada->banner)){
                Storage::disk('public')->delete($entrada->banner);
            }
        });
    }
}
