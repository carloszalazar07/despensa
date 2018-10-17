<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reprecentante extends Model
{
    protected $fillable= ['nombre','dia'];

    public function producto(){
    	return $this->belongsToMany('App\Producto','producto_reprecentante');
    }
}
