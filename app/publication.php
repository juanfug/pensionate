<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publication extends Model
{
        protected $table = ["publications"];

    protected $fillable =['imagen','descripcion','cuadrocomentario','fechapublicacion'];
}
