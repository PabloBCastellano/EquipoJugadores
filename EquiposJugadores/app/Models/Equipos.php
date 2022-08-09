<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{


    public function Jugadores(){
        return $this->belongsTo(Jugadores::class);
    }
}
