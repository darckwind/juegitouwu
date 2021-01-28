<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class juego extends Model
{
    protected $fillable = [
        'id', 'nombre', 'descripcion'
    ];
    protected $primaryKey = 'id';

    public function EstJugo(){
        return $this->hasMany('App\EstJuego','id_juego');
    }
}
