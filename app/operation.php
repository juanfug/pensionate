<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operation extends Model
{
    protected $table = ["operations"];

    protected $fillable =['nombre'];

    public function rol()
    {
        return $this->belongsTo('App\rol');
    }
    public function modulos()
    {
        return $this->hasMany('App\modulo');
    }
}
