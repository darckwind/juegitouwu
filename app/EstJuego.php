<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstJuego extends Model
{

    protected $fillable = [
        'id','id_user','id_juego','comentario'
    ];
    
    public function Juego(){
        return $this->belongsTo('App\juego');
    }
    public function usuario(){
        return $this->belongsTo('App\User');
    }
}
