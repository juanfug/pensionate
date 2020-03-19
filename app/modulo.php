<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modulo extends Model
{
    protected $table = ["modulos"];

    protected $fillable =['nombre'];

    public function operations()
    {
        return $this->belongsTo('App\operation');
    }

    public function publications()
    {
        return $this->hasMany('App\publication');
    }
}
