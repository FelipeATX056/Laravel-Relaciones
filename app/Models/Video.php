<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(Video::class);//RECUPERAR LA COLECCION DE POST QUE PERTENECEN A ESTE USUARIO
    }
}
