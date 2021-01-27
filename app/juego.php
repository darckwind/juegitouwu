<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class juego extends Model
{
    public function EstJugo(){
        return $this->hasMany('App\EstJuego');
    }
}
