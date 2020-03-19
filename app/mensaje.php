<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mensaje extends Model
{
  	protected $table = ["mensajes"];

    protected $fillable =['imagen','texto','icono'];
    
    public function publications()
    {
        return $this->belongsTo('App\publication');
    }
    public function notifications()
    {
        return $this->hasMany('App\notification');
    }

}
