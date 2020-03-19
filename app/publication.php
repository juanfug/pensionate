<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publication extends Model
{
    protected $table = ["publications"];

    protected $fillable =['imagen','descripcion','cuadrocomentario','fechapublicacion'];

    public function modulos()
    {
        return $this->belongsTo('App\modulo');
    }
    public function mensajes()
    {
        return $this->hasMany('App\mensaje');
    }
}
