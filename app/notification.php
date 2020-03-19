<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
	protected $table = ["notifications"];

    protected $fillable =['cuadrocomentario','calificacion','texto','imagen'];

    public function mensajes()
    {
        return $this->belongsTo('App\mensaje');
    }
}
