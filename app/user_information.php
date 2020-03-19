<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_information extends Model
{
    protected $table = ["users_information"];

    protected $fillable =['nombre','apellido','direccion','fechanacimiento','ocupacion','telefono','resumen'];

    public function users()
    {
        return $this->belongsTo('App\user');
    }

	public function roles()
    {
        return $this->hasMany('App\rol');
    }

}
