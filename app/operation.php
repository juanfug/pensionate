<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operation extends Model
{
        protected $table = ["operations"];

    protected $fillable =['nombre'];
}