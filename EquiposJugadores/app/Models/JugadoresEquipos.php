<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JugadoresEquipos extends Model
{
    public function JugadoresEquipos(){
        return $this->hasOne(Jugadores::class);
    }
}
