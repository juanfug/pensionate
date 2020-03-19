<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table = ["roles"];

    protected $fillable =['nombre'];

    public function user_information()
    {
        return $this->belongsTo('App\user_information');
    }

    public function operations()
    {
        return $this->hasMany('App\operation');
    }

}
