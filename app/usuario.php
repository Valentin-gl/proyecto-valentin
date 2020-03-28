<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
     public function cuentas()
{
	    //usuarios::whit('users')->findOrFail(1);
    return $this->hasMany(usuarios::class);

}
}

